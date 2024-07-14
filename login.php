

<?php
require_once 'includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    session_start();
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Prepare and execute the SQL query to retrieve the user's hashed password
    $sql = "SELECT password FROM cust_info WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $dbpassword);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Check if the password is correct
    if ($dbpassword == $password) {
        // Password is correct, redirect to lab.php

    session_start();
    $_SESSION['email'] = $email;
    echo $_SESSION["email"];
    echo "Session ID: " . session_id();
    if(isset($_SESSION['email'])){
        echo $_SESSION['email'];
    }

    $cookie_name = "login_status";
    $cookie_value = 'loggedin';
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    
   
        header("Location: logic.php");
        
        exit(); // Ensure that script execution stops after redirection
    } else { 
        echo "The password is incorrect";
        
    }
}

?>
