<?php
session_start();
require_once("./db/conn.php");
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB-TRANH</title>
        <link rel="stylesheet" href="assets/css/style-4.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body> 
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="inner-wrap">
                    <!-- logo -->
                    <div class="inner-logo">
                        <a href="index.php">
                            <img src="assets/images/logo_3.png" alt="logo">
                        </a>
                    </div>
                    <!-- menu -->
                     <nav class="inner-menu">
                        <ul>
                            <li>
                                <span><a href="index.php"><i class="fa-solid fa-house"></i>Trang Chủ</a></span>
                            </li>
                            <li>
                                <span><a href="index.danhmuc.php"><i class="fa-solid fa-list"></i>Danh Mục</a></span>
                            </li>
                            <li>
                                <span><a href="index.gioithieu.php"><i class="fa-solid fa-display"></i>Giới Thiệu</a> </span>
                            </li>
                            <li>
                                <span><a href="index.lienhe.php"><i class="fa-solid fa-envelope"></i>Liên Hệ</a> </span>
                            </li>
                            <!-- <li>
                                <span><a href="#"><i class="fa-regular fa-address-card"></i>Tài khoản</a></span>
                            </li> -->
                        </ul>
                     </nav>
                    <!-- seach -->
                    <form action="index.danhmuc.php" method="get" class="inner-form" onsubmit="return searchByEnter()">
                        <input name="keyword" id="keyword" placeholder="Nhập từ khoá..." >
                        <button id="search-button"><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <!-- button -->
                    <div class="dropdown">
                        <a href="#" class="button"><i class="fa-regular fa-user"></i></a>
                        <div class="dropdown-content">
                            <a href="#" onclick="alert('Hồ sơ đang được phát triển.....')"><i class="fa-regular fa-address-book"></i>
                            <?php
                                $user = $_SESSION['user'];
                                echo $user['name'];
                            ?>
                            </a>
                            <a href="order.php"><i class="fa-solid fa-eye"></i> Xem Đơn</a>
                            <a href="logout1.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Đăng Xuất</a>
                        </div>
                    </div>
                     <!-- giỏ hàng -->
                    <a href="index.cart.php" class="shoping">
                         <span>
                            <?php
                                $cart = [];
                                if(isset($_SESSION['cart'])) {
                                    $cart = $_SESSION['cart'];
                                }
                                $count = 0; //hien thi so luong san pham trong gio
                                foreach ($cart as $item) {
                                    $count += $item['qty'];
                                }
                                // hien thi so luong
                                echo $count;
                            ?>
                        </span>
                       <i class="fa-brands fa-shopify"></i> 
                    </a>
                </div>
            </div>
        </header>
        <!-- End Header -->
        <!-- Làm ở đây -->
        <div class="col-back">
            <div class="contact-1">
                <img src="assets/images/back2.jpg" alt="">
                <div class="contact-2">
                    <span>Liên hệ với chúng tôi</span>
                    <p>Đến với chúng tôi để tận hưởng các tác phẩm nghệ thuật đặc sắc, hoàn mỹ</p>
                </div>
            </div>
            <div class="container">
                <div class="col-wrap"> 
                    <div class="col-lg-5" data-wow-delay="0.5s"></div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1024977672523!2d106.71400127687097!3d10.803461261878773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a6b9033c77%3A0x43e084d39ebbe5f8!2zMjUgVsO1IE9hbmgsIEtodSBwaMO0zIEgMSwgQsOsbmggVGjhuqFuaCwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sbd!4v1725588020653!5m2!1sen!2sbd" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="inner-status">
                        <form class="contact-form">
                            <!-- <h2>Điền thông tin của bạn </h2> -->
                            <input type="text" id="name" name="name" placeholder="Họ và tên" required>

                            <input type="email" id="email" name="email" placeholder="Email" required>
                            
                            <input type="tel" id="phone" name="phone" placeholder="Số điện thoại" required  maxlength="10" 
                            inputmode="numeric" pattern="[0-9]*" oninput="this.value= this.value.replace(/[^0-9]/g,'');">

                            <textarea id="message" name="message" rows="5" placeholder="Lời nhắn" required></textarea>

                            <button type="submit">Gửi</button>
                        </form>
                        <div class="inner-content-status">
                            <i class="fa-solid fa-location-dot"> </i> Võ Oanh, P25, Q.Bình Thạnh, Tp Hồ Chí Minh <br>
                            <i class="fa-solid fa-phone"></i> 099 999 9999 <br>
                            <i class="fa-regular fa-envelope"></i> tungtai@gamil.com <br>
                            <i class="fa-brands fa-facebook"></i> https://www.facebook.com/? <br>
                            <i class="fa-brands fa-telegram"></i> 099 999 9999 <br>
                        </div>
                    </div>
                </div>
            </div>
        

        <!-- section -->
        <!-- section 2 -->
        <!-- Section 4 -->
        <!-- End Section 4 -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <!-- <div class="inner-top">
                    <div class="inner-content">
                    Đăng ký ngay để hưởng những <strong>Ưu Đãi</strong>
                    </div>
                    <form action="" class="inner-form">
                    <input type="email" name="" placeholder="Nhập email của bạn...">
                    <button>Đăng Ký Ngay</button>
                    </form>
                </div> -->
                <div class="inner-middle">
                    <nav class="inner-links">
                    <ul>
                        <li>
                        <a href="index.php">Trang Chủ</a>
                        </li>
                        <li>
                        <a href="index.danhmuc.php">Danh Mục</a>
                        </li>
                        <li>
                        <a href="index.gioithieu.php">Giới Thiệu</a>
                        </li>
                        <li>
                        <a href="index.lienhe.php">Liên Hệ</a>
                        </li>
                    </ul>
                    </nav>
                    <nav class="inner-socials">
                    <ul>
                        <li>
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        </li>
                        <li>
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        </li>
                        <li>
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        </li>
                        <li>
                        <a href="#" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        </li>
                    </ul>
                    </nav>
                </div>
                <div class="inner-bottom">
                    <div class="inner-copyright">
                    ©2024 TungTai@gmail.com [All rights reserved.]
                    </div>
                    <div class="inner-logo">
                    <a href="index.html">
                        <img src="assets/images/logo_3.png" alt="">
                    </a>
                    </div>
                    <nav class="inner-links">
                    <ul>
                        <li>
                        <a href="#">Điều khoản dịch vụ</a>
                        </li>
                        <li>
                        <a href="#">Chính sách bảo mật</a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </body>
</html>