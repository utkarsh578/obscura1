
<?php
session_start();
if(empty($_SESSION['username'])){
$nameErr=$emailErr=$userErr=$passErr=$cpassErr=$conErr=" ";
$name=$email=$username=$college=$contact_no="";
if(isset($_SESSION['emailErr'])){
        $emailErr = $_SESSION['emailErr'];}
if(isset($_SESSION['nameErr'])){
        $nameErr = $_SESSION['nameErr'];}
if(isset($_SESSION['userErr'])){
        $userErr = $_SESSION['userErr'];}
if(isset($_SESSION['passErr'])){
        $passErr = $_SESSION['passErr'];}
if(isset($_SESSION['cpassErr'])){
        $cpassErr = $_SESSION['cpassErr'];}
if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];}
if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];}
if(isset($_SESSION['college'])){
        $college = $_SESSION['college'];}
if(isset($_SESSION['contact_no'])){
        $contact_no = $_SESSION['contact_no'];}
if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];}
if(isset($_SESSION['conErr'])){
        $conErr = $_SESSION['conErr'];}		
		session_destroy();
}
else
	header("location:home.php");
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/reset.css">

<script src="js/cssbs.js"></script>
<link rel="stylesheet" href="css/static.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/login.css">

<title>Registration Form</title>


</head>

<body>

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

<form id="register" method="POST" action="auth_signup.php">
<h1>Sign Up!<i class="fa fa-tags"></i></h1>
<div id="inputboxes">
<br>
<input class="entry" type="text" placeholder="Name" name="name" value="<?php echo $name; ?>">
<span id="errorname" class="error"><br> <br class="mozillabreak"><?php if(empty($_SESSION['nameErr'])){echo "" ;}else { echo "<script>document.getElementById('errorname').innerHTML='$nameErr'</script>";}?></span>
 <input class="entry" type="text" placeholder="Username" name="username" value="<?php echo $username;?>">
<span id="erroruser" class="error"><br> <br class="mozillabreak"><?php if(empty($_SESSION['userErr'])){echo "" ;}else { echo "<script>document.getElementById('erroruser').innerHTML='$userErr'</script>";}?></span>

<input class="entry" type="text" placeholder="Email" name="email" value="<?php echo $email; ?>">
<span id="errormail" class="error"><br> <br class="mozillabreak"><?php if(empty($_SESSION['emailErr'])){echo "" ;}else { echo "<script>document.getElementById('errormail').innerHTML='$emailErr'</script>";}?></span>

<input class="entry" type="text" placeholder="Contact" name="contact_no" value="<?php echo $contact_no;?>" maxlength="10">
<span id="errorcon" class="error"><br> <br class="mozillabreak"><?php if(empty($_SESSION['conErr'])){echo "" ;}else { echo "<script>document.getElementById('errorcon').innerHTML='$conErr'</script>";}?></span>

<input class="entry"  placeholder="Password" name="password" type="password" >
<span id="errorpass" class="error"><br> <br class="mozillabreak"><?php if(empty($_SESSION['passErr'])){echo "" ;}else { echo "<script>document.getElementById('errorpass').innerHTML='$passErr'</script>";}?></span>

<input class="entry" placeholder="confirm Password" name="cpassword" type="password">
<span id="errornconfirm" class="error"><br> <br class="mozillabreak"><?php if(empty($_SESSION['cpassErr'])){echo "" ;}else { echo "<script>document.getElementById('errornconfirm').innerHTML='$cpassErr'</script>";}?></span>
<span id="submitbutton"><i class="fa fa-thumbs-up"></i>
<input type="submit" value="Sign Up"></span>
</div>

</form>
<div id="footer">
<li><img src="conflu.gif" style="vertical-align:middle"><a href="http://www.conflu.org">Confluence'14</a></li>
<li><a href=http://www.nitkkr.ac.in>National Institute of Technology, Kurukshetra</a></li>
<li><span id="reglink"><i class="fa fa-tasks"></i> Register</span>Powered by ELAD</li>
</body>
</html>

