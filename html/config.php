<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "iwtfinal";
	
	//Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	
	//check connection
	if ($conn->connect_error)
	{
		die("Connection failed : ".$conn->connect_error);
	}
	
	echo "Connected Successfully";
	//header("Location:login.html");
?>