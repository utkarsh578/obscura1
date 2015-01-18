<?php
session_start();
include 'level_name.php';

$ansErr=$pointu="";
$plevel;
$m=$rand="";
if(!empty($_SESSION['username'])){

$username=	$_SESSION['username'];
include 'db_connect.php';
$result=mysqli_query($con,"SELECT * FROM conflu WHERE username='$username'") or die(mysqli_error($con));
$count=mysqli_fetch_array($result);

$name=$count['name'];
function random() {
$rand = rand(1000,5000);
return $rand;
}



function url() {
$rand = rand(1,1000000);
return $rand;
}
//$_SESSION['username']=$username;
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
<link rel="stylesheet" href="css/tablelead.css">
<title>Leaderboard</title>


</head>

<body >
<h1 id="title"><img src="images/logo.png">Obscura</h1>

<section class="color-1">
<nav class="cl-effect-7" id="nav">
					<?php echo '<a href='."$home".'><span data-hover="Homr">Home</span></a>';?>
					<?php echo '<a href='."$leaderboard".'><span data-hover="About">Leaderboard</span></a>';?>
					<?php echo '<a href='."$rules".'><span data-hover="Rules">Rules</span></a>';?>
					<?php echo '<a href='."$forum".'><span data-hover="Forum">Forum</span></a>';?>
					<?php echo '<a href='."$contact".'><span data-hover="Contact Us">Contact Us</span></a>';?>
					<a href="logout.php?logout=<?php echo $logout;?>"><span data-hover="Log Out">Log Out</span></a>

</nav>
</section>



<img id="eventback" src="images/ccc.jpg">
<section id="leveln">
<header>
Leaderboard <span style="margin-left:600px; font-family: 'bebas';">Welcome <?php echo $name;?></span></header>
</header>
<table>
<?php
include 'db_connect.php';
$result=  mysqli_query($con,"SELECT * FROM conflu ORDER BY level DESC,date LIMIT 0, 400");
echo '<div style="margin-left:300px";>';
echo "
<tr>
<th>Rank</th>
<th>Name</th>
<th>Level</th>
</tr>";

$rank=0;
while($row = mysqli_fetch_array($result))
 {
 
 echo "<tr>";
 echo "<td>" . $rank++ . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['level'] . "</td>";
 echo "</tr>";
 }

echo "";
echo '</div>';
?>
</table>
</section>
<div id="footer">
<li><img src="conflu.gif" style="vertical-align:middle"><a href="http://www.conflu.org">Confluence'14</a></li>
<li><a href=http://www.nitkkr.ac.in>National Institute of Technology, Kurukshetra</a></li>
<li>Powered by ELAD</li>
</div>

</body>
</html>
