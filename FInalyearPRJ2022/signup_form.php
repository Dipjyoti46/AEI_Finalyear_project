<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/common.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    
</head>
<body>
<div class="header sticky-top">
        <?php
        if(isset($_SESSION['user_id'])){
            include 'navbar_IN.php';
        }
        else{
            include 'navbar_UP.php';
        }
        ?>
        
        
        </div>
    
    <div class="sign_up-form">
        <div class="sign_up_form_container">
                <div class="col-md-6 offset-md-3">
                    <div class="signup-form-header">
                        <h3>Sign Up</h3>
                        <p>Fill out the form below to create an account.</p>
                     </div>
                     <div class="form-body">
                          <form action="api/signup_submit.php" method="post">
                              <div class="form-group">
                                 <label for="first_name" nam>First Name</label>
                                 <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" required>
                                 <label for="lastname">Last Name</label>
                                 <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                     <label for="Gender">Gender :</label>
                                     <label for="Gender">Male </label>
                                     <input type="radio" name="gender" value="Male" id="gender" placeholder="Enter Gender" required>
                                     
                                     <label for="Gender">Female </label>
                                     <input type="radio" name="gender" value="Female" id="gender" placeholder="Enter Gender" required>
                                     
                                     <label for="Gender">Others </label>
                                     <input type="radio" name="gender" value="others" id="gender" placeholder="Enter Gender" required>
                                </div>     
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="addresse" id="address" placeholder="Enter Address" required>
                                </div>
                                <div class="form-group">
                                    <label for="district">District</label>
                                    <input type="text" class="form-control" name="districts" id="district" placeholder="Enter District" required>
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" name="states" id="state" placeholder="Enter State" required>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="pin">Pincode</label>
                                    <input type="text" class="form-control" name="pin" id="pin" placeholder="Pincode" required>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob" id="dob" placeholder="Pincode" required>
                                </div>
                                    
                                <div class="form-group">
                                         <label for="password">Password</label>
                                         <input type="password" class="form-control" name="passwords" id="password" placeholder="Enter Password" required>
                                </div>
                                <div class="form-group">
                                         <label for="confirm_password">Profile Picture</label>
                                         <input type="file" class="form-control" name="dp" id="dp" placeholder="Profile Picture">
                                </div>
                            </div>
                        <div>   
                            <!-- <div class="inline field">
                                <input type="checkbox" name="terms" required>
                                    <label>I agree to the <a href="#">Terms and Conditions</a></label>
                            </div> -->
                            <div class="actions sign_up_btn">
                                 <input type="submit" name="commit" value="Sign up" class="ui primary button btn-form-signup">
                            </div>
                        </div>
                              
                        <div class="ui hidden error message">
                                  We already have that email registered.</div>
                              
                              
                        <div class="ui center aligned segment">
                            <h6><a href="signin02.php">Already have an account?</a></h6>
                            
                        </div>
                    </div>
                </div>
            </div>       
    </div>
        <?php
            include 'include/footer.php';
            ?>
        
    <script type="text/javascript">
    <?php
       include "api/signup_submit.php";
    ?>

              


</body>

</html>
