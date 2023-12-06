<?php
    session_start();
    
    include ('admin_nav.php');
    
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
    <link rel="stylesheet" href="css/admin_user.css">
    <link href="css/admin_park.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
          <div class="user_list">
                      <div class="card-header">
                        
                        <h4>USER LIST</h4>
                      </div>
                      
                      <a href="admin_home.php"><button class="btn">GO BACK</button></a>
                      <button class="btn btn-primary" style="margin-left:120px;" onclick="window.print()">PRINT TABLE</button>
                      
                      <div class="card-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                                <th>User ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>District</th>
                                <th>State</th>
                                <th>Pin Code</th>
                                <th>Gender</th>
                                <th>Date of Registration</th>
                                <th>Email</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                              include 'api/common.php';
                              $sql="SELECT * FROM `users`;";
                              $result=mysqli_query($conn,$sql);
                              if(!$result){
                                  echo "Something went wrong!";
                                  exit;
                              }
                              $users=mysqli_num_rows($result);
                              if($users==0){
                                  echo "No parks found!";
                                  exit;
                              }
                              for($i=0;$i<$users;$i++){
                                  $user=mysqli_fetch_assoc($result);
                                      $u_id=$user['u_id'];
                                      $firstname=$user['firstname'];
                                      $lastname=$user['lastname'];
                                      $phone=$user['phone'];
                                      $addresse=$user['addresse'];
                                      $districts=$user['districts'];
                                      $states=$user['states'];
                                      $pin=$user['pin'];
                                      $gender=$user['gender'];
                                      $date_of_regi=$user['date_of_regi'];
                                      $email=$user['email'];
                              



                                  echo "<tr>";
                                  echo "<td>".$u_id."</td>";
                                  echo "<td>".$firstname."</td>";
                                  echo "<td>".$lastname."</td>";
                                  echo "<td>".$phone."</td>";
                                  echo "<td>".$addresse."</td>";
                                  echo "<td>".$districts."</td>";
                                  echo "<td>".$states."</td>";
                                  echo "<td>".$pin."</td>";
                                  echo "<td>".$gender."</td>";
                                  echo "<td>".$date_of_regi."</td>";
                                  echo "<td>".$email."</td>";
                                  echo "<tr>";
                              
                              }
                            ?>
                          </tbody>
                        </table>

                    </div>
            

                   

          </div>
</body>