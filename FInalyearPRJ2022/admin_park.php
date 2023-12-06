<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_park.css">
    <link href="css/admin_park.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
        <!-- <nav class="sidebar sidebar-sticky">
          <php 
            // include 'include/admin_profile_sidebar.php';
          >
          </nav> -->
          <div class="add_park">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                        <h4>ADD PARK</h4>
                      </div>
                    <div class="card-body card-add-park">
                      <form action="api/add_parks.php" method="post">
                          <div class="form-group">
                            <label for="park_name">Park Name</label>
                            <input type="text" class="form-control" id="park_name" name="p_name" placeholder="Enter Park Name" required>

                            <label for="park_description">Park Description</label>
                            <input type="text" class="form-control" id="park_description" name="p_description" placeholder="Enter Park Description" placeholder="Enter Park Address" required>

                            <label for="ticket_price" >Park Ticket Price</label>
                            <input type="text" class="form-control" id="ticket_price" name="p_tprice" placeholder="Enter Park Ticket Price" required>

                            <label for="park_district">Park District</label>
                            <input type="text" class="form-control" id="park_description" name="pl_district" placeholder="Enter Park Description" required>

                            <label for="park_city">Park City</label>
                            <input type="text" class="form-control" id="park_city" name="pl_city" placeholder="Enter Park City" required>

                            <label for="park_map">Park Map</label>
                            <input type="text" class="form-control" id="park_map" name="pl_map" placeholder="Enter Park Location link" required>

                            <label for="park_image">Park Image 1</label>
                            <input type="file" class="form-control" id="park_image" name="p_img" placeholder="Enter Park Image" required>
                            <label for="park_image">Park Image 2</label>
                            <input type="file" class="form-control" id="park_image" name="p_img02" placeholder="Enter Park Image" required>
                            <label for="park_image">Park Image 3</label>
                            <input type="file" class="form-control" id="park_image" name="p_img03" placeholder="Enter Park Image" required>
                            <label for="park_image">Park Image 4</label>
                            <input type="file" class="form-control" id="park_image" name="p_img04" placeholder="Enter Park Image" required>
                            <label for="park_image">Park Image 5</label>
                            <input type="file" class="form-control" id="park_image" name="p_img05" placeholder="Enter Park Image" required>
                            <label for="park_image">Park Image 6</label>
                            <input type="file" class="form-control" id="park_image" name="p_img06" placeholder="Enter Park Image" required>
                          </div>
                          <div class="actions add_btn">
                                 <input type="submit" name="commit" value="ADD" class="btn-add-park">
                          </div>
                      </form>
                    </div>
                  </div>
                    
                    <div class="park_list">
                      <div class="card-header list-header">
                        <h4>Park List</h4>
                      </div>
                      <div class="card-body card-park-list">
                        <table class="table table-bordered">
            
                          <thead>
                            <tr>
                              <th>S No.</th>
                              <th>Park Name</th>
                              <th>Park Description</th>
                              <th>Ticket Price</th>
                              <th>Park District</th>
                              <th>Park City</th>
                              <th>Park Map</th>
                            
                            </tr>
                          </thead>
                          
                          
                      <tbody>
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
                            // echo "No parks found!";
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
                                
                           
                            echo "<tr>";
                            echo "<td>".$parks['p_id']."</td>";
                            echo "<td>".$parks['p_name']."</td>";
                            echo "<td>".$parks['p_description']."</td>";
                            echo "<td>".$parks['p_tprice']."</td>";
                            echo "<td>".$parks['pl_district']."</td>";
                            echo "<td>".$parks['pl_city']."</td>";
                            echo "<td>".$parks['pl_map']."</td>";
                            echo "</tr>";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

                        


         

        
</body>
</html>

    
                    
                    
                    
                    
                    
                
                
                    
                    
                
            
                    
                        


