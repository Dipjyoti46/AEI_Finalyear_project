
<?php
        
        include 'api/ticket_pay_php.php';
        $sql="UPDATE tickets SET t_action='confirm' WHERE t_u_id=$u_id ORDER BY t_id DESC LIMIT 1;";

        $result=mysqli_query($conn,$sql);
        if(!$result){
        echo "something went wrong";
        exit;
      }
      header ('location: ticket.php');
        
        
        ?>
