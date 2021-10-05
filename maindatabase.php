<!DOCTYPE html>
<html lang="en">
<head>
<title>
  maindatabase
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css"/>
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
  
    </header>
     <!-- naver -->
     <nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
      <a class="nav-link active" href="aboutme.php">เข้าสู่หน้าเว็บไซต์</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="maindatabase.php">หน้าฐานข้อมูล</a>
        </li>
      </ul>
      <a class="nav-link" href="Logout.php">ออกจากระบบ</a>
     
    
    </div>
  </div>
</nav>
  
    
<!-- Name-->




<Form action=""> 
<div class="container mt-3">
  <h2>รายชื่อสมุนไพร</h2>
  <a class="nav-link active" href="insertdatapage.php">เพิ่มข้อมูล</a>
  <a class="nav-link active" href="editdatapage.php">แก้ไขข้อมูล</a>
</Form>


<footer class="footer">
    <p></p>
  </footer>
 
</body>
</html>