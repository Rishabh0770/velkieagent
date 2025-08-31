<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";  
$username   = "velkiage";   // tumhara db username
$password   = "rvJh5N)0PNb-03";   // tumhara db password
$database   = "velkiage_velki_agents";  // ✅ correct db name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from agents_list table
$sql = "SELECT role, name, agent_id, whatsapp, phone, admin 
        FROM agents_list 
        ORDER BY RAND()";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <link rel="stylesheet" href="https://agentallvelki.com/public/styles/tailwind/tailwind.min.css">
    <link rel="stylesheet" href="https://agentallvelki.com/public/styles/css/style.css">
    <script src="https://agentallvelki.com/public/styles/tailwind/tailwindcss3-4.js"></script>
    <script src="https://agentallvelki.com/public/styles/tailwind/tailwind-config.js"></script>
  <title>Velki Agent List - ভেলকি এজেন্ট লিস্ট Online Betting Site BD - agentallvelki.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">

   <meta property="og:title" content="Velki Agent List - ভেলকি এজেন্ট লিস্ট Online Betting Site BD" />
<meta property="og:description" content="Explore the trusted Velki Agent List (ভেলকি এজেন্ট লিস্ট) for secure online betting. Join Velki, a reliable platform offering top-notch betting experiences and trusted agents!" />
<meta property="og:image" content="https://agentallvelki.com/public/default-image.jpg" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">




    <link rel="icon" type="image/png" sizes="32x32" href="https://agentallvelki.com/public/favicon.ico">
    <link href="https://fonts.cdnfonts.com/css/solaimanlipi" rel="stylesheet">
 <meta name="google-site-verification" content="Ko_hBf1ZBLIN1VR09sKtkMdh4nfst1llwACsMnb21NY" />
 <meta name="google-site-verification" content="fDHTIdyNCy5z8UCHXixUffvPdKqiYGwToOwYuF3gDN0"/>
 <!-- Event snippet for Page view conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-16686856186/5tIICLfGl_UZEPrv9JQ-',
      'value': 1.0,
      'currency': 'USD',
      'event_callback': callback
  });
  return false;
}
</script>


  <style>
    body { margin:0; font-family: Arial, sans-serif; background:#fff; }

    /* container for margins */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* top nav strip */
    .top-nav {
      background: #f9f9f9;
      padding: 5px 0;
      font-size: 14px;
      color: #b00000;
      font-weight: bold;
    }
    .top-nav .container {
      display: flex;
      justify-content: flex-end;
    }

/* Main Navbar */
.main-nav {
  width: 100%; /* full width */
  box-sizing: border-box; /* padding include ho width me */
  padding: 12px 15px;
}

.main-nav .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%; /* container bhi full width */
  margin: 0 auto;
  flex-wrap: nowrap; /* mobile me wrap na ho */
}

/* Logo */
.logo img {
  height: 40px;
  max-width: 100%;
  object-fit: contain;
}

/* Date Box */
.date-box {
  border: 2px solid #000000ff;
  border-radius: 30px;
  padding: 6px 12px;
  display: flex;
  align-items: center;
  gap: 8px;
  box-sizing: border-box;
}

.date-num {
  font-size: 18px;
  font-weight: bold;
}

.date-text {
  font-size: 12px;
  line-height: 1.2;
  text-align: left;
}
/* Responsive for Mobile */
@media (max-width: 768px) {
  .main-nav {
    padding: 10px 12px; /* thoda kam padding mobile me */
  }

  .main-nav .container {
    flex-direction: row;
    justify-content: space-between;
  }

  .date-box {
    padding: 4px 8px;
  }

  /* Center text hide on mobile if needed */
  .nav-center {
    display: none;
  }
}


    /* red line */
    .red-line {
      border-top: 2px solid red;
    }

    /* secondary nav */
.sub-nav {
  padding: 14px 0;
}

.sub-nav .container {
  display: flex;
  align-items: center;
  justify-content: center; /* links center */
  gap: 30px;
  flex-wrap: wrap;
}

.sub-nav a {
  text-decoration: none;
  color: black;
  font-weight: 600;
  padding: 10px 18px;
  border-radius: 8px;
  transition: 0.3s;
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 18px;
}

.sub-nav a i {
  font-size: 22px;
}

.sub-nav a:hover,
.sub-nav a.active {
  background: #000000; /* red hover/active bg */
  color: white; /* text white */
}

.home-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 8px;
  background: #d63a3a; /* home icon same color */
  color: white;
  font-size: 22px;
  transition: 0.3s;
}

.home-icon:hover {
  transform: scale(1.1);
  box-shadow: 0 0 10px rgba(214,58,58,0.6);
}

/* Responsive for mobile - no scroll, icons removed */
@media (max-width: 768px) {
  .sub-nav {
    padding: 6px 0; /* vertical padding chhota */
  }

  .sub-nav .container {
    justify-content: space-between; /* evenly spread links */
    gap: 0; /* gap remove */
    flex-wrap: nowrap; /* ek line me rahe */
    width: 100%;
  }

  .sub-nav a {
    padding: 6px 0;       /* top-bottom padding chhota */
    font-size: 12px;      /* chhota text */
    flex: 1;              /* equally spread */
    justify-content: center; /* text center */
  }

  .sub-nav a i {
    display: none; /* icons hide */
  }
}
.read-text strong {
  color: #000000; /* Dark black */
}

   .whatsapp-icon {
  width: 20px;        /* adjust size as needed */
  height: 20px;
  object-fit: contain; /* keeps the icon proportional */
  transition: transform 0.3s; /* optional: for hover effect */
}

