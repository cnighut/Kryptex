<!DOCTYPE html>
<html lang="en">
<head>
  <title>Level 28</title>
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
echo $s?></span><span style="float:right;padding-right:50px">Level 28</span></div>
 <p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
   <p style="padding-top:30px;"></p>
 <div style="container-fluid">
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">
You have spent lot of time solving Kryptex, isn't it? &nbsp But do you know what Krytex is all about! &nbsp Kryptex has 2 weird problem setters who talk in a cryptic fashion to ensure that their secrets aren't out and usually fight over the best way to do that! <br><br>

<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">The front end developer of Kryptex sent this to his problem setter friend:<br><span style="color: #3cad40">uwi</span><span style="color: #FFF842">zte</span><br>Help him understand what this is and move to the next amazing level!</p>
<form method="post" action="KryHide28.php" enctype="multipart/form-data">
<textarea id="ta" onkeypress="return checkSubmit(event)" name="val" placeholder="Your Answer Here" style="display:block;margin-left:auto;margin-right:auto;"></textarea></div>
</form></div>
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
 </body>
 </html>