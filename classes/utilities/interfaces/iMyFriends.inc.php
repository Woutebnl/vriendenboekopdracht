<?php
	interface iMyFriends {
		/* 
			* listAll() haalt alle records op die vrienden zijn van de ingelogde gebruiker.
			* Deze recordset wordt geretourneerd aan de opvragende functie.
			* De vragende functie regelt de opmaak van de lijst. Gebruik hiervoor de functie 
			* in de classe clsFriend.
		*/
		public function listAll();
	}