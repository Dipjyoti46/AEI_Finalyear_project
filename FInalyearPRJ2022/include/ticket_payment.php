
    <div class="container">
        <div class="center">
            <div class="card">
                   <div class="brand_log">
                    <h3>OTBSFP</h3>
                   </div>
                   <div class="ticket-info">
                       <div class="visiting_date">
                           <p>Date:</p>
                           <p><?php echo "$b_date" ?></p>
                        </div>
                        <div class="park_name">
                            <!-- <p>PARK:</p> -->
                            <p><strong><?php echo "$p_name" ?></strong></p>
                        </div>
                        <div class="ticket_details">
                            <p>Name :</p><p><?php echo $c_fname." ".$c_lname; ?></p>
                        </div>
                        <table class="ticket_data">
                            <tr>
                                <th>Age</th>
                                <th>Members</th>
                                <th>Amount(&#x20B9;)</th>
                            </tr>
                            <tr>
                                <td>Kids</td>
                                <td><?php echo "$kids" ?></td>
                                <td><?php echo "$kid_tprice" ?></td>
                            </tr>
                            <tr>
                                <td>Adults</td>
                                <td><?php echo "$adults" ?></td>
                                <td><?php echo " $adult_tprice" ?></td>
                            </tr>
                            <tr>
                                <td>Seniors</td>
                                <td><?php echo "$seniors" ?></td>
                                <td><?php echo "$senior_tprice" ?></td>
                            </tr>
                            <tr>
                                <th>Totals</th>
                                <th><?php echo "$t_members" ?></th>
                                <th><?php echo "$total_tprice" ?></th>
                            </tr>
                        </table>
                    </div>

                  
            
            
             
             <div class="payment-action">
                <div class="pay-button">
                <?php echo "<a href='index.php' class='btn btn-pay'>Pay Now</a>"; ?>
                    <!-- <a  value="<php echo "$total_tprice" >"class='btn btn-pay'>Pay Now</a> -->
                </div>
                <div class="pay-cancel">
                    <a href="api/cancel_ticket.php" class="btn btn-cancel">Cancel</a>
                </div>
                
             </div>
                  
            </div>
        </div>
    </div>        
    