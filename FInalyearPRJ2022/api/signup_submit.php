<?php
$servername="localhost";
$username="root";
$password="";
$dbname="finalyearprj";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$addresse=$_POST["addresse"];
$districts=$_POST["districts"];
$states=$_POST["states"];
$dob=$_POST["dob"];
$pin=$_POST["pin"];
$dp=$_POST["dp"];
$passwords=$_POST["passwords"];
$passwords = sha1($passwords);





$check_email = mysqli_query($conn, "SELECT email FROM users where email = '$email' ");
if(mysqli_num_rows($check_email) > 0){

    header ('location: ../result/registration_failed.php');
    // echo('
    // <p>Email Already exists</p>
    // <a href="../signup_form.php"><button>Go Back</button></a>');
}
else{
    $sql="INSERT INTO users(firstname,lastname,email,gender,phone,addresse,districts,states,pin,passwords,date_of_regi,dp,dob) VALUES ('$firstname','$lastname','$email','$gender','$phone','$addresse','$districts','$states','$pin','$passwords',current_date(), '$dp','$dob');";
    
    if(mysqli_query($conn, $sql)){
        header ('location: ../result/registration_succes.php');
    }else{
        echo ('Registration Failed');
    }
}
$conn->close();
?>
    

    
