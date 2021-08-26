<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
    <title>add hospitals</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="main.js"></script>

<style>  
    .table {  
        margin-top: 10px; 
     }  
    
     .container1{
        padding-left: 100px;
        padding-right: 100px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    @media (min-width:499px) and (max-width:899px){
        .container1{
        padding-left: 10px;
        padding-right: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        
    }
</style>  
</head>   
<body>  
<header>
    <div class="container1">
    <p class="logo" style="float: left;"><i class="fa fa-h-square" style="color:dodgerblue;"></i>ealth care.</p>
    <nav class="nav">
        <ul>
            <li><a href="view_users.php">view users</a></li>
            <li><a href="add_hospitals.php">Add hospitals</a></li>
            <li><a href="edit_hospitals.php">Edit hospitals</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out-alt"></i></a></li>
        </ul>
    </nav>
    <div style="float:right;" class="fas fa-bars"></div>
    </div>
</header>
<center>
<div class="container">
<div class="table">
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <caption style="color:dodgerblue;"><h1>Add Hospitals</h1></caption>
            <tr>
                <td><label>Hospital image:</label></td>
                <td><input type="file" name="image" REQUIRED /></td>
            </tr>

            <tr>
                <td><label>Hospital name:</label></td>
                <td><input type="text" name="hname" REQUIRED /></td>
            </tr>

            <tr>
                <td><label>Phone number:</label></td>
                <td><input type="number_format" name="phone" REQUIRED /></td>
            </tr>

            <tr>
                <td><label>Email:</label></td>
                <td><input type="Email" name="email" REQUIRED /></td>
            </tr>

            <tr>
                <td><label>Working days:</label></td>
                <td ><select name="fromday" style="padding:4px; border-radius:8px; border-color:black;">
                        <option value="" disabled selected>Select day</option>
                        <option>Sunday</option>
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                    </select>

                    <select name="today" style="padding:4px; border-radius:8px; border-color:black;">
                        <option value="" disabled selected>Select day</option>
                        <option>Sunday</option>
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label>Timings:</label></td>
                <td>From:<input type="time" name="fromtime" REQUIRED style="padding:0;"/> To:<input type="Time" name="totime" REQUIRED style="padding:0;"/></td>
            </tr>

            <tr>
                <td><label>Area and Street:</label></td>
                <td><textarea name="address" type="text"REQUIRED style=" border-radius:8px; border-color:black;"></textarea></td>
                 
            </tr>
            <tr>
                <td><label>Locality:</label></td>
                <td><input name="locality" type="text"REQUIRED /></td>
            </tr>
            <tr>
                <td><label>City/District/Town:</label></td>
                <td><input name="city" type="text"REQUIRED /></td>
            </tr>
            <tr>
                <td><label>Pin Code:</label></td>
                <td><input name="postal_code" type="text" REQUIRED /></td>
            </tr>
            <tr>
                <td><label>Landmark:</label></td>
                <td><input name="landmark" type="text" REQUIRED /></td>
            </tr>
            <tr>
                <td><label>State:</label></td>
                <td><input name="state" type="text" REQUIRED /></td>
            </tr>

            <tr>
                <td colspan="3" style="text-align:center;"><center style="color:red;">**Note: <textarea name="note" style=" border-radius:8px; border-color:black;"></textarea></center></td>
            </tr>

            <tr>
            <td colspan="2" style="text-align:center;"><button name="upload" style="background-color:#6CB4EE; width:90px;">upload</button></td>
            </tr>
        </table>
        
    </form>
</div>
</div>

</center>
</body>
</html>

<?php

include("db_conection.php");  
$msg="";
if(isset($_POST['upload'])){
  	$image = $_FILES['image']['name'];
  	$hname = $_POST['hname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $fromday = $_POST['fromday'];
    $today = $_POST['today'];
    $fromtime = $_POST['fromtime'];
    $totime = $_POST['totime'];
    $note = $_POST['note'];
    $address = $_POST['address'];
    $locality = $_POST['locality'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    $landmark = $_POST['landmark'];
    $state = $_POST['state'];
  	$target = "db_image/".basename($image);

  	$sql = "INSERT INTO hospitals (image, hname, phone,email,fromday,today, fromtime,totime,note,address,locality,city,postal_code,landmark,state) VALUES ('$image','$hname','$phone','$email','$fromday','$today','$fromtime','$totime','$note','$address','$locality','$city','$postal_code','$landmark','$state')";
  	
  	mysqli_query($dbcon, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "<script> alert('Details added successfully')</script>";
  	}else{
        echo "<script> alert('Failed to add details. Please Try again.')</script>";
  	}
  }
?>
