<?php
    session_start();
    
    include ('admin_nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_user.css">
    <!-- <link rel="stylesheet" href="css/admin_ticket.css"> -->
    <title>ADMIN-OTBSFP</title>
</head>
<body>
<a href="admin_home.php"><button class="btn">GO BACK</button></a>
<button class="btn btn-primary" style="margin-left:120px;" onclick="window.print()">PRINT TABLE</button>
<a href="api/clear_unpaid_ticket.php"><button class="btn btn-primary" style="margin-left:245px;" >CLEAR UPAID TICKETS</button></a>
<?php
        include 'api/admin_ticket.php'
    ?>

</body>
</html>