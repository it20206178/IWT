<!DOCTYPE html>

<?php
$link=mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
mysqli_select_db($link, "iwtfinal") or die(mysqli_error($link));
?>

<html>
	<head>
		
	<title>Write your comment</title>
		<link rel="stylesheet" href="../css/mali.css">
		<script src="../js/script.js"> </script>
<style>
.insert{
	background-color: #4CAF50;
}

.delete{
	background-color: #EC3103;
}

.update{
	background-color: #03BAEC;
}
button[type=insert]:hover {
  background-color: #45a049;
}
button[type=delete]:hover {
  background-color: #D32500;
}
.comment_form{
	background-color:#f1f1f1;
	width:100%;
}
.back{
	border-radius: 20px;
	background-color: #4CAF50;
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
div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
  <a href="home.html">Home</a>
  <a href="News.html">News</a>
  <a href="new_game.html">New game</a>
  <a href="old game.html">Old game</a>
  <a href="contact_us.php">Contact Us</a>
  <input type="text" placeholder="Search..">
</div>
<br>
</center>



<div class="container"><br><br>

<button type="insert" name="back" class="button back"><a href="online play.html">Back</a></button><br><br>
<center>
<h2>Write your comment in here</h2><br>
  <form action="" name="form" method="post">
    
      Enter Your Name<br>
      <input type="detail" id="name" placeholder="Enter your name" name="name"><br><br>
   
      Enter Your Email<br>
      <input type="detail" id="email" placeholder="Enter your email" name="email"><br><br>
	
	  Enter The Name Of Your Game<br>
      <input type="detail" id="game" placeholder="Enter the game name" name="game"><br><br>
 
	  Enter Your Comment<br>
	  <input type="comment" id="comment" name="comment" style="width:60%;" placeholder="Enter your comment"><br><br>
	
    <button type="insert" name="insert" class="button insert">Post comment</button>
	<button type="delete" name="delete" class="button delete">Delete comment</button>

  </form><br><br>
  
  <h2>Your Previous Comments</h2><br><br>
  </center>
  <table width="100%">
    <th>
      <tr>
		<th align="left">#</th>
        <th align="left">Name</th>
        <th align="left">Email</th>
        <th align="left">Game</th>
		<th align="left">Comment</th>
		<th align="center" width="15%">Update</th>

      </tr>
    </th>
    <td>
	
	<?php
	$res=mysqli_query($link,"select * from table_m");   //connect to database
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["game"]; echo "</td>";
		echo "<td>"; echo $row["comment"]; echo "</td>";
		echo "<td>"; ?> <a href="edit123.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="button update">Update comment</button></a> <?php echo "</td>";  //pass id from here & add a button to table

		echo "</tr>";
	}
	?>

    </td>
  </table>



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

if(isset($_POST["insert"]))
{
	mysqli_query($link,"insert into table_m values(NULL,'$_POST[name]','$_POST[email]','$_POST[game]','$_POST[comment]')");
	
	?>                                                    
	<script type="text/javascript">       //refresh the page automatically
	window.location.href=window.location.href;
	</script>
	<?php	
}

if(isset($_POST["delete"]))
{
	mysqli_query($link,"delete from table_m where name='$_POST[name]'") or die(mysqli_error($link));
	
	
	
	?>
	<script type="text/javascript">       //refresh the page automatically
	window.location.href=window.location.href;
	</script>
	<?php	
}


?>
</html>