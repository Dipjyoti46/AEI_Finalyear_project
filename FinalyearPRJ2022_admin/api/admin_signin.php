<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="finalyearprj";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$u_name=$_POST["username"];
$pass=$_POST["password"];

$sql = "SELECT * FROM `admin` WHERE username='$u_name' AND password='$pass';";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Something went wrong!";
	exit;
}

$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    echo "Login failed! Invalid username or password.";
	exit;
}
header ('location: ../admin_home.php');
echo "Login successful";
mysqli_close($conn);

?>
