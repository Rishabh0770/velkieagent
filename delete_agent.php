<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.html");
    exit;
}

include 'db.php';
$admin = $_SESSION['admin'];

if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    // Check agent belongs to this admin
    $sql = "SELECT * FROM agents_list WHERE id='$id' AND admin='$admin'";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0){
        $deleteSql = "DELETE FROM agents_list WHERE id='$id' AND admin='$admin'";
        if($conn->query($deleteSql) === TRUE){
            header("Location: allagent.php?msg=deleted");
            exit;
        } else {
            die("Error deleting record: " . $conn->error);
        }
    } else {
        header("Location: allagent.php?msg=notfound");
        exit;
    }
} else {
    header("Location: allagent.php");
    exit;
}
?>
