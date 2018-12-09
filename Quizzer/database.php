<?php 
//Create connection credentials
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name  = 'quizzer';

//Create mysqli object
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Error Handler
if($conn->connect_error) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
?>