<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.html");
    exit;
}

include 'db.php';
$admin = $_SESSION['admin'];

// Form submitted
if(isset($_POST['update'])){
    $id = intval($_POST['id']);
    $role = $conn->real_escape_string($_POST['role']);
    $name = $conn->real_escape_string($_POST['name']);
    $agent_id = $conn->real_escape_string($_POST['agent_id']);
    $whatsapp = $conn->real_escape_string($_POST['whatsapp']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "UPDATE agents_list SET role='$role', name='$name', agent_id='$agent_id', whatsapp='$whatsapp', phone='$phone' 
            WHERE id='$id' AND admin='$admin'";

    if($conn->query($sql) === TRUE){
        header("Location: allagent.php?msg=updated");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Load agent data
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM agents_list WHERE id='$id' AND admin='$admin'";
    $result = $conn->query($sql);
    if($result->num_rows == 0){
        header("Location: allagent.php");
        exit;
    }
    $agent = $result->fetch_assoc();
} else {
    header("Location: allagent.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Agent - VelkiAgentList</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { background: #f0f2f5; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
.card { border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); padding: 20px; margin-top: 50px; }
.btn-primary { background-color: #8ab92d; border-color: #8ab92d; }
.btn-primary:hover { background-color: #5defcf; border-color: #5defcf; }
</style>
</head>
<body>
<div class="container">
  <div class="card mx-auto" style="max-width: 600px;">
    <h4 class="text-center mb-4">Edit Agent</h4>
    <form method="POST" action="">
      <input type="hidden" name="id" value="<?php echo $agent['id']; ?>">
      <div class="mb-3">
        <label>Role</label>
        <input type="text" name="role" class="form-control" value="<?php echo htmlspecialchars($agent['role']); ?>" required>
      </div>
      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($agent['name']); ?>" required>
      </div>
      <div class="mb-3">
        <label>Agent ID</label>
        <input type="text" name="agent_id" class="form-control" value="<?php echo htmlspecialchars($agent['agent_id']); ?>" required>
      </div>
      <div class="mb-3">
        <label>WhatsApp</label>
        <input type="text" name="whatsapp" class="form-control" value="<?php echo htmlspecialchars($agent['whatsapp']); ?>" required>
      </div>
      <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="<?php echo htmlspecialchars($agent['phone']); ?>" required>
      </div>
      <button type="submit" name="update" class="btn btn-primary w-100">Update Agent</button>
    </form>
  </div>
</
