<?php
//Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "shoutit");

//Test Connection
if(mysqli_connect_error()) {
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
?>