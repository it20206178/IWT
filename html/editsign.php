
<?php
	include_once("profileconfig.php");
	if (isset($_POST['Update']))
	{
		$id=$_POST['id'];
		$Name=$_POST["Name"];
		$LastName=$_POST["LastName"];
		$Email=$_POST["Email"];
		$Number=$_POST["Number"];
		$Day=$_POST["Day"];
		$Month=$_POST["Month"];
		$Year=$_POST["Year"];
		$gender=$_POST["gender"];
		
		$result=mysqli_query($conn,"UPDATE user SET Name='$Name',LastName='$LastName',
		Email='$Email',Number='$Number',Day='$Day',Month='$Month',Year='$Year',gender='$gender' WHERE id=$id");
		
		header("Location:profile.php");
	}	
?>
<?php
$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM user WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
		$Name=$row["Name"];
		$LastName=$row["LastName"];
		$Email=$row["Email"];
		$Number=$row["Number"];
		$Day=$row["Day"];
		$Month=$row["Month"];
		$Year=$row["Year"];
		$gender=$row["gender"];
}

?>
<html>
	<head>
		
	<title>My Game Site</title>
		<link rel="stylesheet" href="../css/myStyle.css">
		<script src="../js/myScript.js"></script>
		<script>
		alert("Sign Up Page Loaded! Press ok to continue.")
		</script>
		<style>
	a{text-decoration: none;}

    </style>
	</head>

<body class="bg">

<table border="0">
<tr>
<td>
	<img class="logo" src="../images/kani.png"width="130" height="130" alt="gaming" align="left"><br>
</td>

<td>

    <button class="button button1"><a href="login.html"><b>Log in</b></a></button><br>
    
</td>

<td>
	<center>
	<h1 class="font1" style="font-size: 45px"><b>Kid Games<b></h1>
	<h3 class="font2">The Online Kid Game Center</h3>
</td>
</tr>
</table>
<center>

	
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="news.html">News</a>
  <a href="#about">New games</a>
  <a href="oldgame.html">Old games</a>
    <a href="contactus.html">Contact Us</a>
  <input type="text" placeholder="Search..">
</div>
<br>



</center>

<center>
<div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="container">
  <div id="container_body">
    <div>
      <h2 class="form_title">Sign Up</h2>
      
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form  method="post"action="editsign.php" >
       <div id="errorBox">
	   
	   </div>
	  
        <input type="text" name="Name" value=<?php echo $Name;?> placeholder="First Name"  class="input_name" required >
        <input type="text" name="LastName" value=<?php echo $LastName;?> placeholder="Last Name" class="input_name"required >

      </div>
      <div id="email_form">
        <input type="text" name="Email" value=<?php echo $Email;?>  placeholder="Your Email" class="input_email" required>
      </div>
	  <div id="Number">
        <input type="text" name="Number" value=<?php echo $Number;?>  placeholder="Mobile Number" class="input_email" required>
      </div><br>
	   <h2 class="birthday_title">Birthday Details</h2>
	  
        <input type="text" name="Day" value=<?php echo $Day;?> placeholder="Day"  class="input_name" required>
        <input type="text" name="Month" value=<?php echo $Month;?> placeholder="Month" class="input_name" required>
		<input type="text" name="Year" value=<?php echo $Year;?> placeholder="Year" class="input_name" required>

      </div>
      
    
      <h2 class="birthday_title">Select Your Gender</h2>
      <div id="radio_button">
        <input type="radio" name="gender" value="Female">
        <label >Female</label>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" value="Male">
        <label >Male</label>
      </div>
       <div>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
		<input type="submit" name="Update" value="Update"><br>
		<a href="login.php">Already a Member (Login)</a>
	
      </div>
     </form>
    </div>
    <!--form ends-->
  </div>

</center>

<br><br>
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
        
      </div>
      
      
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
      
      <div class="footer-legal">
        <p>&copy; Kid_games.com Inc. All Rights Reserved. </p>
        <p>@kidgames@gmail.com</p>
        
      </div>
    </div>
    
  </div>
  
</footer>
</body>
</html>