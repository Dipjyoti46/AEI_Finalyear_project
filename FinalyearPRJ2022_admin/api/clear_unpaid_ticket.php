<?php

    include'common.php';

    $sql_1="DELETE FROM tickets WHERE t_action='not confirmed';";
    // print_r($sql_1);
    $result=mysqli_query($conn,$sql_1);
    if(!$result){
        echo "something went wrong";
        exit;
    }
    header ('location: ../admin_ticket.php');
    ?>
    