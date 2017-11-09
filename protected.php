<?php
session_start();

 if (isset($_SESSION["Authenticated"])&& ($_SESSION["Authenticated"] == 1))
 {

	header("Location: Hr1.php");
 }
 if (isset($_SESSION["Authenticated"])&& ($_SESSION["Authenticated"] == 2))
 {

	header("Location: Sales.php");
 }
  if (isset($_SESSION["Authenticated"])&& ($_SESSION["Authenticated"] == 3))
 {

	header("Location: Hd1.php");
	
?>
<?php
}
else{
?>
<h2>You are not logged in</h2>
<p>But you can <a href="login.html">log in</a></p>
<?php
}
?>

