<?php

	class mainmenu {
		
		public function getHtml() {
			$output = "<nav class='navbar navbar-default'>";
				$output .= "<div class='container-fluid'>";
				
					$output .= "<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>";
						$output .= "<ul class='nav navbar-nav'>";
						
							
							$output .= "<li class='".$this->checkActive('index')."'>";
								$output .= "<a href='index.php'>Home</a>";
							$output .= "</li>";
							
							$output .= "<li class='".$this->checkActive('mijnvrienden')."'>";
								$output .= "<a href='mijnvrienden.php'>Mijn Vrienden</a>";
							$output .= "</li>";
							
							$output .= "<li class='".$this->checkActive('profiel')."'>";
								$output .= "<a href='profiel.php'>Profiel</a>";
							$output .= "</li>";
							
							$output .= "<li class='".$this->checkActive('admin')."'>";
								$output .= "<a href='admin.php'>Admin</a>";
							$output .= "</li>";
							
							$output .= "<li class='".$this->checkActive('contact')."'>";
								$output .= "<a href='contact.php'>Contact</a>";
							$output .= "</li>";
						  
							require_once(UTILITIES_PATH . "clsLogin.inc.php");
							$output .= clsLogin::buttons($this->checkActive('login'));
						  
						  
						$output .= "</ul>";
					$output .= "</div>";
				$output .= "</div><!-- /.container-fluid -->";
			$output .= "</nav>";

			return $output;
		}	
		
		private function checkActive($page) {
			if(PAGE == $page) { 
				$class = 'active';
			} else {
				$class = "";
			}
			return $class;
		}	
	}	