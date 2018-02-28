<?php  
        $servername = "localhost;  
       $username = "root";  
       $password="";   
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('alma18int',$conn) or die("unable to connect to database"); 
	   //echo $conn;
	   //echo "</br>";
	   //echo $sql;
	   //echo "</br>";
?>
<?php
// define variables and set to empty values
$un=$pw="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $un = test_input($_POST["un"]);
  $pw=test_input($_POST["pw"]);
  //echo $un;
  //echo "<br>";
  //echo $pw;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
		$levels=array("KryptexPage0.php","KryptexPage1.php","KryptexPage2.php","KryptexPage3.php","KryptexPage4.php","KryptexPage5.php",
		"KryptexPage6.php","KryptexPage7.php","KryptexPage8.php","KryptexPage9.php","KryptexPage10.php","KryptexPage11.php",
		"KryptexPage12.php","KryptexPage13.php","KryptexPage14.php","KryptexPage15.php","KryptexPage16.php","KryptexPage17.php",
		"KryptexPage18.php","KryptexPage19.php","KryptexPage20.php","KryptexPage21.php","KryptexPage22.php","KryptexPage23.php",
		"KryptexPage24.php","KryptexPage25.php","KryptexPage26.php","KryptexPage27.php","KryptexPage28.php","KryptexPage29.php");
		$sql3 = ("SELECT Level FROM kryptexleaderboard WHERE Username='$un' AND Password='$pw'" );
		$result=mysql_query($sql3);
		//echo $result;
	  $row = mysql_fetch_array($result);
	  //echo $row;
	  if($row[0]>-1)
	  {
	  //echo $row[0];
	  //echo "<script type='text/javascript'>;alert('Pause')</script>";
		$use=$levels[$row[0]];
		if(isset($_COOKIE['Username']))
			setcookie('Username', "",time() - 3600);
		$_COOKIE['Username'] = $un;
		settype($use, "string");
		setcookie('Username',$un);
		//echo $_COOKIE['Username'];
	  			echo "<script type='text/javascript'>;window.location.href='$use';</script>";
	  }
	  else
	  {
		  $message="Invalid username or password";
		  echo "<script type='text/javascript'>;alert('$message');window.location.href='/Kryptex5.0';</script>";
	  }
	  
?>