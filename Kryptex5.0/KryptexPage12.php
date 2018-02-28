<!DOCTYPE html>
<html lang="en">
<head>
  <title>I hope that's not a random string...</title>
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
echo $s?></span><span style="float:right;padding-right:50px">Level 12</span></div>
 <p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
   <p style="padding-top:30px;"></p>
   <!--Would you listen to a story? Once upon a time, the setter B of Kryptex developed a huge crush on this girl but...(Oh no, he's here to kill me)-->
 <div style="container-fluid">
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">All their equipment and instruments are alive.</br>
A red flair silhouetted the jagged edge of a wing.</br>
I watched the storm, so beautiful yet terrific</br>
Almost before we knew it, we had left the ground.</br>
A shining crescent far beneath the flying vessel</br>
It was going to be a lonely trip back.</br>
The sky was cloudless and of a deep dark blue</br>
Then came the night of the first falling star</br>
Waves flung themselves at the blue evening.</p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">All of this is only okay. Hey, Markov Chain generator, I hate you because I love the traditional placeholder text. Type those 2 words incorrectly and get through this level.</p>
<form method="post" action="KryHide12.php" enctype="multipart/form-data">
<textarea id="ta" onkeypress="return checkSubmit(event)" placeholder="Your Answer Here" style="display:block;margin-left:auto;margin-right:auto;" name="val"></textarea></div>
</form><p style="padding-top:30px;"></p></div>
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
 </body>
 </html>