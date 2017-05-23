<?php
	class index {
		
		public function getHtml() {
			include_once(UTILITIES_PATH . "clsLoremIpsum.inc.php");
			$objLorem = new clsLoremIpsum;
			$output = $objLorem->getHtml(3);
			return $output;
		}
	}