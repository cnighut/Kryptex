<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<header style="background:white;">

    <div class="header-row1">
      <a href="http://www.iitbbs.ac.in"><img src='http://www.iitbbs.ac.in/images/iitbbs_logo.png' height='100%' alt='IIT Bhubaneswar'/></a>
      <a href="http://2018.almafiesta.com/"><img src='http://almafiesta.com/alma.png' height='100%' alt='almafiesta'/></a>
    </div>
  </header>
     <div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="signup.html">SIGNUP</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
<?php
if (! function_exists('array_column')) {
    function array_column(array $input, $columnKey, $indexKey = null) {
        $array = array();
        foreach ($input as $value) {
            if ( !array_key_exists($columnKey, $value)) {
                trigger_error("Key \"$columnKey\" does not exist in array");
                return false;
            }
            if (is_null($indexKey)) {
                $array[] = $value[$columnKey];
            }
            else {
                if ( !array_key_exists($indexKey, $value)) {
                    trigger_error("Key \"$indexKey\" does not exist in array");
                    return false;
                }
                if ( ! is_scalar($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not contain scalar value");
                    return false;
                }
                $array[$value[$indexKey]] = $value[$columnKey];
            }
        }
        return $array;
    }
}?>
	<h1>Your profile</h1>
	<?php 
        $servername = "localhost;  
       $username = "root";  
       $password="";   
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('alma18int',$conn) or die("unable to connect to database");
		$s=$_COOKIE['Username'];	   
	   $sql3=mysql_query("SELECT * FROM kryptex WHERE Username='$s'");
	   $userinfo = array();
		while ($row_user = mysql_fetch_assoc($sql3))
		$userinfo[] = $row_user;
	   //array_multisort(array_column($userinfo, 'Level'), SORT_DESC,$userinfo);?>
<h1>Welcome<span style="color:#FB667A"> <?php echo $s?></span></h1>

<table class="container">
	<tbody>
	<?php // start a table tag in the HTML
//$count=1;
foreach ($userinfo as $user){   //Creates a loop to loop through results
echo "<tr><td>Username</td><td>".$user['Username']."</td></tr><tr><td>Email-id</td>"."<td>" . $user['Email'] . "</td></tr>
<tr><td>College</td><td>" . $user['School'] . "</td></tr><tr><td>Mobile Number</td><td>".$user['Mobno']."</td></tr>";  
//$count=$count+1;
}

$sql3=mysql_query("SELECT * FROM kryptexleaderboard");
	   $userinfo = array();
		while ($row_user = mysql_fetch_assoc($sql3))
		$userinfo[] = $row_user;
	   array_multisort(array_column($userinfo, 'Level'), SORT_DESC,$userinfo);
	   $count=1;
	   foreach ($userinfo as $user)
	   {
		   if($user['Username']==$s)
			   break;
		   else
			   $count=$count+1;
	   }
	   settype($count,"string");
	   echo "<tr><td>Level</td><td>".$user['Level']."</td></tr><tr><td>Rank</td><td>".$count."</td></tr>";

echo "</table>";
		?>
		<!--<tr>
			<td>UserName</td>
			<td>qawbecrdteyf</td>
			
		</tr>
		<tr>
			<td>Email id</td>
			<td>qawbecrdteyf@gmail.com</td>
		</tr>
		<tr>
			<td>Rank</td>
			<td>1</td>
		</tr>
    <tr>
			<td>Level</td>
			<td>MAX</td>
		</tr>
    <tr>
			<td>College</td>
			<td>Indian Institute of Technology Bhubaneswar</td>
		</tr>
    <tr>
			<td>Mobile Number</td>
			<td>8329062756</td>
		</tr>
	</tbody>
</table>-->

<div class= "rowff"><strong></br><h5 style="color: white; font-size: 16px;">
     <a href="Almafiesta.com" style="text-align: center;margin: auto;">Almafiesta </a>© Copyright 2018, All Rights Reserved |Web Development Team|</h5></strong></div>
</body>
</html>