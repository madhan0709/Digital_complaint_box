<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location: ../signin.php");
}
?>
<!DOCTYPE html>
<head>
    <title>Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="a_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    
        <img src="logo.png" width="120px" alt="logo">

    <div class="app">

        <h1 class="title">Admin Login</h1>

        <div class="card" onclick="viewComplaint()">
            <div class="icon">📢</div>
            <div class="text">
                <h2>View Complaint</h2>
                <p>View the issues</p>
            </div>
        </div>

        <div class="card" onclick="updateComplaints()">
            <div class="icon">📋</div>
            <div class="text">
                <h2>Update Complaints</h2>
                <p>Update the Complaints</p>
            </div>
        </div>
        <a href="../logout.php" style="text-decoration:none; color:inherit;">
            <div class="card logout"  >
                <div class="icon">
                    <i class="fa-solid fa-power-off"></i>
                </div>
                <div class="text">
                    <h2>Logout</h2>
                </div>
            </div>
        </a>

    </div>
</body>
</html>
