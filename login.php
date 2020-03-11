<?php
    session_start();

    if (isset($_POST['username'])) {

      include('connection_connect.php');

      $username = $_POST['username'];
      $password = $_POST['password'];
      $passwordenc = md5($password);

      $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);

        $_SESSION['username'] = $username;
        
        $_SESSION['userid'] = $row['id'];
        $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
        $_SESSION['type'] = $row['type'];

      if ($_SESSION['type'] == 'Teacher') {
        header("Location: home2.php");
      }
      if ($_SESSION['type'] == 'Student') {
        header("Location: home1.php");
      }
      }
      else {
        echo "<script>alert('Username หรือ Password ไม่ถูกต้อง');</script>";
      }
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 style="padding-top: 100px;>
            <form action="login.php" method="post">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        Sign in
                    </div>
                    <div class="panel-body">
                    <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="Username" />
          </div>
        </div><br>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div><br><br>
                    <div class="form-group">
          <div class="col-sm-12">
            <center><button type="submit" class="btn btn-info" id="btn" name="btnSubmit">
            <span class="glyphicon glyphicon-log-in"> </span>
             Sign in </button><br><br>
             <small><a  class="py-2 d-none d-md-inline-block" href="register.php">Create new account ?</a><br><small>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember Me
               </label></center>
          </div>
        </div>
                    </div>
                </div>
            </form>
        </div> 
    </div>
</div>
</body>
</html>