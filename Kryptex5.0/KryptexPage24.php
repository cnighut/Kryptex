<!DOCTYPE html>
<html lang="en">
<head>
  <title>Previous level's methods might help...</title>
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
echo $s?></span><span style="float:right;padding-right:50px">Level 24</span></div>
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
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">HERE was a sound of revelry by night,</br>
And Belgium's capital had gathered then</br>
Her beauty and her chivalry, and bright</br>
The lamps shone o'er fair women and brave men.</br>
A thousand hearts beat happily; and when</br>
Music arose with its voluptuous swell,</br>
Soft eyes looked love to eyes which spake again,</br>
And all went merry as a marriage bell;</br>
But hush! hark! a deep sound strikes like a rising knell!</p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">One dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. 
Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one's 
cheeks burned with the silent imputation of parsimony that such close dealing implied. Three times Della counted it. 
One dollar and eighty-seven cents. And the next day would be Christmas.</p>
<form method="post" action="KryHide24.php" enctype="multipart/form-data">
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