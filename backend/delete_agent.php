<?php
session_start();
include 'config.php';

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM agents WHERE id=$id";
    mysqli_query($conn, $query);
}

header("Location: dashboard.php");
?>
