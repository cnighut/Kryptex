<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <title>Oh dear Lord...</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
.teal a:hover{
  color: white;
}
</style>
<style>
.inline-block {
   display: inline-block;
}
.imgcont{
  text-align: center;
}
.imgcont img{
  display: inline-block;
}
button{
  margin:auto;
  display:block;
  padding:16px 32px;
}
</style>
<body style="background-color:black">
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
<div style="padding-top:20px"><p style="color:White"><span style="align:left;padding-left:50px">Welcome, <?php
$s=$_COOKIE['Username'];
echo $s?></span><span style="float:right;padding-right:50px">Level 13</span></div>
<p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
   <p style="padding-top:30px;"></p>

 <div class="imgcont">
<img style="width:300px;height:300px;" src = "assets/images/meme.jpg"></img>
</div>

<div style="height:200px;margin: 0; align-content: middle" ><p id="tg" style="color:white;text-align:center;font-size:25px; padding-left: 50px;"></br>So here it is. My pet peeve is having favourites. It pisses me when people talk about their weird favourite stuff. So please subdue the weirdest favourite! Demand the right material that will kill it and I'll allow you to explore Kryptex's next level</p>
<p style="padding-bottom:50px"></p>
<form method="post" action="KryHide13.php" enctype="multipart/form-data">
<textarea id="ta" onkeypress="return checkSubmit(event)" style="display:block;margin-left:auto;margin-right:auto;" name="val"></textarea></form></div>
</body><p style="padding-top:30px;"></p>
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>