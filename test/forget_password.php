
<?php
$message="";
$valid='true';
include("db_conection.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email_reg=mysqli_real_escape_string($dbcon,$_POST['email']);
    $details=mysqli_query($dbcon,"SELECT email FROM users WHERE email='$email_reg'");
    if (mysqli_num_rows($details)>0) { 
        $message_success=" Please check your email inbox or spam folder and follow the steps";
        
        $key=md5(time()+123456789% rand(4000, 55000000));
        
        $sql_insert=mysqli_query($dbcon,"INSERT INTO forget_password(email,temp_key) VALUES('$email_reg','$key')");
        
        $to      = $email_reg;
        $subject = 'Change password';
        $body = "Please copy the link and paste in your browser address bar". "\r\n"."forgot-password-php/forgot_password_reset.php?key=".$key."&email=".$email_reg;
        $headers = 'healthcare.chatbot2@gmail.com';
        mail($to, $subject, $body,$headers);
    }
    else{
        $message="Sorry! no account associated with this email";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>Forgot Password</title>
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
  <body style=" background-image: url('images/login background.jpg'); background-repeat:no-repeat; background-size:cover;">

 
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


<div class="container1">
    <div class="row"><br><br><br>
        <div class="col-md-4"></div>
        <div class="col-md-4" style="background-color:#e3f2fd; border-radius:15px;">
          <br><br>
          <form role="form" method="POST">
            <div class="form-group">
              <center><label>Please enter your email to recover your password</label></center><br><br>
              <input  class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="Email" >
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
              <button type="submit" class="btn btn-primary pull-right" name="submit" style="display: block; width: 100%;">Send Email</button>
              <br><br>
              <center><a href="login.php">Back to Login</a></center>
              <br>
          </form>
        </div>
        
      </div>
    </div>
  </body>
</html>
