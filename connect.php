<?php
$conn = mysqli_connect("localhost","root","","complaintbox");
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
?>