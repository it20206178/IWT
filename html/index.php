<!-- IT20118372 -->
<!-- kaushalya m.k.b.--->
<!-- Group number:  MLB_PG.03.01_07 -->




<!DOCTYPE html>

<?php
$link=mysqli_connect("localhost", "root", "") or die(mysqli_error($link));   //mysqli_connect: function for php database connection
mysqli_select_db($link, "iwtfinal") or die(mysqli_error($link));  // change default database for connection
?>




<html lang="en">    <!--start html -->
<head>
<title>My Game Site : Payment sheet</title>
		<link rel="stylesheet" href="../CSS/kaw.css">     <!-- add link to style.css file-->

		<script src="../js/gamescript.js">         <!-- add a link to gamescript.js-->
		</script>
		
		
		<script>
               document.write(Date());         <!-- add internal script for display the time and the date-->
		</script>
		
		
		
		<style>  <!--add internal style for table-->

td, th {

  text-align: left;
  padding: 8px;
}

</style>
 <!-- add internal style for button 5-->
<style>   
.button6{
  background-color: #1a1aff;
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
		
		
		
</head>
<body class="bg">  <!-- start body-->





<table border="0">    <!--create a table for head-->
<tr>
<td>  <!-- td: table data-->
	<img class="logo" src="../images/kani.png"width="130" height="130" alt="gaming" align="left"><br>   <!--add a web side logo-->
</td>

<td>
<br><br>
<img src="../images/payment.gif" height="150" width="150" >  <!-- add a gif image for header-->
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
<h2 style="color: purple"> Welcome to Payment page....</h2>
	
	</center>
	
	
	
	<center>




<div class="billpay123">
<div class="container">
<div class="col-lg-4">
  <h2>Payment form</h2><!-- give a name for form-->
  
  
  
  <!-- start a form for payment details-->
  <form action="" name="form1" method="post">  <!-- action attribute : whare to send the tdatawehen a form is submited-->
												<!-- in post method: submited data will not be showne in URL-->
												
												

	<h3>Billing Address</h3>
            <label for="firstname"><i class="fa fa-user"></i> Full Name</label>  <!-- give customer's full name-->
            <input type="text" id="firstname" name="firstname" placeholder="Your full name" required> <!-- required messsage will be displayed by using  "required"-->
			
		
            <label for="email"><i class="fa fa-envelope"></i> Email</label>  <!-- give custoer's email address-->
            <input type="text" id="email" name="email" placeholder="Sample@gmail.com" required> <!-- required messsage will be displayed by using "required"-->
			
			
            <label for="address"><i class="fa fa-address-card-o"></i> Address</label>   <!-- give customer's Address-->
            <input type="text" id="address" name="address" placeholder="No, Road," required> <!-- required messsage will be displayed by using "required"-->
			
			
            <label for="city"><i class="fa fa-institution"></i> City</label><!-- give customer's living city-->
            <input type="text" id="city" name="city" placeholder="Your city name" required>  <!-- required messsage will be displayed by using "required"-->
           </div>
		   
		   
		   
		   <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
               <a href="payment.html" title="visa" onclick="">  <!-- add a image of cards-->
              <img src="../images/visa1.png" width="350" height="100">  <!-- set the image size-->
            </a>
            </div>
			
			
			<label for="game">Game you want</label>  <!-- give tha names of games customer want-->
            <input type="text" id="game" name="game" placeholder="Game name you want to buy" required> 
			
			
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
		   

    <button type="submit" name="insert" class="btn btn-default">Insert Details</button>    <!--add insert function-->
	<button type="submit" name="delete" class="btn btn-default">Delete Details</button>   <!--add delete function-->
	
	

  </form>
</div> 
</div>

<br>


<!-- give some details to the user about buttons-->
<h2 style ="color:#ffffff">
*    The details you entered  will be displayed below table  ...

</h2>

<h2 style ="color:#ffffff">   <!-- give some details to the user about buttons-->
*    Use "edit payment" button to change your details  ...
</h2>
<h2 style ="color:#ffffff">   <!-- give some details to the user about buttons-->
*    please fill all the details ...
</h2>

<table width="100%">   <!--add a table for display the insirted details-->
    <thead>
      <tr>
		<th>#</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Address</th>
		<th>city</th>
		<th>Game name</th>
		<th>Amount</th>
		<th>Name on card</th>
		<th>Credit card number</th>
		<th>EXP month</th>
		<th>EXP year</th>
		<th>CVV</th>
		
		<th>Options</th>

      </tr>
    </thead>
    <tbody>
	
	<?php
	$res=mysqli_query($link,"select * from table1");   //select and display data from table1
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";                         //get id data from table1 and display
		echo "<td>"; echo $row["firstname"]; echo "</td>";					//get firstname data from table1 and display
		echo "<td>"; echo $row["email"]; echo "</td>";						//get email data from table 1 and display
		echo "<td>"; echo $row["address"]; echo "</td>";					//get address  data from table 1 and display
		echo "<td>"; echo $row["city"]; echo "</td>";						//get city data from table 1 and display
		echo "<td>"; echo $row["game"]; echo "</td>";						//get game data from table 1 and display
		echo "<td>"; echo $row["amount"]; echo "</td>";						//get amount data from table 1 and display 
		echo "<td>"; echo $row["cardname"]; echo "</td>";					//get card name data from table 1 and display
		echo "<td>"; echo $row["cardnumber"]; echo "</td>";					//get card number data from table 1 and display
		echo "<td>"; echo $row["expmonth"]; echo "</td>";					//get expmonth data from table 1 and display
		echo "<td>"; echo $row["expyear"]; echo "</td>";					//get exp year data from table 1 and display
		echo "<td>"; echo $row["cvv"]; echo "</td>";						//get cvv data from table 1 and display
		
		
		echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-success">Edit payment</button></a> <?php echo "</td>";

		echo "</tr>";						// add a button to visit edit.php page
	}
	?>

    </tbody>
  </table>

  
  <center>
  <?php 

  echo "<td>"; ?> <a href="confirmpayment.php?id=<?php echo $row["id"]; ?>"> <button type="button"  class="button6" >Confirm payment</button></a> <?php echo "</td>";

		echo "</tr>";    // add a button to visit to confirmpayment.php page
  
  
  ?>
  </center>

</body>

<?php

if(isset($_POST["insert"]))
{
	mysqli_query($link,"insert into table1 values(NULL,'$_POST[firstname]','$_POST[email]','$_POST[address]','$_POST[city]','$_POST[game]','$_POST[amount]','$_POST[cardname]','$_POST[cardnumber]','$_POST[expmonth]','$_POST[expyear]','$_POST[cvv]')");
	
	// if user press insirt button , data will be saved in table1 database
	?>
	<script type="text/javascript">                 // this wii help to auto refresh the page after press insert button
	window.location.href=window.location.href;
	</script>
	<?php	
}

if(isset($_POST["delete"]))
{
	mysqli_query($link,"delete from table1 where firstname='$_POST[firstname]'") or die(mysqli_error($link));     //this will help to delete the saved details after press delete button
		?>   
	<script type="text/javascript">
	window.location.href=window.location.href;     // this wii help to auto refresh the page after press delet button
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
