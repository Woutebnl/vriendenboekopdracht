<?php	
	class pagebuilder {
		
		private $head;
		private $mainmenu;
		private $content;
		private $footer;
			
		public function __construct() {
			$this->startSession();
			$this->stripTags();
			$this->definePage();
			$this->init();
		}
		
		private function startSession() {
			if (session_status() == PHP_SESSION_NONE) {
			    if (headers_sent()) {
				    die("De headers zijn al gestuurd. 
				    		Helaas de webpagina kan niet worden weergegeven.");
				}
				else{
				    session_start();
				}
			}
		}
		
		private function init() {
			try {
				require_once(CONFIG_PATH . "database.inc.php");
				
				require_once(CLASSES_PATH . "head.inc.php");
				$this->head = new head;
				
				require_once(CLASSES_PATH . "mainmenu.inc.php");
				$this->mainmenu = new mainmenu;
				
				require_once(CLASSES_PATH . "content.inc.php");
				$this->content = new content;
				
				require_once(CLASSES_PATH . "footer.inc.php");
				$this->footer = new footer;
			} catch(Exception $e) {
				echo "Er is een fout opgetreden in " . __FILE__ . ". Fout: " . $e; die;
			}
		}
		
		public function createPage() {

			$output = "<!DOCTYPE html>";
				$output .= "<html>";
					$output .= "<head>";
						$output .= $this->head->getHtml();
					$output .= "</head>";
				
					$output .= "<body>";
						$output .= $this->mainmenu->getHtml();
						$output .= $this->content->getHtml();
						$output .= $this->footer->getHtml();
					$output .= "</body>";
				$output .= "</html>";
		
			return $output;
		}
		
		private function definePage() {
			// Hier wordt de URL bekeken en bepaald 
			//aan de hand van de paginanaam om welke pagina het gaat.
			//Vervolgens wordt deze CONSTANTE: PAGE in de verdere applicatie gebruikt 
			//om keuzes te maken.
			$url 	= $_SERVER['REQUEST_URI'];
			$page 	= pathinfo( parse_url( $url, PHP_URL_PATH ), PATHINFO_FILENAME );
			
			if($page == ROOTMAPNAME) { $page = "index"; }
			
			define("PAGE", $page);
		}
		
		private function stripTags() {
			//check $_POST and $_GET for tags and other things
			if(isset($_POST)) {
				foreach($_POST as $key => $value) {
					$_POST[$key] = strip_tags(trim($value));
				}
			}
			
			if(isset($_GET)) {
				foreach($_GET as $key => $value) {
					$_GET[$key] = strip_tags(trim($value));
				}
			}
		}
	}
?>