<?php
	class mijnvrienden {
		
		public function getHtml() {
			require_once(UTILITIES_PATH . "clsFriend.inc.php");
			$objFriend = new clsFriend;
			
			$output = $objFriend->getHtml();
			
			return $output;
		}
	}