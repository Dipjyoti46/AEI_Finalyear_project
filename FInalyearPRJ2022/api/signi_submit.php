<?php
session_start(); 
$servername="localhost";
$username="root";
$password="";
$dbname="finalyearprj";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}



$email = $_POST['email'];
$passwords=$_POST["passwords"];
$passwords = sha1($passwords);



$sql = "SELECT * FROM `users` WHERE email='$email' AND passwords='$passwords';";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Something went wrong!";
	exit;
}

$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    // echo "Login failed! Invalid email or password.";
    // echo "<a href='../signin02.php'><button>Try Again</button></a>";
    header ('location: ../result/login_failed.php');
	exit;
}

$row = mysqli_fetch_assoc($result);
$_SESSION['u_id'] = $row['u_id'];
$_SESSION['firstname'] = $row['firstname'];
$_SESSION['lastname'] = $row['lastname'];
$_SESSION['email'] = $row['email'];
$_SESSION['phone'] = $row['phone'];
$_SESSION['addresse'] = $row['addresse'];
$_SESSION['districts'] = $row['districts'];
$_SESSION['dob'] = $row['dob'];
$_SESSION['states'] = $row['states'];
$_SESSION['pin'] = $row['pin'];
$_SESSION['gender'] = $row['gender'];
$_SESSION['dp'] = $row['dp'];
$u_id=$row['u_id'];
setcookie($u_id,time()+(86400*30));


header("location: ../profile.php");
mysqli_close($conn);

?>





    

