<?php

      session_start();

      require_once "connection_connect.php";

      if (isset($_POST['register_btn'])) {

          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $type = $_POST['type'];
          
          $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
          $result = mysqli_query($conn, $user_check);
          $user = mysqli_fetch_assoc($result);

          if ($user['username'] == $username) {
              echo "<script>alert('Username already exists');</script>";
          }
          else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user (firstname,lastname,email,username,password,type)
                        VALUE ('$firstname','$lastname','$email','$username','$passwordenc','$type')";
            
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: login.php");
            }
            else {
                $_SESSION['error'] = "Someting went wrong";
                header("Location: login.php");
            }
          }

      }

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="position-relative overflow-hidden p-xs-3 p-md-5 m-md-3 text-center ">
<center><div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 bg-light text-center style="padding-top: 100px;>
<div class="my-3 py-3 ">
<h4 class="panel-heading text-center font-weight-normal bg-info mb-3 "> Register </h4>
      <form class="needs-validation" novalidate="" method="post" action = "register.php">
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstname" placeholder="" value="" required="" name="firstname">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastname" placeholder="" value="" required="" name="lastname">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required="" name="username">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
        <label for="username">Password</label>
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="password" />
          </div>
        <div class="mb-3">
        <label for="username">Re-Password</label>
          <div class="col-sm-12">
            <input type="password" name="repassword" class="form-control" required placeholder="repassword" />
          </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
          <div class="invalid-feedback">
            Please enter a valid email address for register.
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="type">Type</label>
            <select class="custom-select d-block w-100" id="type" required="" name="type">
              <option value="">Choose...</option>
              <option>Teacher</option>
              <option>Student</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block bg-info" input type="submit" name="register_btn" value="Register">Create new account</button>
      </form>
    </div> </div>
