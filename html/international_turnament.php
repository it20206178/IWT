

<!DOCTYPE html>

<?php
$link=mysqli_connect("localhost", "root", "") or die(mysqli_error($link));   
mysqli_select_db($link, "iwtfinal") or die(mysqli_error($link));  
?>




<html lang="en">    <!--start html -->
<head>
<title>My Game Site : Payment sheet</title>
		<link rel="stylesheet" href="../CSS/style.css">     <!-- add link to style.css file-->

		<script src="../js/gamescript.js">         <!-- add a link to gamescript.js-->
		</script>
		
		
		<script>
               document.write(Date());         <!-- add internal script for display the time and the date-->
		</script>
		
		
	<style>   
.button123aaa{
  background-color: pink;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 25%
}
</style>

	<style>   
.button852{
  background-color: pink;
  border: none;
  
  width: 75%
}
</style>

		
		
		
</head>
<body class="bg">  <!-- start body-->





<table border="0">    
<tr>
<td>  
	<img class="logo" src="../images/kani.png"width="130" height="130" alt="gaming" align="left"><br>   
</td>

<td>
<br><br>
<img src="../images/payment.gif" height="150" width="150" >  
</td>

<td>
	<center>
	<h1 class="font1" style="font-size: 45px"><b>Kid Games<b></h1>
	<h3 class="font2">The Online Kid Game Center</h3>  
</td>
</tr>
</table> 
	
	
	
<center>
	<!--add navigation bar details-->
<div class="topnav">
  <a href="home.html">Home</a>
   <a  href="news.html">News</a>
  <a href="new_game.html">New games</a>
  <a href="oldgame.html">Old games</a>
    <a href="contact_us.php">Contact Us </a>
  <input type="text" placeholder="Search.." width="50">
</div>
<br>
<!-- end of the navigation bar details-->
</center>	
	
	<hr class="hrcolour"><hr class="hrcolour">     <!-- add a red colour horizontal line-->
	<center>
<img src="../images/cup.jpg">
	
	</center>
	<center>
<div class="button852">
<div class="container">
<div class="col-lg-4">
 
  <form action="international_turnament.php" name="formrusiru" method="post">  						

	<h3>International Turnaments</h3>
            <label for="playername"><i class="fa fa-user"></i>Player Name</label>  
            <input type="text" id="playername" name="playername" placeholder="Player Name" required> 
			
			 <label for="country"><i class="fa fa-envelope"></i>Player's Country</label>  
            <input type="text" id="country" name="country" placeholder="ex: America" required> 
		
            <label for="idnumber"><i class="fa fa-envelope"></i>Player's ID number</label>  
            <input type="text" id="idnumber" name="idnumber" placeholder="ID" required> 
			
			
            <label for="birthday"><i class="fa fa-institution"></i> Player's birthday</label>
            <input type="text" id="birthday" name="birthday" placeholder="mm/dd/yyyy" required>  
           </div>
		   
			
            <label for="applygame"><i class="fa fa-address-card-o"></i> Game you want to apply</label>   
            <input type="text" id="applygame" name="applygame" placeholder="Game for turnament" required> 
		

    <button type="submit" name="insert" class="btn btn-default">Insert Details</button>    <!--add insert function-->
	<button type="submit" name="delete" class="btn btn-default">Delete Details</button>   <!--add delete function-->
	
  </form>
</div> 
</div>
</div>
<br>
</center>

  
  <center>
  <?php 

  echo "<td>"; ?> <a href="confirmturnaments.php?id=<?php echo $row["id"]; ?>"> <button type="button"  class="button123aaa" >Confirm </button></a> <?php echo "</td>";

		echo "</tr>";
  
  
  ?>
  </center>

</body>

<?php

if(isset($_POST["insert"]))
{
	mysqli_query($link,"insert into table_rusiru values(NULL,'$_POST[playername]','$_POST[country]','$_POST[idnumber]','$_POST[birthday]','$_POST[applygame]')");
	
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php	
}

if(isset($_POST["delete"]))
{
	mysqli_query($link,"delete from table_rusiru where playername='$_POST[playername]'") or die(mysqli_error($link));
		?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php	
}


?>

<br>
<!-- footer details-->
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
		   <a href="index.php" title="visa" onclick="">
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

</html>
