<?php
session_start();
include 'level_name.php';
$username;
$ansErr=$pointu="";
$level=20;
$temp="";
$plevel;
$m=$rand="";
if(!empty($_SESSION['username'])){
        $username = $_SESSION['username'];
		$_SESSION['back']=$level20;
		unset($_SESSION['level']);
		include 'db_connect.php';
		
		if(isset($_SESSION['ansErr'])){
        $ansErr = $_SESSION['ansErr'];
		unset($_SESSION['ansErr']);}
		if(!empty($_SESSION['temp'])){
        $temp = (int)$_SESSION['temp'];}
		else
			{$temp="";}
		
		$result=mysqli_query($con,"SELECT * FROM conflu WHERE username='$username'") or die(mysqli_error($con));
		$count=mysqli_fetch_array($result);
		$_SESSION['level']=$level;
		$_SESSION['levelr']=$count['level'];
		$plevel=$count['level'];
		
		
		
		  if($count['level']==$level-1 && $temp==1){
		   $x=$level;
		   $temp="";
	   unset($_SESSION['temp']);
		mysqli_query($con,"UPDATE conflu SET level=$plevel+1,date=CURRENT_TIMESTAMP
			WHERE username='$username'");
			
			}
		
		else if($count['level']>=$level){
		$x=$count['level'];
		$temp="";
	   unset($_SESSION['temp']);
		}
		else
		{
		//include 'redirect_overflow.php';
			header("location:redirect_overflow.php");
		
		}
		
		function url() {
		$rand = rand(1,1000000);
		return $rand;
		}
		$_SESSION['username']=$username;
		$_SESSION['logout']=$logout=url();
		//$_SESSION['level']=$count['level'];
		}
else
	{
			session_destroy();
unset($_SESSION['username']);
	header("location:home.php");
	}
	
?>



<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/static.css">
<link rel="stylesheet" href="css/mainpage.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/sidebar.css">

<title>Level 20</title>
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
	<li><a href="level20.php">Level 20</a></li>
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
	
	echo "<script>var x='$x';var links=document.querySelectorAll('.sidebar li');for(var i=0;i<=x;i++){links[i].style.display='inline';}</script>";
	//echo '<script>var aTag = document.createElement("li");aTag.innerHTML = "link text";document.querySelector(".sidebar").appendChild(aTag);</script>';
	
	//echo '<script>var alllinks=document.querySelectorAll(".sidebar li");for(var i=0;i<alllinks.length;i++){allinks[i].onclick="level" + i;}</script>';
	
	?>
	
	
	
</ul>
</div>


</head>

<body>
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
Level 20<span style="margin-left:700px; font-family: 'bebas';">Welcome <?php echo $count['name'];?></span></header>
</header>
<div id="images">
<div style="width:780px;font-size:30px;margin-left:320px;margin-top:100px">this time hints on me <i>go ctrl+U</i></div><!--level code starts------------------------------------------------>
<br>
<br>
<br>
</div>
<span id="erroruser" class="error" style="margin-left:650px; color:red;"><?php echo $ansErr;?></span>
<footer>
<form action="check_answer.php" method="POST">
<input id="answer" type="text" placeholder="Type your answer" name='answer'><br>
<span> <input type="submit" value="submit"><i class="fa fa-hand-o-up"></i></span>
</form>
</footer>
</section>
<div id="footer">
<li><img src="conflu.gif" style="vertical-align:middle"><a href="http://www.conflu.org">Confluence'14</a></li>
<li><a href=http://www.nitkkr.ac.in>National Institute of Technology, Kurukshetra</a></li>
<li>Powered by ELAD</li>
</div>
<!--bow down to the creators.-->

</body>
</html>

