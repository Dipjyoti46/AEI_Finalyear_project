<?php
session_start();
include 'common.php';

$p_name = $_POST['p_name'];
$c_fname = $_POST['c_fname'];
$c_lname = $_POST['c_lname'];
$b_date = $_POST['b_date'];
$kids= $_POST['kids'];
$adults = $_POST['adults'];
$seniors = $_POST['seniors'];
$t_u_id = $_SESSION['u_id'];
$t_members = $kids+$adults+$seniors;
$name=$c_fname.' '.$c_lname;
$ticketid="AEI6TH".rand(10000,500000);


include '../phpqrcode/qrlib.php';
$text = 'localhost/finalyearPRJ2022/view_ticket.php?ticketid='.$ticketid.'';

$path = 'img/';
$file = $path.uniqid().".png";
QRcode::png($text, $file, 'H', '20');

// Displaying the stored QR code from directory
echo "<center><img src='".$file."'></center>";

$sql_2="SELECT * FROM parks WHERE p_name='$p_name';";
// print_r($sql_2);

$result=mysqli_query($conn,$sql_2);

$parks=mysqli_fetch_assoc($result);
// print_r($parks);

$p_tprice=$parks['p_tprice'];

$kid_tprice=$p_tprice*$kids;
$adult_tprice=$p_tprice*$adults;
$senior_tprice=$p_tprice*$seniors;
$total_tprice=$kid_tprice+$adult_tprice+$senior_tprice;

// $sql=" UPDATE ticket SET kid_tprice='$kid_tprice' adult_tprice='$adult_tprice' senior_tprice='$senior_tprice' t_amount='$total_tprice'  WHERE t_u_id=$u_id ORDER BY t_id DESC LIMIT 1;";


$sql = "INSERT INTO `tickets`(ticketid,p_name,c_fname,c_lname,b_date,t_members,kids,adults,seniors,t_u_id,kid_tprice, adult_tprice, senior_tprice, t_amount,t_qr) VALUES('$ticketid','$p_name','$c_fname','$c_lname','$b_date','$t_members','$kids','$adults','$seniors','$t_u_id','$kid_tprice','$adult_tprice','$senior_tprice','$total_tprice','$file');";

// print_r($sql);


$result = mysqli_query($conn,$sql);
if ($result) {
    echo "success";
    header("Location:../ticket_pay.php");
}
else {
    echo "failure";
}





?>