<?php
	include_once 'profileconfig.php';
?>
<!DOCTYPE html>
<html>
	<head>
		
	<title>My Game Site</title>
	<link rel="stylesheet" href="../css/myStyle.css">
	<script src="../js/myScript.js"></script>
	<script>
		alert("Page Loaded! Press ok to continue.")
	</script>
		
		
		<style>  <!--add a style-->
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


	</head>
<!--end of the title-->

<!--open body--> 
<body class="bg">    <!--connect with .css file-->

<table border="0">     <!--create a table for head-->
<tr>
<td>
	<img class="logo" src="../images/kani.png"width="130" height="130" alt="gaming" align="left"><br>     <!--add a web side logo-->
</td>

<td>
<img src="../images/my_account_face.png" width="75" height="75" alt="account" align="right"><br> </td>   <!--add a player's profile photo-->


<td>
	<center>
	<h1 class="font1" style="font-size: 45px"><b>Kid Games<b></h1>
	<h3 class="font2">The Online Kid Game Center</h3>   <!--add a web side name-->
</td>


 
</tr>
</table>   <!--close the table for head-->
	<!--add game details-->
	
	
	
<center>

	<!--add navigation bar details-->
<div class="topnav">
  <a href="home.html">Home</a>
  <a href="news.html">News</a>
  <a href="new_game.html">New games</a>
  <a href="oldgame.html">Old games</a>
    <a href="contact_us.php">Contact Us</a>
  <input type="text" placeholder="Search..">
</div>
<br>
<!-- end of the navigation bar details-->


</center>

<center>
<h1>Profile</h1><br>
<table  border="1" width="75%">
<tr>
	<th class="table">First Name</th>
	<th class="table">Last Name</th>
	<th class="table">Email</th>
	<th class="table">Number</th>
	<th class="table">Birthday_Day</th>
	<th class="table">Birthday_Month</th>
	<th class="table">Birthday_Year</th>
	<th class="table">Gender</th>
	<th class="table">Update</th>
</tr>
<?php
$sql="select * from user";
$result=$conn->query($sql);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['LastName']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['Number']."</td>";
		echo "<td>".$row['Day']."</td>";
		echo "<td>".$row['Month']."</td>";
		echo "<td>".$row['Year']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "<td><a href='editsign.php?id=$row[id]'>Edit
		</a> | <a href='deletesign.php?id=$row[id]'>Delete</a></td>";
		echo "</tr>";
		
	}
}
else{
	echo "0 results";
}
echo "</table>";
$conn->close();
?>
</table>
</center>

<!--start of the footer-->
<hr class="hri">
	<footer>
  <div class="footer-gray">
    <div class="footer-custom">
      <div class="footer-lists">
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Watch</h6>
          <ul class="ftr-links-sub">
            <li>YouTube</li>
			<li>IOS App</li>
			<li>Roku</li>
          </ul>
          <h6 class="ftr-hdr">SHOP</h6>
          <ul class="ftr-links-sub">
            <li>Apps & eBooks</li>
            <li>iTunes</li>
          </ul>
        </div>
        
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">ABOUT</h6>
          <ul class="ftr-links-sub">
            <li>Contact Us</li>
            <li>Terms of Use</li>
            <li>Press Room</li>
            <li>Privacy Policy</li>
            <li>Get Our Newsletter</li>
            <li>Privacy Rights</li>
           
          </ul>
        </div>
       
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">MORE FOR KIDS</h6>
          <ul class="ftr-links-sub">
            <li>Videos For Kids</li>
			<li>Art</>
          </ul>
        </div>
        <!--/.footer-list-wrap-->
      </div>
      <!--/.footer-lists-->
      
         <div class="footer-credis">
        <h6 class="ftr-hdr">we are accepted</h6>
        <ul>
          <li>
             <a href="index.php" title="make payments" onclick="">
              <img class="visa1" width="150" height="50"  src="../images/visa1.png">
            </a>
          </li>
      
        </ul>
      </div>
      <!--/.footer-credits-->
      <div class="footer-social">
        <h6 class="ftr-hdr">Follow Us</h6>
        <ul>
          <li>
            <a href="https://www.facebook.com" title="Facebook" onclick="_gaq.push(['_trackSocial', 'Facebook', 'Follow', 'Footer', 'undefined', 'True']);">
              <img width="24" height="24" alt="Like us on Facebook" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/fb.png">
            </a>
          </li>
          <li>
            <a href="https://plus.google.com" title="Google+" onclick="_gaq.push(['_trackSocial', 'GooglePlus', 'Follow', 'Footer', 'undefined', 'True']);">
              <img width="24" height="24" alt="Follow us on Google+" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/gplus.png">
            </a>
          </li>
          <li>
            <a href="https://pinterest.com" target="_blank">
              <img width="24" height="24" alt="Follow us on Pinterest" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/pin-badge.png">
            </a>
          </li>
          <li>
            <a target="_blank" href="http://instagram.com">
              <img width="24" height="24" alt="Follow us on Instagram" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/instagram-badge.png">
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com" title="Twitter" onclick="_gaq.push(['_trackSocial', 'Twitter', 'Follow', 'Footer', 'undefined', 'True']);">
              <img width="67" alt="Follow us on Twitter" src="http://cache1.artprintimages.com/images/jump_pages/rebrand/footer/twitter.png">
            </a>
          </li>
        </ul>
      </div>
      <!--/.footer-social-->
      <div class="footer-legal">
        <p>&copy; Kid_games.com Inc. All Rights Reserved. </p>
        <p>@kidgames@gmail.com</p>
        
      </div>
    </div>
    <!--/.footer-custom-->
  </div>
  <!--/.footer-gray-->
</footer>
</body>
</html>