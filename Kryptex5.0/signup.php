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
$name = $email = $mobno = $ns =$us=$pword=$pword2= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email=test_input($_POST["email"]);
  $mobno= test_input($_POST["mobno"]);
  $ns=test_input($_POST["ns"]);
  $us=test_input($_POST["us"]);
  $pword=test_input($_POST["pword"]);
  $pword2=test_input($_POST["pword2"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
if($pword==$pword2)
{
	$sql3 = "INSERT INTO kryptex (Name,Email,Mobno,School,Username,Password) VALUES ('$name', '$email', '$mobno','$ns','$us','$pword')";
  //echo $sql3;
  if (mysql_query($sql3,$conn) == TRUE)
  {
		//echo "New record created successfully";
		$level=0;
		//echo $us;
		$sql3 = "INSERT INTO kryptexleaderboard (Username,Password, Level) VALUES ('$us','$pword','$level')";
		if (mysql_query($sql3,$conn) == TRUE)
		{
			$message="Thank You for registering. Proceed to log in.";
			echo "<script type='text/javascript'>;alert('$message');window.location.href='/Kryptex5.0';</script>";
		}
		else{
			$message="Oops, the server seems to be too busy. Our bad. Please try again.";
			echo "<script type='text/javascript'>;alert('$message');window.location.href='/Kryptex5.0/signup.html';</script>";
		}
  }
  else
  {
	  $sql3 = ("SELECT Username FROM kryptex WHERE Username='$us'");
	  $result=mysql_query($sql3);
	  $row = mysql_fetch_array($result);
	  /*echo $row;
	  echo "<br>";
	 echo $row[0];*/
	  /*$result = mysql_query("SELECT id, name FROM mytable");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    echo "ID: ".$row[0];
    echo "NAME: ".$row[1];  
}*/
	  if ($row)
	  {
		 $message="This username already exists in database. Please choose a different one.";
			echo "<script type='text/javascript'>alert('$message');window.location.href='/Kryptex5.0/signup.html';</script>";
	  }
	  else{
		  $message="This email already exists in database. Proceed to log in.";
		echo "<script type='text/javascript'>alert('$message');window.location.href='/Kryptex5.0';</script>";
	  }
  }
		
}
else
{
	header("location:/Kryptex5.0/signup.html");
}
?>