<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "myDB";


// echo "no errors";
$email  = $_POST['email'];
$password  = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

var_dump($email);
    
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = '$email'");
    $stmt->execute();

    // set the resulting array to associative
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($results && (count($results) == 1)) {
        $user = $results[0];

        $user_password_hash = $user['password'];

        if (password_verify($password, $user_password_hash)) { //successfull login
            $login_success = true;

            // $_SESSION['user'] = $user; // create session data for logged in user


            header("Location:home.php"); // redirect to home page
        }else{
            echo "wrong pasword";
        }



    }else{
        echo "failed to fetch";
    }
 }catch(PDOException $e) {
    
 }
?>











// echo "no errors";
    
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = '$email'");
    $stmt->execute();

    // set the resulting array to associative
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if ($results && (count($results) == 1)) {
        $user = $results[0];

        $user_password_hash = $user['password'];

        if (password_verify($password, $user_password_hash)) { //successfull login
            $login_success = true;

            $_SESSION['user'] = $user; // create session data for logged in user

            if ($_POST['remember'] == 'on') {
                setcookie('userid', $user['id'], time() - (86400 * 30), "/");
            }
            header("Location:home.php"); // redirect to home page
        }



    }
 }catch(PDOException $e) {
    
 }



}

// else{
//     echo "has errors";
// }
}