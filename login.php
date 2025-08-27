<?php
session_start();
$conn = new mysqli("localhost","root","","velki_agents"); // DB credentials

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']); // match DB hash

    $query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if($result->num_rows == 1){
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid Credentials!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<h2>Admin Login</h2>
<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    <input type="text" name="username" placeholder="Username" required /><br><br>
    <input type="password" name="password" placeholder="Password" required /><br><br>
    <input type="submit" name="login" value="Login" />
</form>
</body>
</html>
