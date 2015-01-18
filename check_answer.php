<?php
session_start();
include 'level_name.php';
$level=$ansErr=$answer=$temp="";
echo "aaaaaaaaaaa";
if(!empty($_SESSION['username']))
{
	$level=$_SESSION['level'];
	if (empty($_POST['answer']))
     {$ansErr = "Enter Answer!";
	 $_SESSION['ansErr']=$ansErr;
	 header("location:".$_SESSION['back']);
	 }
   else
     {
	 unset($_SESSION['ansErr']);
	 $answer=test_input($_POST['answer']);
	include 'db_connect.php';
		
		$result=mysqli_query($con,"SELECT * FROM answer1 WHERE level='$level'");
		$count=mysqli_fetch_array($result);
		if($answer==$count['answer'] || $answer==$count['answer1'])
		{
		$_SESSION['temp']=$temp=1;
		$temp=0;
		unset($_SESSION['ansErr']);
		//unset($_SESSION['answer']);
		$_SESSION['levelans']=$level;
		header("location:ans_new.php");
		}
		else
		{
		unset($_SESSION['temp']);
		$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			unset($_SESSION['answer']);
			header("location:".$_SESSION['back']);

		}
}

}
else{
	header("location:home.php");
	}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
 

?>