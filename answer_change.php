<?php 
session_start();
if(isset($_SESSION['username']) && $_SESSION['username']=="obs2285684" && $_SESSION['password']=="sob9901571"){

include 'db_connect.php';
	$result=  mysqli_query($con,"SELECT * FROM answer1 ORDER BY level");

echo "<table border='1'>
<tr>
<th>level</th>
<th>answer</th>
<th>answer1</th>
</tr>";

function url() {
		$rand = rand(1,1000000);
		return $rand;
		}
		$_SESSION['logout']=$logout=url();
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['level'] . "</td>";
  echo "<td>" . $row['answer'] . "</td>";
  echo "<td>" . $row['answer1'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<a href=logout.php?logout=".$logout.">Logout</a>";
mysqli_close($con);
}
else
	header("location:home.php");
	
?>

<html>
<head>
<title>Admin</title>
</head>
<body>
<form action="answer_change_validate.php" method="POST">

<h3>level</h3><input type="text" name="level"><br>
<h3>field</h3><input type="text" name="answer"><br>
<h3>value</h3><input type="text" name="answer1"><br>
<input type="submit" value="Let's Go!" />
</form>
<form action="make_answer.php" method="POST">

<h3>level</h3><input type="text" name="level"><br>
<h3>answer</h3><input type="text" name="answer"><br>
<h3>answer1</h3><input type="text" name="answer1"><br>
<input type="submit" value="Let's Go!" />
</form>

</body>
</html>