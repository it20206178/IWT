<!-- IT20118372 -->
<!-- kaushalya m.k.b.--->
<!-- Group number:  MLB_PG.03.01_07 -->





<!DOCTYPE html>

<?php
$link=mysqli_connect("localhost", "root", "") or die(mysqli_error($link));		//mysqli_connect: function for php database connection
mysqli_select_db($link, "php_payment") or die(mysqli_error($link));				// change default database for connection
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

$res=mysqli_query($link,"select * from table1 where id=$id");
while($row=mysqli_fetch_array($res))
	
	{
		$firstname=$row["firstname"];
		$email=$row["email"];
		$address=$row["address"];
		$city=$row["city"];
		$cardname=$row["cardname"];
		$cardnumber=$row["cardnumber"];
		$expmonth=$row["expmonth"];
		$expyear=$row["expyear"];
		$cvv=$row["cvv"];
	}
?>

<html lang="en">
<head>
<title>My Game Site : payment recorrect</title>
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
    <a href="contact_us.php">Contact Us </a>
  <input type="text" placeholder="Search.." width="50">
</div>
<br>
<!-- end of the navigation bar details-->
</center>	
		

	
	<hr class="hrcolour"><hr class="hrcolour">     <!-- add a red colour horizontal line-->
	<center>
<h2 style="color: blue">****** Please fill all the details..******</h2>
	
	</center>
	
	

	<center>






<div class="billpay123">
<div class="container">
<div class="col-lg-4">
  <h2>Payment form</h2>
  <form action="" name="form1" method="post">
    

	<h3>Billing Address</h3>
            <label for="firstname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Your full name" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Sample@gmail.com" required>
            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="No, Road," required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Your city name" required>
           </div>
		   
		   
		   
		   <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
               <a href="payment.html" title="visa" onclick="">  <!-- add a image of cards-->
              <img src="../images/visa1.png" width="350" height="100">
            </a>
            </div>
			<label for="amount">Amount</label>
            <input type="text" id="amount" name="amount" placeholder="Amount" required> 
            <label for="cardname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="Card name..." required>   <!-- give card name-->
            <label for="cardnumber">Credit card number</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="1234-5678-9101-2345" required>   <!-- give card number-->
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="month" required>   <!-- give card's exp month-->

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="year" required>   <!-- give card's exp year-->
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123"  required>     <!-- give card's cvv number-->
				<div class="col-50">
               
            </div>
       

      
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> All filled correctly!...  <!-- add a check box-->
		   </div>
		   </div>
		   </div>
		    </div>
		   
		   



	<button type="update" name="update" class="btn btn-default">Save Changes </button>  <!-- add a update button to update the details-->

  </form>
</div>
</div>


</div>
</body>

<?php
if(isset($_POST["update"]))  //replace the details in database 
{
	mysqli_query($link,"update table1 set firstname='$_POST[firstname]',email='$_POST[email]',address='$_POST[address]',city='$_POST[city]',cardname='$_POST[cardname]',cardnumber='$_POST[cardnumber]',expmonth='$_POST[expmonth]',expyear='$_POST[expyear]',cvv='$_POST[cvv]' where id=$id");
	// update the inserted database with new data
	?>
	<script type="text/javascript">
	window.location="index.php";
	</script>
	<?php
}
?>


<br>
<br>
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
		  <h4> YOU ARE VIEWING PAYMENT PAGE </h4> 
            
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
