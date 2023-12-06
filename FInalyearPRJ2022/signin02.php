<div class="header sticky-top">
        <?php
        if(isset($_SESSION['u_id'])){
            include 'navbar_IN.php';
        }
        else{
            include 'navbar_UP.php';
        }
        ?>
        
        
        </div>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <!-- <link rel="stylesheet" href="css/footer.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signin02.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
  
<div class="signin-form">               
 <div class="row">

  

    <div class="col-sm-4 text-center signin">
  
  
      <!-- Default form login -->
      <form action="api/signi_submit.php" method="post">
  
        <p class="h4 mb-4 text-left">Login to continue</p>
  
        <p class="text-left">Signin to book your ticket for your dream parks</p>
        <!-- Email -->
        <label for="mail" class="in">Email</label>
        <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="Enter Email" >
  
        <!-- Password -->
        <label for="pass" class="in">Password</label>
        <input type="password" id="defaultLoginFormPassword"  name="passwords" class="form-control mb-4" placeholder="Enter Password">

  
        <div class="d-flex justify-content-left">
          <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox text-left">
              <input type="checkbox" class="custom-control-input" >
              <!-- <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label> -->
            </div>
          </div>
        </div>
  
        <!-- Sign in button -->
        <button class="btn btn-info btn-block " type="submit" name="signin" >LOGIN</button>
        <button class="btn btn-info btn-block my" type="submit" >Forgot Password?</button>
  
  
      </form>
  
    </div>
  
  
    <div class="col-sm-8 text-center signup">
  
      <i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
      <h2 class="account-text">Create Your Account</h2>
      <h4 class="account-description">Signup to book your ticket for your dream parks</h4>
      <a href="signup_form.php"><button class="btn btn-info btn-block sign" type="submit">SIGN UP</button></a>
  
    </div>
    </div>
  </div>

  <?php
        include 'include/footer.php';
        ?>
    
</body>
</html>