<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB-TRANH</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body> 
        <header class="header">
            <div class="container">
                <div class="inner-wrap">
                    <!-- Menu Mobile -->
                    <button class="inner-menu-mobile">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <!-- logo -->
                    <div class="inner-logo">
                        <a href="index.html">
                            <img src="assets/images/logo_3.png" alt="logo">
                        </a>
                    </div>
                    <!-- menu -->
                     <nav class="inner-menu">
                        <ul>
                            <li>
                                <span><a href="index.html"><i class="fa-solid fa-house"></i>Trang Chủ</a></span>
                            </li>
                            <li>
                                <span><a href="index.danhmuc.html"><i class="fa-solid fa-list"></i>Danh Mục</a></span>
                            </li>
                            <li>
                                <span><a href="#"><i class="fa-solid fa-display"></i>Giới Thiệu</a> </span>
                            </li>
                            <li>
                                <span><a href="#"><i class="fa-solid fa-envelope"></i>Liên Hệ</a> </span>
                            </li>
                            <li>
                                <span><a href="#"><i class="fa-regular fa-address-card"></i>Tài khoản</a></span>
                            </li>
                        </ul>
                     </nav>
                    <!-- seach -->
                    <form action="#" class="inner-form">
                        <input name="keyword" placeholder="Nhập từ khoá...">
                        <button><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <!-- button -->
                    <a href="#" class="button">
                        Đăng Nhập
                    </a>
                     <!-- giỏ hàng -->
                    <a href="#" class="shoping">
                        <i class="fa-solid fa-cart-shopping"></i> 
                        <b>Đơn Hàng</b>
                    </a>
                </div>
            </div>
        </header>
        <!-- section -->
        <section class="section-1">
            <div class="container">
                <div class="inner-wrap">
                    <div class="inner-content">
                        <img class="inner-image-sub-1" src="assets/images/trangtri-2.png" alt="ảnh trang trí">
                        <img class="inner-image-sub-2" src="assets/images/trangtri_1.png" alt="ảnh trang trí">
                        <h1 class="inner-title">
                            <div class="inner-title-main">
                                Vẽ Đẹp Chạm Đến 
                            </div>
                            <div class="inner-title-sub">
                                Cảm Xúc
                            </div>
                        </h1>
                        <div class="inner-desc">
                           <p>Hơn 1000 tác phẩm Tranh Sơn Dầu Cao Cấp chỉ có tại <b><i>Shop Tranh</i></b>, độc quyền và độc bản. Đa dạng chủ để tranh, màu sắc, kích thước phù hợp mọi không gian nội thất.</p> 
                        </div>
                        <div class="inner-buttons">
                            <a href="#" class="button-outline">
                                Giới thiệu <i class="fa-regular fa-circle-play"></i>
                            </a>
                            <a href="#" class="button">
                                Khám phá ngay
                            </a>
                        </div>
                    </div>
                    <!-- <div class="inner-image">
                        <img src="assets/images/image-1.png" alt="Ảnh" class="inner-image-main">
                    </div>   -->
                    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
                        slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                        coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" autoplay-delay="1000" autoplay-disable-on-interaction="false">
                        <swiper-slide>
                        <img src="assets/images/tranh-1.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                        <img src="assets/images/tranh-2.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                        <img src="assets/images/tranh-3.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                        <img src="assets/images/tranh-4.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                        <img src="assets/images/tranh-5.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                        <img src="assets/images/tranh-6.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                        <img src="assets/images/tranh-7.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                        <img src="assets/images/tranh-8.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                        <img src="assets/images/tranh-9.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assets/images/tranh-10.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assets/images/tranh-11.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assets/images/tranh-12.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assets/images/tranh-13.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assets/images/tranh-14.jpg" />
                        </swiper-slide>
                        <swiper-slide>
                            <img src="assets/images/tranh-15.jpg" />
                        </swiper-slide>
                    </swiper-container>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                </div>
            </div>
        </section>
        <!-- section 2 -->
        <div class="section-2">
            <div class="container">
                <div class="box-head">
                    <div class="inner-left">
                        <div class="inner-title-sub">
                            Tác Phẩm Nổi Bật
                        </div>
                        <h2 class="inner-title">
                            Một số <b>Sản Phẩm </b>của chúng tôi
                        </h2>
                    </div>
                    <div class="inner-right">
                        <a href="index.danhmuc.html" class="button-outline">
                            Xêm Thêm <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="inner-wrap">
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-1.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                    Tranh 1
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000 VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-2.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                    Tranh 2
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000 VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-3.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                Tranh 3
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000 VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-4.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                Tranh 4
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000 VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-5.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                Tranh 5
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000 VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-6.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                Tranh 6
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000 VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-7.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                    Tranh 7
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000 VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-8.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                Tranh 8
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000 VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product-item">
                        <a href="#">
                            <div class="inner-image">
                                <img src="assets/images/tranh-price-9.jpg" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                Tranh 9
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b>Tranh Dầu</b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    1000VND
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>   
        </div>

        <div class="section-3">

        </div>
        <!-- Section 4 -->
        <div class="section-4">
            <div class="container">
            <div class="box-head">
                <div class="inner-left">
                <div class="inner-sub-title">
                    Kiến Thức Thú Vị?
                </div>
                <h2 class="inner-title">
                    Những điều HỮU ÍCH của một bức tranh
                </h2>
                </div>
                <div class="inner-right">
                <a href="#" class="button-outline">
                    Xem thêm <i class="fa-solid fa-angle-right"></i>
                </a>
                </div>
            </div>
            <div class="inner-wrap">
                <div class="blog-item">
                <a href="#">
                    <div class="inner-image">
                    <img src="assets/images/blog-1.jpg" alt="">
                    </div>
                    <div class="inner-content">
                    <div class="inner-tag">Thông tin</div>
                    <h3 class="inner-title">
                        Tranh sơn dầu là gì? Đặc điểm?
                    </h3>
                    <p class="inner-desc">
                        Tranh sơn dầu là một loại hình nghệ thuật hội họa sử dụng màu sắc được tạo ra từ bột màu hòa trộn với dầu. Các loại dầu thường được sử dụng là dầu hạt lanh, dầu óc chó, dầu hạt anh túc, hoặc dầu cây rum. Khi màu sơn được áp dụng lên bề mặt (thường là vải, gỗ, hoặc bìa cứng), lớp dầu trong sơn sẽ khô lại, tạo thành một lớp màng bảo vệ màu sắc, giúp bức tranh giữ được độ bền và màu sắc sống động qua thời gian.
                    </p>
                    </div>
                </a>
                </div>
                <div class="blog-item">
                <a href="#">
                    <div class="inner-image">
                    <img src="assets/images/blog-2.jpg" alt="">
                    </div>
                    <div class="inner-content">
                    <div class="inner-tag">Thông tin</div>
                    <h3 class="inner-title">
                        Lịch sử ra đời của một bức tranh.
                    </h3>
                    <p class="inner-desc">
                        Tranh bắt nguồn từ thời tiền sử với các bức vẽ trong hang động, dần phát triển qua các thời kỳ cổ đại, trung cổ, và Phục Hưng. Phong cách và kỹ thuật vẽ tranh thay đổi theo từng thời kỳ lịch sử, từ tranh tường, tranh trên bản thảo đến tranh sơn dầu. Thời kỳ Phục Hưng là giai đoạn vàng son của hội họa, với những tác phẩm nổi tiếng của Leonardo da Vinci, Michelangelo, và Raphael. Tranh sơn dầu phát triển mạnh, trở thành phương tiện phổ biến. Đến thời kỳ hiện đại, các phong trào như Ấn tượng, Lập thể, và Trừu tượng mang đến những đột phá về tư duy nghệ thuật. Nghệ thuật đương đại đa dạng về phong cách và phương pháp, phản ánh các vấn đề xã hội và chính trị.
                    </div>
                </a>
                </div>
                <div class="blog-item">
                <a href="#">
                    <div class="inner-image">
                    <img src="assets/images/blog-3.jpg" alt="">
                    </div>
                    <div class="inner-content">
                    <div class="inner-tag">Thông tin</div>
                    <h3 class="inner-title">
                        Khi mua một bức tranh ta cần những gì?
                    </h3>
                    <p class="inner-desc">
                        Khi mua một bức tranh, bạn nên xem xét các yếu tố sau: <br>
                            Ngân sách: Xác định số tiền bạn sẵn sàng chi cho bức tranh.<br>
                            Thị hiếu cá nhân: Lựa chọn tranh phù hợp với sở thích và phong cách cá nhân của bạn.<br>
                            Kích thước: Đo kích thước không gian nơi bạn sẽ treo tranh để chọn kích thước phù hợp.<br>
                            Chất liệu và kỹ thuật: Xem xét chất liệu (sơn dầu, acrylic, canvas) và kỹ thuật vẽ của bức tranh.<br>
                            Danh tiếng và tác giả: Nghiên cứu về tác giả và giá trị nghệ thuật của bức tranh.<br>
                            Tình trạng: Kiểm tra tình trạng của bức tranh, đảm bảo không có hư hỏng.<br>
                            Chứng nhận và xác thực: Nếu mua tranh của tác giả nổi tiếng, yêu cầu chứng nhận và xác thực để đảm bảo tính xác thực. <br>
                            Khung và treo: Xem xét khung tranh và cách treo, đảm bảo phù hợp với không gian và phong cách của bạn.
                    </p>
                    </div>
                </a>
                </div>
            </div>
            <div class="inner-button-bottom">
                <a href="index.danhmuc.html" class="button-outline">
                Xem thêm <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
            </div>
        </div>
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
                        <a href="#">Trang Chủ</a>
                        </li>
                        <li>
                        <a href="#">Danh Mục</a>
                        </li>
                        <li>
                        <a href="#">Giới Thiệu</a>
                        </li>
                        <li>
                        <a href="#">Liên Hệ</a>
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