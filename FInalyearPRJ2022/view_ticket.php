<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ticket.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
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
$ticketid=$_GET["ticketid"];




    $sql_1="SELECT * FROM `tickets` WHERE ticketid='$ticketid';"; //and t_action='confirmed'
    

    $result = mysqli_query($conn,$sql_1);
    if(!$result){
        echo "something went wrong";
        exit;
    }
    $ticket=mysqli_num_rows($result);
    if($ticket==0){
        echo "<center>NO TICKET BOOKED</center>";
        exit;
    };
    
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
    $file= $tickets['t_qr'];
    $ticketid=$tickets['ticketid'];
    $name=$c_fname.' '.$c_lname;
    
          echo "<div class='ticket-container col-9'>";
          echo "            <div class='ticket-qr'>";
          echo "              <img  height='180px' width='180px'; src='api/",$file,"'>";
          echo "              <p>Date: ",$b_date,"</p>";
          echo "              <p>Ticket ID: ",$ticketid,"</p>";
          echo "            </div>";
          echo "      <div class='ticket-details'>";
          echo "          <div class='office-details'>";
          echo "              <h3>Online Ticket Booking System for Park</h3>";
          echo "              <p>Assam Engineering Institute, Chandmari</p>";
          echo "          </div>";
          echo "            <hr>";
          echo "          <div class='user-details'>";
          echo "              <p>Park: ",$p_name,"</p>";
          echo "              <p>Name:",$name,"</p>";
          echo "          </div>";
          echo "          <div class='member-count'>";
          echo "              <table class='ticket_data'>";
          echo "                  <tr>";
          echo "                      <td>Kids</td>";
          echo "                      <td>0",$kids,"</td>";
          echo "                      <td>&#x20B9;",$kid_tprice,"</td>";
          echo "                  </tr>";
          echo "                  <tr>";
          echo "                      <td>Adults</td>";
          echo "                      <td>0",$adults,"</td>";
          echo "                      <td>&#x20B9; ",$adult_tprice,"</td>";
          echo "                  </tr>";
          echo "                  <tr>";
          echo "                      <td>Seniors</td>";
          echo "                      <td>0",$seniors,"</td>";
          echo "                      <td>&#x20B9;",$senior_tprice,"</td>";
          echo "                  </tr>";
          echo "                  <tr>";
          echo "                      <th>Totals</th>";
          echo "                      <th>0",$t_members,"</th>";
          echo "                      <th>&#x20B9;",$t_amount,"</th>";
          echo "                  </tr>";
          echo "              </table>";
          echo "          </div>";
          echo "      </div>";
          echo "  </div>";
          echo "     <a href='api/pdfmkr.php?t_id=$t_id' class='btn btn-primary'><i class='fa fa-print' aria-hidden='true'></i>print</a>"; 

    
    exit
    ?>
    </body>
    </html>