.whatsapp-icon:hover {
  transform: scale(1.2); /* optional: small zoom on hover */
}
.whatsapp-link a {
  color: #1DA851;           /* default greenish-blue color */
  text-decoration: none;     /* no underline by default */
  transition: all 0.3s;
}

.whatsapp-link a:hover {
  color: #007BFF;           /* hover color, different shade of blue */
  text-decoration: underline; /* underline appears on hover */
}

@media (max-width: 768px) {
  .agent-form-wrapper {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
}


  
#agentForm button:hover {
    background-color: #218838;
    box-shadow:0 4px 10px rgba(0,0,0,0.25);
    transform: translateY(-1px);
}

@media (max-width: 576px) {
    #agentForm {
        flex-direction: column;
        align-items: center;
    }
    #agentForm .form-select,
    #agentForm .form-control,
    #agentForm button {
        flex: 1 1 100%;
        max-width: 300px;
        text-align: center;
    }
    #agentForm button {
        margin-top: 10px;
    }
}

#agentSearchSection h2 {
    text-align: center;
}


</style>
<style>
.marquee-container {
  display: flex;
  width: max-content;
  animation: marquee 15s linear infinite;
}

.marquee-text {
  white-space: nowrap;
  padding-right: 3rem;  /* do line ke beech thoda gap */
  font-size: 1.1rem;    /* 🔥 font size thoda bara */
  font-weight: 600;
  line-height: 2.5rem;  /* 🔥 height thoda increase */
}

