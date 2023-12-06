<!-- <div class="park_list">
                      <div class="card-header list-header">
                        <h4>Ticket List</h4>
                      </div>
                      <div class="card-body card-park-list">
                        <table class="table table-bordered">
            
                          <thead>
                            <tr>
                              <th>Ticket No.</th>
                              <th>Ticket ID.</th>
                              <th>Name</th>
                              <th>User ID</th>
                              <th>Bookin Date</th>
                              <th>Adults</th>
                              <th>Seniors</th>
                              <th>Kids</th>
                              <th>Total Members</th>
                              <th>Total Amount</th>
                            
                            </tr>
                          </thead> -->
<?php
    
    include 'api/common.php';


    $sql_1="SELECT * FROM `tickets` ORDER BY t_id desc;";

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
    $ticketid = $tickets['ticketid'];
    $file= $tickets['t_qr'];
    $name=$c_fname.' '.$c_lname;

            

    echo "<tr>";
    echo "<td>".$tickets['t_id']."</td>";
    echo "<td>".$tickets['ticketid']."</td>";
    echo "<td>".$name."</td>";
    echo "<td>".$tickets['t_u_id']."</td>";
    echo "<td>".$tickets['b_date']."</td>";
    echo "<td>".$tickets['adults']."</td>";
    echo "<td>".$tickets['seniors']."</td>";
    echo "<td>".$tickets['kids']."</td>";
    echo "<td>".$tickets['t_members']."</td>";
    echo "<td>".$tickets['t_amount']."</td>";
    echo "</tr>";
    };
    ?>
    </tbody>
    </table>
    </div>
    </div>