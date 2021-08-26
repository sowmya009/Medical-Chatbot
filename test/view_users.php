<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>View Users</title> 
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
    .table-scrol{
        width:100%;
    }
    
    @media (min-width:992px) and (max-width:1200px){
        .container1{
        padding-left: 20px;
        padding-right: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
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
        .container1 h1{
            text-align: center;
        }
    }
    @media (min-width: 600px) and (max-width: 767px){
        .container1{
        padding-left: 0px;
        padding-right: 0px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        .container1 h1{
            text-align: center;
        }
    }
    @media (max-width:600px) {
        .container1{
        padding-left: 10px;
        padding-right: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        } 
        .container1 h1{
            text-align: center;
        }
        th{
            font-size:13px;
        }
        td{
            font-size: 13px;
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
            <li><a href="#">view users</a></li>
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
<h1>All Users</h1>
    <div class="table-responsive" >   
    <div style="overflow-x:auto">     
    <table class="table table-bordered table-hover table-striped" >      
        <thead> 
        <tr>    
            <th>User Id</th>  
            <th>User Name</th>  
            <th>User Pass</th>  
            <th>User E-mail</th>  
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("db_conection.php");  
        $view_users_query="select * from users"; 
        $run=mysqli_query($dbcon,$view_users_query);
  
        while($row=mysqli_fetch_array($run))
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_pass=$row[2];  
            $email=$row[3];  
  
        ?>  
  
        <tr>  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_pass;  ?></td>  
            <td><?php echo $email;  ?></td>  
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
    </div>
    </div>
</div>  
</div>  
</body>  
  
</html>  