@keyframes marquee {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
</style>

<style>
/* Hamburger button */
.hamburger {
  font-size: 30px;
  cursor: pointer;
  color: #d63a3a; /* theme red */
  transition: transform 0.2s ease-in-out;
  z-index: 1100;
  position: relative;
}
.hamburger:hover {
  transform: scale(1.1);
}

/* Hamburger menu */
.hamburger-menu {
  position: fixed;
  top: 0;
  left: -70%;
  width: 70%;
  max-width: 300px;   /* optional: large screen mein fix width */
  height: 100%;
  background: #222;
  color: white;
  display: flex;
  flex-direction: column;
  transition: left 0.4s ease-in-out;
  z-index: 1050;
  box-shadow: 2px 0 15px rgba(0,0,0,0.5);
}

/* Menu links */
.hamburger-menu a {
  padding: 15px 20px;
  text-decoration: none;
  color: white;
  font-size: 18px;
  border-bottom: 1px solid rgba(255,255,255,0.15);
  transition: background 0.2s, padding-left 0.2s;
}
.hamburger-menu a:hover {
  background: rgba(255,255,255,0.12);
  padding-left: 25px;   /* little slide effect */
}

/* Overlay only covers remaining screen */
.overlay {
  position: fixed;
  top: 0;
  left: 100%;       /* 🔹 overlay starts AFTER menu */
  width: 0%;      /* 🔹 only cover remaining area */
  height: 100%;
  background: rgba(0,0,0,0.5);
  display: none;
  z-index: 1000;
}

.hamburger-menu.active ~ .overlay {
  display: block;
}

/* Active state */
.hamburger-menu.active { left: 0; }
.overlay.active { display: block; }

/* Heading top fixed */
.menu-heading {
  text-align: center;
  font-size: 20px;
  font-weight: bold;
  color: #fff;
  background: #d63a3a;
  padding: 14px;
  border-bottom: 1px solid rgba(255,255,255,0.2);
  margin: 0;
  letter-spacing: 1px;
}

.faq-list a {
    display: flex;
    gap: 10px;
    text-decoration: none;
    color: black; /* default color */
}

.faq-list a:hover {
    background-color: #f0f0f0; /* optional, ya jo color chahiye */
    color: black; /* text hamesha black rahe hover me bhi */
}

.faq-list a div h1,
.faq-list a div p {
    margin: 0;
    color: inherit; /* inherit ensures hover me bhi black rahe */
}

</style>
</head>
<body>

  <!-- top nav -->
  <div class="top-nav">
  <div class="container">
    <a href="./nav/customer.html" style="color: inherit; text-decoration: none;">
      কাস্টমার সার্ভিস
    </a>
  </div>
</div>

<!-- main navbar -->
<div class="main-nav">
  <div class="container" style="display:flex; align-items:center; justify-content:space-between;">

    <!-- Logo -->
    <div class="logo">
      <a href="index.php">
        <img src="logo1.0.png" alt="Logo">
      </a>
    </div>

    <!-- Center Navbar Text -->
    <div class="nav-center">
      <a href="https://velkiagentslistbd.com" class="nav-link">www.vekliagentlist.com</a>
    </div>

    <!-- Right Side (Date + Hamburger) -->
    <div style="display:flex; align-items:center; gap:15px;">
      <div class="date-box">
        <div class="date-num" id="dayNum">26</div>
        <div class="date-text">
          <span id="dayName">Tue</span><br>
          <span id="monthName">Aug</span>
        </div>
      </div>

      <!-- Hamburger Icon -->
      <div class="hamburger" id="hamburgerBtn">
        <i class="bi bi-list"></i>
      </div>
    </div>
  </div>
</div>

<!-- red line -->
<div class="red-line"></div>

<!-- Secondary Nav -->
<div class="sub-nav">
  <div class="container">
    <a href="#" data-type="ALL" class="active"><i class="bi bi-house-door-fill"></i> Home</a>
    <a href="#" data-type="ADMIN"><i class="bi bi-shield-lock-fill"></i> Admin</a>
    <a href="#" data-type="SUB-ADMIN"><i class="bi bi-person-badge-fill"></i> Sub-Admin</a>
    <a href="#" data-type="SUPER"><i class="bi bi-person-gear"></i> Super</a>
    <a href="#" data-type="MASTER"><i class="bi bi-person-fill"></i> Master</a>
  </div>
</div>  



<!-- Hamburger Menu -->
<div class="hamburger-menu" id="menu">
  <!-- Heading -->
  <div class="menu-heading">
    MENU
    <span id="closeBtn" style="float:right; cursor:pointer;">✖</span>
  </div>

  <!-- FAQ Heading -->
    <p><i class="bi bi-question-circle"></i> Frequently Asked Questions</p>
    <a href="../cards/card8.html"><i class="bi bi-pencil-square"></i> How to Create an Account?</a> 
    <a href="../cards/card4.html"><i class="bi bi-person-plus"></i> How To Become a Velki Agent</a>
    <br>
    <p><i class="bi bi-people-fill"></i> Agent List</p>
  <a href="./nav/admin.html"><i class="bi bi-shield-lock-fill"></i> Site Admin</a>
  <a href="./nav/subadmin.html"><i class="bi bi-person-badge-fill"></i> Sub Admin</a>
  <a href="./nav/super.html"><i class="bi bi-star-fill"></i> Super Agent</a>
  <a href="#"><i class="bi bi-award-fill"></i> Master Agent</a>
  <a href="./nav/customer.html"><i class="bi bi-headset"></i> Customer Service</a>
  <a href="https://velki123.com/#/home"><i class="bi bi-link-45deg"></i> Link</a>
</div>

<!-- Overlay -->
<div class="overlay" id="overlay"></div>




<!-- Agent Search Section -->
<div class="flex flex-col items-center px-4 py-8">

  <!-- Heading -->
  <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 text-center">
    Search Agent by ID
  </h2>

  <!-- Form Card -->
  <div class="bg-white shadow-lg rounded-xl p-5 w-full max-w-lg">
    
    <!-- Role + ID Inputs -->
    <div class="flex flex-col sm:flex-row gap-3 mb-4">
      <select id="agentType" name="agentType"
        class="w-full sm:w-1/2 border-2 border-gray-300 rounded-lg px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">
        <option value="">All Roles</option>
        <option value="Admin">Admin</option>
        <option value="Sub-Admin">Sub-Admin</option>
        <option value="Super">Super</option>
        <option value="Master">Master</option>
      </select>

      <input type="text" id="agentId" name="agentId" placeholder="Enter Agent ID"
        class="w-full sm:w-1/2 border-2 border-gray-300 rounded-lg px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">
    </div>

    <!-- Search Button -->
    <div class="flex justify-center">
      <button id="searchBtn"
        class="bg-gradient-to-r from-green-500 to-teal-400 text-white font-semibold px-6 py-2 rounded-lg shadow-md hover:shadow-lg transition w-full sm:w-auto">
        Search
      </button>
    </div>
  </div>

  <!-- Result Box -->
  <div id="agentResult" class="w-full max-w-lg mt-6"></div>
</div>



<script>
$(document).ready(function(){
    $("#searchBtn").on("click", function(e){
        e.preventDefault();

        var formData = {
            agentType: $("#agentType").val(),
            agentId: $("#agentId").val()
        };

        // Show loading spinner
        $("#agentResult").html(`
            <div class="text-center p-3" style="border-radius:10px; background:#f0f8ff; box-shadow:0 4px 10px rgba(0,0,0,0.1); max-width:600px; margin:auto;">
                <div class="spinner-border text-success" role="status" style="width:2rem; height:2rem;">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-2 mb-0" style="font-weight:500; color:#555;">Searching agent...</p>
            </div>
        `);

        $.ajax({
            url: 'search_agent.php',
            type: 'POST',
            data: formData,
            success: function(data){
                $("#agentResult").hide().html(data).fadeIn(300); // direct PHP ka response inject
            },
            error: function(){
                $("#agentResult").html(`
                    <div class="text-center p-3" style="border-radius:10px; background:#ffe5e5; box-shadow:0 4px 10px rgba(0,0,0,0.1); max-width:600px; margin:auto; color:red; font-weight:600;">
                        Error fetching data!
                    </div>
                `);
            }
        });
    });
});
$(document).ready(function(){

    // Existing search button code yahan rahega...

    // Navigation tab click event
    $(".sub-nav a").on("click", function(e){
        e.preventDefault();

        // sabse pehle active class reset karo
        $(".sub-nav a").removeClass("active");
        $(this).addClass("active");

        let type = $(this).data("type"); // jis nav pe click kiya uska data-type

        if(type === "ALL" || type === "ADMIN"){
            // hide search section
            $(".flex.flex-col.items-center.px-4.py-8").hide();
        } else {
            // show search section
            $(".flex.flex-col.items-center.px-4.py-8").show();
        }
    });

    // By default Home active hai, toh search section hide kar dete hai
    $(".flex.flex-col.items-center.px-4.py-8").hide();
});

</script>



<div class="w-full px-2 sm:px-4 lg:px-8 mt-4">
  <div class="border border-gray-300 rounded-xl shadow-lg overflow-hidden">

    <!-- Header -->
    <div class="bg-gradient-to-r from-red-500 to-red-700 text-white text-center font-bold text-lg sm:text-xl py-3">
      VELKI AGENT LIST
    </div>
    <hr>
    <!-- Notice -->
<div class="overflow-hidden bg-black text-white border-b border-gray-300">
  <div class="marquee-container">
    <p class="marquee-text">
      হোয়াটসঅ্যাপ ব্যতীত অন্য কোন app এর মাধ্যমে যোগাযোগ বা লেনদেন করা যাবে না এবং করলে তা গ্রহণযোগ্য হবে না
    </p>
    <p class="marquee-text">
      হোয়াটসঅ্যাপ ব্যতীত অন্য কোন app এর মাধ্যমে যোগাযোগ বা লেনদেন করা যাবে না এবং করলে তা গ্রহণযোগ্য হবে না
    </p>
  </div>
</div>


<div class="w-full overflow-hidden mt-0">
  <table class="agent-table w-full border-2 border-black text-xs sm:text-sm table-fixed border-collapse">
    <thead class="bg-blue-900 text-white">
  <tr>
    <th class="px-2 py-2 w-[19%] text-center border-2 border-black bg-blue-900">Type</th>
    <th class="px-2 py-2 w-[19%] text-center border-2 border-black bg-blue-900">Name</th>
    <th class="px-2 py-2 w-[12%] text-center border-2 border-black bg-blue-900">ID</th>
    <th class="px-2 py-2 w-[10%] text-center border-2 border-black bg-blue-900">WA</th>
    <th class="px-2 py-2 w-[27%] text-center border-2 border-black bg-blue-900">Phone</th>
    <th class="px-2 py-2 w-[15%] text-center border-2 border-black bg-blue-900">Admin</th>
  </tr>
</thead>

   <tbody class="text-black font-bold">
<?php
if ($result->num_rows > 0) {
    $i = 0; // row counter
    while($row = $result->fetch_assoc()) {
        $role = strtoupper(trim($row['role']));
        $displayRole = ($role === "ADMIN") ? "ADMIN" : "HOME";

        // Alternate row pastel colors
        $bgColor = ($i % 2 === 0) ? 'bg-pink-50' : 'bg-green-50';
        $i++;

        echo '<tr class="'.$bgColor.'">
                <td class="px-2 py-2 text-center border-2 border-black font-bold text-black">'.$displayRole.'</td>
                <td class="px-2 py-2 text-center border-2 border-black font-bold text-black">'.htmlspecialchars($row['name']).'</td>
                <td class="px-2 py-2 text-center border-2 border-black font-bold text-black">'.htmlspecialchars($row['agent_id']).'</td>
                <td class="px-2 py-2 text-center border-2 border-black">
                  <a href="https://wa.me/'.htmlspecialchars($row['phone']).'" target="_blank">
                    <img src="whatsapp.png" alt="WA" class="w-7 h-5 mx-auto">
                  </a>
                </td>
                <td class="px-2 py-2 text-left border-2 border-black font-bold text-black">
                  <a href="https://wa.me/'.htmlspecialchars($row['phone']).'" target="_blank" class="text-blue-600 underline hover:text-red-600">
                    '.htmlspecialchars($row['phone']).'
                  </a>
                </td>
                <td class="px-2 py-2 text-center border-2 border-black font-bold text-black">
                  <a href="https://wa.me/'.htmlspecialchars($row['admin']).'" target="_blank" class="text-blue-600 underline hover:text-red-600">
                    '.htmlspecialchars($row['admin']).'
                  </a>
                </td>
              </tr>';
    }
} else {
    echo '<tr><td colspan="6" class="text-center text-gray-500">No data found</td></tr>';
}
?>
</tbody>

  </table>
</div>




        
<script>
// --- Select elements (existing JS) ---
const links = document.querySelectorAll('.sub-nav a');
const tableBody = document.querySelector('.agent-table tbody');
const agentForm = document.getElementById('agentForm');
const agentTypeInput = document.getElementById('agentType');
const agentIdInput = document.getElementById('agentId');
const agentResultDiv = document.getElementById('agentResult');
const agentSearchSection = document.getElementById('agentSearchSection');

// ✅ Example: search/filter without touching classes
function filterAgents(searchTerm) {
    const rows = tableBody.querySelectorAll('tr');
    rows.forEach(row => {
        // content check
        if (row.textContent.toLowerCase().includes(searchTerm.toLowerCase())) {
            row.style.display = '';   // show row
        } else {
            row.style.display = 'none'; // hide row
        }
    });
}

// --- Example: input listener ---
agentIdInput.addEventListener('input', () => {
    filterAgents(agentIdInput.value);
});

// Notice: tableBody.innerHTML is NEVER overwritten
// Classes like 'px-2 py-2 text-center border-2 border-black font-bold text-black'
// are untouched and Tailwind will work normally


// --- Fetch agents dynamically ---
function fetchAgents(role = 'ALL') {
    // Add unique params to force shuffle on every fetch
    const url = `fetch_agents.php?role=${encodeURIComponent(role)}&t=${Date.now()}&rand=${Math.random()}`;

    fetch(url, { cache: "no-store" }) // force no cache
        .then(res => res.text())
        .then(html => {
            tableBody.innerHTML = html; // Fill table body with shuffled data
        })
        .catch(err => {
            console.error("Fetch error:", err);
            tableBody.innerHTML = "<tr><td colspan='6'>Error fetching data!</td></tr>";
        });
}

// --- Toggle search bar visibility ---
function toggleSearchBar(role) {
    if (role.toUpperCase() === 'ALL' || role.toUpperCase() === 'ADMIN') {
        agentSearchSection.style.display = 'none';
        agentTypeInput.value = '';
        agentIdInput.value = '';
        agentResultDiv.innerHTML = '';
    } else {
        agentSearchSection.style.display = 'flex';
    }
}

// --- Handle nav clicks ---
links.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const type = link.getAttribute('data-type');

        fetchAgents(type);      // Load table for selected role (shuffled)
        toggleSearchBar(type);  // Show/hide search

        // Update active class
        links.forEach(l => l.classList.remove('active'));
        link.classList.add('active');

        // Update URL hash
        history.pushState(null, null, '#' + type);
    });
});

