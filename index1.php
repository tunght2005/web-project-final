<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB-TRANH</title>
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
        <link rel="manifest" href="./favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
                                <span><a href=""><i class="fa-regular fa-address-card"></i>Tài khoản</a></span>
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
                        <a href="#" class="button" onclick="ar"><i class="fa-regular fa-user"></i></a>
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
                        <a href="index.danhmuc1.php" class="button-outline">
                            Xem Thêm <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="inner-wrap">
                    <?php
                    require_once('./db/conn.php');
                    // Câu lệnh SQL đúng
                    $sql_str = "SELECT products.id AS pid, products.name AS pname, images, price, categories.name AS cname, categories.slug AS cslug, brands.slug AS bslug 
                                FROM products 
                                JOIN categories ON products.category_id = categories.id 
                                JOIN brands ON products.brand_id = brands.id 
                                ORDER BY categories.name DESC 
                                LIMIT 0, 8";
                                
                    // Thực hiện truy vấn
                    $result = mysqli_query($conn, $sql_str);
                    
                    // Kiểm tra kết quả và lặp qua từng hàng
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Xử lý hình ảnh (giả sử có nhiều hình ảnh được phân tách bằng dấu chấm phẩy)
                        $anh_arr = explode(';', $row['images']);
                    ?>
                    <div class="product-item">
                        <!-- Liên kết chi tiết sản phẩm -->
                        <a href="index.detail.php?id=<?=$row['pid']?>" data-filter="<?=$row['cslug']?> <?=$row['bslug']?>">
                            <!-- Hiển thị hình ảnh -->
                            <div class="inner-image">
                                <img src="<?="admin/".$anh_arr[0]?>" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                    <?=$row['pname']?>
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        <!-- Hiển thị loại sản phẩm -->
                                        Loại: <?=$row['cname']?>
                                    </div>
                                </div>
                                <div class="inner-price">
                                    <!-- Hiển thị giá sản phẩm -->
                                    Giá: <?=$row['price']?> VND
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php 
                    }
                    ?>
                    <!-- <div class="product-item">
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
                    <div class="product-item"> -->
                        <!-- <a href="#">
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
                    </div> -->
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
                            <?php
                            require_once('./db/conn.php');
                            // Câu lệnh SQL đúng
                            $sql_str = "SELECT products.id AS pid, products.name AS pname, images, price,disscounted_price, categories.name AS cname, categories.slug AS cslug, brands.slug AS bslug 
                                        FROM products 
                                        JOIN categories ON products.category_id = categories.id 
                                        JOIN brands ON products.brand_id = brands.id 
                                        ORDER BY categories.name ASC 
                                        LIMIT 0, 8";
                                        
                            // Thực hiện truy vấn
                            $result = mysqli_query($conn, $sql_str);
                            
                            // Kiểm tra kết quả và lặp qua từng hàng
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Xử lý hình ảnh (giả sử có nhiều hình ảnh được phân tách bằng dấu chấm phẩy)
                                $anh_arr = explode(';', $row['images']);
                            ?>
                            <div class="swiper-slide">
                            <a href="index.detail.php?id=<?=$row['pid']?>" data-filter="<?=$row['cslug']?> <?=$row['bslug']?>">
                                <img src="<?="admin/".$anh_arr[0]?>" alt="<?=$row['pname']?>" />
                                <div class="product-info">
                                    <h3><?=$row['pname']?></h3>
                                    <p>
                                        <!-- Hiển thị giá gốc và gạch ngang -->
                                        <span class="original-price" style="text-decoration: line-through;">
                                            Giá: <?=number_format($row['price'])?> VND
                                        </span><br>
                                        <!-- Hiển thị giá đã giảm -->
                                        <span class="discount-price">
                                            Giá: <?=number_format($row['disscounted_price'])?> VND
                                        </span>
                                    </p>
                                </div>
                            </a>
                            </div>
                            <?php
                            }
                            ?>
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
                <a href="index.danhmuc1.php" class="button-outline">
                Xem thêm <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
            </div>
        </div>
        <!-- End Section 4 -->

        <!-- Footer -->

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
        <button onclick="topFunction()" id="backToTopBtn" title="Go to top"><i class="fa-solid fa-hand-point-up"></i></button>
        <script>
        // Đặt JavaScript ở đây
        window.onscroll = function() {
          scrollFunction();
        };

        function scrollFunction() {
          const backToTopBtn = document.getElementById("backToTopBtn");
          
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopBtn.style.display = "block";
          } else {
            backToTopBtn.style.display = "none";
          }
        }

        function topFunction() {
          document.body.scrollTop = 0; // Safari
          document.documentElement.scrollTop = 0; // Chrome, Firefox, IE, Opera
        }
    </script>
    </body>
</html>