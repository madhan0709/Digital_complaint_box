<!DOCTYPE html>
<html>
    <head>
        <title>Digital Complaint Box</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
    <body>
        <div class="card">
            <img src="logo.png" width="120px">
            <h2>Login</h2>
        <form action="login.php" method="POST">
            <label>Username</label>
            <input type="email" placeholder="Enter your Email" required name="email">
            <lable>Password</lable>
            <input type="text" placeholder="Enter your Password" required name="password">
            <button type="submit">Login</button>
            <p class="login-text">
                Don't have an account?
                <a href="signup.php">Sign up </a>
            </p>
        </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>