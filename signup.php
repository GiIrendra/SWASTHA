<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $showalert = false;
    $showError = false;
    require 'partials/_dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    

    // Checking weather user already exists or not

    $existSql = "SELECT * FROM `user` WHERE `username` LIKE '$username'";
    $result = mysqli_query($conn, $existSql);
    $exists_num = mysqli_num_rows($result);

    if ($exists_num > 0) {
        $showError = "User already exists!";
    } else {
        if ($password == null) {
            $showError = " Please enter username and password";
        } else if ($password == $cpassword) {
            $hpss = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` ( `username`, `password`, `dt`) VALUES ('$username', '$hpss', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showalert = true;
            }
        } else {
            $showError = "Password do not match";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/_style1.css">

</head>

<body>
  <?php
  require 'partials/_nav.php';
  ?>
  <!--------------------------------------error handling------------------------------------------------>
  <?php
    if ($showalert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now is created and you can ligin!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>' . $showError . ' 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

  <!------------------------------------------login form------------------------------------------------>

  <div class="container">
    <form action="/dtic/signup.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <label for="cpassword">Confirm Password:</label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Signup">
      </div>
    </form>
  </div>
  <!----------------------------------------------Script------------------------------------------------>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">

  </script>
</body>

</html>