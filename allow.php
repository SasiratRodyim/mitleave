<?php
session_start();
if(isset($_POST['accept'])){
    $accept = $_POST['accept'];
}
if(isset($_POST['idL'])){
    $_SESSION['idL'] = $_POST['idL'];
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
    <title>ALLOW</title>

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
    <a class="py-2 d-none d-md-inline-block" href ="home2.php" ><img src= home2.png width=40 height=40></a>
    <a class="py-2 d-none d-md-inline-block" href="howtohome2.php">How to use?</a>
    <a class="py-2 d-none d-md-inline-block" href="contacthome2.php">Contact Us</a>
    <a class="py-2 d-none d-md-inline-block" href="history2.php">Historyใบลา</a>
    <a class="py-2 d-none d-md-inline-block" href="history.php">Historyการอนุมัติ</a>
    <a class="py-2 d-none d-md-inline-block" href="demo.php"><button type="submit" class="btn btn-info" id="btn" name="btnSubmit">
            <span class="glyphicon glyphicon-log-in"> </span>
             Logout </button> </a>
    
  </div>
</nav>
<html>
<body>

<!DOCTYPE html>
    <html>
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <style>
                table.blueTable {
                    border: 0px solid #404D54;
                    width: 100%;
                    text-al ign: left;
                    border-collapse: collapse;
                }
                table.blueTable td, table.blueTable th {
                    border: 1px solid #AAAAAA;
                    padding: 3px 2px;
                }
                table.blueTable tbody td {
                    font-size: 13px;
                }
                table.blueTable tr:nth-child(even) {
                    background: #D0E4F5;
                }
                table.blueTable thead {
                    background: #606672;
                    background: -moz-linear-gradient(top, #888c95 0%, #707580 66%, #606672 100%);
                    background: -webkit-linear-gradient(top, #888c95 0%, #707580 66%, #606672 100%);
                    background: linear-gradient(to bottom, #888c95 0%, #707580 66%, #606672 100%);
                    border-bottom: 2px solid #414141;
                }
                table.blueTable thead th {
                    font-size: 15px;
                    font-weight: bold;
                    color: #FFFFFF;
                    text-align: center;
                }
                table.blueTable tfoot td {
                    font-size: 14px;
                }
                table.blueTable tfoot .links {
                    text-align: right;
                }
                table.blueTable tfoot .links a{
                    display: inline-block;
                    background: #1C6EA4;
                    color: #FFFFFF;
                    padding: 2px 8px;
                    border-radius: 5px;
                }
            </style>
           
        </head>
        <body>
            <h1>คำร้องขออนุมัติการลา</h1>
            <table class="blueTable">
                <thead>
                    <tr>

                        <th>ลำดับ</th>
                        <th>ประเภทการลา</th>
                        <th>รายละเอียด</th>
                        <th>วันที่เริ่มต้น</th>
                        <th>วันที่สิ้นสุด</th>
                        <th>ไฟล์ที่แนบ</th>
                        <th>สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $sql = "Select * from leavee where teacher = '".$_SESSION['username']."' and status = '0'";
                     require 'connection_connect.php';
                     $result = $conn -> query($sql);
                    
                    if(isset($accept)){
                        if(isset($_SESSION['idL'])){
                            $query = "UPDATE leavee SET status = '".$accept."' where teacher = '".$_SESSION['username']."' and id='".$_SESSION['idL']."'";
                            $update = mysqli_query($conn,$query) or die(mysqli_query($conn,$query));
                            if(mysqli_affected_rows($conn)==1){
                                echo "Success <meta http-equiv='refresh' content='0'>";
                            }                            
                        }
                    }
                            
                    ?>  
                    <?php      
                        $i = 1; 
                        $id = array();  
                        if(isset($result))
                        while($record = mysqli_fetch_assoc($result)){    
                        array_push($id,$record['id']);
                    ?>
                    <tr style="text-align:center;">
                        <td><?php echo $i ;?></td>
                        <td><?php echo $record['type'] ;?></td>
                        <td><?php echo $record['detail'] ;?></td>
                        <td><?php echo $record['start'] ;?></td>
                        <td><?php echo $record['deadline'] ;?></td>
                        <td><?php echo $record['file'] ;?></td>
                        <td><form method="post" action="allow.php" style="text-align:center;">
                        <button type='submit' name='accept' value='1'><input type='hidden' name='idL' value = '<?php echo $id[$i-1];?>' id='butt'>อนุมัติ</button>   <button type='submit' name='accept' value='2'><input type='hidden' name='idL' value = '<?php echo $id[$i-1];?>' id='butt'>ไม่อนุมัติ</button>
                        </form></td>
                    </tr>
                    <?php
                            $i = $i+1;
                            }
                            
                
                    ?>
                </tbody>
            </table>
        </body>
    </html>


    
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