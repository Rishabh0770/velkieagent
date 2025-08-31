<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.html");
    exit;
}

include 'db.php';
$admin = $_SESSION['admin'];
$sql = "SELECT * FROM agents_list WHERE admin='$admin' ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>All Agents - VelkiAgentList</title>
<script src="https://cdn.tailwindcss.com"></script>
<!-- Add in <head> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<nav class="bg-lime-600 shadow w-full">
  <div class="max-w-full mx-auto px-4 py-3 flex justify-between items-center">
    <a href="index.php" class="text-white font-semibold text-lg">VelkiAgentList</a>
    <span class="text-sm text-white">Logged in as <b><?php echo htmlspecialchars($admin); ?></b></span>
  </div>
</nav>

<!-- Main Section -->
<div class="w-full max-w-full mx-auto p-2 sm:p-4">
  <h2 class="text-xl sm:text-2xl font-bold text-center text-gray-800 my-4">
    All Agents Added by <?php echo htmlspecialchars($admin); ?>
  </h2>
  
  <div class="w-full bg-white shadow-lg rounded-xl overflow-x-auto">
    <table class="w-full text-xs sm:text-sm border border-gray-300 divide-y divide-gray-300 table-auto">
      <thead class="bg-lime-500 text-white">
        <tr>
          <th class="px-1 py-1 border border-gray-300">Role</th>
          <th class="px-1 py-1 border border-gray-300">Name</th>
          <th class="px-1 py-1 border border-gray-300">ID</th>
          <th class="px-1 py-1 border border-gray-300 text-center">WA</th>
          <th class="px-1 py-1 border border-gray-300">Phone</th>
          <th class="px-1 py-1 border border-gray-300">Admin</th>
          <th class="px-1 py-1 border border-gray-300">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-300">
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr class="hover:bg-gray-50">
                <td class="px-1 py-1 border border-gray-300 font-medium">'.htmlspecialchars($row['role']).'</td>
                <td class="px-1 py-1 border border-gray-300">'.htmlspecialchars($row['name']).'</td>
                <td class="px-1 py-1 border border-gray-300 text-center">'.htmlspecialchars($row['agent_id']).'</td>
                <td class="px-1 py-1 border border-gray-300 text-center">
                  <a href="https://wa.me/'.htmlspecialchars($row['whatsapp']).'" target="_blank">
                    <img src="whatsapp.png" alt="WhatsApp" class="h-5 w-5 mx-auto">
                  </a>
                </td>
                <td class="px-1 py-1 border border-gray-300 text-blue-600 hover:underline">
                  <a href="tel:'.htmlspecialchars($row['phone']).'">'.htmlspecialchars($row['phone']).'</a>
                </td>
                <td class="px-1 py-1 border border-gray-300">'.htmlspecialchars($row['admin']).'</td>
                <td class="px-1 py-1 border border-gray-300 flex flex-col items-center gap-1">
                    <a href="edit_agent.php?id='.htmlspecialchars($row['id']).'" class="bg-yellow-400 hover:bg-yellow-500 text-white p-1 rounded-full">
                        <i class="bi bi-pencil-fill text-sm"></i>
                    </a>
                    <a href="delete_agent.php?id='.htmlspecialchars($row['id']).'" 
                       class="bg-red-500 hover:bg-red-600 text-white p-1 rounded-full"
                       onclick="return confirm(\'Are you sure you want to delete this agent?\');">
                       <i class="bi bi-trash-fill text-sm"></i>
                    </a>
                </td>
              </tr>';
    }
} else {
    echo '<tr><td colspan="7" class="px-2 py-3 text-center text-gray-500">No data found</td></tr>';
}
?>

      </tbody>
    </table>
  </div>
</div>

<!-- Footer -->
<footer class="bg-lime-600 text-white text-center py-4 mt-6 w-full">
  &copy; 2025 VelkiAgentList. All Rights Reserved | Powered by <b>ARMAN MALIK</b>
</footer>

</body>
</html>
