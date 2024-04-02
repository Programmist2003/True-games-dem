<?php
$servername = 'lcoalhost';
$username = 'admin1234';
$password = '';

// crerate  connection
$conn = mysqli_connect($servername, $username, $password);

// check connection
if(!$conn ){
    die("Connection failed: " . mysqli_connect_error());
}
echo  "Connected successfully";
?>