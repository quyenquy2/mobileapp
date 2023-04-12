<?php 	
	// $host = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "truonghoc";

    $servername = "sql12.freemysqlhosting.net";
    $username = "sql12612465";
    $password = "5ylZ1E2djc";
    $dbname = "sql12612465";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connect fail: ".$conn->connect_error);
	} else {
		//echo 'Connect successfull!';
	}
 ?>