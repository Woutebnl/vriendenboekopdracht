<?php
	class database {
		public static function connect() {
			try {
				$connection = new PDO('mysql:host=localhost:8889;dbname=vriendenboek;charset=utf8', 'root', 'root');
				return $connection;
			} catch (Exception $e) {
				echo "Er kan geen database connectie gemaakt worden. " . $e; die;
			}
			
		}
	}
?>