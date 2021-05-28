<?php
	//for MySQLi OOP
	$db = new mysqli('localhost', 'root', '', 'qlsp');
	if($db->connect_error){
	   die("Connection failed: " . $db->connect_error);
	}
?>