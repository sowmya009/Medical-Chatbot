
<?php 
$message="";
$valid='true';
include("db_conection.php");
session_start();
if(isset($_GET['key']) && isset($_GET['email'])) {
    $key=$_GET['key'];
    $email=$_GET['email'];
    $check=mysqli_query($dbcon,"SELECT * FROM forget_password WHERE email='$email' and temp_key='$key'");
    
    if (mysqli_num_rows($check)!=1) {
      echo "This url is invalid or already been used. Please verify and try again.";
      exit;
    }
}
/*
else{
  header('location:login.php');
}*/
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password1=mysqli_real_escape_string($dbcon,$_POST['password1']);
        $password2=mysqli_real_escape_string($dbcon,$_POST['password2']);
        if ($password2==$password1) {
            $message_success="New password has been set for ".$email;
            $password=md5($password1);
            mysqli_query($dbcon,"DELETE FROM forget_password where email='$email' and temp_key='$key'");
            
            mysqli_query($dbcon,"UPDATE users set password='$password' where email='$email'");
        }
        else{
            $message="Verify your password";
        }
}
        
?>


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="main.js"></script>

    <style>  
    .col-md-4 {  
        margin-top: 150px;  
    }
    .container1{
        padding-left: 100px;
        padding-right: 100px;
    }
    
</style>  



  </head>
  <body>

  <header>
<div class="container1">
    <p class="logo"><i class="fa fa-h-square" style="color:dodgerblue;"></i>ealth care.</p>
    <nav class="nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About</a></li>
            <li><a href="talktoexpert.php">Talk to expert</a></li>
            
            <li><a href="hospitals.php">Hospitals</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="admin_login.php">Admin Login</a></li>
        </ul>
    </nav>
    <div style="float:right;" class="fas fa-bars"></div>
</div>
</header>


    <div class="container">
      <div class="row"><br><br><br>
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background-color: #e3f2fd; border-radius:15px;">
          <br><br>
          <form role="form" method="POST">
              <label>Please enter your new password</label><br><br>
              <div class="form-group">
                <input type="password" class="form-control" id="pwd" name="password1" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="pwd" name="password2" placeholder="Re-type Password">
              </div>
                  <?php if (isset($error)) {
                    echo"<div class='alert alert-danger' role='alert'>
                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$error."</div>";
                    } ?>
                  <?php if ($message<>"") {
                    echo"<div class='alert alert-danger' role='alert'>
                    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$message."</div>";
                    } ?>
                  <?php if (isset($message_success)) {
                    echo"<div class='alert alert-success' role='alert'>
                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                    <span class='sr-only'>Error:</span>".$message_success."</div>";
                    } ?>
                <button type="submit" class="btn btn-primary pull-right" name="submit" style="display: block; width: 100%;">Save Password</button>
                <br><br>
                <label>This link will work only once for a limited time period.</label><br><br>
                <center><a href="login.php">Back to Login</a></center>
                <br><br>
          </form>
        </div>
    </div>
  </body>
</html>
