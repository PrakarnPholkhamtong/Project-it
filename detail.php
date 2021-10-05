<!DOCTYPE html>
<html lang="en">
<head>
<title>detail</title>
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
    
    <link rel="stylesheet" href="style.css" />
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
    <a class="navbar-brand" href="index.php">หน้าแรก</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          
        </li>
      </ul>
      <a class="nav-link active" href="aboutme.php">เกี่ยวกับเรา</a>
      <a class="nav-link active" href="refer.php">เอกสารอ้างอิง</a>
      <a class="navbar-brand w3-text-blue" href="#"> <i class="material-icons">person</i></a>
    </div>
  </div>
</nav>
  
    
<!-- Name-->
<div class="row container text-center">
    <br /> 
 <br /> <h2></h2>

</div>
     </div>
     <div class="row">
        <div class="col"></div>
        <div class="col text-center">ชื่อสมุนไพร</div>
        <div class="col text-center"><button>พิมพ์</button></div>
      </div>

      
<div class="text-xl-center">
    <img src="" alt="" width="400" height="400">
</div>

<div class="text-center">
    <h1>รายละเอียดสุมนไพร</h1>
</div>


<footer class="footer">
    <p></p>
  </footer>
 
</body>
</html>