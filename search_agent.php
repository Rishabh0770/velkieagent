<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username   = "velkiage";
$password   = "rvJh5N)0PNb-03";
$dbname     = "velkiage_velki_agents";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: ".$conn->connect_error);

// Get POST data and sanitize
$agentType = trim($_POST['agentType'] ?? '');
$agentId   = trim($_POST['agentId'] ?? '');

// Input validation
if(empty($agentType) || empty($agentId)){
    echo "<div style='padding:10px; color:#ff0000; font-weight:600;'>Please select a role and enter Agent ID.</div>";
    exit;
}

if(!is_numeric($agentId)){
    echo "<div style='padding:10px; color:#ff0000; font-weight:600;'>Agent ID must be a number.</div>";
    exit;
}

// Make role case-insensitive
$agentType = ucfirst(strtolower($agentType));

// Prepare statement
$stmt = $conn->prepare("SELECT * FROM agents_list WHERE role = ? AND agent_id = ?");
$stmt->bind_param("si", $agentType, $agentId);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    $agent = $result->fetch_assoc();

    // Phone numbers clickable WhatsApp links
    $whatsappLink = "<a href='https://wa.me/{$agent['whatsapp']}' target='_blank' style='color:#25D366; text-decoration:none;'>{$agent['whatsapp']}</a>";
    $phoneLink    = "<a href='https://wa.me/{$agent['phone']}' target='_blank' style='color:#25D366; text-decoration:none;'>{$agent['phone']}</a>";

    // Admin clickable (fixed WhatsApp number)
    $adminNumber = "7018434170";
    $adminLink   = "<a href='https://wa.me/{$adminNumber}' target='_blank' style='color:#25D366; text-decoration:none;'>{$agent['admin']}</a>";

    echo "<div style='padding:15px; border:2px solid #8ab92d; border-radius:10px; background:#f0fff9; color:#333; font-weight:500; max-width:400px; margin:auto;'>
            <p><strong>ID:</strong> {$agent['agent_id']}</p>
            <p><strong>Name:</strong> {$agent['name']}</p>
            <p><strong>Role:</strong> {$agent['role']}</p>
            <p><strong>WhatsApp:</strong> {$whatsappLink}</p>
            <p><strong>Phone:</strong> {$phoneLink}</p>
            <p><strong>Added by:</strong> {$adminLink}</p>
          </div>";
} else {
    echo "<div style='padding:10px; color:#ff0000; font-weight:600;'>No agent found with this ID and role.</div>";
}

$stmt->close();
$conn->close();
?>
