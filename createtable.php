<?php include 'db.php' ?>
<?php

$servername ="127.0.0.1";
$username ="root";
$password ="";
$dbname ="loginauth";
//create connection 

$con = mysqli_connect($servername, $username, $password, $dbname);
// sql to create table
$sql = "CREATE TABLE authlogin (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    pass VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($con->query($sql) === TRUE) {
        echo "Table  created successfully";
      } else {
        echo "Error creating table: " . $con->error;
      }
      
      $con->close();



?>