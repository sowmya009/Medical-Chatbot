<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Registration</title>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
<body style=" background-image: url('images/register bakground.jpg'); background-size:cover;">  

<header>
<div class="container1">
    <p class="logo"><i class="fa fa-h-square" style="color:dodgerblue;"></i>ealth care.</p>
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="talktoexpert.php">Talk to expert</a></li>
            
            <li><a href="hospitals.php">Hospitals</a></li>
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
            <div class="login-panel panel panel-success" style="border: 0px; background-color:#e6e6e6;"> 
            <div class="imgcontainer">
                <img src="images\register.png" alt="Avatar" class="avatar">
            </div> 
               
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus REQUIRED>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus REQUIRED>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" REQUIRED>  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" style="background-color:dodgerblue;"type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center> 
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include("db_conection.php"); 
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name']; 
    $user_pass=$_POST['pass'];  
    $email=$_POST['email'];
  
    $check_email_query="select * from users WHERE email='$email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
    
    if(mysqli_num_rows($run_query) >0)  
    {  
        echo "<script> alert('Email $email is already exist in our database, Please try another one!')</script>";  
        exit();  
    }  
    $insert_user="insert into users (user_name,user_pass,email) VALUE ('$user_name','$user_pass','$email')";  
    if($run_query){
        echo "<script> alert('user registered successfully')</script>";
    }
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('login.php','_self')</script>";  
    }  
} 
?>  