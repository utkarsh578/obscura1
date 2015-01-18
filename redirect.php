<?php
 session_start();
$usernam=$m=$rand1=$name="";
include 'level_name.php';
echo "sss";
if(!empty($_SESSION['username'])){
		if(!empty($_SESSION['name'])){
       $name = $_SESSION['name'];}
	   $usernam = $_SESSION['username'];
	   echo "string";
	   include 'db_connect.php';
	   	echo " sdsdsd";
 
		/*$con=mysqli_connect("localhost","root","evm","obscura");
		if (mysqli_connect_errno())
		{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}*/
		echo "dfdfd";
		$result=mysqli_query($con,"SELECT * FROM conflu WHERE username='$usernam'") or die(mysqli_error($con));
		$count=mysqli_fetch_array($result);
		$_SESSION['levelr']=$count['level'];
		
		}
else
	{session_destroy();
unset($_SESSION['username']);
	header("location:home.php");}
function url() {
  $rand = rand(1,1000000);
  return $rand;
}

$_SESSION['logout']=$logout=url();
$_SESSION['username']=$usernam;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/static.css">
<link rel="stylesheet" href="css/mainpage.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<title>Welcome</title>


</head>

<body style="overflow:hidden">
<h1 id="title"><img src="images/logo.png">Obscura</h1>

	<section class="color-1">
				<nav class="cl-effect-7" id="nav">
					<?php echo '<a href='."$home".'><span data-hover="Homr">Home</span></a>';?>
					<?php echo '<a target="_blank" href='."$leaderboard".'><span data-hover="About">Leaderboard</span></a>';?>
					<?php echo '<a target="_blank" href='."$rules".'><span data-hover="Rules">Rules</span></a>';?>
					<?php echo '<a target="_blank" href='."$forum".'><span data-hover="Forum">Forum</span></a>';?>
					<?php echo '<a target="_blank" href='."$contact".'><span data-hover="Contact Us">Contact Us</span></a>';?>
					<a href="logout.php?logout=<?php echo $logout;?>"><span data-hover="Log Out">Log Out</span></a>
					

					</nav>
			</section>



<img id="eventback" src="images/ccc.jpg">
<section id="leveln">
<header>
<span style="margin-left:800px; font-family: 'bebas';">Welcome <?php echo $name;?></span>

</header>
<div class="tpbox" style="top:4%">
<div width="55%">Welcome,<br> <?php echo $count['name'] ; ?><br><p style="font-family: 'Raleway';margin-left:100px";>Best of luck!</div>
<br />
</div>
<footer>
<form action="redirect_overflow.php">
<span> 
<input type="submit" value="Proceed"><i class="fa fa-hand-o-up"></i></span>
</form>
</footer>

</section>
<div id="footer">
<li><img src="conflu.gif" style="vertical-align:middle">Confluence'14</li>
<li>National Institute of Technology, Kurukshetra</li>
<li>Powered by ELAD</li>
</div>

</body>
</html>

