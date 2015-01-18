<?php
session_start();
if(!empty($_SESSION['username'])){
$con=mysqli_connect("localhost","root","evm","obscura");
 
		if (mysqli_connect_errno())
		{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}




}
else

{

header("location:home.php");
}


?>
