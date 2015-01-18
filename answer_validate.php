<?php
session_start();
include 'level_name.php';
$level=$ansErr=$answer=$temp="";
echo "aaaaaaaaaaa";
if(!empty($_SESSION['username']))
{
	$level=$_SESSION['level'];
	if (empty($_SESSION["answer"]))
     {$ansErr = "Enter Answer!";
	 $_SESSION['ansErr']=$ansErr;
	 header("location:".$_SESSION['back']);
	 }
   else
     {
	 unset($_SESSION['ansErr']);
	 $answer=test_input($_SESSION['answer']);
	 echo $answer;
	 echo $level;
     switch($level)
	 {
	 case 1:
		{
		if($answer=="buckingham" || $answer=="Buckingham")
		{
		$_SESSION['temp']=$temp=1;
		unset($_SESSION['ansErr']);
		unset($_SESSION['answer']);
		header("location:level2.php");
		break;
		}
		else
			{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1.php");
			break;
			}
			}
	 
	 case 2:
	{
			if($answer=="buckingham" || $answer=="Buckingham")
		{
			unset($_SESSION['ansErr']);
			unset($_SESSION['answer']);
			$_SESSION['temp']=$temp=1;
			header("location:level3.php");
			break;
		}
		else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level2.php");
			break;
		}
		
	 
	 }
	 case 3:
	 {
		if($answer=="buckingham" || $answer=="Buckingham")
		{
			unset($_SESSION['ansErr']);
			unset($_SESSION['answer']);
			$_SESSION['temp']=$temp=1;
			header("location:level4.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level3.php");
			break;
		}
	 }
	 case 4:
	 {
		if($answer=="hidden" || $answer=="Hidden")
		{
			unset($_SESSION['ansErr']);
			unset($_SESSION['answer']);
			$_SESSION['temp']=$temp=1;
			header("location:level5.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level4.php");
			break;
		}
	 }
	 case 5:
		{
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			unset($_SESSION['answer']);
			$_SESSION['temp']=$temp=1;
			header("location:level6.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level5.php");
			break;
		}
	 }
	 case 6:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			unset($_SESSION['answer']);
			$_SESSION['temp']=$temp=1;
			header("location:level7.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level6.php");
			break;
		}
	 }
	 case 7:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			unset($_SESSION['answer']);
			$_SESSION['temp']=$temp=1;
			header("location:level8.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level7.php");
			break;
		}
	 }
	 case 8:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			unset($_SESSION['answer']);
			$_SESSION['temp']=$temp=1;
			header("location:level9.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level8.php");
			break;
		}
	 }
	 case 9:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level10.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level9.php");
			break;
		}
	 }
	 case 10:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level11.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level10.php");
			break;
		}
	 }
	 case 11:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level12.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level11.php");
			break;
		}
	 }
	 case 12:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level13.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level12.php");
			break;
		}
	 }
	 case 13:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level14.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level13.php");
			break;
		}
	 }
	 
	 case 14:
	  {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level15.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level14.php");
			break;
		}
	 }
	 case 15:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:iamlocked.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level15.php");
			break;
		}
	 }
	 case 1611:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level1612.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1611.php");
			break;
		}
	 }
	 case 1612:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level1613.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1612.php");
			break;
		}
	 }
	 case 1613:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:dungeon.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1613.php");
			break;
		}
	 }
	 case 1621:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level1622.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1621.php");
			break;
		}
	 }
	 case 1622:
	 	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level1623.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1622.php");
			break;
		}
	 }
	 case 1623:
	  	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:dungeon.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1623.php");
			break;
		}
	 }
	 case 1631:
	   	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level1632.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1631.php");
			break;
		}
	 }
	 case 1632:
	   	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level1633.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1632.php");
			break;
		}
	 }
	 case 1633:
	  {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level17.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1633.php");
			break;
		}
	 }
	 case 1641:
	  {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level1642.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1641.php");
			break;
		}
	 }
	 case 1642:
	   {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level1643.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1642.php");
			break;
		}
	 }
	 case 1643:
	  {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:dungeon.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level1643.php");
			break;
		}
	 }
	 case 17:
	 {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level18.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level17.php");
			break;
		}
	 
	 
	 }
	 case 18:
	  {
		
		if($answer=="random" || $answer=="Random")
		{
			unset($_SESSION['ansErr']);
			$_SESSION['temp']=$temp=1;
			header("location:level19.php");
			break;
		}
			else
		{
			$ansErr="wrong ans!";
			$_SESSION['ansErr']=$ansErr;
			header("location:level18.php");
			break;
		}
	 
	 
	 }
	 
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