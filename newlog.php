<?php
session_start();
include './db/conn.php';
if(isset($_POST['email']) && isset($_POST['password']))
{
    function validate($data){
     $data= trim($data);
     $data= stripslashes($data);
     $data= htmlspecialchars($data);
     return $data;
    }
$email=validate($_POST['email']);
$password=validate($_POST['password']);




if(empty($email)){
    header("Location:login.php?error=Email is required");
}
else if (empty($password)){
    header("Location:login.php?error=Password is required");
}
else{
   $stmt=$conn->prepare("SELECT * FROM client_info WHERE email=?");
   $stmt->execute([$email]);

   if($stmt->rowCount()==1){
         $user = $stmt -> fetch();

         $user_client_id=$user['client_id'];
         $user_email=$user['email'];
         $user_password=$user['password'];
         $user_address=$user['address'];
         $user_province=$user['province'];
         $user_city=$user['city'];
 
         echo $user_email;
         echo $password;
         echo $user_password;

         if($email === $user_email){
           if($password === $user_password){
                 $_SESSION['user_client_id']=$user_client_id;
                 $_SESSION['user_email']=$user_email;
                 $_SESSION['user_password']=$user_password;
                 $_SESSION['user_address']=$user_address;
                 $_SESSION['user_province']=$user_province;
                 $_SESSION['user_city']=$user_city;
                 header("Location: index.php");
 

                 echo "Logged In";
           } else{
            header("Location:login.php?error=Incorrect Username or password");

           }

         }else{
            header("Location:login.php?error=Incorrect Username or password");
        }

   }else{
        header("Location:login.php?error=Incorrect Username or password");
    }
    }
   }

     
     ?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        

   