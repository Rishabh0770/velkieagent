<?php
// Database connection
$servername = "localhost";
$username   = "velkiage";
$password   = "rvJh5N)0PNb-03";
$dbname     = "velkiage_velki_agents";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) { die("Connection failed: ".$conn->connect_error); }

// Get role from navlink
$role = $_GET['role'] ?? 'ALL';

// Flag: apply HOME mapping only for Home navlink
$applyHomeMapping = (strtoupper($role) === 'ALL'); // Home navlink role = ALL

if(strtoupper($role) === 'ALL'){
    // Admin top, others shuffled
    $sql = "SELECT * FROM agents_list 
            ORDER BY (CASE WHEN role = 'Admin' THEN 0 ELSE 1 END), RAND()";
    $stmt = $conn->prepare($sql);
} else {
    // Specific role -> normal shuffle
    $sql = "SELECT * FROM agents_list WHERE role = ? ORDER BY RAND()";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $role);
}

$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    $i = 0; // counter for alternate colors
    while($row = $result->fetch_assoc()){
        $roleText = strtoupper(trim($row['role']));
        $displayRole = ($applyHomeMapping && $roleText !== "ADMIN") ? "HOME" : $roleText;

        // Alternate background colors
        $bgColor = ($i % 2 === 0) ? 'bg-pink-50' : 'bg-green-50';
        $i++;

        echo "<tr class='{$bgColor} hover:bg-yellow-100'> <!-- hover effect bhi add kiya -->
                <td class='px-2 py-2 text-center border-2 border-black font-bold text-black'>{$displayRole}</td>
                <td class='px-2 py-2 text-center border-2 border-black font-bold text-black'>".htmlspecialchars($row['name'])."</td>
                <td class='px-2 py-2 text-center border-2 border-black font-bold text-black'>".htmlspecialchars($row['agent_id'])."</td>
                <td class='px-2 py-2 text-center border-2 border-black'>
                  <a href='https://wa.me/".htmlspecialchars($row['whatsapp'])."' target='_blank'>
                    <img src='whatsapp.png' alt='WA' class='w-7 h-5 mx-auto'>
                  </a>
                </td>
                <td class='px-2 py-2 text-left border-2 border-black font-bold text-black'>
                  <a href='https://wa.me/".htmlspecialchars($row['whatsapp'])."' target='_blank' class='text-blue-600 underline hover:text-red-600'>".htmlspecialchars($row['phone'])."</a>
                </td>
                <td class='px-2 py-2 text-center border-2 border-black font-bold text-black'>
                  <a href='https://wa.me/".htmlspecialchars($row['admin'])."' target='_blank' class='text-blue-600 underline hover:text-red-600'>".htmlspecialchars($row['admin'])."</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6' class='text-center text-gray-500'>No data found</td></tr>";
}


$stmt->close();
$conn->close();
?>
