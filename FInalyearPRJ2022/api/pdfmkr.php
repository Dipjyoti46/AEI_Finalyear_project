<?php
include '../api/common.php';
$t_id=$_GET['t_id'];

    $sql_1="SELECT * FROM `tickets` WHERE t_id=$t_id"; //and t_action='confirmed'

    $result = mysqli_query($conn,$sql_1);


    $tickets=mysqli_fetch_assoc($result);
    
    $t_id = $tickets['t_id'];
    $p_name = $tickets['p_name'];
    $c_fname = $tickets['c_fname'];
    $c_lname = $tickets['c_lname'];
    $b_date = $tickets['b_date'];
    $kids= $tickets['kids'];
    $adults = $tickets['adults'];
    $seniors = $tickets['seniors'];
    $t_members =$tickets['t_members'];
    $t_u_id = $tickets['t_u_id'];
    $kid_tprice = $tickets['kid_tprice'];
    $adult_tprice = $tickets['adult_tprice'];
    $senior_tprice = $tickets['senior_tprice'];
    $t_amount = $tickets['t_amount'];
    $ticketid=$tickets['ticketid'];
    $file= $tickets['t_qr'];
    $name=$c_fname.' '.$c_lname;
    ?>
<?php

require_once '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('
<div class="log-name">
<h3>Online Ticket Booking System for Park</h3>
<p>Assam Engineering Institute, Chandmari</p>
</div>
<p>Park: '.$p_name.'</p>
<p>Name:'.$name.'</p>
<p>Date: '.$b_date.'</p>
<p>Ticket ID: '.$ticketid.'</p>

<table  border="10" cellpadding="1" cellspacing="1" style="width: 500px; border: 1px solid black; border-collapse: collapse;">
<tr style="
border: 1px solid black;">
        <td style="
border: 1px solid black;"><strong>Age</strong></td>
        <td style="
border: 1px solid black;"><strong>Number of members</strong></td>
        <td style="
border: 1px solid black;"><strong>Total Amount(&#x20B9;)</strong></td>
    </tr>
    <tr style="
border: 1px solid black;">
        <td style="
border: 1px solid black;">Kids</td>
        <td style="
border: 1px solid black;">0'.$kids.'</td>
        <td style="
border: 1px solid black;">&#x20B9;'.$kid_tprice.'</td>
    </tr>
    <tr style="
border: 1px solid black;">
        <td style="
border: 1px solid black;">Adults</td>
        <td style="
border: 1px solid black;">0'.$adults.'</td>
        <td style="
border: 1px solid black;">&#x20B9; '.$adult_tprice.'</td>
    </tr>
    <tr style="
border: 1px solid black;">
        <td style="
border: 1px solid black;">Seniors</td>
        <td style="
border: 1px solid black;">0'.$seniors.'</td>
        <td style="
border: 1px solid black;">&#x20B9;'.$senior_tprice.'</td>
    </tr>
    
    <tr style="
border: 1px solid black;">
        <td style="
border: 1px solid black;"><strong>Totals</strong></td>
        <td style="
border: 1px solid black;"><strong>0'.$t_members.'</strong></td>
        <td style="
border: 1px solid black;"><strong>&#x20B9;'.$t_amount.'</strong></td>
    </tr>
</table>
<img src='.$file.' alt="qr code">
<style media="print">
img{
    width:200px;
    heigth:200px;
    margin-left:100px;
    margin-rigth:100px;

}
</style>

');

$mpdf->Output();
?>
