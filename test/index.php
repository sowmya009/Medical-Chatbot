<?php
    include("db_conection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
<div class="container">
    <p class="logo"><i class="fa fa-h-square" style="color:dodgerblue;"></i>ealth care.</p>
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="talktoexpert.php">Talk to expert</a></li>
            <li><a href="hospitals.php">Hospitals</a></li>
            <li><a href="registration.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="fas fa-bars"></div>
</div>
</header>

<section class="home" id="home">
<div class="container">
    <div class="row">
        <img class="home-img" src="images/home.jpg" data-aos="zoom-in" >
        <div class="home-content" data-aos="fade-left">
            <h1><span>stay</span> safe, <span>stay</span> healthy.</h1>
            <h3>caring for you.</h3>
            <a href="#about"><button class="button">learn more</button></a>
        </div>
    </div>
</div>
</section>
<section class="about" id="about">
    <div class="container" >
    <div class="row">
        <img class="image1" data-aos="zoom-in" src="images/about.jpg">
        <div class="about-text" data-aos="fade-up">
            <h1 >Welcome to our <i class="fa fa-h-square" style="color:dodgerblue;"></i>ealth center</h1>
                <p style="font-size: 20px;">Waiting in long queues for a doctor’s appointment??
                 Fed up with paying a lump sum amount for just a bit of advice or assistance?? 
                Need a Personal Health Trainer too?? We bring to you Health Bot!! Tell us the symptoms, 
                we bring you the solution.</p>
        </div>
    </div>
    </div>
</section>

<section class="hospitals" id="hospitals" style="background-color: white;">
<div class="container" >
    <h1 >Our Hospitals</h1>
    <div class="hosp" style="background-color:whitesmoke;">
        <a href="hospitals.php"><img src="images/Hospital1.jpg"></a>
        <div class="hosp-details">
            <h1>General Hospital</h1>
            <p><i class="fa fa-phone"></i> 010-020-0120</p>
            <p><i class="fa fa-envelope"></i> <a href="#">general@company.com</a></p>
        </div>
    </div>
    <div class="hosp" style="background-color:whitesmoke;">
        <a href="hospitals.php"><img src="images/h2.png"></a>
        <div class="hosp-details">
            <h1>General Hospital</h1>
            <p><i class="fa fa-phone"></i> 010-020-0120</p>
            <p><i class="fa fa-envelope"></i> <a href="#">general@company.com</a></p>
        </div>
    </div>
    <div class="hosp" style="background-color:whitesmoke;">
        <a href="hospitals.php"><img src="images/h3.png"></a>
        <div class="hosp-details">
            <h1>General Hospital</h1>
            <p><i class="fa fa-phone"></i> 010-020-0120</p>
            <p><i class="fa fa-envelope"></i> <a href="#">general@company.com</a></p>
        </div>
    </div>
<div class="viewhosp"><a href="hospitals.php"><h3>View more hospitals....</h3></a></div>
</div>
</section>

<section class="footer">
    <div class="container" >
        <h1 style="text-align:center;"><i class="fa fa-h-square" style="color: dodgerblue;"></i>ealth Center</h2>
        <p>Make your living easy with our doctor. We care for you.
            Don't make your health condition any worse. Use our website and make your life easier.
            This website is created to help people make lives easier by using the intelligent chatbot for their queries without wasting a single penny.
            We have provided some hospitals which are best in society and the contact details are also provided. Just login to our website and enjoy the benefits.
        </p>
        <p style="text-align:center;">For queries, Contact +91 9874563210  or Mail to: healthcare.chatbot2@gmail.com</p> 
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="main.js"></script>
<script>

AOS.init({
    duration:1000,
    delay:300
});

</script>
</body>
</html>