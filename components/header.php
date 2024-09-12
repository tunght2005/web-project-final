<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB-TRANH</title>
         <!-- favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="../favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>
    <body> 
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="inner-wrap">
                    <!-- logo -->
                    <div class="inner-logo">
                        <a href="index.php">
                            <img src="./assets/images/logo_3.png" alt="logo">
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