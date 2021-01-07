<?php
//linking the configuration file
	include_once 'conconfig.php';
	
			$firstname=$_POST["firstname"];
			$lastname=$_POST["lastname"];
			$Email=$_POST["Email"];
			$number=$_POST["number"];
			$gid=$_POST["gid"];
			
			

	$sql = "insert into game(id,firstname,lastname,Email,number,gid)
	values('','$firstname','$lastname','$Email','$number','$gid')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert ('Record inserted successfully')</script>";
		header("Location:contact_us.php");
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
	?>