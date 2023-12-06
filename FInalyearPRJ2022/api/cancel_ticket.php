<?php
    session_start();
    include'common.php';
    $u_id=$_SESSION['u_id'];

    $sql_1="DELETE FROM tickets WHERE t_u_id=$u_id ORDER BY t_id DESC LIMIT 1;";
    // print_r($sql_1);
    $result=mysqli_query($conn,$sql_1);
    if(!$result){
        echo "something went wrong";
        exit;
    }
    header ('location: ../result/cancel_ticket.php');
    ?>
    