// --- On page load ---
window.addEventListener('DOMContentLoaded', () => {
    const hash = location.hash.replace('#', '') || 'ALL';
    fetchAgents(hash);      // Initial load with shuffle
    toggleSearchBar(hash);

    links.forEach(l => l.classList.remove('active'));
    const activeLink = document.querySelector(`.sub-nav a[data-type="${hash}"]`);
    if (activeLink) activeLink.classList.add('active');
});

// --- Agent search form ---
agentForm.addEventListener('submit', e => {
    e.preventDefault();

    const agentType = agentTypeInput.value.trim();
    const agentId = agentIdInput.value.trim();

    if (!agentType || !agentId) {
        agentResultDiv.innerHTML = "<div style='padding:10px; color:red; font-weight:600;'>Please select a role and enter Agent ID.</div>";
        return;
    }

    fetch('search_agent.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `agentType=${encodeURIComponent(agentType)}&agentId=${encodeURIComponent(agentId)}`
    })
    .then(res => res.text())
    .then(data => {
        agentResultDiv.innerHTML = data;
    })
    .catch(err => {
        agentResultDiv.innerHTML = "<div style='padding:10px; color:red; font-weight:600;'>Error fetching data!</div>";
        console.error(err);
    });
});
</script>



<div class="middle-content">
  <div class="w-full">
    <div class="flex flex-col items-center justify-center mb-[3px]">
      <h3 class="text-xl font-bold mb-[3px] text-center md:text-left">
        Velki - Trusted Betting Site in Bangladesh ভেলকি এজেন্ট লিস্ট Velki Agent
      </h3>

      <!-- Text Section -->
      <div
        id="text"
        class="text-gray-500 block mb-[6px] overflow-hidden max-h-[80px] transition-all duration-500 ease-in-out text-center md:text-left"
      >
        <h2 class="leading-relaxed">
          Velki - Trusted Betting Site in Bangladesh ভেলকি এজেন্ট লিস্ট
        </h2>
        <p>
          Velki operates as an agent-based betting platform in Bangladesh,
          ensuring personalized service and security for its users. To join the
          Velki community, the first step is to connect with a verified Velki
          Agent. These agents are your gateway to opening an account and
          enjoying the betting experience Velki offers.
        </p>
      </div>

      <!-- Toggle Button -->
      <button
        id="toggleBtn"
        class="text-blue-500 underline cursor-pointer"
      >
        Read More
      </button>
    </div>
  </div>
