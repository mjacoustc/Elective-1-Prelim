<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "mydb";


	$conn = new mysqli($server,$username,$password,$db);
	if($conn->connect_errno > 0){
		die("Connection Failed");
	}
?>