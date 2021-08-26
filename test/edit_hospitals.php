<html>  
<head lang="en">  
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
    <title>edithospitals</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="main.js"></script>
 
<style>  
     .container1{
        padding-left: 100px;
        padding-right: 100px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    img{
        width: 200px;
        height: 250px;
    }
    .inner-table tr td{
        float:left;
    }
    
    .container1 h1{
        text-align:center;
    }
    @media (min-width:992px) and (max-width:1200px){
        .container1{
        padding-left: 10px;
        padding-right: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        img{
            width: 150px;
            height: 200px;
        }
        th{
            font-size:15px;
        }
        td{
            font-size:15px;
        }
        .container1 h1{
                text-align: center;
        }
    }
    @media (min-width:768px) and (max-width:991px){
        .container1{
            padding-left: 10px;
            padding-right: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        img{
            width: 150px;
            height: 200px;
        }
        th{
            font-size:15px;
        }
        td{
            font-size:15px;
        }
        
        .container1 h1{
            text-align:center;
        }
    }
    @media (min-width: 600px) and (max-width: 767px){
        .container1{
            padding-left: 10px;
            padding-right: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        img{
            width: 150px;
            height: 200px;
        }
        th{
            font-size:15px;
        }
        td{
            font-size:15px;
        }
        
        .container1 h1{
            text-align:center;
        }
    }
    @media (max-width:600px){
        .container1{
            padding-left: 10px;
            padding-right: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        img{
            width: 130px;
            height: 130px;
        }
        th{
            font-size:13px;
        }
        td{
            font-size:13px;
        }       
        .container1 h1{
            text-align:center;
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

<div class="container1">
<div class="table-scrol"> 
<h1>All Hospitals</h1> 
    <div class="table-responsive">    
    <div style="overflow-x:auto">
    <table class="table table-bordered table-hover table-striped"> 
   
        <thead> 
        <tr>  
            <th>Hospital Id</th>
            <th>Hospital image</th>  
            <th>Hospital Name</th>  
            <th>Hospital phone number</th>  
            <th>Hospital email</th>
            <th>Working hours and time</th>
            <th>Address</th>  
            <th>Delete Hospital</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("db_conection.php");  
        $view_hospitals_query="select * from hospitals"; 
        $run=mysqli_query($dbcon,$view_hospitals_query);
    
        while($row=mysqli_fetch_array($run))
        {   
            $hospital_id=$row[0];
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
        
        <tr>  
            <td><?php echo $hospital_id; ?></td>
            <td><?php echo "<img src='db_image/".$row['image']." '>";  ?></td>  
            <td><?php echo $hname;  ?></td>  
            <td><?php echo $phone;  ?></td>  
            <td><?php echo $email;  ?></td> 
            <td><table>
                    <tr><td><?php echo $fromday; ?> - <?php echo $today; ?> </td></tr>
                    <tr><td><?php echo date('H:i', strtotime($fromtime));  ?>AM - <?php echo date('H:i', strtotime($totime));  ?>PM</td></tr>
                    <tr><td style="color:red;"><?php echo $note; ?></td></tr>
                </table>
            </td>

            <td><table class="inner-table">
                    <tr>
                        <td><label>Area:</label></td>
                        <td><?php echo $address;  ?></td>
                    </tr>
                    <tr>
                        <td><label>Locality:</label></td>
                        <td><?php echo $locality;  ?></td>
                    </tr>
                    <tr>
                        <td><label>City:</label></td>
                        <td><?php echo $city;  ?></td>
                    </tr>
                    <tr>
                        <td><label>Postal code:</label></td>
                        <td><?php echo $postal_code;  ?></td>
                    </tr>
                    <tr>
                        <td><label>Landmark:</label></td>
                        <td><?php echo $landmark;  ?></td>
                    </tr>
                    <tr>
                        <td><label>State:</label></td>
                        <td><?php echo $state;  ?></td>
                    </tr>
                </table>           
            </td>
            <td><a href="delete_hospitals.php?del=<?php echo $hospital_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
    <div>
        </div>
        </div>  
</div>  
</body>  
  
</html>  