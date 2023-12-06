<?php
    session_start();
    
    include ('admin_nav.php');
    
    
                        include 'api/common.php';
                        $sql_1="SELECT * FROM `parks`;";
                        $result=mysqli_query($conn,$sql_1);
                        $park=mysqli_num_rows($result);
                        // echo "TOTAL NUMBER OF PARKS :$park"; 

                        $sql="SELECT * FROM `users`;";
                              $result=mysqli_query($conn,$sql);
                              $users=mysqli_num_rows($result);
                            //   echo "TOTAL NUMBER OF USER :$users"; 
                        $sql="SELECT * FROM `tickets`;";
                              $result=mysqli_query($conn,$sql);
                              $tickets=mysqli_num_rows($result);
                            //   echo "TOTAL NUMBER OF USER :$users"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_home.css">
    <title>ADMIN-OTBSFP</title>
</head>
<body>
<div class="container_fluid">
    <div class="row">
        <div class="card card-content" style="width: 18rem;">
            <img src="park_icon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Total number of parks available</p>
            <h3><?php echo "$park"?></h3>
            </div>
        </div>
    <div class="card card-content" style="width: 18rem;">
        <img src="user.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Total number of users registered</p>
            <h3><?php echo "$users"?></h3>
        </div>
    </div>
    <div class="card card-content" style="width: 18rem;">
        <img src="ticket.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Total number of ticket confirmed</p>
            <h3><?php echo "$tickets"?></h3>
          </div>
        </div>
    </div>
</div>

</body>
</html>