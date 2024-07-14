<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/final/css/bootstrap.css" />
    <link rel="stylesheet" href="/final/css/style.css" />
    <link rel="icon" href="img/algomau.png" type="image/png" />
    <title> Final <?php echo $title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid" style=background-color:black;>
          <a class="navbar-brand" href="./algomau.php" style=color:white;>Algoma University</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
            
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="./index.php" style=color:white;>Home</a>
              <a class="nav-link" href="./lab.php" style=color:white;>Lab Solution</a>     
          </div>
          </div>
        
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            {"  "}
            <a class="btn btn-primary" href="./loginform.php" role="button" >Login</a>
            {""}
              <a class="btn btn-primary" href="./logout.php" role="button" >Logout</a>
              {""}
              <a class="btn btn-primary" href="./signup.php" role="button" >SignUp</a>
</div>
          </div>
      </nav>
</header>