<!DOCTYPE html>
<html lang="en">
<head>
  <title>Give me one word, and speak no more!</title>
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
echo $s?></span><span style="float:right;padding-right:50px">Level 30</span></div>
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
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">My name is Barry Allen and I am the
 <i>fastest man alive</i>. To the outside world, I am an ordinary forensic scientist, but secretly with the help of my friends in S.T.A.R. Labs, 
 I fight crime and find other meta-humans like me. But I became lost in time. It took everything in my friend's powers to bring me back and in doing so,
 our world was opened up to new threats...and I'm the only one <i>fast enough</i> to stop them. I am <i>the Flash</i></br>
 <i>...Cogito ergo sum</i>. You might be te fastest man alive, Mr. Allen, but <u>I</u> have<i>the fastest brain alive.</i></br>
 Shouldn't we be wary of <b>this</b> man?</p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">"And what one nation on the earth is
 like Your people Israel, whom God went to redeem for Himself as a people and to make a name for Himself, and to do a great thing for You
 and awesome things for Your land, before Your people whom You have redeemed for Yourself from Egypt, from nations and their gods?"~This
certainly points out a feature of God, no?</p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">"Ariel is an independent, headstrong 
and determined young mermaid. She is the youngest and prettiest princess of the sea but spends most of her time outside the palace walls of
 Atlantica singing, daydreaming, and adventuring with her best friend Flounder the guppy fish, and sometimes Sebastian the crab who is also
 the royal advisor to Ariel's father. At the age of 16, she unexpectedly becomes deeply infatuated with a young and handsome human prince 
 named Eric and sacrifices all things dear to her for the chance of being with her one true love" ~Oops!
</p>
<p style="padding-bottom:50px;text-align:center;color:white; padding-left:100px;padding-right:100px;">"It had the body of an over-large 
lion: great clawed paws and a long yellowish tail ending in a brown tuft. Its head, however, was that of a woman. She turned her long, 
almond-shaped eyes upon Harry as he approached."</br>
Okay, no more Harry Potter dependancy; in fact, to know this creature you just have to know that she infuriated Annabeth by asking about the capital of Bulgaria in the labyrinth!</br>
</br></br></br>Okay...so what goes in the textbox?</p>
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