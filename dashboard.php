<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost","root","","velki_agents");

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $type = $_POST['type'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];

    $conn->query("INSERT INTO agents(name,type,contact,location) VALUES('$name','$type','$contact','$location')");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM agents WHERE id=$id");
}
?>

<h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>
<a href="logout.php">Logout</a>

<h3>Add Agent</h3>
<form method="POST">
    Name: <input type="text" name="name" required />
    Type: <input type="text" name="type" required />
    Contact: <input type="text" name="contact" />
    Location: <input type="text" name="location" />
    <input type="submit" name="add" value="Add Agent" />
</form>

<h3>Agents List</h3>
<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Type</th><th>Contact</th><th>Location</th><th>Action</th>
</tr>
<?php
$result = $conn->query("SELECT * FROM agents");
while($row = $result->fetch_assoc()){
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['type']}</td>
        <td>{$row['contact']}</td>
        <td>{$row['location']}</td>
        <td><a href='dashboard.php?delete={$row['id']}'>Delete</a></td>
    </tr>";
}
?>
</table>
