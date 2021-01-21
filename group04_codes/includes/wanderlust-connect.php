<?php
	define ('DBCONNECTION', 'mysql:host=localhost;dbname=group04_db');
	define ('DBUSER', 'root');
	define ('DBPASS', '');
	$db = 'group04_db';
	
	$db = new mysqli('localhost', DBUSER, DBPASS, $db) or die("Unable to connect");
?>