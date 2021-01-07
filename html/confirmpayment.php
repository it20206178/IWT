<!-- IT20118372 -->
<!-- kaushalya m.k.b.--->
<!-- Group number:  MLB_PG.03.01_07 -->



<!DOCTYPE html>

<?php
$link=mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
mysqli_select_db($link, "iwtfinal") or die(mysqli_error($link));
$id=$_GET["id"];

$firstname="";
$email="";
$address="";
$city="";
$cardname="";
$cardnumber="";
$expmonth="";
$expyear="";
$cvv="";

?>


<html lang="en">
<head>
<title>My Game Site : Payment sheet</title>
		<link rel="stylesheet" href="../CSS/style.css">     <!-- add link to style.css file-->

		<script src="../js/gamescript.js">         <!-- add a link to gamescript.js-->
		</script>
		
		
		<script>
               document.write(Date());         <!-- add internal script for display the time and the date-->
		</script>
</head>
<body class="bg">






<table border="0">    <!--create a table for head-->
<tr>
<td>
	<img class="logo" src="../images/kani.png"width="130" height="130" alt="gaming" align="left"><br>   <!--add a web side logo-->
</td>

<td>
<br><br>
<img src="../images/payment.gif" height="150" width="150" >
</td>

<td>
	<center>
	<h1 class="font1" style="font-size: 45px"><b>Kid Games<b></h1>
	<h3 class="font2">The Online Kid Game Center</h3>   <!--add a web side name-->
</td>
</tr>
</table> <!--close the table for head-->
	
	
		
<center>
	<!--add navigation bar details-->
<div class="topnav">
  <a href="home.html">Home</a>
   <a  href="news.html">News</a>
  <a href="new_game.html">New games</a>
  <a href="oldgame.html">Old games</a>
    <a href="contact_us.html">Contact Us </a>
  <input type="text" placeholder="Search.." width="50">
</div>
<br>
<!-- end of the navigation bar details-->
</center>	

	
	<hr class="hrcolour"><hr class="hrcolour">     <!-- add a red colour horizontal line-->
	

	<center>
	<img src="../images/right.gif" height="150" width="150">
<h4 style="color: purple"> ...CONGRADULATION!!!... </h4>
</center>
	
	<center>
	
<h2 style="color: Yellow">Dear,
<?php
	$res=mysqli_query($link,"select * from table1");
	while($row=mysqli_fetch_array($res))
echo $row["firstname"];


?>
<h3>*******************************************************************</h3>
</h2>
<h1>Your Money Transaction is successful !</h1>
<h3>*******************************************************************</h3>
</center>

	<br>
	<br>
	<center>
	
			<a href="home.html" title="back to home" onclick="">
              <img width="75" height="75"  src="../images/home2payment.png">
            </a>
			
			<h4> Back to Home</h4>
			</center>
	
</div>
</body>


</html>
