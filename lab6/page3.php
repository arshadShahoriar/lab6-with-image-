  
<?php

session_start();
?>

<DOCTYPE html>
	<html>

<?php



$_SESSION["name"] = $_POST["name"];
$_SESSION["gender"] = $_POST["gender"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];

	?>

 <form action="page2.php" method="POST" enctype="multipart/form-data">
  File:
    <input type="file" name="file" /> 
	<input type="submit"/>
  </form>
	</html>