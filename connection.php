<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// Check if submit button is clicked
if(isset($_POST['submit'])){
	$first_name = $_POST['firstname'];
    $middle_name  = $_POST['middlename'];
    $last_name  = $_POST['lastname'];
    $gender  = $_POST['gender'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $password  = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

  // attempt insert query execution
      // prepare sql and bind parameters
      $stmt = $conn->prepare("INSERT INTO users (firstname, middlename, lastname, email, phone, gender,password)
       VALUES (:firstname,:middlename,:lastname, :email, :phone,:gender,:password)");

      $stmt->bindParam(':firstname',$first_name );
      $stmt->bindParam(':lastname',$last_name );
      $stmt->bindParam(':middlename',$middle_name );
      $stmt->bindParam(':email', $email); 
      $stmt->bindParam(':phone', $phone);
      $stmt->bindParam(':gender', $gender);
      $stmt->bindParam(':password', $password_hash);
  
      $stmt->execute();




//  echo "Records added successfully.";
header('location:login.php');


}
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>