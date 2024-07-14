<?php 
session_start();
session_unset();

session_destroy();
    // Remove the session cookie
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), ' ', time() - 2000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }

?>
<?php
require_once 'includes/header.php';?>
<div style="text-align: center; margin-top: 10%; font-family: Arial, sans-serif;">
    <h1 style="color:red">Hi, you are Logged Out!</h1>
    <a href="./loginform.php" >Login</a>
    <div>
</body>
</html>