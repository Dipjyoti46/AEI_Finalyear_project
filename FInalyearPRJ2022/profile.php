<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/common.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    
</head>
<body>
<div class="header sticky-top">
        <?php
        if(isset($_SESSION['u_id'])){
            include 'navbar_IN.php';
        }
        else{
            include 'navbar_UP.php';
        }
        ?>
        
        
        </div>
<div class="profile">
    <div class="col">
            <div class="profile-content">
            <div class="profile-picture-container">
                <div class="profile-backcover-content">
                    
                        <div class="card-body">
                            <div class="profile-picture">
                                <img src="img/<?php echo $_SESSION['dp'] ?>" alt="profile picture">

                            </div>
                            <div class="profile-name">
                                <h4>
                                    <?php
                                        echo $_SESSION['firstname']." ".$_SESSION['lastname'];
                                        ?>
                                </h4>
                            </div>
                            <!-- <div class="profile-button">
                                <a href="editprofile.php" class="btn btn-primary">Edit Profile</a>
                            </div> -->
                        </div>
                    
                </div>
            </div>
            <div class="profile-subtitle-container"> 
                
                <div class="profile-break-line"></div>
                <a class="profile-subtitle ticket-booked" href="ticket.php">Your Ticket</a>
                
                <div class="profile-break-line"></div>
                <a  class="profile-subtitle user-info" href="account_info.php">Account Info</a>
               
               <div class="profile-break-line"></div>
                <a class="profile-subtitle user-info" href="api/log_out.php">Log Out</a>
                
            </div>
                
                
                
            </div>
        </div>
</div>                            
<?php
        include 'include/footer.php';
?>
                
</body>

</html>
