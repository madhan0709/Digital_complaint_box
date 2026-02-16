<!DOCTYPE html>
<html>
<head>
    <title>Student Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>

    <div class="card">
    <img src="logo.png" width="120px">

    <h2>Create Account</h2>

    <form id="signupForm" method="POST" action="db.php">
        <select id="role" name="role" onchange="showFields()" required>
            <option valu="">--SELECT--</option>
            <option value="student_s">Student</option>
            <option value="admin_a">Admin</option>
        </select>
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" placeholder="Password" required name="password">
        <button type="submit" name="signup">Sign Up</button>
    </form>
    <p class="login-text">
        Already have an account?<a href="signin.php">Log In</a>
    </p>
  </div>

<script src="script.js"></script>
</body>
</html>