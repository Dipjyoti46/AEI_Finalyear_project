<?php
include 'api/ticket_pay_php.php';
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ticket_payment.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    
</head>
<body>
    <?php
        include 'include/ticket_payment.php';
    ?>

</body>
</html>