<?php
include("Authlogin.php"); // Include loginserv for checking username and password
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomePage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="stylelogin.css" />
</head>
<body>
    <header>
     
        <!-- brand -->
        <div class="jumbotron  bg-primary text-white ">
    <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4 text-center"><p>สวนสมุนไพรของวัดบ่อกรุ</p> 
            <p>ที่อยู่ 1 ตำบลบ่อกรุ อำเภอเดิมบางนางบวช จังหวัดสุพรรณบุรี 72120</p>
            <p>เบอร์โทร 035 575 936</p></div>
  <div class="col-sm-4  text-center">         <?php
       date_default_timezone_set("Asia/Bangkok");
                    echo "วันที่ " . date("d/m/Y") . "<br>";
                    echo "เวลา &nbsp;"  . date("h:i") .  "<br>" ;       
?></div>
  
</div>
</header>
   <body>
   <div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="username" name="username"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>




<footer class="footer">
    <p></p>
  </footer>
 
</body>
</html>