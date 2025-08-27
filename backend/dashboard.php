<?php
session_start();
include 'config.php';
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <div class="ms-auto">
            <span class="text-white me-3">Welcome, <?php echo $_SESSION['admin']; ?></span>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">

    <!-- Add Agent Form -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white">Add New Agent</div>
        <div class="card-body">
            <form method="POST" action="add_agent.php">
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" name="role" class="form-control" placeholder="Role" required>
                    </div>
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <input type="text" name="whatsapp" class="form-control" placeholder="WhatsApp">
                    </div>
                    <div class="col">
                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                    </div>
                </div>
                <div class="mb-2">
                    <input type="text" name="admin" class="form-control" placeholder="Admin">
                </div>
                <button type="submit" class="btn btn-success">Add Agent</button>
            </form>
        </div>
    </div>

    <!-- Agents Table -->
    <div class="card">
        <div class="card-header bg-info text-white">Agents List</div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>WhatsApp</th>
                        <th>Phone</th>
                        <th>Admin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM agents";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['role']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['whatsapp']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['admin']}</td>
                            <td><a href='delete_agent.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a></td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
