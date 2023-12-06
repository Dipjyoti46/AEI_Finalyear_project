<?php
    header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE TICKET BOOKING SYSTEM FOR PARKS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/payment.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
</head>
<body>
<?php
    session_start();
    include'api/common.php';
    $u_id=$_SESSION['u_id'];

    $sql_1="SELECT * FROM tickets WHERE t_u_id=$u_id ORDER BY t_id DESC LIMIT 1;";
    // print_r($sql_1);
    $result=mysqli_query($conn,$sql_1);
    if(!$result){
        echo "something went wrong";
        exit;
    }
    $tickets=mysqli_num_rows($result);
    if($tickets==0){
        echo "ticket not found";
        exit;
    }
    // print_r("$tickets");


    $tickets=mysqli_fetch_assoc($result);
    
    $total_tprice = $tickets['t_amount'];


    
    $sql_2="SELECT * FROM parks WHERE p_name='$p_name';";
    // print_r($sql_2);

    $result=mysqli_query($conn,$sql_2);

    $parks=mysqli_fetch_assoc($result);
    // print_r($parks);

    $p_name=$parks['p_name'];


?>
<div class="container">
    <div class="card">
        <div class="firstrow">
            <h4>OTBSFP</h4> 
        </div>
        <div class="secondrow">
            <form action="paytm-main/pgRedirect.php" method="post">
                <div class="form-group">
                    <label for="order_id">ORDER ID</label>
                    <input type="text" class="form-control" name="order_id" value="<?php echo  "ORDS" . rand(10000,99999999)?>" autocomplete disabled>
                </div>
                
                <div class="form-group">
                    <label for="order_id">AMOUNT</label>
                    <input type="text" class="form-control" name="order_id" value="1000" autocomplete disabled>
                </div>
        
                <div class="lastrow">
                    <!-- <button>PAY <?php echo $$total_tprice; ?></button> -->
                    <input type="button"  class="btn btn-primary"value="CheckOut" placeholder="PAY NOW" onclick>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>