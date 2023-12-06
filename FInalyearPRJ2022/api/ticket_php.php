<?php
    session_start();
    include 'api/common.php';

    $u_id=$_SESSION['u_id'];

    $sql_1="SELECT * FROM `tickets` WHERE t_u_id=$u_id and t_action='confirm' ORDER BY t_id desc;"; //and t_action='confirmed'

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
    for($i=0;$i<$ticket; $i++){
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
          echo "              <p>Ticket ID: <strong>",$ticketid,"</strong></p>";
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
          echo "     <a href='api/pdfmkr.php?t_id=$t_id' target='_blank' class='btn btn-primary'><i class='fa fa-print' aria-hidden='true'target='blank'></i>print</a>"; 

    };
    exit
    ?>