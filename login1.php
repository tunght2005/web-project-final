<?php
session_start();
 $errorMsg =" ";
 if(isset($_POST["btSumit"])){
    //lấy dữ liệu từ form
    $email =$_POST["email"];
    $password =$_POST["password"];
    //kết nối csdl
    require_once("./db/conn.php");
    //câu lệnh truy vấn
    $sql = "select * from admins where email = '$email' and password = '$password'";
    //thực thi câu lệnh
    $result = mysqli_query($conn, $sql);
    //kiểm tra số lượng trả về nếu >0 thì đăng nhập thành công
    if (mysqli_num_rows($result)>0){
        // echo '<h3>Đăng nhập thành công</h3>';
        //lưu trử thông tin
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;
        //chuyển qua trang admin
        header("Location: index.php");
    } else {
        $errorMsg ="Không tìm thấy thông tin tài khoản trong hệ thông";
        require_once("loginfo.php");
    }
    //

 } else {
    require_once("loginfo.php");
}
?>

