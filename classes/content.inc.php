<?php
	class content {
		public function getHtml() {
			$page = PAGE;
			if(file_exists(PAGES_PATH . "$page.inc.php")) {
				include_once(PAGES_PATH . "$page.inc.php");
				$objPage = new $page;
				$output = $objPage->getHtml();	
			} else {
				include_once(PAGES_PATH . "index.inc.php");
				$objPage = new index;
				$output = $objPage->getHtml();	
			}
			return "<section>" . $output . "</section>";
		}
	}	
?>