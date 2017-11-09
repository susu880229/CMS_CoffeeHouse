<?php
session_start();
// User is logging in
if (isset($_POST["login"]))
{
	if (isset($_POST["username"]) && ($_POST["username"]== "HR")&& isset($_POST["password"]) && ($_POST["password"]== "HR"))
	{
	$_SESSION["Authenticated"] = 1;
	}
	elseif (isset($_POST["username"]) && ($_POST["username"]== "Sales")&& isset($_POST["password"]) && ($_POST["password"]== "Sales"))
	{
	$_SESSION["Authenticated"] = 2;
	}
	elseif (isset($_POST["username"]) && ($_POST["username"]== "Helpdesk")&& isset($_POST["password"]) && ($_POST["password"]== "Helpdesk"))
	{
	$_SESSION["Authenticated"] = 3;
	}
	else{
	$_SESSION["Authenticated"] = 0;
	}
	session_write_close();
	
	//go to protected.php page
	header("Location: protected.php");
}
// User is logging out
if (isset($_GET["logout"]))
{
	session_destroy();
	
	//go to login.html page
	header("Location: homepage.php");
}
?>
