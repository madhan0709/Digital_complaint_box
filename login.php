<?php
session_start();
include("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT*FROM users WHERE e_mail='$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['email'] = $row['e_mail'];
            $_SESSION['role'] = $row['role'];
            if($row['role'] == "student_s"){
                header("location: student/dashboard.php");
             }
             else if($row['role'] == "admin_a"){
                header("location: admin/dashboard.php");
                }
                exit();
                }
             else{
                 echo "<script>alert('worng Password');
                window.location.href='signin.php';</script>";
         }        
     }
else{
    echo "<script> alert('user Not Found');
                   window.location.href='sigin.php';</script>";
}
}
?>