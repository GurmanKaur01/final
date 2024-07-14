<?php
$title = "Received";
require_once './includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);
    $area_code = mysqli_real_escape_string($conn, $_POST['area_code']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO cust_info ( username, email, password, address, city, province, area_code)
            VALUES ( '$username', '$email', '$hashed_password', '$address', '$city', '$province', '$area_code')";

    if (mysqli_query($conn, $sql)) {
         echo '<h1 style="color:blue;">Welcome, '. $username .'  you are Logged In</h1>' ;
    
        header("Location: index.php"); 
        exit(); 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
require_once './includes/footer.php';
?>
