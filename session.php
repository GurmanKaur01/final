<?php
 session_start(); // Start session
$_SESSION['email'] = $email; 
?>



<?php 
session_start(); // Start session
if (isset($_SESSION[$email])) {
    // User is logged in, allow access to member area
    header('Location: lab.php');
    exit();
} else {
    // Redirect to login page or show access denied message
    header('Location: loginform.php');
    exit();
}

?>
<?php
session_start(); // Start session
if (isset($_SESSION['username']) || isset($_COOKIE['login_status'])) {
    // User is logged in, allow access to member area
    header('Location: lab.php');
} else {
    // Redirect to login page or show access denied message
    header('Location: loginform.php');
    exit();
}?>


