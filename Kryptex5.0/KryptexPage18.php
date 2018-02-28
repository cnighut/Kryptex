<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inverse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  @media all and (max-width:480px){
  img{padding-left:20px;}
  }
  
  
  </style>
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
 <div style="container-fluid">
 <div style="padding-top:20px;padding-bottom:30px;"><p style="color:White"><span style="align:left;padding-left:50px">Welcome, <?php
$s=$_COOKIE['Username'];
echo $s?></span><span style="float:right;padding-right:50px;font-size:30px">Level 18</span></div>
 <p style="padding-top:30px;"></p>
<div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="profile.html">PROFILE</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
   <p style="padding-top:30px;"></p>
 <div class="container" style="margin: 0 auto;">
    <div class="row-imagetiles">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img style="height:300px;width:300px;float:middle" src="assets/images/Img17.png" class="img-responsive">
        </div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img style="height:300px;width:300px;" src="assets/images/Img18.jpg" class="img-responsive">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img style="height:300px;width:300px;" src="assets/images/Img19.JPG" class="img-responsive">
        </div>
		</div>
		</div>
		<p style="padding-top:100px;"></p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">Add them all up and apply to
"YSAMK BMDAMK USWKSJ" text, and to the answer surely you shall progress!</p>
<form method="post" action="KryHide18.php" enctype="multipart/form-data">
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