<?php
include("db_conection.php");
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
    exit();
}
$view_hospitals_query="select * from hospitals";
$run=mysqli_query($dbcon,$view_hospitals_query); 
  
while($row=mysqli_fetch_array($run))  
{   
    $image=$row[1];  
    $hname=$row[2];  
    $phone=$row[3];  
    $email=$row[4];  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospitals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="main.js"></script>

    <style>
        .hospitals{
            padding:60px;
        }
        img{
            padding: 15px;
            width: 400px;
            height: 250px;
            float: left;
            align-items: center;
            display: flex;
        }
        .text1{
            padding-left: 80px;
            width: 300px;
            height: 250px;
            float: left;
            align-items: center;
            font-size: medium;
            padding-top:45px;
        }
                    
        .adr{
            padding-left:100px;
            padding-top: 30px;
            width: 300px;
            height: 350px;
            float: left;
            align-items: center;
            font-size: medium;
        }

        @media (min-width:900px) and (max-width:1200px){
            h3{
                font-size:20px;
            }
            h6{
                font-size:14px;
            }
            .hospitals{
                padding:60px;
            }
            img{
                width: 350px;
                height: 250px;
                float: left;
                align-items: center;
                display: flex;
            }
            .text1{
                padding-left: 30px;
                width: 250px;
                height: 250px;
                float: left;
                align-items: center;
                font-size: medium;
                padding-top:45px;
            }                        
            .adr{
                padding-left:50px;
                padding-top: 30px;
                width: 250px;
                height: 350px;
                float: left;
                align-items: center;
                font-size: 16px;
            }
        }
        @media (min-width:499px) and (max-width:899px){
            
            h3{
                font-size:17px;
            }
            h6{
                font-size:13px;
            }
            .hospitals{
                padding:10px;
            }
            img{
                width: 230px;
                height: 230px;
                float: left;
                align-items: center;
                display: flex;
            }
            .text1{
                padding-left: 10px;
                width: 230px;
                height: 230px;
                float: left;
                align-items: center;
                font-size: 14px;
                padding-top:45px;
            }
                        
            .adr{
                padding-left:10px;
                padding-top: 15px;
                width: 250px;
                height: 230px;
                float: left;
                align-items: center;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<header>
<div class="container">
    <p class="logo"><i class="fa fa-h-square" style="color:dodgerblue;"></i>ealth care.</p>
    <nav class="nav">
        <ul>
            <li><a href="welcome.php">Home</a></li>
            <li><a href="welcome.php">About</a></li>
            
            <li><a href="talktoexpert.php">Talk to expert</a></li>
            <li><a href="hospitals.php">Hospitals</a></li>
            <li><?php  
                echo $_SESSION['email'];  
                ?>  
            </li>
            <li><a href="logout.php"><i class="fa fa-sign-out-alt"></i></a></li>
        </ul>
    </nav>
    <div style="float:right;" class="fas fa-bars"></div>
</div>
</header>
<section class="hospitals">
    <div class="container" style="padding-top: 40px;" >
    <div class="row" style="background-color:#f0f8ff;">
    
        <?php
            
            $view_hospitals_query="select * from hospitals";
            $run=mysqli_query($dbcon,$view_hospitals_query); 
            
            while($row=mysqli_fetch_array($run))  
            {   
                $image=$row[1];  
                $hname=$row[2];  
                $phone=$row[3];  
                $email=$row[4];  
                $fromday=$row[5];
                $today=$row[6]; 
                $fromtime=$row[7]; 
                $totime=$row[8]; 
                $note=$row[9];
                $address=$row[10]; 
                $locality=$row[11]; 
                $city=$row[12]; 
                $postal_code=$row[13]; 
                $landmark=$row[14]; 
                $state=$row[15]; 
        ?>
    
        <div class="himage">
        <?php echo "<img src='db_image/".$row['image']." '>";  ?>
        </div>
        <div class="text1">
            <h3 style="color:dodgerblue;"><i class="fa fa-hospital" aria-hidden="true"></i> <?php echo $hname;  ?></h3>
            <div class="contact-info">
                <i class="fa fa-phone"></i>   <?php echo $phone;  ?><br>
                <i class="fa fa-envelope"></i>   <a href="#"><?php echo $email;  ?></a><br>
                <i class="fas fa-clock"></i>   <?php echo date('H:i', strtotime($fromtime)); ?> - <?php echo date('H:i', strtotime($totime)); ?><br>
                <i class="fa fa-briefcase"></i>  <?php echo $fromday; ?> - <?php echo $today; ?><br>
                <h6 style="color:#DC143C;"><?php echo $note; ?></h6>
            </div>
        </div>
        <div class="adr">
        <h3 style="color:dodgerblue;"><i class="fa fa-address-card" aria-hidden="true"></i> Address:</h4>
            <address>
                 <?php echo $address; ?><br> 
                 <?php echo $locality; ?> <br> 
                 <?php echo $city; ?> <br> 
                 <?php echo $landmark; ?> <br> 
                 <?php echo $postal_code; ?> <br> 
                 <?php echo $state; ?>   
            </address>
        </div>
        <?php } ?>
        
    </div>
</div>
</section>


</body>
</html>