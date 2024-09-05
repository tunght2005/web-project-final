<?php

// echo "xin chao";


require('../db/conn.php');

//lay du lieu tu form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$type = $_POST['type'];


// cau lenh them vao bang
$sql_str = "INSERT INTO `admins` (`name`, `email`, `password`, `phone`, `address`, `type`, `status`, `created_at`, `updated_at`)
VALUES ('$name', '$email', '$password', '$phone', '$address', '$type', 'Action', NOW(), NOW())";

// echo $sql_str;
// exit;

//thuc thi cau lenh
mysqli_query($conn, $sql_str);

//tro ve trang 
header("location: ./listusers.php");
?>