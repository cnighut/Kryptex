
<!DOCTYPE html>
<html>
<head>
  <title>Kryptex</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

.teal a:hover{
    color: white;
}
.cusbody{
    font-family: 'Source Sans Pro', sans-serif;
    line-height: 1.5;
    color: #323232;
    font-size: 15px;
    font-weight: 400;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.heading-title {
    margin-bottom: 100px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {Up
    padding-top: 30px;
}
.half-txt {
    width: 100%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-uppercase {
    text-transform: uppercase;
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 20px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.6s;
}
.team-member:hover .team-hover .deskcus {
    top: 35%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .deskcus, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .deskcus {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 20px;
}
.deskcus, .deskcus h4, .team-hover .s-link a {
    text-align: center;
    color: white;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .deskcus, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.deskcus, .deskcus h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
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

  <header>

    <div class="header-row1">
      <a href="http://www.iitbbs.ac.in"><img src='http://www.iitbbs.ac.in/images/iitbbs_logo.png' height='100%' alt='IIT Bhubaneswar'/></a>
      <a href="http://2018.almafiesta.com/"><img src='http://almafiesta.com/alma.png' height='100%' alt='almafiesta'/></a>
    </div>
    <br><br>
  </header>
     <div class="containerh teal borderYtoX">
  		<a href="#about">ABOUT</a>
  		<a href="signup.html">SIGNUP</a>
  		<a href="#ldr">LEADERBOARD</a>
  		<a href="#rar">RULES</a>
  		<a href="#cus">CONTACT US</a>
	</div>
  <section class="sect1">
    <div class= "about container-fluid" id="about" style="text-align: center;font-size: 24px;">
      ABOUT
      <p><img src="assets/images/about1.jpg" class="img-responsive" style="width:400px;margin: 0 auto;"></img></p><h6>
      Kryptex, is the annual crytography contest organised by Alma Fiesta, IIT Bhubaneswar</h6>
      <h2>YO ALMA!</h2>
    </div>
              <form class = "signupform" action="login.php" enctype="multipart/form-data" method="post">
    <div class="login-form" id="login-form">
      <h1>LOGIN</h1>
      <div class="form-group ">
        <input type="text" class="form-control" placeholder="Username " id="UserName" name="un">
        <i class="fa fa-user"></i>
      </div>
      <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="Passwod" name="pw">
       <i class="fa fa-lock"></i>
      </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="signup.html" style="color: #3a426d;">Sign up</a>
      <button type="submit" class="log-btn" ><span>Log in</span></button>
   </div>
</form>
  </section>

<section class="sect2">
   
    <div class = "ldr" id="ldr" style="overflow: scroll;">
      <h2 style="color: #3a426d; text-align: center;">LEADERBOARD</h2>
      <table class="zebra">
       <thead>
          <tr>
            <th>#</th>        
            <th>UserName</th>
            <th>Level</th>
          </tr>
        </thead>
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
	   ?>
	   <?php // start a table tag in the HTML
$count=1;
foreach ($userinfo as $user){   //Creates a loop to loop through results
echo "<tr><td>".$count."</td>"."<td>" . $user['Username'] . "</td><td>" . $user['Level'] . "</td></tr>";  //$row['index'] the index here is a field name
$count=$count+1;
if($count==11)
	break;
}

echo "</table>";
		?>
	   
        

      </table>
    </div>

    <div class= "rar" id="rar" style="text-align: center;font-size: 24px;">
      RULES AND REGULATIONS<br>
      <br>
      <div class="movingr">
        <div class="mySlides"> 
            Kryptex, the online cryptography contest of Alma Fiesta, is designed in various levels.<br><br>The main goal is to reach the next level by solving the puzzle at the current level. <br>Each level has one problem to be solved.<br>
        </div>
        <div class="mySlides"><br>If you couldn't get the correct answer, TRY HARDER!<br> Online search, proper deduction and careful observation is enough to take you to the new level and eventually closer to glory!<br></div>
		<div class="mySlides">Hey people, if you find a level too dificult and couldn't solve it, don't resort to &nbsp SKIPPING &nbsp that &nbsp LEVEL &nbsp as that's unfair and if we get to know that, we may even disqualify you!<br>
But the good thing is that we will be releasing hints for the difficult levels through our Facebook page! Follow them for sure!<br></div>
        <div class="mySlides"><br>You can also mail us. Contact details of the problem setters are provided in the contact us section. You can mail us for any queries or hints to solve the puzzles and thus avoid getting DISQUALIFIED!<br><br></div>
        <div class="mySlides">Beware of the spellings. Also Kryptex does not understand punctuation marks and spaces!&nbsp(You heard that right pedants!) &nbsp  If answer is: <p style="color: #3cad40">C. Dickens</p>type it as CDickens. However, all these instructions can be overridden, if you believe it to be necessary :)
	</div>
      </div>

      <div class="w3-center">
        <div class="w3-section">
        <br>
          <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">&lt; Prev</button>
          <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next &gt;</button>
        </div>
        <br>
        <button class="w3-button demo" onclick="currentDiv(1)">1</button> 
        <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
        <button class="w3-button demo" onclick="currentDiv(3)">3</button> 
        <button class="w3-button demo" onclick="currentDiv(4)">4</button>
        <button class="w3-button demo" onclick="currentDiv(5)">5</button>
      </div>
    </div>

  </section>
<br><br><br>
<div class="container-fluid">
<div class="containerc cusbody" id="cus">
 <div class="rowcc">
  <div class="heading-title text-center">
   <h1 class="text-uppercase" style="color: #3cad40"><strong>Kryptex team <strong></strong></h1>
   <p class="p-top-30 half-txt" style="font-size: 24px; color: #3cad40">If you have any doubts or any suggestions to offer regrding Kryptex feel free <br><br>to contact any of the following developers:</p>
  </div>
<div class="col-md-4 col-sm-4">
   <div class="team-member">
    <div class="team-img">
     <img src="assets/images/chirag.jpg" alt="team member" class="img-responsive" style="width: 240px;">
    </div>
    <div class="team-hover">
     <div class="deskcus">
      <h4>Hello World!</h4>
      <p>Problem setter and front end developer. Likes Hill!</p>
      <h5 style="color: #3cad40">Chirag Nighut</h5>
    <span>Core Team Member</span>
     </div>
     <div class="s-link">
      <a href="https://www.facebook.com/profile.php?id=100012496063105"><i class="fa fa-facebook"></i></a>
      <a href="mailto:nca10@iitbbs.ac.in"><i class="fa fa-envelope"></i></a>
     </div>
    </div>
   </div>
  </div>
  <div class="col-md-4 col-sm-4">
   <div class="team-member">
    <div class="team-img">
     <img src="assets/images/sachin.jpg" style="width: 240px;" alt="team member" class="img-responsive">
    </div>
    <div class="team-hover">
     <div class="deskcus">
      <h4>Hi there!</h4>
      <p>Supervisor and team leader</p>
      <h5 style="color: #3cad40">Sachin Mahla</h5>
    <span>Core Head</span>
     </div>
     <div class="s-link">
      <a href="https://www.facebook.com/mahlasachin97"><i class="fa fa-facebook"></i></a>
      <a href="mailto:sk46@iitbbs.ac.in"><i class="fa fa-envelope"></i></a>
     </div>
    </div>
   </div>
  </div>
  <div class="col-md-4 col-sm-4">
   <div class="team-member">
    <div class="team-img">
     <img src="assets/images/pal.png" style="width:180px;" alt="team member" class="img-responsive">
    </div>
    <div class="team-hover">
     <div class="deskcus">
      <h4>Hello people!</h4>
      <p>Problem setter and back-end developer. Likes Caesar!</p>
      <h5 style="color: #3cad40">Aditya Pal</h5>
    <span>Core Team Member</span>
     </div>
     <div class="s-link">
      <a href="https://www.facebook.com/profile.php?id=100013025555228"><i class="fa fa-facebook"></i></a>
      <a href="mailto:ap37@iitbbs.ac.in"><i class="fa fa-envelope"></i></a>
     </div>
    </div>
   </div>
  </div>

 </div>

</div>
  
</br>
<br><br><br><br>
<div class="lastrow">
   <div class= "row"><strong><br><br> <h5 style="color:#3cad40;">
     <br><span style="padding-left:10px;"></span><a href="http://2018.almafiesta.com/">Almafiesta </a>©Copyright 2018, All Rights Reserved |Web Development Team|</h5></strong></div>
 </div>

  <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>

</body>
</html>

