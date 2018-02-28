<!DOCTYPE html>
<html lang="en">
<head>
  <title>Level 21</title>
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
echo $s?></span><span style="float:right;padding-right:50px">Level 21</span></div>
 <div style="container-fluid">
 <p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;"><ol style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;"><li>The Brit lives in the Red house.</li>
<li style="float:centre">The Swede drives a BMW.</li>
<li>The Dane drinks Tea.</li>
<li>The Green house is next to the White house, on the left.</li>
<li>The owner of the Green house drinks Coffee.</li>
<li>The person who smokes Pall Mall drives a Fiat.</li>
<li>The owner of the Yellow house smokes Dunhill.</li>
<li>The man living in the centre house drinks Milk.</li>
<li>The Norwegian lives in the first house.</li>
<li>The man who smokes Blends lives next to the one who drives a Lamborghini.</li>
<li>The man who drives a Buggati lives next to the man who smokes Dunhill.</li>
<li>The man who smokes Blue Master drinks Beer.</li>
<li>The Italian smokes Prince.</li>
<li>The Norwegian lives next to the Blue house.</li>
<li>The man who smokes Blends has a neighbour who drinks Water.</li></ol></p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">So, who drives the Toyota? Who drinks
water? Which colour house does the German live in? Who smokes blends?</p>
<!--Answer all four without spaces-->
<form method="post" action="KryHide21.php" enctype="multipart/form-data">
<textarea id="ta" onkeypress="return checkSubmit(event)" name="val" placeholder="Your Answer Here" style="display:block;margin-left:auto;margin-right:auto;"></textarea></form></div>
</div>
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
 </body>
 </html>