<?php
// Start the session
session_start();
?>

<?php

$image = $_SESSION['img'];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$gender = $_SESSION["gender"];

$image_src = "upload/".$image;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome is Homepage</h1>
<label>Name : </label> <?php echo $name; ?>
<br>
<label>Email : </label> <?php echo $email; ?>
<br>
<label>Gender : </label> <?php echo $gender; ?>
<br>
<img src='<?php echo $image_src;  ?>' >
</body>
</html>