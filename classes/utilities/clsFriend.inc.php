<?php
	require_once(UTILITIES_PATH . "clsMyFriends.inc.php");
	require_once(INTERFACES_PATH .  "iFriend.inc.php");
	
	class clsFriend extends clsMyFriends implements iFriend {
		
		/* declarations */
		
		public function __construct() {
			/* initialization */
			
		}
		
		public function getHtml() {
			return "Dit is de classe: " . __CLASS__ . " in de file " . __FILE__ . "!!";
		}
		
		public function profile($aParams) {
			
		}
	}