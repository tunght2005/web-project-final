<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB-TRANH</title>
        <link rel="stylesheet" href="./assets/css/style.css">
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
                    <form action="timkiem.php" method="get" class="inner-form">
                        <input name="keyword" placeholder="Nhập từ khoá...">
                        <button><i class="fa-sharp-duotone fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <!-- button -->
                    <span><a href="logout1.php" class="button"><i class="fa-regular fa-address-card"></i>
                    <?php
                      $user = $_SESSION['user'];
                      echo $user['name'];
                    ?></a></span>
                     <!-- giỏ hàng -->
                    <a href="index.cart.php" class="shoping">
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
                        <i class="fa-solid fa-cart-shopping"></i> 
                        
                    </a>
                </div>
            </div>
        </header>
        <!-- End Header -->