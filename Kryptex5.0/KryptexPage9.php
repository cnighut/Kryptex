<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ugh, why couldn't it be just numbers?</title>
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
echo $s?></span><span style="float:right;padding-right:50px">Level 9</span></div>
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
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">The two problem setters of Kryptex are good friends.
Unfortunately, they also like to pull each others legs <i>a lot</i>. So, one day when problem setter A was relaxing after a long day
he received a really weird message from setter B:</br>(C<sub>1</sub>×C<sub>2</sub>×…×C<sub>r</sub>).C<sub>i</sub>=0</br> 
(C<sub>1</sub>×C<sub>2</sub>×…×C<sub>r</sub>).(C<sub>1</sub>×C<sub>2</sub>×…×C<sub>r</sub>)=det(C<sub>i</sub>.C<sub>j</sub>)
</br>After a lot of brain-storming, he understood that it was the r-ary operation on a certain d-dimensional space V,
and being brilliant he understood that it was analogous to our standard vector cross product of <i>2</i>, <b>AXB</b>. However, he knew that
setter B has a phobia about the number <i>3</i>, so definitely he won't stand for such a geometric construction in 3D that
results from our standard multiplication. So, what could it be...?</br></br></br>
We don't really know what went on in the mind of setter A that night, but the next day setter B groaned as he received a text with
39 asterisk (*) marks and a wink smiley. Obviously, we can conclude that setter A had solved B's puzzle, but what was the answer, which
coincidentally answers a lot of other things as well?</p>
<form method="post" action="KryHide9.php" enctype="multipart/form-data">
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