</div>

<script>
  const text = document.getElementById("text");
  const btn = document.getElementById("toggleBtn");

  btn.addEventListener("click", () => {
    if (text.classList.contains("max-h-[80px]")) {
      text.classList.remove("max-h-[80px]");
      text.classList.add("max-h-[1000px]");
      btn.innerText = "Read Less";
    } else {
      text.classList.add("max-h-[80px]");
      text.classList.remove("max-h-[1000px]");
      btn.innerText = "Read More";
    }
  });
</script>


<div class="middle-content">
  <div class="w-full">
    <div class="flex flex-col items-center justify-center mb-[3px]">
      <h3 class="text-xl font-bold mb-[3px] text-center">
        Velki Live Agent List | ভেলকি একাউন্ট খুলুন, ভেলকি এজেন্ট লিস্ট
      </h3>

      <!-- Read More Section -->
      <div class="read-more-section max-w-3xl text-center">
        <div class="read-text text-gray-500 mb-[6px] line-clamp-2 text-justify">
          <p>
            <strong>Below is an in-depth guide to help you understand the process and ensure a safe and secure experience.</strong>
          </p> <br>
          <p>
            <strong>Step 1: Contacting a Verified Velki Agent</strong><br>
            Before you can begin betting on Velki, you must first establish communication with a Velki Agent. These agents are responsible for collecting the necessary details required to set up your account. To find a trustworthy agent, visit our official website, where you’ll find an extensive list of verified agents.
          </p> <br>
          <p>
            ⚠ <strong>Important:</strong> If you choose to contact someone outside the verified agent list, you do so at your own risk. Velki cannot and will not be held responsible for any fraudulent activities or scams that occur outside the scope of our verified agents.
          </p> <br>
          <p>
            <strong>Why Use Verified Agents?</strong><br>
            Velki’s verified agents are carefully vetted to ensure they meet our standards of reliability, security, and professionalism. They adhere to strict guidelines to protect your personal information and provide seamless account setup assistance. When you work with a verified agent, you can trust that your account is in safe hands.
          </p>
          <p> <br>
            <strong>Security Measures to Protect Your Account</strong><br>
            While our agents are there to help you, maintaining account security is ultimately your responsibility. Follow these essential tips to keep your account secure:
          </p> <br>
          <p>
            <strong>Change Your Password Regularly:</strong><br>
            If an agent has access to your password during account setup, ensure you change it immediately afterward. This simple step safeguards your account from unauthorized access.
          </p> <br>
          <p> 
            <strong>Never Share Your Password:</strong><br>
            Under no circumstances should you share your password with anyone, including your agent or other Velki users. Sharing your password compromises the security of your account.
          </p> <br>
          <p>
            <strong>Use Verified Communication Channels:</strong><br>
            Velki only facilitates communication and transactions through WhatsApp. Ensure all interactions with your agent occur via this platform to prevent scams or impersonation.
          </p> <br>
          <p>
            <strong>Risks of Using Unauthorized Agents</strong><br>
            Choosing to work with agents who are not on our verified list exposes you to unnecessary risks. These agents may not have been subjected to our rigorous verification process, increasing the likelihood of fraud. If you are scammed by an unverified agent, Velki cannot intervene or provide assistance.
          </p> <br>
          <p>
            <strong>How to Spot a Verified Agent</strong><br>
            To ensure you’re working with a genuine Velki Agent, always refer to the agent list available on our official website. Verified agents will have specific credentials and identification linked to Velki, making it easy to validate their authenticity.
          </p> <br>
          <p>
            <strong>Enjoy a Seamless Betting Experience</strong><br>
            By following the steps above and adhering to our security guidelines, you can enjoy the best that Velki has to offer. Our platform is designed to provide an unparalleled betting experience, and our agents are here to support you every step of the way.
          </p> <br>
          <p>
            For more information, visit our website or connect with our support team through WhatsApp. Remember, your safety and satisfaction are our top priorities. Choose wisely, stay secure, and enjoy your journey with Velki!
          </p> <br>
        </div>

        <!-- Button -->
        <button class="read-more-btn text-blue-500 underline">Read More</button>
      </div>
    </div>
  </div>
