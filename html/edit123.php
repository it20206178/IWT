<!DOCTYPE html>
<?php
$link=mysqli_connect("localhost", "root", "") or die(mysqli_error($link));  //connect to dbserver & dbuser
mysqli_select_db($link, "iwtfinal") or die(mysqli_error($link));    //connect to the database
$id=$_GET["id"];

$name="";                 
$email="";
$game="";
$comment="";

$res=mysqli_query($link,"select * from table_m where id=$id");
while($row=mysqli_fetch_array($res))
	
	{
		$name=$row["name"];             //declare variables
		$email=$row["email"];
		$game=$row["game"];
		$comment=$row["comment"];
	}
?>


<html>
	<head>
		
	<title>Edit your comment</title>
		<link rel="stylesheet" href="../CSS/mali.css">
		<script src="../js/script.js"> </script>
<style>

.update{
	background-color: #03BAEC;
}

.comment_form{
	background-color:#f1f1f1;
	width:100%;
}

input[type=detail], select {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}	
div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=comment], select {
  width: 60%;
  height:50px;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>	

	</head>

<body class="bg">

<table border="0">
<tr>
<td>
	<img class="logo" src="../images/kani.png"width="130" height="130" alt="gaming" align="left"><br>
</td>

<td>

    <button class="button button1"  >Log in</button><br>
    <button class="button button2"  >Sing Up</button>
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
  <a href="#about">About</a>
  <a href="#new game">New game</a>
  <a href="#old game">Old game</a>
  <a href="#contact Us">Contact Us</a>
  <input type="text" placeholder="Search..">
</div>
<br>
</center>



<div class="container"><br><br>

<center>

<h2>Update Your Comment Or Details</h2><br>
  <form action="" name="form" method="post">
    
      Edit Your Name<br>
      <input type="detail" placeholder="Enter your name" name="name" value="<?php echo $name; ?>"><br><br>

      Edit Your Email<br>
      <input type="detail" placeholder="Enter your email" name="email" value="<?php echo $email; ?>"><br><br>

      Edit The Name Of Your Game<br>
      <input type="detail" placeholder="Enter the game name" name="game" value="<?php echo $game; ?>"><br><br>

	  Edit Your Comment<br>
	  <input type="comment" id="comment" name="comment" style="width:60%;" placeholder="Enter your comment" value="<?php echo $comment; ?>"><br><br>

	<button type="update" name="update" class="button update">update</button>

  </form><br><br>
  
  </center>
</div>




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
            <a href="credit.html" title="visa" onclick="">
              <img width="150" height="50"  src="../images/visa1.png">
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

<?php
if(isset($_POST["update"]))
{
	mysqli_query($link,"update table_m set name='$_POST[name]',email='$_POST[email]',game='$_POST[game]',comment='$_POST[comment]' where id=$id");
	
	?>
	<script type="text/javascript">
	window.location="index123.php";
	</script>
	<?php
}
?>
</html>