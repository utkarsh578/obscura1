
<?php
session_start();
$message=$userErr=$passErr=" ";
$username="";
$con;
$result;
$count;
if(isset($_SESSION['username'])){
echo "dsdsd";
        $username = $_SESSION['username'];
		if(isset($_SESSION['message'])){
        $message = $_SESSION['message'];}
		}
		else{
if(isset($_SESSION['passErr'])){
        $passErr = $_SESSION['passErr'];}
if(isset($_SESSION['message'])){
        $message = $_SESSION['message'];}
if(isset($_SESSION['userErr'])){
        $userErr = $_SESSION['userErr'];}
		session_destroy();}
echo "$username";
if($username!="")
{

header("location:redirect.php");
}


$cars=array("Volvodsfsdfdsfds"," ","Toyota");
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
 $x= 1;
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/static.css">

<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<title>Obscura</title>


</head>
<body style="overflow:hidden">
<h1 id="title"><img src="images/logo.png">Obscura</h1>

	<section class="color-1">
				<nav class="cl-effect-7" id="nav">
					<a href="home.php"><span data-hover="Homr">Home</span></a>
					<a href="rules.html"><span data-hover="Rules">Rules</span></a>
					<a href="https://www.facebook.com/Conflu/app_202980683107053?ref=br_tf"><span data-hover="Forum">Forum</span></a>
					<a href="contacts.html"><span data-hover="Contact Us">Contact Us</span></a>
					

					</nav>
			</section>

<img id="eventback" src="images/loginback.jpg">
<div id="loginform" style="height:190%">
<div id="loginbox"  style="margin-left:-100%;color:white;font-size:24px;font-style:oblique">
<p style="margin:auto;"><br><br><p style="font-family: 'Raleway'; ">
The Game is On.
<br>
<br><br>
<br>
<br>
</p>
</div>
</div>
<form id="loginform" method="POST" action="auth_login.php">


<span id="errorname" class="error"><?php if(empty($_SESSION['message'])){}else { echo '<script>alert('.'"'.$message.'"'.');</script>';}?></span>
<div id="loginbox">



<span id="lname" class="titles"><i class="fa fa-user"></i></span>
<input class="credit" type="text"name="username" /><br>
<span id="lpwd" class="titles"><i class="fa fa-lock"></i></span>
<input class="credit" type="password"name="password" /><br>
<span id="loginbutton"><input type="submit" value="Login"><i class="fa fa-sign-in "></i></span> 

</div>

<span id="or">or</span>
<h3> New User ???</h3>
<h2>Register With us <span> Here</span></h2>
<a href="signup.php"><span id="reglink"><i class="fa fa-tasks"></i> Register</a></span>
</form>

	</div>
<div id="footer">
<li  style="padding-left:4%;padding-right:4%"><img src="conflu.gif" style="vertical-align:middle"><a href="http://www.conflu.org">Confluence'14</a></li>
<li  style="padding-left:4%;padding-right:4%"><a href=http://www.nitkkr.ac.in>National Institute of Technology, Kurukshetra</a></li>
<li  style="padding-left:4%;padding-right:4%">Powered by ELAD</li>
<li  style="padding-left:4%;padding-right:4%"><a href="credits.html">Credits</a></li>
</div>
</body>
</html>