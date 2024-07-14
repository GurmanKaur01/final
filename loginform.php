<?php
session_start();

    
?>

<?php
$title = "AlgomaU";
require_once 'includes/header.php';
?>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        
        
        <form class="p-5 rounded shadow" action="login.php" method="POST" style="width:30rem">
            <h1 class="text-center pb-5 display-4"> LOGIN</h1>
            <?php if (isset($_GET['error'])){?>
                <div class="alert alert-danger" role="alert">
                    <?php  echo $_GET['error']; ?>
                   
                </div>
    <?php  } ?>
           
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp">
           
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password"  name="password" class="form-control" id="password">
        </div>
    
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="index.php" class="ca" style="text-align:right">Not already registered? SIGNUP</a>
        </form>
    </div>
   


    script src="./js/bootstrap.bundle.js"></script>
</body> 
<?php include 'includes/footer.php';
?>




   