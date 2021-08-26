<?php  
session_start();
  
?>  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Login</title> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="main.js"></script>
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }
    .container1{
        padding-left: 100px;
        padding-right: 100px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
</style>  
  
<body style=" background-image: url('images/login background.jpg'); background-repeat:no-repeat; background-size:cover;">  
 
<header>
<div class="container1">
    <p class="logo"><i class="fa fa-h-square" style="color:dodgerblue;"></i>ealth care.</p>
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="talktoexpert.php"> Talk to expert</a></li>
            <li><a href="#hospitals">Hospitals</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <div style="float:right;" class="fas fa-bars"></div>
</div>
</header>

<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success" style="border: 0px; background-color:#e3f2fd;">  
            <div class="imgcontainer">
                <img src="images\login.png" alt="Avatar" class="avatar">
            </div>
                
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus REQUIRED>   
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" REQUIRED>  
                            </div>  
                                <input class="btn btn-lg btn-success btn-block" style="background-color:dodgerblue;" type="submit" value="login" name="login" >  
                        </fieldset> 
                        <center><p style="padding:15px;"><a href="forget_password.php">Forgot your password?</a></p></center> 
                        <center><p style="padding:15px;"> <a href="admin_login.php">Login As Admin?</a></p></center>
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div> 

</body>  
  
</html>  
  
<?php  
  
include("db_conection.php");  

if(isset($_POST['login']))  
{  
    $email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE email='$email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$email;  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  