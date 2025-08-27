<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
        <p>You are logged in to the admin panel.</p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
