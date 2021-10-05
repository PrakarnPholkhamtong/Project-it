<?php

$servername ="127.0.0.1";
$username ="root";
$password ="";
//create connection 

$con = mysqli_connect($servername, $username, $password);

if(mysqli_connect_errno()){
echo "Failed to connect!";
exit();
}
echo "Connection success!";



?>