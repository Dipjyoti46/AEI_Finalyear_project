<?php
    session_start();
    include'api/common.php';
    $u_id=$_SESSION['u_id'];

    $sql_1="UPDATE tickets SET t_action='confirmed' WHERE t_u_id=$u_id ORDER BY t_id DESC LIMIT 1;";
    // print_r($sql_1);
    $result=mysqli_query($conn,$sql_1);
    if(!$result){
        echo "something went wrong";
        exit;
    }
    $tickets=mysqli_num_rows($result);
    if($tickets==0){
        echo "ticket not found";
        exit;
    }
    // print_r("$tickets");


    

?>