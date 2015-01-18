<?php


session_start();
echo "welcome";
$a="conflu";
echo $_SESSION['username'];
if(isset($_SESSION['username']) && $_SESSION['username']=="obs2285684" && $_SESSION['password']=="sob9901571"){
include 'db_connect.php';
$result=  mysqli_query($con,"SELECT * FROM conflu ORDER BY level DESC,date LIMIT 0, 400");

//$result = mysqli_query($con,"SELECT * FROM conflu");
echo "<table border='1'>
<tr>
<th>userID</th>
<th>Name</th>
<th>Email</th>
<th>Username</th>
<th>Contact_no</th>
<th>Password</th>
<th>Level</th>
</tr>";
function url() {
		$rand = rand(1,1000000);
		return $rand;
		}
		$_SESSION['logout']=$logout=url();
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
   echo "<td>" . $row['userID'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['contact_no'] . "</td>";
  echo "<td>" . $row['pass'] . "</td>";
  echo "<td>" . $row['level'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
echo "<a href=logout.php?logout=".$logout.">Logout</a>";
mysqli_close($con);
}
else
	{
	header("location:home.php");
	}
?>

<html>
<head>
<title>Admin</title>
</head>
<body>
<form action="admin_validate.php" method="POST">

<h3>username</h3><input type="text" name="user_name"><br>
<h3>field</h3><input type="text" name="field"><br>
<h3>value</h3><input type="text" name="value"><br>
<input type="submit" value="Let's Go!" />


</body>
</html>
