<!DOCTYPE html>
<html lang="en">
<head>
  <title>Way too easy...</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  @media all and (max-width: 480px) {
    p {
        font-size:15px;
    }
}
  </style>
</head>
<style>
.teal a:hover{
  color: white;
}
</style>
<body style="background-color:black;font-size:2vw;" >
<?php
$s=$_COOKIE['Username'];
$x=basename(__FILE__, '.php');
$int = filter_var($x, FILTER_SANITIZE_NUMBER_INT);
	 $servername = "localhost;  
       $username = "root";  
       $password="";   
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('alma18int',$conn) or die("unable to connect to database"); 
	   $sql3 = ("SELECT Level FROM kryptexleaderboard WHERE Username='$s'" );
		$result=mysql_query($sql3);
		$row = mysql_fetch_array($result);	
		$level=$row[0];
		if($level!=$int)
		{
			settype($level,"string");
			$level="KryptexPage".$level.".php";
			$message="Uh oh, no cheating!";
			echo "<script type='text/javascript'>;window.location.href='$level';</script>";
		}
?>
<div class="container-fluid">
<div style="padding-top:20px"><p style="color:White"><span style="align:left;padding-left:50px">Welcome, <?php
$s=$_COOKIE['Username'];
echo $s?></span><span style="float:right;padding-right:50px">Level 8</span></div> 
<p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
   <p style="padding-top:30px;"></p>
<p id="tg" style="color:white;text-align:center;padding-left:100px;
padding-right:100px;;padding-bottom:50px;"></br>A fearsome female norse Warrior, A Jewish anthropomorphic
being, a magical being from Weaverly Palace and a serpentine, fire-breathing lizard all walked into the settlement of this famous Oscar
Wilde charcter by bypssing his walls to create this mega-amusement for mere mortals on the month, whose name was changed by a Roman Emperor, in 2012. Name it.</p>
<!--Umm, the name changing thing happened years ago, so you got that, right?-->
<form method="post" action="KryHide8.php" enctype="multipart/form-data">
<textarea id="ta" placeholder="Your Answer Here" name="val" onkeypress="return checkSubmit(event)" style="display:block;margin-left:auto;margin-right:auto;"></textarea>
</form></div>
<script>
/*function change()
{
document.getElementsByTagName("p")[0,1,2].style.font-size = document.body.clientWidth*(30/1280) + "px";
}*/
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
</body>
</html>