
<?php
$email = $_POST["email"];
$password= $_POST["password"];




$servername = "localhost";
$username = "root";

$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql= "select * from info where email='$email' and password='$password'";



$result = $conn->query($sql);


$row = $result->fetch_assoc();

$_SESSION["img"] = $row['image'];
$_SESSION["name"] = $row['name'];
$_SESSION["email"] = $row['email'];
$_SESSION["gender"] = $row['gender'];

if ($result->num_rows > 0) {
	
	
	include("homepage.php");
}
else{
	include("homepage.php");
}

$conn->close();

?>

