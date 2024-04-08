<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="styles/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="img/favicon.jpeg">
  <?php
  include "connect.php";
  ?>
</head>
<body style="background-image:url(images/slider_background1.jpg)" >
  <div class="wrapper">
    <form name="login" action="" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" required name="userName" id="userName">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required name="password" id="password">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="submit">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>

  <?php
  if (isset($_POST['submit'])){
    $count=0;
    $res=mysqli_query($conn,"SELECT * FROM `registration` WHERE userName='$_POST[userName]' && password='$_POST[password]';");
    $count=mysqli_num_rows($res);

    if($count==0){
      ?>
      <script type="text/javascript">
      alert("The username and password doesn't match.")
      </script>
      <!-- <div class="alert alert-warning">
        <strong>The username and password doesn't match. </strong>
    </div> -->
      <?php
    }
    else{
      ?>
        <script type="text/javascript">
          window.location="index.php";
          </script>
      <?php

    }
  }
  ?>
</body>
</html>