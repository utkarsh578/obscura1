<?php
session_start();
$user_name=$level=$answer="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_SESSION['username']) && $_SESSION['username']=="obs2285684" && $_SESSION['password']=="sob9901571"){
$username=$_POST['user_name'];
$level=$_POST['level'];
$answer=$_POST['answer'];
$answer1=$_POST['answer1'];
include 'db_connect.php';

	mysqli_query($con,"UPDATE answer1 SET $answer='$answer1'
WHERE level='$level' ");
header("location:answer_change.php");
}
else
	header("location:home.php");

}
else

{
	
	header("location:home.php");
	}