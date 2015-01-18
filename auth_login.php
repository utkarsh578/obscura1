<?php
session_start();
$userErr=$passErr=" ";
$username=$password=$message="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["username"]))
     {$userErr = "Name is required";}
   else
     {
     $username = test_input($_POST["username"]);
	 $userErr="";
	 }
	 if (empty($_POST["password"]))
     {$passErr = "Password is required";}
   else
     {$password = test_input($_POST["password"]);
	 $passErr="";
	 }
}
if($userErr=="" && $passErr=="")
{
	if($username=="obs2285684" && $password=="sob9901571"){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	//header("location:admin.php");
	header("location:redirect.php");
	}
	
	else{
	$con=mysqli_connect("localhost","root","evm","obscura");
 
		if (mysqli_connect_errno())
		{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$result=mysqli_query($con,"SELECT * FROM conflu WHERE username='$username' AND pass='$password'") or die(mysqli_error($con));
		$count=mysqli_fetch_array($result);
		
		
		if($count['username']==$username && $count['pass']==$password)
		{
			//session_destroy();
			//session_start();
			//session_register("username");
			//session_register("password"); 
			//$_SESSION['message'] = $message;
			$_SESSION['name']=$count['name'];
			$_SESSION['username']=$username;
			session_write_close();
			header("location:redirect.php");
		}
		else
		{
			//echo $result['username'];
			$message="Wrong Username or Password";
			$_SESSION['message'] = $message;
			
			header("location:home.php");
		}
}
}
else
{
	echo "dddddd";
	$_SESSION['userErr'] = $userErr;
	$_SESSION['passErr'] = $passErr;
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