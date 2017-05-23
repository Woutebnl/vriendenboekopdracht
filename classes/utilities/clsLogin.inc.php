<?php
	
	/**
	* databaseconnectie
	* inlogknop
	* uitlogknop
	* inlogscherm
	* validatiecode
	* e-mailverificatie
	* registreren
	* rol opvragen
	*
	*	$_SESSION['login']['loggedin'] 	= true or false;
	*	$_SESSION['login']['username'] 	= $username;
	*	$_SESSION['login']['role'] 		= $userrole;
	*	
	**/
	
	class clsLogin {
		
		private static $connection;
		
		public static function getConnection() {
			clsLogin::$connection = database::connect();
		}
		
		public static function checkCredentials() {
			
			$bName = clsLogin::checkFormPost("username");
			$bPass = clsLogin::checkFormPost("password");
			
			if($bName != true && $bPass != true) {
				//TODO: maak en classe foutafhandeling
				return "Er is een fout.";
			}
			
			$frm_username = $_POST['username'];
			$frm_password = $_POST['password'];
			
			clsLogin::getConnection();
			$db_password 	= clsLogin::getDbPassword($frm_username);
			$bCheck 		= password_verify($frm_password, $db_password);
			
			if($bCheck == true) {
				$_SESSION['login']['loggedin'] 	= true;				
				$_SESSION['user']['uuid'] 		= clsLogin::getUUID($frm_username, $db_password);
				$_SESSION['user']['role'] 		= clsLogin::getRole($frm_username, $db_password);
				/*
					De rollen zijn opgeslagen als een string integers gescheiden door een komma.
					Je kunt ze weer scheiden in aparte nummers via een aray weergeven met de functie 
					explode().
					$pieces = $_SESSION['user']['role'];
					$pieces = explode(",", $pieces);
					echo print_r($pieces);
				*/			
				return true;
			}
			return false;
		}
		
		private static function checkFormPost($fieldname) {
			if(isset($_POST[$fieldname])) {
				if(strlen($_POST[$fieldname]) > 0) { 
					return true;
				}
			}
			return false;
		}
		
		private static function getDbPassword($username) {
			$sql = "SELECT password FROM tb_user WHERE username = ?;";
			$con = clsLogin::$connection;
			$sth = $con->prepare($sql);
			$sth->execute(array($username));
			
			foreach($sth as $row) {
				return $row['password'];
			}
		}
		
		private static function getUUID($username, $password) {
			$sql = "SELECT uuid FROM tb_user WHERE username = '$username' and password = '$password'";
			foreach(clsLogin::$connection->query($sql) as $row) {
				return $row['uuid'];
			}
		}
		
		private static function getRole($username, $password) {
			$sql = "SELECT role FROM tb_user WHERE username = '$username' and password = '$password'";
			foreach(clsLogin::$connection->query($sql) as $row) {
				return $row['role'];
			}
		}
		
		
		public static function buttons($class) {
			if(isset($_SESSION['login']['loggedin'])) {
				if($_SESSION['login']['loggedin'] == true) {
					$output = "<li class='$class'>";
						$output .= "<a href='uitloggen.php'>Uitloggen</a>";
					$output .= "</li>";
					return $output;
				}
			}
			
			$output = "<li class='$class'>";
				$output .= "<a href='inloggen.php'>Inloggen</a>";
			$output .= "</li>";				
			
			return $output;
		}
		
		public static function form() {
			$thisPage = $_SERVER['PHP_SELF'];
			
			if(isset($_POST['username'])) {
				$username = $_POST['username'];
			} else {
				$username = "";
			}
			
			$output = <<<OUTPUT
				<div class="wrapper">
					<form class="form-signin" action="$thisPage" method="post" enctype="multipart/form-data">       
						<h2 class="form-signin-heading">Inloggen</h2>
						<input	type="email" 
								class="form-control" 
								name="username" 
								placeholder="E-mailadres" 
								required="" 
								autofocus="" 
								value="$username" /><br />
						
						<input	type="password" 
								class="form-control" 
								name="password" 
								placeholder="Wachtwoord" 
								required=""/>      
						
						<label	class="checkbox">
							<input	type="checkbox" 
									value="remember-me" 
									id="rememberMe" 
									name="rememberMe"> Onthoud mijn inlognaam
						</label>
						<input type="hidden" name="formsend" value="formsend" />
						<input type="hidden" name="formsendDDDD" value="formsendERIK" />
						<button class="btn btn-lg btn-primary btn-block" type="submit">Inloggen</button>   
					</form>
				</div>
OUTPUT;
	return $output;
		}
	}