</div>


<script>
  document.querySelectorAll(".read-more-section").forEach(section => {
    const text = section.querySelector(".read-text");
    const button = section.querySelector(".read-more-btn");

    // Initially clamp text
    text.classList.add("line-clamp-2");

    button.addEventListener("click", () => {
      text.classList.toggle("line-clamp-2");

      if (text.classList.contains("line-clamp-2")) {
        button.textContent = "Read More";
      } else {
        button.textContent = "Read Less";
      }
    });
  });
</script>




        <div class="left-posts grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-4">
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card1.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749235999_3e76f51d99b550cf3dd8.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">ভেলকি লাইভ ১২৩ | ভেলকি লাইভ একাউন্ট খুলুন - Velki </h2>
                        <p class="text-gray-600 text-sm mt-2">ভেলকি লাইভ ১২৩ | ভেলকি লাইভ একাউন্ট খুলুন - Velki Live 123</p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card2.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749236116_3194253830a5ef2fbe3c.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">Velki 365: Leading Betting Platform in Bangladesh</h2>
                        <p class="text-gray-600 text-sm mt-2">Velki 365: A Leading Betting Platform in Bangladesh</p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card3.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749236230_b99cd053e0d0f982e660.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">Velki Live 123 | ভেলকি লাইভ একাউন্ট খুলুন</h2>
                        <p class="text-gray-600 text-sm mt-2">Velki Live 123 Bangladesh | ভেলকি লাইভ একাউন্ট খুলুন</p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card4.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749236294_05ae7e337a4ef3e82900.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">How can I become an agent on Velki? কিভাবে আমি ভেল</h2>
                        <p class="text-gray-600 text-sm mt-2">How can I become an agent on Velki? কিভাবে আমি ভেল্কি তে এজেন্ট হতে পারি?</p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card5.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749236474_44c9bbf52fc1aa890c93.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">Trusted Velki Agent List and Verified Agents ভেলকি</h2>
                        <p class="text-gray-600 text-sm mt-2">Trusted Velki Agent List and Verified Agents ভেলকি এজেন্ট </p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card6.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749412870_83b68089b095f1363cd5.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">How to Register and Log In to Velki</h2>
                        <p class="text-gray-600 text-sm mt-2">How to Register and Log In to Velki কীভাবে নিবন্ধন এবং ভেল্কিতে লগ ইন করবেন</p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card7.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749412843_61baf41d37388319e560.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">How to withdraw money from a Velki? ভেলকি থেকে টাক</h2>
                        <p class="text-gray-600 text-sm mt-2">How to withdraw money from a Velki? ভেলকি থেকে টাকা তোলার নিয়ম</p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card8.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749412749_3e06cc5bc63840f2120c.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">How to open a Velki account</h2>
                        <p class="text-gray-600 text-sm mt-2">How to open a Velki account  কিভাবে ভেলকি অ্যাকাউন্ট খুলবেন?</p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                            <a class="posts bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" href="./cards/card9.html">
                    <div class="post-top">
                        <img class="w-full h-48 object-cover" src="https://agentallvelki.com/public/uploads/1749412689_9410f97009c9bbf4ef7d.jpg" alt="">
                    </div>
                    <div class="post-down p-4">
                        <h2 class="text-xl font-bold text-gray-800">Agent</h2>
                        <p class="text-gray-600 text-sm mt-2">এজেন্ট কত প্রকারঃ</p>
                        <p class="text-blue-500 mt-4 font-medium">Read More</p>
                    </div>
                </a>
                    </div>


    </div>

