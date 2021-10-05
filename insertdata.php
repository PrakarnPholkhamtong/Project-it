<?php include 'db.php' ?>
<?php

$servername ="127.0.0.1";
$username ="root";
$password ="";
$dbname ="loginauth";
//create connection 

$con = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO authlogin (id, username, pass)
VALUES ('1', 'admin', '1234')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();



?>