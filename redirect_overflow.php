<?php
session_start();
$level=$_SESSION['levelr'];
include 'level_name.php';
switch($level)
{
	case 0:
		header("location:$level0");
		break;
	case 1: 
		header("location:$level1");
		break;
	case 2:
		header("location:$level2");
		break;
	case 3:
		header("location:$level3");
		break;
	case 4:
		header("location:$level4");
		break;
	case 5:
		header("location:$level5");
		break;
	case 6:
		header("location:$level6");
		break;
	case 7:
		header("location:$level7");
		break;
	case 8:
		header("location:$level8");
		break;
	case 9:
		header("location:$level9");
		break;
	case 10:
		header("location:$level10");
		break;
	case 11:
		header("location:$level11");
		break;
	case 12:
		header("location:$level12");
		break;
	case 13:
		header("location:$level13");
		break;
	case 14:
		header("location:$level14");
		break;
	case 15:
		header("location:$level15");
		break;
	case 16:
		header("location:$level16");
		break;
	case 17:
		header("location:$level17");
		break;
	case 18:
		header("location:iamlocked.php");
		break;
	case 1811:
		header("location:level1811.php");
		break;
	case 19:
		header("location:$level19");
		break;
	case 20:
		header("location:$level20");
		break;
	case 21:
		header("location:$level21");
		break;
	case 22:
		header("location:$level22");
		break;
	case 23:
		header("location:$level23");
		break;
	case 24:
		header("location:$level24");
		break;
	case 25:
		header("location:$level25");
		break;
	case 26:
		header("location:$level26");
		break;
	case 27:
		header("location:$level27");
		break;
	case 28:
		header("location:$level28");
		break;
	case 29:
		header("location:$level29");
		break;
	case 30:
		header("location:$level30");
		break;
	case 31:
		header("location:congrats.php");
		break;
	
}


?>