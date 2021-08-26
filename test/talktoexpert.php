<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
    exit();
}
?>
<html lang="en">
<head>
    <title>talktoexpert</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        button{
            float:center;
            margin-top: 400px;
            width: 150px;
            height:50px;
            margin-left: 150px;
        }
        button a{
            text-decoration: none;
        }
        img {
            margin-top:150px;
        }
        
        @media (min-width:900px) and (max-width:1200px){
            img{
                width:60%;
                height:80%;
                margin-top: 20%;
            }
            button{
                font-size: 23px;
                float:center;
                margin-top: 350px;
                width: 130px;
                height:50px;
                margin-left: 50px;
            }
        }

        @media (min-width:499px) and (max-width:899px){
            img{
                width:380px;
                height:450px;
                margin-top: 150px;
            }
            button{
                font-size: 18px;
                float:center;
                margin-top: 350px;
                width: 130px;
                height:50px;
                margin-left: 25px;
            }
        }
        
        @media (min-width: 300px) and (max-width: 500px) {
            img{
                width:320px;
                height:450px;
                margin-top: 150px;
            }
            button{
                font-size: 17px;
                float:center;
                margin-top: 350px;
                width: 130px;
                height:50px;
                margin-left: 25px;
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
    <div class="fas fa-bars"></div>
</div>
</header>
<div class="container">
<div class="row">
<img src="images\chatbot.gif";  alt="welcome picture">

<button ><a href="http://127.0.0.1:5000/">Chat now</a></button>

</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="main.js"></script>

</body>
</html>
