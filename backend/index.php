<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card shadow-lg p-4">
          <div class="text-center mb-4">
            <h3 class="fw-bold">Admin Login</h3>
            <p class="text-muted">Enter your credentials to access</p>
          </div>
          <?php
            if(isset($_SESSION['error'])){
                echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
                unset($_SESSION['error']);
            }
          ?>
          <form action="login.php" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter password" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="mt-3 text-center">
              <a href="#" class="text-decoration-none">Forgot Password?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
