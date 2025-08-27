<?php
session_start();
include 'config.php';

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

if(isset($_POST['add'])){
    $role = $_POST['role'];
    $name = $_POST['name'];
    $whatsapp = $_POST['whatsapp'];
    $phone = $_POST['phone'];
    $admin = $_POST['admin'];

    $query = "INSERT INTO agents (role, name, whatsapp, phone, admin) VALUES ('$role', '$name', '$whatsapp', '$phone', '$admin')";
    mysqli_query($conn, $query);
    header("Location: dashboard.php");
}
?>
