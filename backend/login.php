<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])){
            $_SESSION['admin'] = $user['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Invalid password";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "User not found";
        header("Location: index.php");
        exit();
    }
}
?>
