<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $login = false;
  $showError = false;
  require 'partials/_dbconnect.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  // $sql = "Select * from user where username =='$username' AND password =='$password'";
  $sql = "SELECT * FROM `user` WHERE `username` LIKE '$username'";

  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  // echo $num;
}
if ($num == 1) {
  while ($rows = mysqli_fetch_assoc($result)) {
    if ($pck = password_verify($password, $rows['password'])) {
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header('location:index.php');
    }
    else{
      $showError="Password dp not match";
    }
  }
} else if ($num === 0 ) {
  $showError = "Invalid User";
} 
else {
  $showError = false;
} 
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Login
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/_style1.css">
</head>


<body>
  <?php
    require 'partials/_nav.php';
  ?>
 <!--------------------------------------error handling------------------------------------------------>
<?php
  if ($showError) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>' . $showError . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>

 <!------------------------------------------login form------------------------------------------------>

  <div class="container">
    <form action="" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
 <!----------------------------------------------Script------------------------------------------------>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>