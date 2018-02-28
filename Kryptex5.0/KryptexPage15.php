<!DOCTYPE html>
<html lang="en">
<head>
  <title>Level 15</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.teal a:hover{
  color: white;
}
</style>
  <style>
  .imgcont{
  text-align: center;
}
.imgcont img{
  display: inline-block;
  margin: 0.5% 1% 0.5% 1%;
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
		if($level!=$int)
		{
			settype($level,"string");
			$level="KryptexPage".$level.".php";
			$message="Uh oh, no cheating!";
			echo "<script type='text/javascript'>;window.location.href='$level';</script>";
		}
?>
<div style="display:none">
<iframe width="560" height="315" src="https://www.youtube.com/embed/GycZfBQdSVM?autoplay=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
<div style="padding-top:20px"><p style="color:White"><span style="align:left;padding-left:50px">Welcome, <?php
$s=$_COOKIE['Username'];
echo $s?></span><span style="float:right;padding-right:50px">Level 15</span></div>
<p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
  <p style="padding-top: 30px;"></p>
<div class="imgcont">
<img class="img-responsive" style="width:300px;height:300px;" src = "assets/images/Img28.png"></img>
<img class="img-responsive" style="width:300px;height:300px;" src ="assets/images/Img27.jpg"></img>
<img class="img-responsive" style="width:300px;height:300px" src ="assets/images/Img26.jpg"></img>
<img class="img-responsive" style="width:300px;height:300px" src ="assets/images/Img29.JPG"></img>
</div>
<p style="padding-top:100px;"></p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">All I want to say is that when
our moms sung those sweet little lullabies to put us to sleep, and when we played happy games as a kid, being merry all around,
 <i>maybe, just maybe</i> we all were unknowingly being part of a horrifying history we shold never have experienced.</p>
 <form method="post" action="KryHide15.php" enctype="multipart/form-data">
<textarea id="ta" onkeypress="return checkSubmit(event)" name="val" placeholder="Your Answer Here" style="display:block;margin-left:auto;margin-right:auto;"></textarea></form></div>
<p style="padding-top:100px;"></p>
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
</body>
</html>

    