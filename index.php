<?php
session_start();
require_once('./db/conn.php');
require_once('components/header.php');
?>
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
                            <a href="index.gioithieu.php" class="button-outline">
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
                            Một số Sản Phẩm của chúng tôi
                        </h2>
                    </div>
                    <div class="inner-right">
                        <a href="index.danhmuc.php" class="button-outline">
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

        <div class="section-3">

        </div>
        <!-- Section 4 -->
        <div class="section-4">
            <div class="container">
            <div class="box-head">
                <div class="inner-left">
                <div class="inner-sub-title">
                    Tin Tức Thú Vị?
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