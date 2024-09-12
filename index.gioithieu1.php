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
        <link rel="stylesheet" href="assets/css/style-3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body> 
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="inner-wrap">
                    <!-- logo -->
                    <div class="inner-logo">
                        <a href="index1.php">
                            <img src="assets/images/logo_3.png" alt="logo">
                        </a>
                    </div>
                    <!-- menu -->
                     <nav class="inner-menu">
                        <ul>
                            <li>
                                <span><a href="index1.php"><i class="fa-solid fa-house"></i>Trang Chủ</a></span>
                            </li>
                            <li>
                                <span><a href="index.danhmuc1.php"><i class="fa-solid fa-list"></i>Danh Mục</a></span>
                            </li>
                            <li>
                                <span><a href="index.gioithieu1.php"><i class="fa-solid fa-display"></i>Giới Thiệu</a> </span>
                            </li>
                            <li>
                                <span><a href="index.lienhe1.php"><i class="fa-solid fa-envelope"></i>Liên Hệ</a> </span>
                            </li>
                            <!-- <li>
                                <span><a href="#"><i class="fa-regular fa-address-card"></i>Tài khoản</a></span>
                            </li> -->
                        </ul>
                     </nav>
                    <!-- seach -->
                    <form action="index.danhmuc1.php" method="get" class="inner-form" onsubmit="return searchByEnter()">
                        <input name="keyword" id="keyword" placeholder="Nhập từ khoá..." >
                        <button id="search-button"><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <!-- button -->
                    <div class="dropdown">
                        <a href="#" class="button"><i class="fa-regular fa-user"></i></a>
                        <div class="dropdown-content">
                            <a href="login1.php"><i class="fa-regular fa-address-book"></i> Đăng Nhập</a>
                            <!-- <a href="order.php"><i class="fa-solid fa-eye"></i> Xem Đơn</a>
                            <a href="logout1.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Đăng Xuất</a> -->
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
        <div class="introduction">
            <div class="content-header">
                <div class="col-h">
                    Về Chùng Tôi
                </div>
                <div class="col-r">
                    <i class="fa-solid fa-map"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-regular fa-envelope"></i> 
                    <i class="fa-brands fa-facebook"></i> 
                    <i class="fa-brands fa-telegram"></i> 
                </div>
            </div>
            <hr>
            <p>
            Chào bạn đến với <b>Shop Tranh</b> , nơi chúng tôi mang đến những tác phẩm tranh độc đáo và tinh tế nhất để làm phong phú thêm
            không gian sống và làm việc của bạn. Chúng tôi tự hào là một trong những cửa hàng tranh hàng đầu, chuyên cung cấp các
            sản phẩm tranh nghệ thuật chất lượng cao, được lựa chọn cẩn thận từ các nghệ sĩ tài năng.
            Tại Shop Tranh, sứ mệnh của chúng tôi là giúp bạn tìm thấy những tác phẩm nghệ thuật không chỉ đẹp mắt mà còn phản ánh phong 
            cách và cá tính của bạn. Chúng tôi tin rằng một bức tranh đẹp có thể tạo nên sự khác biệt lớn trong không gian sống 
            của bạn, từ việc làm nổi bật một bức tường trống cho đến việc tạo điểm nhấn cho không gian làm việc.
            Sản phẩm của chúng tôi như là tranh về tranh sơn dầu, tranh độc quyền và một số loại tranh khác nữa. Chúng tôi không chỉ cung cấp 
            tranh mà còn manng đến các dịch vụ chuyên nghiệp. <br>
            </p>
            
            <div class="col-1">
                <p>
                    <strong>1. Tư Vấn Nghệ Thuật: </strong> Đội ngũ của chúng tôi sẵn sàng giúp bạn lựa chọn những sản phẩm phù hợp nhất với không gian và sở thích của bạn<br>
                    <strong>2. Giao Hàng Toàn Quốc: </strong> Chúng tôi giao hàng khắp mọi nên trên toàn quóc và đảm bảo tranh của bạn được vận chuyển an toàn nhanh chóng <br>
                    <strong>3. Khung Tranh Theo Yêu Cầu: </strong>Bạn có thể yêu cầu khung tranh theo yêu cầu theo kích thước và kiểu dáng riêng để hoàn thiện tác phẩm nghệ thuật của mình 
                </p>
            </div>
                    <div>Chúng tôi đảm bảo về chất lượng tranh sẽ <i>giống 100%</i> như hình ảnh trên và sẽ đền bù cho bạn nếu có lỗi về bức tranh.
                        Cảm ơn bạn đã đọc bài giới thiệu của chúng tôi 
                        Nếu cần tư vấn rõ hơn hãy liên hệ: 
                    </div>
                    <br>
                    <i class="fa-solid fa-map"></i> Võ Oanh, P25, Q.Bình Thạnh, Tp Hồ Chí Minh <br>
                    <i class="fa-regular fa-envelope"></i> tungtai@gamil.com <br>
                    <i class="fa-brands fa-facebook"></i> https://www.facebook.com/? <br>
                    <i class="fa-brands fa-telegram"></i> 099 999 9999 <br>
                
        </div>

        <!-- section -->
        <!-- section 2 -->
        <!-- Section 4 -->
        <!-- End Section 4 -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="inner-top">
                    <div class="inner-content">
                    Đăng ký ngay để hưởng những <strong>Ưu Đãi</strong>
                    </div>
                    <form action="" class="inner-form">
                    <input type="email" name="" placeholder="Nhập email của bạn...">
                    <button>Đăng Ký Ngay</button>
                    </form>
                </div>
                <div class="inner-middle">
                    <nav class="inner-links">
                    <ul>
                        <li>
                        <a href="index1.php">Trang Chủ</a>
                        </li>
                        <li>
                        <a href="index.danhmuc1.php">Danh Mục</a>
                        </li>
                        <li>
                        <a href="index.gioithieu1.php">Giới Thiệu</a>
                        </li>
                        <li>
                        <a href="index.lienhe1.php">Liên Hệ</a>
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
                    <a href="index1.php">
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