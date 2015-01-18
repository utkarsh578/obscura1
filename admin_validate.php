<?php
session_start();
$user_name=$field=$value="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_SESSION['username']) && $_SESSION['username']=="obs2285684" && $_SESSION['password']=="sob9901571"){
$username=$_POST['user_name'];
$field=$_POST['field'];
$value=$_POST['value'];
include 'db_connect.php';
	mysqli_query($con,"UPDATE conflu SET $field='$value'
WHERE username='$username' ");
header("location:admin.php");
}
else
	header("location:home.php");

}
else

{
	session_destroy();
	header("location:home.php");
	}