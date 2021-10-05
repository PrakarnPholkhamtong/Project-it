<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomePage</title>
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
  
          <div class="container-fluid">
            <div class="az">
              <ul class="az-1">
                <li><a href="#หมวด-ก">ก</a></li>
                <li><a href="#หมวด-ข">ข</a></li>
                <li><a href="#หมวด-ค">ค</a></li>
                <li><a href="#หมวด-ฆ">ฆ</a></li>
                <li><a href="#หมวด-ง">ง</a></li>
                <li><a href="#หมวด-จ">จ</a></li>
                <li><a href="#หมวด-ฉ">ฉ</a></li>
                <li><a href="#หมวด-ช">ช</a></li>
                <li><a href="#หมวด-ซ">ซ</a></li>
                <li><a class="off">ฌ</a></li>
                <li><a class="off">ญ</a></li>
                <li><a class="off">ฎ</a></li>
                <li><a class="off">ฏ</a></li>
                <li><a class="off">ฐ</a></li>
                <li><a class="off">ฑ</a></li>
                <li><a class="off">ฒ</a></li>
                <li><a class="off">ณ</a></li>
                <li><a href="#หมวด-ด">ด</a></li>
                <li><a href="#หมวด-ต">ต</a></li>
                <li><a href="#หมวด-ถ">ถ</a></li>
                <li><a href="#หมวด-ท">ท</a></li>
                <li><a href="#หมวด-ธ">ธ</a></li>
                <li><a href="#หมวด-น">น</a></li>
                <li><a href="#หมวด-บ">บ</a></li>
                <li><a href="#หมวด-ป">ป</a></li>
                <li><a href="#หมวด-ผ">ผ</a></li>
                <li><a href="#หมวด-ฝ">ฝ</a></li>
                <li><a href="#หมวด-พ">พ</a></li>
                <li><a href="#หมวด-ฟ">ฟ</a></li>
                <li><a class="off">ภ</a></li>
                <li><a href="#หมวด-ม">ม</a></li>
                <li><a href="#หมวด-ย">ย</a></li>
                <li><a href="#หมวด-ร">ร</a></li>
                <li><a href="#หมวด-ล">ล</a></li>
                <li><a href="#หมวด-ว">ว</a></li>
                <li><a class="off">ศ</a></li>
                <li><a class="off">ษ</a></li>
                <li><a href="#หมวด-ส">ส</a></li>
                <li><a href="#หมวด-ห">ห</a></li>
                <li><a class="off">ฬ</a></li>
                <li><a href="#หมวด-อ">อ</a></li>
                <li><a href="#หมวด-ฮ">ฮ</a></li>
              </ul>
          </div>
        </div>
<!-- Name-->
</div>
<div class="container">
    <h2>รายชื่อสมุนไพร</h2>
            
    <table class="table table-hover">
      <thead>
        <tr>
          <th>รูปภาพ</th>
          <th>ชื่อสมุนไพร</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="Images/Picture1.jpg"></td>
          <td>Name</td>
         
        </tr>
        <tr>
          <td><img src="Images/Picture1.jpg"></td>
          <td>Name</td>
         
        </tr>
        <tr>
          <td><img src="Images/Picture1.jpg"></td>
          <td>Name</td>
          
        </tr>
      </tbody>
    </table>
  </div>
  <footer class="footer">
    <p></p>
  </footer>
 
 
</body>
</html>