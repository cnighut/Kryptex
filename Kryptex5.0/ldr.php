<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leaderbord</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<style>
td{
  color: white;
}

.rowf:after{
  content: "";
  display: table;
  clear:both;
  text-align: center;
  margin: auto;
}

.teal a:hover{
color: white;
}



</style>
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
<body>
<?php 
        $servername = "localhost;  
       $username = "root";  
       $password="";   
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('alma18int',$conn) or die("unable to connect to database"); 
	   $sql3=mysql_query("SELECT * FROM kryptexleaderboard");
	   $userinfo = array();
		while ($row_user = mysql_fetch_assoc($sql3))
		$userinfo[] = $row_user;
	   array_multisort(array_column($userinfo, 'Level'), SORT_DESC,$userinfo);
	/*foreach ($userinfo as $user) {
    echo "Username: {$user['Username']}<br />"
       . "Password: {$user['Password']}<br />"
       . "Level: {$user['Level']}<br /><br />";
}
echo "<table>"; // start a table tag in the HTML
$count=1;
foreach ($userinfo as $user){   //Creates a loop to loop through results
echo "<tr><td>".$count."</td>"."<td>" . $user['Username'] . "</td><td>" . $user['Level'] . "</td></tr>";  //$row['index'] the index here is a field name
$count=$count+1;
}

echo "</table>"; //Close the table in HTML*/
//$keys = array_keys($userinfo);
	   ?>
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

<h2 style="color: #3cad40; text-align: center;">LEADERBOARD</h2>
      <table class="zebra">
       
        <thead>
          <tr>
            <th>#</th>        
            <th>UserName</th>
            <th>Level</th>
          </tr>
        </thead>
        <?php // start a table tag in the HTML
$count=1;
foreach ($userinfo as $user){   //Creates a loop to loop through results
echo "<tr><td>".$count."</td>"."<td>" . $user['Username'] . "</td><td>" . $user['Level'] . "</td></tr>";  //$row['index'] the index here is a field name
$count=$count+1;
}

echo "</table>";
		?>

      </table>

   <div class= "rowff"><strong></br><h5 style="color: white; font-size: 16px;">
     <a href="http://2018.almafiesta.com/" style="text-align: center;margin: auto;">Almafiesta </a>© Copyright 2018, All Rights Reserved |Web Development Team|</h5></strong></div>
</body>
</html>