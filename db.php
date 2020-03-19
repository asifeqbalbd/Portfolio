<?php 
	
	define("HOST", "localhost");
	define('USER', "root");
	define('DBNAME', "simple");
	define('PASSWORD', "");

	$db = mysqli_connect(HOST,USER,PASSWORD,DBNAME);

	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL: ";
		
	}
?>