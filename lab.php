<?php
session_start();

    
?>

<?php 
require_once'./includes/header.php';

?>
<?php if (!isset($_SESSION['email'])): ?>
        <div style="text-align: center; margin-top: 20%; font-family: Arial, sans-serif;">
            <h1 style="color: blue; font-size: 3.5em;">Please login or Signup to access the content </h1>
            <button onclick="window.location.href = 'loginform.php';" style="padding: 10px 20px; background-color: #3498db; color: #fff; font-size: 1.5em; border: none; cursor: pointer; margin-top: 20px;">Login Here </button>
            <br>
            <button onclick="window.location.href = 'signup.php';" style="padding: 10px 20px; background-color: #3498db; color: #fff; font-size: 1.5em; border: none; cursor: pointer; margin-top: 20px;">SignUp </button>

          </div>
          <?php else: ?>
 <h1 > Lab Solutions</h1>
 <br>
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
   
        
 <form class="p-5 rounded shadow"  method="POST" style="width:30rem">
    <div>
 <a class="btn btn-primary" href="https://github.com/GurmanKaur01/week2/commit/d7b9bec2c3783ba4c34091987de14da175098f09" role="button" >Lab 1 </a>

</div>
<br>
<div>
 <a class="btn btn-primary" href="https://github.com/GurmanKaur01/week2/blob/master/lab2.html" role="button" >Lab 2</a>

</div>
 </form>

</div>
<?php echo "Lab 1 solution" ?>
<?php
echo $_SESSION["email"]; 
if(isset($_SESSION['email'])){
        echo $_SESSION['email'];
    } ?>


<?php endif; ?>
<?php 
require_once'./includes/footer.php';
?>