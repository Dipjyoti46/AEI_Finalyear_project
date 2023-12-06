<?php
      
    $sql = 'SELECT * FROM parks WHERE p_name=$p_name';
    $result=mysql_query($conn, $sql);
    
    
    $parks=mysqli_fetch_assoc($result);
        $p_id=$parks['p_id'];
        $p_name=$parks['p_name'];
        $p_description=$parks['p_description'];
        $p_tprice=$parks['p_tprice'];
        $pl_district=$parks['pl_district'];
        $pl_city=$parks['pl_city'];
        $pl_map=$parks['pl_map'];
        $p_img=$parks['p_img'];
    
    echo "<div class='slider-thumbs'>";
    echo "<div class='overlay-carsoule'>";
    echo "<div class='carsoule-thumbs'>";
    echo "<div class='arrow-top arrow-thumbs' data-value='0'><img src='img/' alt='UP'></div>";
    echo "<div class='thumbs'>";
    echo "<img src='img/",$p_img02,"' class='active' alt='Thumbs' data-value='0'><img src='img/'>";
    echo "<img src='img/",$p_img03,"' alt='Thumbs' data-value='1' id='1img'>";
    echo "<img src='img/",$p_img04,"' alt='Thumbs' data-value='2' id='2img'>";
    echo "<img src='img/",$p_img05," alt='Thumbs' data-value='3' id='3img'>";
    echo "<img src='img/",$p_img06,"' alt='Thumbs' data-value='4' id='4img'>";
    echo "</div>";
    echo "<div class='arrow-down arrow-thumbs' data-value='1'><img src='img/' alt='DOWN'></div>";
    echo "</div>";
    echo "<div class='carsoule-items'>";
    echo "<div class='wrapper-items'>";
    echo "<div class='slide-item slide-item-active' data-value='0' id='0'>";
    echo "<img src='img/",$p_img02,"' alt='Item1'>";
    echo "</div>";
    echo "<div class='slide-item' data-value='1' id='1'>"; 
    echo "<img src='img/",$p_img03,"' alt='Item2'>";
    echo "</div>";
    echo "<div class='slide-item' data-value='2' id='2'>";
    echo "<img src='img/",$p_img04,"' alt='Item3'>";
    echo "</div>";
    echo "<div class='slide-item' data-value='3' id='3'>";
    echo "<img src='img/",$p_img05,"' alt='Item4'>";
    echo "</div>";
    echo "<div class='slide-item' data-value='4' id='4'>";
    echo "<img src='img/",$p_img06,"' alt='Item5'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "<div class='park_details'>";
    echo "<div class='park_description'>";
    echo "<div class='description'>";
    echo "<div class='description-header'>";
    echo "<h2>$p_name</h2>";
    echo "</div>";

    echo "<p>$p_description</p>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row-md-4 park_loc_pri'>";
    echo "<div class='ticket-price'>";
    echo "<ul>";
    echo "<li>Ticket prices</li>";
    echo "<li>Children :$p_tprice</li>";
    echo "<li>Adults   :$p_tprice </li>";
    echo "<li>Old      :$p_tprice </li>";
    echo "</ul>";
    echo "</div>";
    echo "<div class='park-location'>";
    echo "<ul>";
    echo "<li>State : Assam </li>";
    echo "<li>District :$pl_district</li>";
    echo "<li>City:$pl_city </li>";
    echo "</ul>";
    
    echo "</div>";
    echo "<div class='park-btn'>";
    echo "<a href='booking_form.php' class='btn-book'>BOOK NOW!</a>";
    echo "<a href='#' class='btn-wish'>ADD TO Wishlist</a>";
    echo "<a href='".$parks['pl_map']."' class='btn-map'>Google Map</a>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
    
    ?>