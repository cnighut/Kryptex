<!DOCTYPE HTML>
<HTML>
<head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Just a Welcome...</title>
</head>
<style>
.teal a:hover{
  color: white;
}
</style>
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
<body style= "background-color: Black">
<div style="padding-top:20px"><p style="color:White"><span style="align:left;padding-left:50px">Welcome, <?php
$s=$_COOKIE['Username'];
echo $s?></span><span style="float:right;padding-right:50px">Level 0</span></div>
<p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
  		<a href="abt.html">ABOUT</a>
  		<a href="profile.html">PROFILE</a>
  		<a href="ldr.html">LEADERBOARD</a>
  		<a href="rules.html">RULES</a>
  		<a href="cus.html">CONTACT US</a>
	</div>
	 <p style="padding-top:30px;"></p>
<p style="color:White;padding-left:50px;padding-right:50px;padding-bottom:50px; font-size: 30px; text-align: center;">Welcome, traveller. Before you embark on this magnificient journey, we'd like to know your name so that your legends can be
spread throughout the world. Would you be kind enough to provide that?</p>
<form method="post" action="KryHide0.php" enctype="multipart/form-data">
<textarea id="ta" onkeypress="return checkSubmit(event)" placeholder="Your Answer Here" style="display:block;margin-left:auto;margin-right:auto;" name="val"></textarea></div>
</form><!--Now putting checks. Will have to link to backend to get his username. Also add onBlur-->
<script>
function checkSubmit(e) {
   if(e && e.keyCode == 13) {
      document.forms[0].submit();
   }
}
</script>
</body>
</HTML>