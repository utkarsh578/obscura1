<?php 
session_start();
include 'level_name.php';
$username=$name="";
$level=0;
$logout=$rand="";
$a=1;
if(!empty($_SESSION['username'])){
		if(!empty($_SESSION['name'])){
       $name = $_SESSION['name'];}
		$_SESSION['rand']=$rand=url();
		$username = $_SESSION['username'];
		$_SESSION['username']=$username;
		$_SESSION['logout']=$logout=url();
		}
else{
	header("location:home.php");
}	
function url() {
  $rand = rand(1,1000000);
  return $rand;
  }
  include 'db_connect.php';
 // $_SESSION['con']=$con;
		$result=mysqli_query($con,"SELECT * FROM conflu WHERE username='$username'") or die(mysqli_error($con));
		$count=mysqli_fetch_array($result);
		//$_SESSION['con']=$count;



		


?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/reset.css">

<link rel="stylesheet" href="css/static.css">
<link rel="stylesheet" href="css/mainpage.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/sidebar.css">

<title>Level 0</title>


</head>

<body>
<div class="sidebar">

	<div id="kt">Levels</div>
	<ul>
<?php  echo	
	'<li><a href="level0.php">Level 0</a></li>
	<li><a href="level1.php">Level 1</a></li>
	<li><a href="level2.php">Level 2</a></li>
	<li><a href="level3.php">Level 3</a></li>
	<li><a href="level4.php">Level 4</a></li>
	<li><a href="level5.php">Level 5</a></li>
	<li><a href="level6.php">Level 6</a></li>
	<li><a href="level7.php">Level 7</a></li>
	<li><a href="level8.php">Level 8</a></li>
	<li><a href="level9.php">Level 9</a></li>
	<li><a href="level10.php">Level 10</a></li>
	<li><a href="level11.php">Level 11</a></li>
	<li><a href="level12.php">Level 12</a></li>
	<li><a href="level13.php">Level 13</a></li>
	<li><a href="level14.php">Level 14</a></li>
	<li><a href="level15.php">Level 15</a></li>
	<li><a href="level16.php">Level 16</a></li>
	<li><a href="level17.php">Level 17</a></li>
	<li><a href="iamlocked.php">Level 18</a></li>
	<li><a href="level19.php">Level 19</a></li>
	<li><a href="level20.php">Level 21</a></li>
	<li><a href="level21.php">Level 21</a></li>
	<li><a href="level22.php">Level 22</a></li>
	<li><a href="level23.php">Level 23</a></li>
	<li><a href="level24.php">Level 24</a></li>
	<li><a href="level25.php">Level 25</a></li>
	<li><a href="level26.php">Level 26</a></li>
	<li><a href="level27.php">Level 27</a></li>
	<li><a href="level28.php">Level 28</a></li>
	<li><a href="level29.php">Level 29</a></li>
	<li><a href="level30.php">Level 30</a></li>
	'
	;?>
	<?php
	$x=$count['level'];
	echo "<script>var x='$x';var links=document.querySelectorAll('.sidebar li');for(var i=0;i<=x;i++){links[i].style.display='inline';}</script>";
	//echo '<script>var aTag = document.createElement("li");aTag.innerHTML = "link text";document.querySelector(".sidebar").appendChild(aTag);</script>';
	
	//echo '<script>var alllinks=document.querySelectorAll(".sidebar li");for(var i=0;i<alllinks.length;i++){allinks[i].onclick="level" + i;}</script>';
	
	?>
	
	
	
</ul>
</div>
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
Level 0 <span style="margin-left:700px; font-family: 'bebas';">Welcome <?php echo $name;?></span>
<!--level code starts-->
</header>
<div id="images">
<img style="margin-left:250px;" src="grayskull.jpg" usemap="#grey">
<map name="grey">
<area shape="circle" coords="253,243,60" href="<?php echo $level1;  ?>?link=<?php echo $rand;  ?>" alt="enter">
</map>
</div>
<span id="erroruser" class="error" style="margin-left:650px; color:red;"></span>
<footer>
<form action="#" method="POST">
<input id="answer" type="text" placeholder="Type your answer" name='answer'><br>
<span> <input type="submit" value="submit"><i class="fa fa-hand-o-up"></i></span>
</form>
</footer>
</section>


</body>
</html>

