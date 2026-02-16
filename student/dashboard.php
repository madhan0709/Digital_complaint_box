<!DOCTYPE html>
<head>
    <title>Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="s_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    
        <img src="logo.png" width="120px" alt="logo">

    <div class="app">

        <h1 class="title">Student Login</h1>
        <a href="New complaint.php" style="text-decoration: none; color: inherit;">
            <div class="card" onclick="newComplaint()">
                <div class="icon">📢</div>
                <div class="text">
                    <h2>New Complaint</h2>
                    <p>Submit a new issue</p>
                </div>
            </div>
        </a>
        <div class="card" onclick="myComplaints()">
            <div class="icon">📋</div>
            <div class="text">
                <h2>My Complaints</h2>
                <p>Track your submitted cases</p>
            </div>
        </div>
        <a href="../logout.php" style="text-decoration:none; color:inherit;">
            <div class="card logout" onclick="logout()">
                <div class="icon">
                    <i class="fa-solid fa-power-off"></i>
                </div>
                <div class="text">
                    <h2>Logout</h2>
                </div>
            </div>
        </a>
    </div>

    <script src="s_script.js"></script>
</body>
</html>
