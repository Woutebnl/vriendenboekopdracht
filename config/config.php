<?php
	/*
		Hieronder staan de defenities van de paden (path).
	*/
	define("ROOT", "");
	define("CLASSES_PATH"		, ROOT 				. "classes/");
	define("CONFIG_PATH"		, ROOT 				. "config/");
	define("PAGES_PATH"			, CLASSES_PATH 		. "pages/");
	define("UTILITIES_PATH"		, CLASSES_PATH 		. "utilities/");
	define("INTERFACES_PATH"	, UTILITIES_PATH 	. "interfaces/");
	define("CSS_PATH"			, ROOT 				. "css/");
	define("JS_PATH"			, ROOT 				. "js/");
	define("IMAGES_PATH"		, ROOT 				. "images/");
	define("STOCKPHOTO_PATH"	, ROOT 				. "images/stock/");
	define("FRIENDSPHOTO_PATH"	, ROOT 				. "images/friends/");	
	
	/*
		De ROOTMAPNAME vind je terug in PageBuilder en wordt gebruikt om de root aan te geven voor het 
		bepalen van de index pagina als er geen pagina in de URL wordt meegegeven. 
		Dit is het geval als je rechtstreeks naar het domein gaat:
		www.mijndomein.nl in plaats van www.mijndomein.nl/index.php
		
		Pas de ROOTMAPNAME aan naar de mapnaam waarin dit project staat. Je kunt ook in 
		de PageBuilder een echo geven van de variabele $page. Dan kun je in de browser zien 
		wat de waarde is.
	*/
	define("ROOTMAPNAME"		, "");
?>