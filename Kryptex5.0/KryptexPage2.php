<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hmm, what's this now?</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.imgcont{
  text-align: center;
}
.imgcont img{
  display: inline-block;
  margin: 0.5% 1% 0.5% 1%;
}
}
</style>
<style>
.teal a:hover{
  color: white;
}
</style>
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
		//echo $int."<br>".$level."<br>";
		if($level!=$int)
		{
			settype($level,"string");
			$level="KryptexPage".$level.".php";
			$message="Uh oh, no cheating!";
			echo "<script type='text/javascript'>;window.location.href='$level';</script>";
		}
?>
 <div style="container-fluid" id="a">
 <div style="padding-top:20px"><p style="color:White"><span style="align:left;padding-left:50px">Welcome, <?php
$s=$_COOKIE['Username'];
echo $s?></span><span style="float:right;padding-right:50px">Level 2</span></div>
 <p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div><div>
   <p style="padding-top:30px;"></p>
 <div class="imgcont">
<img class="img-responsive" style="width:300px;height:300px padding-left:10px; float: left;" src = "assets/images/Img13.jpg"></img>
<img class="img-responsive" style="width:300px;height:300px; float: right;" src ="assets/images/Img14.png"></img>
</div></div>
 		</div>
		<p style="padding-top:100px;"></p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">Don't pay that much <b>Attention</b> to the 
images. Seriously, <b>How Long</b> will you keep staring at them? Let it not become the case that you become obsessed with them
and your girlfriend becomes so angry that <b> You Don't Talk Anymore.</b></p>
<form method="post" action="KryHide2.php" enctype="multipart/form-data">
<textarea id="ta" name="val" onkeypress="return checkSubmit(event)" placeholder="Your Answer Here" style="display:block;margin-left:auto;margin-right:auto;"></textarea></div>
</form>
<p style="padding-top:30px"></p></div>

<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
 </body>
 </html>