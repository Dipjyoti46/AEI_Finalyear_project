<?php
session_start();
?>
<?php
        
        if(isset($_SESSION['u_id'])){
            include 'navbar_IN.php';
        }
        else{
            include 'navbar_UP.php';
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home_carousel.css">

    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
</head>
<body>
    
    <?php
        if(isset($_SESSION['u_id'])){
            include 'home_carousel.php';
        }
        else{
            include 'home_signin.php';
        }
        ?>     
          
    <div class="city-container-fluid">
        <div class="container-titl sticy-top">
            <h4 class="container-title-content">EXPLORE</h4>
        </div>
        <div class="city-row row">
            <a href="park-list.html"><div class="col-md-4 city-card-container">
                <div class="city-card">
                    <div class="card-body">
                        <h5 class="card-title city-card-title">KAMRUP</h5>
                        <a href="kamrup-park-list.php"><img src="img/rafael-kellermann-streit-24LIw3veBi4-unsplash.jpg" alt="city" class="city-img"></a>
                        <a href="kamrup-park-list.php" class="btn city-explore-btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div></a>
            <a href="park-list.html"><div class="col-md-4 city-card-container">
                <div class="city-card">
                    <div class="card-body">
                        <h5 class="card-title city-card-title"> SIVASAGAR</h5>
                        <a href="jorhat-park-list.php"><img src="img/rafael-kellermann-streit-24LIw3veBi4-unsplash.jpg" alt="city" class="city-img"></a>
                        <a href="jorhat-park-list.php" class="btn city-explore-btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div></a>
            <a href="park-list.html"><div class="col-md-4 city-card-container">
                <div class="city-card">
                    <div class="card-body">
                        <h5 class="card-title city-card-title">SONITPUR</h5>
                        <a href="sonitpur-park-list.php"><img src="img/rafael-kellermann-streit-24LIw3veBi4-unsplash.jpg" alt="city" class="city-img"></a>
                        <a href="sonitpur-park-list.php" class="btn city-explore-btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div></a>
        </div>
      <footer>
        <?php
        include 'include/footer.php';
        ?>
        </footer>
</body>

</html>
