<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_signin.css">
    <!-- <link rel="stylesheet" href="css/common.css"> -->
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2><strong>ADMIN</strong></h2>
            <h2>Log in</h2>
            <form action="api/admin_signin.php" method="post">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div> 
                <div class="form-group login-button">
                    <button class="btn btn-login-form" type="submit">Sign In</button>
                </div>
               
            
            </form>
        </div>
    </div>
   

</body>

</html>
