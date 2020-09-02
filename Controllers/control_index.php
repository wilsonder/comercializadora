<?php 
	session_start();
	IF(ISSET($_SESSION['documento']))
	{
		require_once '../views/view_index.php';
	}
	else
	{
		echo "<script language=\"javascript\">alert(\"Please login\");document.location.href='./index.php';</script>";	
	}
?>