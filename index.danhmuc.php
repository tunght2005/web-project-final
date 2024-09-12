<?php
session_start();
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
                    <form action="" class="inner-form">
                        <input name="keyword" placeholder="Nhập từ khoá..." >
                        <button><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <!-- button -->
                    <span>
                    <a href="logout1.php" class="button"><i class="fa-regular fa-address-card"></i> 
                    <?php
                      $user = $_SESSION['user'];
                      echo $user['name'];
                    ?></a></span>
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
        <div class="inner-category">
            <div class="inner-wrap">
                <div class="inner-content">
                   <span>Danh Mục</span>
                    <select name="sort" id="sort" class="inner-arrange-right" onchange="sortProducts()">
                        <option class="choice" value="">--Chọn--</option>
                        <option value="high" class="inner-high">
                            Sắp xếp theo giá cao
                        </option>
                        <option value="low" class="inner-low">
                            Sắp xếp theo giá thấp
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <main class="inner-main-category">
            <div class="col-large-1">
                <div class="inner-category-sub">
                    <div class="section-cate-1">
                        <span>Chuyên Mục</span>
                        <select name="category" id="category" class="col-1" onchange="filterProducts()">
                            <!-- Cập nhật danh sách danh mục trên server -->
                            <option class="choice" value="">--Chọn--</option>
                            <?php 
                            require('./db/conn.php');
                            $sql_str = "select * from categories order by name";
                            $result = mysqli_query($conn, $sql_str);
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>

                            <option value="<?=$row['slug']?>" class="inner-name">
                                <?=$row['name']?>
                            </option>
                             <?php 
                            }
                            ?>
                            <!-- <option value="" class="inner-name-2">
                                Tranh xu hướng
                            </option>
                            <option value="" class="inner-name-3">
                                Tranh mới nhất
                            </option> -->
                        </select>
                    </div>
                    <div class="section-cate-2">
                        <span>Tác Giả</span>
                        <select name="brand" id="brand" class="col-1" onchange="filterProducts()">
                            <option class="choice" value="">--Chọn--</option>
                            <!-- Cập nhật danh sách tác giả trên server -->
                            <?php 
                            require('./db/conn.php');
                            $sql_str = "select * from brands order by name";
                            $result = mysqli_query($conn, $sql_str);
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>

                            <option value="<?=$row['slug']?>" class="inner-name">
                                <?=$row['name']?>
                            </option>
                             <?php 
                            }
                            ?>
                            <!-- <option value="" class="inner-name">
                                Tác Giả 1
                            </option>
                            <option value="" class="inner-name-2">
                                Tác Giả 2
                            </option>
                            <option value="" class="inner-name-3">
                                Tác Giả 3
                            </option> -->
                        </select>
                    </div>
                    <div class="section-cate-3"></div>
                </div>
            </div>
            <div class="col-large-2">
                <div class="inner-wrap">
                    <!-- Cập nhật sản phẩm lên danh mục trên server -->
                        <?php 
                        require('./db/conn.php');
                        $sql_str = "SELECT products.id as pid, products.name AS pname, images, price, categories.name AS cname, categories.slug AS cslug, brands.slug AS bslug FROM products JOIN categories ON products.category_id = categories.id JOIN brands ON products.brand_id = brands.id";
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)){
                            $anh_arr = explode(';', $row['images']); //Tạo mảng lấy tài liệu ảnh trong upload.
                        ?>
                    <div class="product-item">  
                        <a href="index.detail.php?id=<?=$row['pid']?>" data-filter="<?=$row['cslug']?> <?=$row['bslug']?>">
                            <div class="inner-image">
                                <img src="<?="admin/".$anh_arr[0]?>" alt="">
                            </div>
                            <div class="inner-content">
                                <h3 class="inner-title">
                                     <?=$row['pname']?>
                                </h3>
                                <div class="inner-info">
                                    <div class="inner-info-item">
                                        Loại: <b><?=$row['cname']?></b>
                                    </div>
                                </div>
                                <div class="inner-price">
                                Giá: 
                                <?=$row['price']?> VND
                                </div>
                            </div>
                        </a>          
                    </div>
                    <?php 
                        }
                    ?>
                        <!--End cập nhật  -->
                </div>           
            </div>
            <script src="javascript/sort.js"></script>
        </main>
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
                    <a href="index.php">
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