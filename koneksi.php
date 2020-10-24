<?php 
 	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_nama = "data_electre";
	$connection = mysqli_connect($db_host, $db_user, $db_password) or die ("Connection Failed.");
	$connection_db = mysqli_select_db($connection, $db_name)or die ("Database not found.");		
?>
