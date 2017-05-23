<?php
	class inloggen {
		
		public function getHtml() {
			
			$output = "";
			
			include_once(UTILITIES_PATH . "clsLogin.inc.php");
			
			if(isset($_POST['formsend'])) {
				$bCheck = clsLogin::checkCredentials();
				if($bCheck == true) {
					
					if (headers_sent()) {
					    die("De headers zijn al gestuurd. 
					    		Helaas de webpagina kan niet worden weergegeven.");
					}
					else{
					    header("Location:index.php");
					}
				} else {
					return clsLogin::form();
				}
			}
			
			if(isset($_SESSION['user']['uuid'])) {
				$output = "uuid: " . $_SESSION['user']['uuid'];
			}
			
			$output .= clsLogin::form();
			
			$output .= "";
			return $output;
		}
	}	