<?php 
//$page = $_SERVER['PHP_SELF'];
 $sec = "2";
 header("Refresh: $sec; url=home.php");
session_start();
$nameErr=$emailErr=$passErr=$cpassErr=$userErr=$conErr=" ";
$name=$email=$username=$college=$password=$cpassword=$contact_no="";
$flag=0;
$level=0;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["name"]))
     {$nameErr = "Name is required";}
   else
     {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed"; 
       }
	  else
		{$nameErr="";}
     }
 
	 if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format";
		$email="";	   
       }
	   else
	   {$emailErr="";}
     }
 
	 if (empty($_POST["username"]))
     {$userErr = "Username required";}
   else
     {$username = test_input($_POST["username"]);
		$userErr="";
	 }
 
	if (empty($_POST["college"]))
     {$college = "";}
   else
     {$college = test_input($_POST["college"]);}
	 
	 if (empty($_POST["contact_no"]))
     {$conErr= "Contact no. required";
	 
	 }
   else
     {$contact_no = test_input($_POST["contact_no"]);
	 if (!preg_match('/([0-9]{10})/', $contact_no))
	 {
		$conErr="Enter valid 10 digit No.";
		$contact_no="";
	 }
	 else
		$conErr="";
	}
 
	 if (empty($_POST["password"]))
     {$passErr = "Password is required";}
   else
     {$password = test_input($_POST["password"]);
	 $passErr="";
	 }
 
	 if (empty($_POST["cpassword"]))
     {$cpassErr = "Confirm password is required";}
   else
     {$cpassword = test_input($_POST["cpassword"]);
	 $cpassErr="";
	 }
 
	if($password!=$cpassword)
	{
	$passErr="password not matched";
	}
	}
	else
	{
	echo "aaaaaaaaaa";
	}
	if($passErr=="" && $nameErr=="" && $cpassErr=="" && $emailErr=="" && $userErr=="" && $conErr=="")
	{
		$con=mysqli_connect("localhost","root","evm","obscura");
 
		if (mysqli_connect_errno())
		{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		//$sql="SELECT * FROM users WHERE username='$username'" ;
		$result=mysqli_query($con,"SELECT * FROM conflu WHERE username='$username'");
		$result1=mysqli_query($con,"SELECT * FROM conflu WHERE email='$email'");
		//echo $result;
		$count1=mysqli_fetch_array($result1);
		$count=mysqli_fetch_array($result);
		if($count['username']==$username){
		$userErr="Username allready exist!";
		$_SESSION['userErr'] = $userErr;
		$_SESSION['name'] = $name;
		$_SESSION['college'] = $college;
		$_SESSION['email'] = $email;
		$_SESSION['contact_no']=$contact_no;
		header("location:signup.php");
		} 
		else{
		mysqli_query($con,"INSERT INTO conflu (username,name,email,pass,contact_no,level)
		VALUES ('$username','$name','$email','$password','$contact_no','$level')");
		echo "Registration successful!";
		session_destroy();
		}
		}
		//$data=mysql_query ($query) or die(mysql_error());
    //if($data)
    //{
   // echo "YOUR REGISTRATION IS COMPLETED...";
   // }
 
	else
	  {
	  //echo "failed!!!";
 
            $_SESSION['emailErr'] = $emailErr;
			$_SESSION['nameErr'] = $nameErr;
			$_SESSION['userErr'] = $userErr;
			$_SESSION['cpassErr'] = $cpassErr;
			$_SESSION['passErr'] = $passErr;
			$_SESSION['conErr'] = $conErr;
			$_SESSION['name'] = $name;
			//$_SESSION['username'] = $username;
			$_SESSION['college'] = $college;
			$_SESSION['email'] = $email;
			$_SESSION['contact_no']=$contact_no;
 
 
 
 
	  header("location:signup.php");
	  }
 
 
 
 
 
 
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
 
 
?>
