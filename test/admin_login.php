<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
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
  
<body>  

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
            <li><a href="admin_login.php">Admin Login</a></li>
        </ul>
    </nav>
    <div style="float:right;" class="fas fa-bars"></div>
</div>
</header>
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
            <div class="imgcontainer">
                <img src="images\login.png" alt="Avatar" class="avatar">
            </div>
                <div class="panel-body">  
                    <form role="form" method="post" action="admin_login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus REQUIRED >  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="" REQUIRED>  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" style="background-color:dodgerblue;" type="submit" value="login" name="admin_login" >  
                        </fieldset>  
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
  
if(isset($_POST['admin_login']))  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('view_users.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>  