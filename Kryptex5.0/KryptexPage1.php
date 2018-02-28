<!DOCTYPE html>
<html lang="en">
<head>
  <title>Now probably a bit tougher...</title>
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
<?php
$s=$_COOKIE['Username'];
//echo $s."<br>";
$x=basename(__FILE__, '.php');
$int = filter_var($x, FILTER_SANITIZE_NUMBER_INT);
//echo $int."<br>";
	 $servername = "localhost;  
       $username = "root";  
       $password="";   
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('alma18int',$conn) or die("unable to connect to database"); 
	   $sql3 = ("SELECT Level FROM kryptexleaderboard WHERE Username='$s'" );
		$result=mysql_query($sql3);
		$row = mysql_fetch_array($result);	
		$level=$row[0];
		//echo $level."<br>";
		if($level!=$int)
		{
			settype($level,"string");
			$level="KryptexPage".$level.".php";
			$message="Uh oh, no cheating!";
			echo "<script type='text/javascript'>;window.location.href='$level';</script>";
		}
?>
<body style="background-color:black">
<div style="padding-top:20px"><p style="color:White"><span style="align:left;padding-left:50px">Welcome, <?php
$s=$_COOKIE['Username'];
echo $s?></span><span style="float:right;padding-right:50px">Level 1</span></div>
<p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
  		<a href="abt.html">ABOUT</a>
  		<a href="profile.html">PROFILE</a>
  		<a href="ldr.html">LEADERBOARD</a>
  		<a href="rules.html">RULES</a>
  		<a href="cus.html">CONTACT US</a>
	</div>
	 <p style="padding-top:30px;"></p>
<p style="align:center"><img class="img-responsive" style="margin: 0 auto ; align-content: center; width: 80%; height: 80%;" src="assets/images/Img1.jpeg"</img><p>
<p style="color:white;padding-left:50px;padding-right:50px;padding-top:50px;padding-right:100px; text-align: center; font-size: 24px;">Oh, that's a fine image alright,
and his  proclaimation clearly states that Gandalf'd like our adventure to end here,but I've personally felt that when it comes to magic, the
spells written by Robert Galbraith are more than powerful enough to break open, or better yet, unlock any door!</p><br>
<form method="post" action="KryHide1.php" enctype="multipart/form-data">
<textarea id="ta" onkeypress="return checkSubmit(event)" placeholder="Your Answer Here" style="display:block;margin-left:auto;margin-right:auto;" name="val"></textarea>
</form>
<p style="padding-top:30px"></p>
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>

</body>
