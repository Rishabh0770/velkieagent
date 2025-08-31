<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(session_status() == PHP_SESSION_NONE){ session_start(); }

include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Check if user exists
$stmt = $conn->prepare("SELECT * FROM admin_users WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 1){
    $user = $result->fetch_assoc();
    if(md5($password) === $user['password']){   // MD5 check
        $_SESSION['admin'] = $user['username'];
        header("Location: add_agent.html");
        exit;
    } else {
        echo "<script>alert('Invalid password!'); window.location.href='login.html';</script>";
    }
} else {
    echo "<script>alert('User not found!'); window.location.href='login.html';</script>";
}
?>
