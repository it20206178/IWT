<?php

include_once("conconfig.php");

$id=$_GET['id'];

$result=mysqli_query($conn,"DELETE FROM game WHERE id=$id");

header("Location:contact_us.php");
?>