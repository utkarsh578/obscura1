<?php session_start();
$page = $_SERVER['PHP_SELF'];
 $sec = "1";
 header("Refresh: $sec; url=$page");
$rand=$m="";
$usernam="jjjjj";
if(isset($_GET['logout']))
	   {
	   
	   $m=$_GET['logout'];
	   if($m==$_SESSION['logout'])
	   {
	   
	  
	 if(isset($_SESSION['username'])){
       $usernam = $_SESSION['username'];}
	   echo $usernam;
       unset($_SESSION['username']);
	   unset($_SESSION['level']);
	   unset($_SESSION['levelr']);
	   echo " you are logged out..";
	   if(isset($_SESSION['username'])){
		header("location:signup.php");
	   }
	   session_destroy();
	   
	   }
	   
	   else
		header("location:redirect.php");
	   }
else
	 {
	 header("location:redirect.php");
	 
	 }
?>

