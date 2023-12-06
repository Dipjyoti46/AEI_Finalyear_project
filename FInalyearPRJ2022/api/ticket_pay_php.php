<?php
    session_start();
    include'common.php';
    $u_id=$_SESSION['u_id'];

    $sql_1="SELECT * FROM tickets WHERE t_u_id=$u_id ORDER BY t_id DESC LIMIT 1;";
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


    $tickets=mysqli_fetch_assoc($result);
    

    $p_name = $tickets['p_name'];
    $c_fname = $tickets['c_fname'];
    $c_lname = $tickets['c_lname'];
    $b_date = $tickets['b_date'];
    $kids= $tickets['kids'];
    $adults = $tickets['adults'];
    $seniors = $tickets['seniors'];
    $t_u_id = $tickets['t_u_id'];
    $kid_tprice = $tickets['kid_tprice'];
    $adult_tprice = $tickets['adult_tprice'];
    $senior_tprice = $tickets['senior_tprice'];
    $total_tprice = $tickets['t_amount'];
    $t_members =$tickets['t_members'];


    
    $sql_2="SELECT * FROM parks WHERE p_name='$p_name';";
    // print_r($sql_2);

    $result=mysqli_query($conn,$sql_2);

    $parks=mysqli_fetch_assoc($result);
    // print_r($parks);

    $p_id=$parks['p_id'];
    $p_name=$parks['p_name'];
    $p_description=$parks['p_description'];
    $p_tprice=$parks['p_tprice'];
    $pl_district=$parks['pl_district'];
    $pl_city=$parks['pl_city'];
    $pl_map=$parks['pl_map'];
    $p_img=$parks['p_img'];


?>