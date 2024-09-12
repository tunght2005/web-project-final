<?php
// Kết nối với cơ sở dữ liệu
require_once('./db/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $name = $_POST['first_name'] . ' ' . $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $status = 'active'; // hoặc giá trị khác tùy thuộc vào logic của bạn
    $created_at = date('Y-m-d H:i:s');
    $updated_at = $created_at;

    // Kiểm tra mật khẩu có khớp không
    if ($password != $confirm_password) {
        echo "Mật khẩu không khớp!";
        exit;
    }

    // Kiểm tra email đã tồn tại trong cơ sở dữ liệu chưa
    $sql_check = "SELECT * FROM admins WHERE email = '$email'";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
        echo "Email này đã được sử dụng!";
    } else {
        // Lưu dữ liệu vào CSDL
        $sql = "INSERT INTO admins (name, email, password, phone, address, status, created_at, updated_at) 
                VALUES ('$name', '$email', '$password', '$phone', '$address', '$status', '$created_at', '$updated_at')";

        if (mysqli_query($conn, $sql)) {
            echo "Tạo tài khoản thành công!";
            header("Location: login1.php"); // Chuyển hướng đến trang đăng nhập
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    }
}
?>
