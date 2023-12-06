<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="finalyearprj";
 $conn=new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
     die("Connection failed: ".$conn->connect_error);
 }
    $p_name=$_POST['p_name'];
    $p_description=$_POST['p_description'];
    $p_tprice=$_POST['p_tprice'];
    $pl_district=$_POST['pl_district'];
    $pl_city=$_POST['pl_city'];
    $pl_map=$_POST['pl_map'];
    $p_img=$_POST['p_img'];
    $p_img02=$_POST['p_img02'];
    $p_img03=$_POST['p_img03'];
    $p_img04=$_POST['p_img04'];
    $p_img05=$_POST['p_img05'];
    $p_img06=$_POST['p_img06'];

    $sql="INSERT INTO `parks`(p_name,p_description, p_tprice, pl_district, pl_city, pl_map, p_img, p_img02, p_img03, p_img04, p_img05, p_img06) VALUES ('$p_name','$p_description','$p_tprice','$pl_district','$pl_city','$pl_map','$p_img','$p_img02','$p_img03','$p_img04','$p_img05','$p_img06');";

    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "Something went wrong!";
        exit;
    }
    echo "Park added successfully!";
    header("Location: ../admin_park.php");
    exit;
?>

