<!DOCTYPE html>
<html lang="en">
<head><title>The Two Greatest</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
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
 <audio id="my_audio" src="assets/Music/Song2.mp3" autoplay="autoplay" loop="loop"></audio>
 <div style="container-fluid">
 <div style="padding-top:20px"><p style="color:White"><span style="align:left;padding-left:50px">Welcome, <?php
$s=$_COOKIE['Username'];
echo $s?></span><span style="float:right;padding-right:50px">Level 29</span></div>
 <p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
 <p style="align:center"><img class="img-responsive" style="margin: 0 auto ;align:middle;padding-top:30px;height:300px;width:500px;" src="assets/images/Img33.JPG"</img></p>
 <p style="padding-top:50px;text-align:center;color:white;padding-bottom:50px;padding-left:100px;padding-right:100px;">Solved it yet? Cool. But that's not the answer,
  unfortunatey. However, if the person in question was being talked about by a man who was "hardly more than five feet four inches but carried himself
  with great dignity" and had a head "exactly the shape of an egg" and he always "perched it a little on one side" with a moustache "very stiff
  and military", what would the answer be?</p>
  <form method="post" action="KryHide29.php" enctype="multipart/form-data">
  <textarea id="ta" onkeypress="return checkSubmit(event)" name="val" placeholder="Your Answer Here" style="display:block;margin-left:auto;margin-right:auto;"></textarea></form></div>
<!--Now putting checks. Will have to link to backend to get his username. Also add onBlur-->
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
</body>
</HTML>