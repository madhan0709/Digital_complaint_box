<?php
include("connect.php");
$message = "";
if(isset($_POST['signup'])){
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(role, e_mail, password) VALUES('$role', '$email', '$hashed_password')";

    if(mysqli_query($conn, $sql)) {
        echo "Inserted Successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
        }

}
?>