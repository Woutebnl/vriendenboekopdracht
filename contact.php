<?php
	error_reporting(E_ALL);
	ini_set("display_errors", "on");
	
	include_once("config/config.php");
	include_once(CLASSES_PATH . "pagebuilder.inc.php");
	
	try {
		$page = new pagebuilder;
		echo $page->createPage();
	} catch (Exception $e) {
		echo "Er is een fout opgetreden in " . __FILE__ . ".";
	}
?>