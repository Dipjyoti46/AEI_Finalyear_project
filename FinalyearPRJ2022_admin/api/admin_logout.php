<!-- logout session -->
<?php
session_start();
session_destroy();
header("Location: ../admin_signin.php");
?>