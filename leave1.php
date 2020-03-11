<?php

      session_start();

      require_once "connection_connect.php";

      if (isset($_POST['enter'])) {

          $type = $_POST['type'];
          $detail = $_POST['detail'];
          $start = $_POST['start'];
          $deadline = $_POST['deadline'];
          $file = $_POST['file'];
          $username = $_SESSION['username'];
          $teacher = $_POST['teacher'];
          
            $query = "INSERT INTO leavee (type,detail,start,deadline,file,username,teacher)
                        VALUE ('$type','$detail','$start','$deadline','$file','$username','$teacher')";
            
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert successfully";
                header("Location: leave1.php");
            }
            else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: leave1.php");
            }
          }

          if(isset($_GET['name'])){
            $teacher = $_GET['name'];
          }

      
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>LEAVE</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/product/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
  <body>
    <nav class="site-header sticky-top py-1 bg-dark">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="home">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title></title></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href ="home1.php" ><img src= home2.png width=40 height=40></a>
    <a class="py-2 d-none d-md-inline-block" href="howtohome1.php">How to use?</a>
    <a class="py-2 d-none d-md-inline-block" href="contacthome1.php">Contact Us</a>
    <a class="py-2 d-none d-md-inline-block" href="history1.php">History</a>
    <a class="py-2 d-none d-md-inline-block" href="demo.php"><button type="submit" class="btn btn-info" id="btn" name="btnSubmit">
            <span class="glyphicon glyphicon-log-in"> </span>
             Logout </button> </a>
  </div>

  
</nav>
<center>


<h2>รายละเอียดคำขออนุมัติการลา</h2>
<br>
<form action="leave1.php" method="post">
<strong><font color="green"> ส่งถึง </font></strong><br>
<?php 
if(isset($teacher)){
  echo '<input type="text" name="teacher" value="'.$teacher.'"><a href="teacher.php" target="self"><button type="button" class="btn btn-secondary" data-dismiss="modal">เลือกรายชื่อ</button></a>';
}
else{
  echo '<input type="text" name="teacher" > <a href="teacher.php" target="self"><button type="button" class="btn btn-secondary" data-dismiss="modal">เลือกรายชื่อ</button></a>';
}
?>


  <div class="form-group col-md-1">
    <label for="exampleFormControlSelect1"><strong><font color="green">ประเภทการลา</font></strong></label>
    <select class="form-control" id="exampleFormControlSelect1" name="type">
      <option>ลากิจ</option>
      <option>ลาป่วย</option>
    </select>
  </div>

  <div class="form-group col-md-5">
    <label for="exampleFormControlTextarea1"><strong><font color="green">รายละเอียด/เหตุผลการลา</font></strong></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="detail"></textarea>
  </div>

  <div class="form-group col-md-2">
  <label for="example-date-input"><strong><font color="green">วันที่เริ่มต้น</font></strong></label><br>
    <input class="form-control" type="date" name="start">
    </div>

    <div class="form-group col-md-2">
  <label for="example-date-input"><strong><font color="green">วันที่สิ้นสุด</font></strong></label><br>
    <input class="form-control" type="date" name="deadline">
    </div>

    <div class="form-group container col-md-2">
    <label for="exampleInputFile"><strong><font color="green"> ไฟล์แนบ </font></strong></label>
     <font color="grey" font size="2"> (ถ้ามี) </font>
     <input type="file" class="form-control-file container" id="exampleInputFile" aria-describedby="fileHelp" name="file">
  </div>


  <br>

  <a href="?d_id=51" onclick="return confirm('ยืนยันรายละเอียดการลา?')"><input type="submit" name="enter"  value="ตกลง"></a>
  <a href="?d_id=51" onclick="return confirm('ล้างข้อมูล?')"><input name="reset" type="reset" value="ล้างข้อมูล"></a>
  </center>
  </div>
</form>
<nav class="site-header sticky-top py-1 bg-dark ">
<footer class="container py-5 ">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"></svg>
      <small class="d-block mb-3 text-muted text-center">Copyright © 2020</small>
    <div class="col-6 col-md text-center">
      <h5>LEAVE MANAGEMENT SYSTEM</h5>
      <ul class="list-unstyled text-small text-center ">
        <li><a class="text-muted"> Engineering KPS. All Rights Reserved. คณะวิศวกรรมศาสตร์ กำแพงแสน มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน อ.กำแพงแสน จ.นครปฐม 73140 ติดต่อคณะฯ โทร. 0-3428-1074 , 0-3435-1897</a></li>
      </ul>
    </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>