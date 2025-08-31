<?php
session_start();

// Session protection
if(!isset($_SESSION['admin'])){
    header("Location: login.html");
    exit;
}

include 'db.php'; // DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely
    $role     = $conn->real_escape_string($_POST['role']);
    $name     = $conn->real_escape_string($_POST['name']);
    $agent_id = $conn->real_escape_string($_POST['agent_id']);
    $whatsapp = $conn->real_escape_string($_POST['whatsapp']);
    $phone    = $conn->real_escape_string($_POST['phone']);
    $admin    = $conn->real_escape_string($_SESSION['admin']); // auto fill logged-in admin

    // Insert into table
    $sql = "INSERT INTO agents_list (role, name, agent_id, whatsapp, phone, admin) 
            VALUES ('$role', '$name', '$agent_id', '$whatsapp', '$phone', '$admin')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Agent Added Successfully!'); window.location.href='add_agent.html';</script>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}

$conn->close();
?>
