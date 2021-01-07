<?php
	include_once 'conconfig.php';
?>
<!DOCTYPE html>

<!--add title details-->
<html>
	<head>
	<style>
	a{text-decoration: none;}
	</style>
		
	<title>My Game Site</title>
		<link rel="stylesheet" href="../CSS/style.css">     <!-- add link to style.css file-->

		
	
		
		
		<script>
               document.write(Date());         <!-- add internal script for display the time and the date-->
		</script>
		
	</head>
	<!--end of the title-->
	
	
	
<!--open body--> 
<body class="bg">    <!--connect with .css file-->

<table border="0">    <!--create a table for head-->
<tr>
<td>
	<img class="logo" src="../images/kani.png"width="130" height="130" alt="gaming" align="left"><br>   <!--add a web side logo-->
</td>

<td>

    <td><a href="login.html"> <img src="../images/acc1.jpg" height="75" width="75" > </a>   </td>
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
   <a href="news.html">News</a>
  <a  href="new_game.html">New games</a>
  <a href="oldgame.html">Old games</a>
    <a class="active" href="#contact_us.html">Contact Us </a>
  <input type="text" placeholder="Search..">
</div>
<br>
<!-- end of the navigation bar details-->
</center>

<br>
<br>


<center>
<div class="container123">
  <form method ="POST" action="cconnect.php" >
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." class="input_name"><br><br>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." class="input_name"><br><br>

<label for="email">Email </label>
    <input type="text" id="fname" name="Email" placeholder="Email" class="input_name"><br>
	<br>
	
<label for="mnumber">Mobile</label>
    <input type="text" id="fname" name="number" placeholder="Mobile number" class="input_name"><br><br>

	
<label for="gameid">Game ID</label>
    <input type="text" id="fname" name="gid" placeholder="Game id" class="input_name"><br>
	
	
   
<center>
    <input type="submit" value="Submit">
</center>
  </form>
</div>


</center>
<center><h1>Games</h1><br>

<table  border="1" width="75%">
<tr>
	<th class="table">First Name</th>
	<th class="table">Last Name</th>
	<th class="table">Email</th>
	<th class="table">Number</th>
	<th class="table">Game ID</th>
	<th class="table">Delete</th>
	
</tr>
<?php
$sql="select * from game";
$result=$conn->query($sql);

if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row['firstname']."</td>";
		echo "<td>".$row['lastname']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['number']."</td>";
		echo "<td>".$row['gid']."</td>";
		echo "<td> <a href='deletecon.php?id=$row[id]'>Delete</a></td>";
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




<!-- start of the footer-->
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