<?php

    include 'api/common.php';
    $sql_1="SELECT * FROM `parks`;";
    $result=mysqli_query($conn,$sql_1);
    if(!$result){
        echo "Something went wrong!";
        exit;
    }
    $park=mysqli_num_rows($result);
    if($park==0){
        echo "No parks found!";
        exit;
    }
    for($i=0;$i<$park;$i++){
        $parks=mysqli_fetch_assoc($result);
    
        $p_id=$parks['p_id'];
        $p_name=$parks['p_name'];
        $p_description=$parks['p_description'];
        $p_tprice=$parks['p_tprice'];
        $pl_district=$parks['pl_district'];
        $pl_city=$parks['pl_city'];
        $pl_map=$parks['pl_map'];
        $p_img=$parks['p_img'];
   

    
        
        echo "<div class='container-park-info'>";
        echo "<div class='container-image'>";
        echo "<img src='img/",$p_img,"' width='250px' height='250px'alt='' class='park-list-img'>";
        echo "</div>";
        echo "<div class='park-info'>";
        echo "<div class='park-details'>";
        echo "<h3 id='p_name'>".$parks['p_name']."</h3>";
        echo "<p>".$parks['p_description']."</p>";
        echo "<strong><p style='color:black'>Location: ".$parks['pl_district']." ".$parks['pl_city']."</p></strong>";
        echo "<strong><p style='color:black'>Ticket Price: Rs".$parks['p_tprice']."</p></strong>";
        echo "</div>";
        echo "<div class='ratings'>";
        echo "</div>";
        echo "</div>";
        echo "<div class='container-buttons'>";
        echo "<div class='container-quick-btn'>";
        echo "<a href='booking_ui.php?p_name=".$parks['p_name']."' class='btn btn-primary btn-lg btn-book'>Book Now</a>";
        echo "<a href='".$parks['pl_map']."' target='_blank' class='btn btn-primary btn-lg btn-map'>Go to map</a>";
        echo "<a href='park_profile.php?p_name=".$parks['p_name']."' class='btn btn-primary btn-lg btn-wish'>View Park</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    };



?>
