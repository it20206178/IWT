<?php
//linking the configuration file
	include_once 'config.php';
	
			$Name=$_POST["Name"];
			$LastName=$_POST["LastName"];
			$Email=$_POST["Email"];
			$Number=$_POST["Number"];
			$Day=$_POST["Day"];
			$Month=$_POST["Month"];
			$Year=$_POST["Year"];
			$Password=$_POST["Password"];
			$gender=$_POST["gender"];
			

	$sql = "insert into user(id,Name,LastName,Email,Number,Day,Month,Year,Password,gender)
	values('','$Name','$LastName','$Email','$Number','$Day','$Month','$Year','$Password','$gender')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert ('Record inserted successfully')</script>";
		header("Location:profile.php");
	}
	else{
		echo "<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
	?>