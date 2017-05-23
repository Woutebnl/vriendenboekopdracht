<?php
	class profiel {
		
		public function getHtml() {
			include_once(UTILITIES_PATH . "clsLoremIpsum.inc.php");
			$objLorem = new clsLoremIpsum;
			$output = $objLorem->getHtml(2);
			return $output;
		}
	}