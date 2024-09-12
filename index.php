<?php
session_start();
require_once('./db/conn.php');
require_once('components/header.php');
?>
        <!-- section -->
        <section class="section-1">
            <div class="container">
                <div class="inner-wrap">
                    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
                        slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
                        coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true" autoplay-delay="3000" autoplay-disable-on-interaction="false">
                        <swiper-slide>
                            <a href="#"> 
                                <img src="assets/images/tranh-1.jpg" />
                            </a>
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
                    <div class="inner-content">
                        <!-- <img class="inner-image-sub-1" src="assets/images/trangtri-2.png" alt="ảnh trang trí">
                        <img class="inner-image-sub-2" src="assets/images/trangtri_1.png" alt="ảnh trang trí"> -->
                        <h1 class="inner-title">
                            <div class="inner-title-main">
                                Vẽ Đẹp <br> <span>Chạm Đến  </span>
                            </div>
                            <div class="inner-title-sub">
                                Cảm Xúc
                            </div>
                        </h1>
                        <!-- <div class="inner-desc">
                           <p>Hơn 1000 tác phẩm Tranh Sơn Dầu Cao Cấp chỉ có tại <b><i>Shop Tranh</i></b>, độc quyền và độc bản. Đa dạng chủ để tranh, màu sắc, kích thước phù hợp mọi không gian nội thất.</p> 
                        </div> -->
                        <!-- <div class="inner-buttons">
                            <a href="#" class="button-outline">
                                Giới thiệu <i class="fa-regular fa-circle-play"></i>
                            </a>
                            <a href="#" class="button">
                                Khám phá ngay
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- section sub -->
        <div class="section-sub">
            <div class="container">
                <div class="inner-wrap">
                    <div class="col-1">
                        <div class="title">
                            <h4><span>01.</span> TRANH SƠN DẦU CAO CẤP</h4>
                            <div class="inner-info">
                                <p>Tranh sáng tác độc bản - Sơn dầu nhập khẩu độ bền hàng trăm năm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="title">
                            <h4><span>02.</span> SỰ KHÁC BIỆT</h4>
                            <div class="inner-info">
                               <p>Sang trọng - tinh tế - kiến tạo không gian hiện đại</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="title">
                            <h4><span>03.</span> TƯ VẤN CHUYÊN NGHIỆP</h4> 
                            <div class="inner-info">
                                <p>Đội ngũ chuyên gia hàng đầu trong lĩnh vực kiến trúc - hội họa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- end -->
        <!-- section 2 -->
        <div class="section-2">
            <div class="container">
                <div class="box-head">
                    <div class="inner-left">
                        <div class="inner-title-sub">
                            <img class="img-1" src="assets/images/icon-1.jpg" alt="">
                            Tác Phẩm Nổi Bật
                            <img class="img-2" src="assets/images/icon-1.jpg" alt="">
                        </div>
                        <h2 class="inner-title">
                            Một số Sản Phẩm của chúng tôi
                        </h2>
                    </div>
                    <div class="inner-right">
                        <a href="index.danhmuc.html" class="button-outline">
                            Xem Thêm <i class="fa-solid fa-arrow-right"></i>
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

        <!-- Các sản phẩm đang giảm giá -->
        <div class="section-3">
            <div class="container">
                <div class="box-head">
                    <div class="inner-left">
                    <div class="inner-sub-title">
                        <img class="img-1" src="assets/images/icon-1.jpg" alt="">
                         Các Sản Phẩm Đang Giảm Giá
                        <img class="img-2" src="assets/images/icon-1.jpg" alt="">
                    </div>
                    <h2 class="inner-title">
                        Một số sản phẩm
                    </h2>
                    </div>
                </div>
                <div class="inner-wrap">
                      <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#"> 
                                    <img src="assets/images/tranh-1.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"> 
                                    <img src="assets/images/tranh-1.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"> 
                                    <img src="assets/images/tranh-1.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"> 
                                    <img src="assets/images/tranh-1.jpg" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"> 
                                    <img src="assets/images/tranh-1.jpg" />
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- Swiper JS -->
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

                    <!-- Initialize Swiper -->
                    <script>
                        var swiper = new Swiper(".mySwiper", {
                        slidesPerView: 3,
                        spaceBetween: 30,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        });
                    </script>
                </div>
            </div>
        </div>
        <!-- section sub 2 -->
        <div class="section-sub-2">
            <div class="container">
                <div class="box-head">
                    <div class="inner-left">
                        <div class="inner-title-sub">
                            <img class="img-1" src="assets/images/icon-1.jpg" alt="">
                            Các Con Số Ấn Tượng
                            <img class="img-2" src="assets/images/icon-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="inner-content">
                    <div class="inner-wrap">
                        <div class="col-1">
                            <span>
                                2
                            </span>
                            <p>SHOWROOM</p>
                        </div>
                        <div class="col-1">
                            <span>
                                1500+
                            </span>
                            <p>TÁC PHẨM</p>
                        </div>
                        <div class="col-1">
                            <span>
                                12000+
                            </span>
                            <p>KHÁCH HÀNG</p>
                        </div>
                        <div class="col-1">
                            <span>
                                50000+
                            </span>
                            <p>TÁC PHẨM</p>
                        </div>
                        <div class="col-1">
                            <span>
                                999+
                            </span>
                            <p>HOẠ SĨ</p>
                        </div>
                        <div class="col-1">
                            <span>
                                22
                            </span>
                            <p>ĐỐI TÁC</p>
                        </div>
                    </div>
                    <div class="inner-col-2">
                        <div class="inner-wrap">
                            <div class="col-3">
                                <img src="assets/images/fast-delivery-1.png" alt="">
                                <span>
                                    GIAO HÀNG TOÀN QUỐC
                                </span>
                                <p>Chúng tôi nhận đóng gói và vận chuyển cho mọi khách hàng trên toàn quốc</p>
                            </div>
                            <div class="col-4">
                                <img src="assets/images/quality.png" alt="">
                                <span>
                                    CHẤT LƯỢNG HÀNG ĐÀU
                                </span>
                                <p>Chất lượng tranh tuyệt hảo, màu sắc sống động được vẽ bởi các họa sĩ sáng tạo, có tên tuổi trong giới nghệ thuật</p>
                            </div>
                            <div class="col-3">
                                <img src="assets/images/feature-selection.png" alt="">
                                <span>
                                    SẢN PHẨM ĐA DẠNG
                                </span>
                                <p>Chúng tôi có nhiều tác phẩm ở nhiều thể loai, chất liệu khác nhau. Ngoài ra tranh cũng có nhiều lựa chọn phù hợp yêu cầu khách hàng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 4 -->
        <!-- Section 4 -->
        <div class="section-4">
            <div class="container">
            <div class="box-head">
                <div class="inner-left">
                <div class="inner-sub-title">
                    <img class="img-1" src="assets/images/icon-1.jpg" alt="">
                    Kiến Thức Thú Vị?
                    <img class="img-2" src="assets/images/icon-1.jpg" alt="">
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
                <?php
                require_once('./db/conn.php');
                $sql_str="select * from news order by created_at desc limit 0, 3";
                $result = mysqli_query($conn, $sql_str);
                while ($row = mysqli_fetch_assoc($result)){
                
                ?>
                <div class="blog-item">
                    <a href="#">
                        <div class="inner-image">
                        <img src="<?='admin/'.$row['avatar']?>" alt="">
                        </div>
                        <div class="inner-content">
                        <div class="inner-tag">Thông tin</div>
                        <h3 class="inner-title">
                            <?=$row['title']?>
                        </h3>
                        <p class="inner-desc">
                            <?=$row['description']?>
                        </p>
                        </div>
                    </a>
                </div>
                <?php 
                }
                ?>
            </div>
            <div class="inner-button-bottom">
                <a href="index.danhmuc.php" class="button-outline">
                Xem thêm <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
            </div>
        </div>
        <!-- End Section 4 -->

        <!-- Footer -->
<?php
require_once('components/footer.php');
?>