</div>

<div class="faq">
    <h1>Velki FAQ <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path d="M13.2328 16.4569C12.9328 16.7426 12.9212 17.2173 13.2069 17.5172C13.4926 17.8172 13.9673 17.8288 14.2672 17.5431L13.2328 16.4569ZM19.5172 12.5431C19.8172 12.2574 19.8288 11.7827 19.5431 11.4828C19.2574 11.1828 18.7827 11.1712 18.4828 11.4569L19.5172 12.5431ZM18.4828 12.5431C18.7827 12.8288 19.2574 12.8172 19.5431 12.5172C19.8288 12.2173 19.8172 11.7426 19.5172 11.4569L18.4828 12.5431ZM14.2672 6.4569C13.9673 6.17123 13.4926 6.18281 13.2069 6.48276C12.9212 6.78271 12.9328 7.25744 13.2328 7.5431L14.2672 6.4569ZM19 12.75C19.4142 12.75 19.75 12.4142 19.75 12C19.75 11.5858 19.4142 11.25 19 11.25V12.75ZM5 11.25C4.58579 11.25 4.25 11.5858 4.25 12C4.25 12.4142 4.58579 12.75 5 12.75V11.25ZM14.2672 17.5431L19.5172 12.5431L18.4828 11.4569L13.2328 16.4569L14.2672 17.5431ZM19.5172 11.4569L14.2672 6.4569L13.2328 7.5431L18.4828 12.5431L19.5172 11.4569ZM19 11.25L5 11.25V12.75L19 12.75V11.25Z" fill="#000000"></path>
            </g>
        </svg></h1>
    <div class="faq-list">
                    <a class="" href="./FAQ/faq.html">
                <div>
                    <img src="https://agentallvelki.com/public/uploads/1735320205_f68aaee8297be1e1a3f6.jpg" alt="">
                </div>
                <div>
                    <p>Velki Faq</p>
                    <h1>ভেল্কি তে কিভাবে লেনদেন করবেন?</h1>
                </div>
            </a>
                    <a class="" href="./FAQ/faq2.html">
                <div>
                    <img src="https://agentallvelki.com/public/uploads/1735320339_ba095124fcf399dfd7dc.jpg" alt="">
                </div>
                <div>
                    <p>Velki Faq</p>
                    <h1>কিভাবে একাউন্ট খুলবেন?</h1>
                </div>
            </a>
                    <a class="" href="./FAQ/faq3.html">
                <div>
                    <img src="https://agentallvelki.com/public/uploads/1735320424_b5c7b4f1d43e54c4a424.jpg" alt="">
                </div>
                <div>
                    <p>Velki Faq</p>
                    <h1>একাউন্ট খোলার নিয়ম বা শর্ত গুলো কি কি?</h1>
                </div>
            </a>
                    <a class="" href="./FAQ/faq4.html">
                <div>
                    <img src="https://agentallvelki.com/public/uploads/1735320249_68ff616ae059b966e9ff.jpg" alt="">
                </div>
                <div>
                    <p>Velki Faq</p>
                    <h1>ভেল্কির ফেইসবুক গ্রুপ লিঙ্ক কোন টা?</h1>
                </div>
            </a>
                    <a class="" href="./FAQ/faq5.html">
                <div>
                    <img src="https://agentallvelki.com/public/uploads/1735320447_3b42fa567824b69cfb41.jpg" alt="">
                </div>
                <div>
                    <p>Velki Faq</p>
                    <h1>কিভাবে আমি ভেল্কি তে এজেন্ট হতে পারি?</h1>
                </div>
            </a>
                    <a class="" href="./FAQ/faq6.html">
                <div>
                    <img src="https://agentallvelki.com/public/uploads/1735320462_239daa298ff444cd0087.jpg" alt="">
                </div>
                <div>
                    <p>Velki Faq</p>
                    <h1>কিভাবে আমি ভেল্কি তে অনলাইন মাষ্টার এজেন্ট হতে পারি?</h1>
                </div>
            </a>
                    <a class="" href="./FAQ/faq7.html">
                <div>
                    <img src="https://agentallvelki.com/public/uploads/1735471974_aba308f4989bde55eb50.jpg" alt="">
                </div>
                <div>
                    <p>Velki Faq</p>
                    <h1>এজেন্ট এর বিরুদ্ধে কিভাবে অভিযোগ করবেন?</h1>
                </div>
            </a>
            </div>
