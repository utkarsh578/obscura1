<?php
session_start();
if(!empty($_SESSION['username'])){
$level=$_SESSION['levelans'];
include 'level_name.php';
switch($level+1)
{
	case 0:
		header("location:$level0");
		unset($_SESSION['levelans']);
		break;
	case 1: 
		unset($_SESSION['levelans']);
		header("location:$level1");
		break;
	case 2:
		unset($_SESSION['levelans']);
		header("location:$level2");
		break;
	case 3:
		unset($_SESSION['levelans']);
		header("location:$level3");
		break;
	case 4:
		unset($_SESSION['levelans']);
		header("location:$level4");
		break;
	case 5:
		unset($_SESSION['levelans']);
		header("location:$level5");
		break;
	case 6:
		unset($_SESSION['levelans']);
		header("location:$level6");
		break;
	case 7:
		unset($_SESSION['levelans']);
		header("location:$level7");
		break;
	case 8:
		unset($_SESSION['levelans']);
		header("location:$level8");
		break;
	case 9:
		unset($_SESSION['levelans']);
		header("location:$level9");
		break;
	case 10:
		unset($_SESSION['levelans']);
		header("location:$level10");
		break;
	case 11:
		unset($_SESSION['levelans']);
		header("location:$level11");
		break;
	case 12:
		unset($_SESSION['levelans']);
		header("location:$level12");
		break;
	case 13:
		unset($_SESSION['levelans']);
		header("location:$level13");
		break;
	case 14:
		unset($_SESSION['levelans']);
		header("location:$level14");
		break;
	case 15:
		unset($_SESSION['levelans']);
		header("location:$level15");
		break;
	case 16:
		unset($_SESSION['levelans']);
		header("location:$level16");
		break;
	case 17:
		unset($_SESSION['levelans']);
		header("location:$level17");
		break;
	case 18:
		unset($_SESSION['levelans']);
		header("location:iamlocked.php");
		break;
	case 1812:
		unset($_SESSION['levelans']);
		header("location:level1812.php");
		break;
	case 1813:
		unset($_SESSION['levelans']);
		header("location:level1813.php");
		break;
	case 1814:
		unset($_SESSION['levelans']);
		header("location:dungeon.php");
		break;
	case 1822:
		unset($_SESSION['levelans']);
		header("location:level1822.php");
		break;
	case 1823:
		unset($_SESSION['levelans']);
		header("location:level1823.php");
		break;
	case 1824:
		unset($_SESSION['levelans']);
		header("location:dungeon.php");
		break;
	case 1832:
		unset($_SESSION['levelans']);
		header("location:level1832.php");
		break;
	case 1833:
		unset($_SESSION['levelans']);
		header("location:level1833.php");
		break;
	case 1834:
		unset($_SESSION['levelans']);
		header("location:level19.php");
		break;
	case 1842:
		unset($_SESSION['levelans']);
		header("location:level1842.php");
		break;
	case 1843:
		unset($_SESSION['levelans']);
		header("location:level1843.php");
		break;
	case 1844:
		header("location:dungeon.php");
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
}
else
	{
	session_destroy();
	header("location:home.php");
	
	}

?>