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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/park-profile.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/common.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    
</head>
<body>

<?php
    
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="finalyearprj";
    $conn=new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
     die("Connection failed: ".$conn->connect_error);
 }

    $p_name=$_GET["p_name"];
      
    $sql = "SELECT * FROM parks WHERE p_name='$p_name'";
    
    $result=mysqli_query($conn,$sql);
    
    
    $parks=mysqli_fetch_assoc($result);
        $p_id=$parks['p_id'];
        $p_name=$parks['p_name'];
        $p_description=$parks['p_description'];
        $p_tprice=$parks['p_tprice'];
        $pl_district=$parks['pl_district'];
        $pl_city=$parks['pl_city'];
        $pl_map=$parks['pl_map'];
        $p_img=$parks['p_img'];
        $p_img02=$parks['p_img02'];
        $p_img03=$parks['p_img03'];
        $p_img04=$parks['p_img04'];
        $p_img05=$parks['p_img05'];
        $p_img06=$parks['p_img06'];

        // carousel
        echo "<div class='container-fluid carousel'>" ;
        echo "<div class='row'> ";
        echo "  <div class='col-md-12'> ";
        echo "    <div class='carousel slide' id='carousel-554496'>"; 
        echo "      <ol class='carousel-indicators'> ";
        echo "        <li data-slide-to='0' data-target='#carousel-554496'> </li> ";
        echo "        <li data-slide-to='1' data-target='#carousel-554496'> </li> ";
        echo "        <li data-slide-to='2' data-target='#carousel-554496'> </li> ";
        echo "        <li data-slide-to='3' data-target='#carousel-554496'> </li> ";
        echo "        <li data-slide-to='4' data-target='#carousel-554496' class='active'> </li> ";
        echo "      </ol> ";
        echo "      <div class='carousel-inner'> ";
        echo "        <div class='carousel-item'> ";
        echo "          <img class='d-block w-100' alt='Carousel Bootstrap First' src='img/",$p_img02,"' /> ";
        echo "        </div> ";
        echo "      <div class='carousel-inner'> ";
        echo "        <div class='carousel-item'> ";
        echo "          <img class='d-block w-100'  alt='Carousel Bootstrap Second' src='img/",$p_img03,"' /> ";
        echo "        </div> ";
        echo "      <div class='carousel-inner'> ";
        echo "        <div class='carousel-item'> ";
        echo "          <img class='d-block w-100' alt='Carousel Bootstrap Third' src='img/",$p_img04,"' /> ";
        echo "        </div> ";
        echo "        <div class='carousel-item'> ";
        echo "          <img class='d-block w-100' alt='Carousel Bootstrap fourth' src='img/",$p_img05,"'  />";
        echo "        </div> ";
        echo "        <div class='carousel-item active'> ";
        echo "          <img class='d-block w-100' alt='Carousel Bootstrap Fifth' src='img/",$p_img06,"' /> ";
        echo "        </div> ";
        echo "      </div> ";
        echo "      <a class='carousel-control-prev' href='#carousel-554496' data-slide='prev'><span class='carousel-control-prev-icon'></span> <span class='sr-only'>Previous</span></a> ";
        echo "      <a class='carousel-control-next' href='#carousel-554496' data-slide='next'><span class='carousel-control-next-icon'></span> <span class='sr-only'>Next</span></a> ";
        echo "    </div> ";
        echo "  </div> ";
        echo "</div>";
        echo "</div>";

        // description
        echo "<div class='container-park-info'>";
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
        echo "<a href='".$parks['pl_map']."' target='_blank' class='btn btn-primary btn-lg btn-map'>Go to map</a>";
        echo "<a href='booking_ui.php?p_name=".$parks['p_name']."' class='btn btn-primary btn-lg btn-book'>Book Now</a>";
        echo "<a href='park_profile.php?p_name=".$parks['p_name']."' class='btn btn-primary btn-lg btn-wish'>View Park</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    
?>
    
    
        <?php
        include 'include/footer.php';
        ?>
        
</body>

</html>
    
   
    








