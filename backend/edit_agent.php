<?php
session_start();
include 'config.php';
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$query = "SELECT * FROM agents WHERE id=$id";
$result = mysqli_query($conn, $query);
$agent = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $role = $_POST['role'];
    $name = $_POST['name'];
    $whatsapp = $_POST['whatsapp'];
    $phone = $_POST['phone'];
    $admin = $_POST['admin'];

    $updateQuery = "UPDATE agents SET role='$role', name='$name', whatsapp='$whatsapp', phone='$phone', admin='$admin' WHERE id=$id";
    if(mysqli_query($conn, $updateQuery)){
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Failed to update agent!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Agent</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow p-4" style="max-width: 600px; margin:auto;">
        <h3 class="mb-3">Edit Agent</h3>
        <?php if(isset($error)){ echo "<div class='alert alert-danger'>$error</div>"; } ?>
        <form method="POST">
            <div class="mb-2">
                <input type="text" name="role" class="form-control" placeholder="Role" value="<?php echo $agent['role']; ?>" required>
            </div>
            <div class="mb-2">
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $agent['name']; ?>" required>
            </div>
            <div class="mb-2">
                <input type="text" name="whatsapp" class="form-control" placeholder="WhatsApp" value="<?php echo $agent['whatsapp']; ?>">
            </div>
            <div class="mb-2">
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo $agent['phone']; ?>">
            </div>
            <div class="mb-2">
                <input type="text" name="admin" class="form-control" placeholder="Admin" value="<?php echo $agent['admin']; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update Agent</button>
            <a href="dashboard.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
</body>
</html>
