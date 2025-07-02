<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Mengambil data dari sesi
  $validUsername = isset($_SESSION['new_username']) ? $_SESSION['new_username'] : '';
  $validEmail = isset($_SESSION['new_email']) ? $_SESSION['new_email'] : '';
  $validPassword = isset($_SESSION['new_password']) ? $_SESSION['new_password'] : '';

  if ($username === $validUsername && $email === $validEmail && $password === $validPassword) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email; // Menyimpan email dalam sesi
    header("Location: 2welcome.php");
    exit();
  } else {
    $error = "Login gagal! Periksa username, email, atau password Anda.";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="sistem.py">
    <style>
      .navbar {
        background-color: rgba(255, 255, 255, 0.5);
      }
      .login-container {
        background-color: rgba(255, 255, 255, 0.5);
        border: 1px solid rgba(0, 0, 0, 0.125);
        padding: 20px;
        border-radius: 10px;
        backdrop-filter: blur(10px);
      }
    </style>
    <title>login</title>
  </head>
  <body style="background-image: url('https://wallpapers.com/images/hd/1920x1080-aesthetic-glrfk0ntspz3tvxg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <nav class="navbar navbar-dark ">
      <div class="container-fluid">
        <a class="navbar-brand"><img src="img/GM ENTERTAIMENT.jpg" alt="" width="90"> <i>GM ENTERTAIMENT</i></a>
        <form class="d-flex " action="bantuan.html" method="post">
          <a href="7bantuan.php" class="btn btn-outline-danger"><h6> <p><i class="bi bi-telephone-fill"></i> <b> Bermasalah</b></h4></a>
        </form>
      </div>
    </nav>

    <div>   
      <div class="row justify-content-center pt-4">
        <div class="col-2"><H1>LOGIN</H1></div>    
      </div>
      <div class="row justify-content-center">
        <div class="col-4 login-container">
          <form method="post" action="">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" required>
              <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <!-- Checkbox untuk melihat password -->
            <div class="mb-3 form-check d-flex justify-content-between">
              <div>
                <input type="checkbox" class="form-check-input" id="showPassword">
                <label class="form-check-label" for="showPassword">Lihat Password</label>
              </div>
              <div>
                <a href="6register.php" class="btn btn-link">Register</a>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
          <?php if (isset($error)): ?>
          <div class="alert alert-danger mt-3"><?php echo $error; ?></div>
          <?php endif; ?>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-4"> </div>
        <div class="col-3"> </div>
        <div class="col-3"></div>
        <div class="col-2"></div>
      </div>

      <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script>
        // JavaScript untuk menampilkan atau menyembunyikan password dengan cara mengubah jenis type dari psw ke text 
        const showPasswordCheckbox = document.getElementById('showPassword');
        const passwordField = document.getElementById('password');

        showPasswordCheckbox.addEventListener('change', function () {
          if (this.checked) {
            passwordField.type = 'text'; // Menampilkan password
          } else {
            passwordField.type = 'password'; // Menyembunyikan password
          }
        });
      </script>

    </body>
</html>
