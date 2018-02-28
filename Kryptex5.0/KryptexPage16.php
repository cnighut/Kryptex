<!DOCTYPE html>
<html lang="en">
<head>
<style>
.teal a:hover{
  color: white;
}
</style>
<style>
.inline-block {
   display: inline-block;
}
@media all and (max-width: 480px) {
    p {
        font-size:15px;
    }
	#a{width:600px;}
}
@media all and (min-width: 480px) {
    p {
        font-size:1.5vw;
    }
	#a{width:500px;}
}
</style>
  <title>I love to hit politicians</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
echo $s?></span><span style="float:right;padding-right:50px">Level 16</span></div>
<p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
   <p style="padding-top:30px;"></p>
	<img class="img-responsive" id="a" style="margin: 0 auto;height:200px;padding-right:100px;padding-left:100px;align:middle;" src ="assets/images/Img7.jpg"></img>
	<p style="color:white;align:text-align:center;padding-top:20px;padding-bottom:20px;padding-left:100px;padding-right:100px;text-align:center">And</p>
	<img class="img-responsive"  style="width:280px;height:200px;margin: 0 auto;align:middle" src ="assets/images/Img8.jpg"><img>
	<p style="color:white;align:padding-bottom:20px;text-align:center;padding-left:100px;padding-right:100px;">What the thing on top is, after application on the picture on bottom, 
	should suggest you the text to type in, so just hang on tight!</p>
	<form method="post" action="KryHide16.php" enctype="multipart/form-data">
<textarea id="ta" onkeypress="return checkSubmit(event)" name="val" style="display:block;margin-left:auto;margin-right:auto;"></textarea></form>
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
</body>
</html>