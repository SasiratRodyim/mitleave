<?php

      session_start();
      $_SESSION['type'] = 'student';

      require_once "connection_connect.php";

      if (isset($_POST['register_btn'])) {

          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          
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
    <title>LEAVE MANAGEMENT SYSTEM</title>

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
    <img src= home2.png width=40 height=40></a>
    <a class="py-2 d-none d-md-inline-block" href="howtohome1.php">How to use?</a>
    <a class="py-2 d-none d-md-inline-block" href="contacthome1.php">Contact Us</a>
    <a class="py-2 d-none d-md-inline-block" href="history1.php">History</a>
    <a class="py-2 d-none d-md-inline-block" href="demo.php"><button type="submit" class="btn btn-info" id="btn" name="btnSubmit">
            <span class="glyphicon glyphicon-log-in"> </span>
             Logout </button> </a>
  </div>
</nav>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light ">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-3 font-weight-normal">Welcome :)</h1>
    <meta charset="UTF-8">

    <p class="lead font-weight-normal">สถานะ : <font color="green"> Student </font> </p>
    <a class="py-2 d-none d-md-inline-block" href="leave1.php">Leave</a>
    
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light ">
  <div class="border border-dark bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3 ">
      <h2 class="display-5 font-weight-normal">About US</h2>
      <IMG SRC = cpe-p.jpg width=600 height=400>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    <ul class="list-unstyled text-small text-center ">
    <small><font color="black"><br><br><p class="lead">ให้การศึกษาเพื่อผลิตบัณฑิตในสาขาวิศวกรรมคอมพิวเตอร์ โดยมุ่งเน้นด้านเทคโนโลยีคอมพิวเตอร์อย่างลึกซึ้ง ทั้งด้านฮาร์ดแวร์และซอฟท์แวร์ เช่น สถาปัตยกรรมคอมพิวเตอร์ การสื่อสารข้อมูลและเครือข่ายคอมพิวเตอร์ อัลกอริทึมและปัญหาเชิงคำนวณ การประยุกต์ใช้งานไมโครโปรเซสเซอร์ การโปรแกรมระบบ ปัญญาประดิษฐ์ วิศวกรรมซอฟต์แวร์ การพัฒนาระบบงานคอมพิวเตอร์ ระบบการจัดการฐานข้อมูล และเทคโนโลยีสารสนเทศเพื่อการจัดการ ฯลฯ บัณฑิตที่สำเร็จการศึกษาสามารถประกอบอาชีพเป็นนักวิเคราะห์ และพัฒนาระบบงานวิศวกรคอมพิวเตอร์ วิศวกรระบบ และผู้บริหารระบบงานสารสนเทศในหน่วยงานของรัฐและเอกชนได้</p>
    </div></font></small>
  </div>
</div>

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

</body></html>