</div>





</div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const rows = document.querySelectorAll("tr"); // সব TR নেওয়া

    rows.forEach((row, index) => {
        if (index % 2 === 0) {
            row.style.backgroundColor = "#FFF6F3";
        } else {
            row.style.backgroundColor = "#EFF0F3";
        }
    });
});

</script>



<!-- Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-top">
      <!-- Logo / Brand -->
      <div class="footer-logo">
        <img src="logo1.0.png" alt="Logo">
        <span class="brand-name"></span>
      </div>

      <!-- Quick Links -->
      <div class="footer-links">
        <h4 style="color: #000000;">Quick Links</h4>
        <a href="#maintable">Home</a>
        <a href="#">Admin</a>
        <a href="#">Sub-Admin</a>
        <a href="#">Super</a>
        <a href="#">Master</a>
      </div>

      <!-- Contact Info -->
      <div class="footer-contact">
        <h4 style="color: #000000;">Contact Us</h4>
        <p>WhatsApp: <a href="https://wa.me/639308682092" target="_blank">+63 930 868 2092</a></p>
        <p>Phone: <a href="tel:+639308682092">+63 930 868 2092</a></p>
        <p>Email: <a href="mailto:info@velkiagentlist.com">info@velkiagentlist.com</a></p>

        <!-- Social Icons -->
        <div class="footer-social text-2xl">
  <!-- Facebook -->
  <a href="https://www.facebook.com/groups/1652096408959195/?ref=share&mibextid=NSMWBT" target="_blank">
    <i class="bi bi-facebook"></i>
  </a>

  <!-- WhatsApp -->
  <a href="https://wa.me/1234567890" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Website -->
  <a href="https://velki123.com/#/login" target="_blank">
    <i class="bi bi-globe text-xl"></i>
  </a>
</div>
      </div>
    </div>

    <!-- Bottom -->
<div class="footer-bottom" style="color: #000000; text-align:center; padding: 10px 0;">
  <p>&copy; 2025 Velki Agent List. All rights reserved.</p>
  <p>
    Powered by 
    <span style="font-weight:600;">ARMAN MALIK</span>
    <a href="login.html" target="_blank" style="color: #000000; text-decoration: none; margin-left: 5px;">
      <i class="fas fa-shield-alt" style="color: #8ab92d;"></i>
    </a>
  </p>
</div>


  </div>
</footer>

  <script>
    // auto update date
    const date = new Date();
    const days = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
    const months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];

    document.getElementById("dayNum").innerText = date.getDate();
    document.getElementById("dayName").innerText = days[date.getDay()];
    document.getElementById("monthName").innerText = months[date.getMonth()];

    // toggle hamburger menu
    function toggleMenu() {
      const menu = document.getElementById("menu");
      menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }

    // close menu on click outside
    document.addEventListener("click", function(e) {
      const menu = document.getElementById("menu");
      const burger = document.querySelector(".hamburger");
      if (!menu.contains(e.target) && !burger.contains(e.target)) {
        menu.style.display = "none";
      }
    });
  </script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const links = document.querySelectorAll(".sub-nav a");
  const rows = document.querySelectorAll("#agentTable tbody tr"); // table id = agentTable

  links.forEach(link => {
    link.addEventListener("click", function(e) {
      e.preventDefault();

      // Active link toggle
      links.forEach(l => l.classList.remove("active"));
      this.classList.add("active");

      const type = this.dataset.type; // get type from nav link

      rows.forEach(row => {
        const rowType = row.cells[0].textContent.trim(); // first column = Type
        if(type === "ALL" || rowType.toUpperCase() === type) {
          row.style.display = "";
        } else {
          row.style.display = "none";
        }
      });
    });
  });
});
</script>

<script>
const hamburger = document.getElementById("hamburgerBtn");
const menu = document.getElementById("menu");
const overlay = document.getElementById("overlay");
const closeBtn = document.getElementById("closeBtn");

// 🔹 Open menu
function openMenu() {
  menu.classList.add("active");
  overlay.classList.add("active");
  document.body.style.overflow = "hidden";
}

// 🔹 Close menu
function closeMenu() {
  menu.classList.remove("active");
  overlay.classList.remove("active");
  document.body.style.overflow = "auto";
}

// Toggle hamburger
hamburger.addEventListener("click", () => {
  if (menu.classList.contains("active")) {
    closeMenu();
  } else {
    openMenu();
  }
});

// ✅ Overlay click → menu close
overlay.addEventListener("click", () => {
  closeMenu();
});

// ❌ button close
closeBtn.addEventListener("click", closeMenu);
</script>



</body>
</html>
