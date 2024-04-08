
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register Form</title>
  <link rel="stylesheet" href="styles/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="img/favicon.jpeg">
  <?php
  include "connect.php";
  ?>
</head>
<body  style="background-image:url(images/slider_background1.jpg)">
  <div class="wrapper">
    <form name="registration" action="" method="post">
      <h1>Register</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" required name="userName" id="userName">
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Email" required name="email" id="email">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required name="password" id="password">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="submit">Register</button>
      <div class="register-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
        
      </div>
    </form>
  </div>
  <?php
if(isset($_POST['submit'])) {
    // Assuming $conn is your database connection
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "INSERT INTO `registration` (userName, email, password) VALUES ('$userName', '$email', '$password')";
    if(mysqli_query($conn, $query)) {
        echo '<script type="text/javascript">alert("Registration successful");</script>';
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

</body>
</html>