<?php

session_start();
?>


<DOCTYPE html>
<html>

<?php

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$gender = $_SESSION["gender"];
$password = $_SESSION["password"];

$img=$_FILES['file'] ["name"];


//$target_dir = "upload/";
 // $target_file = $target_dir . basename($_FILES["file"]["name"]);


  //Select file type
  //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
 //$extensions_arr = array("jpg","jpeg","png","gif");

     // Upload file
   //  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);


$servername = "localhost";
$username = "root";

$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO info (name, email, gender, password, image)
VALUES ('$name', '$email', '$gender','$password', '$img')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


?>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>



</html>
<!DOCTYPE html>
<html>

<body>
	<h1>Registration successful</h1>
  <a href="login.php">Login</a>
</body>
</html>