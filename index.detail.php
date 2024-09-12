<?php 
    session_start();
        // Kiểm tra xem người dùng đã đăng nhập chưa
    if (!isset($_SESSION['user'])) {
        // Chuyển hướng đến trang dành cho người xem nếu chưa đăng nhập
        header("Location: login1.php");
        exit();
    }
    require_once('./db/conn.php');
    $idsp = $_GET['id'];
    $sql_str = "select * from products where id = $idsp";
    $result = mysqli_query($conn, $sql_str);
    $row = mysqli_fetch_assoc($result);
    $anh_arr = explode(';', $row['images']);

    //kiem tra nut them vao gio duoc nhan
    if (isset($_POST['atcbtn'])) {
        $id = $_POST['pid'];
        $qty = $_POST['qty'];
        // them san pham vao gio hang
        $cart = [];
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        }
        // print_r($cart);
        $isFound = false;
        for ($i = 0; $i < count($cart); $i++) {
            // print_r($cart[$i]);
            if ($cart[$i]['id'] == $id) {
                $cart[$i]['qty']+= $qty; 
                $isFound = true;
            break;
            }
        }
    if (!$isFound) {  //khong tim thay san pham trong gio
        $sql_str = "select * from products where id = $id";
        // echo $sql_str; exit;
        $result = mysqli_query($conn, $sql_str);
        $product = mysqli_fetch_assoc($result);//thuc thi cau lenh ('select * from products where id = '.$id, true);
        $product['qty'] = $qty;
        $cart[] = $product;
    }

    //update session
    $_SESSION['cart'] = $cart;
    // print_r($cart); exit;
}
?>


<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB-TRANH</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
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
        <!-- Section 4 -->
         <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 105px; margin-top: 80px;">
            <h2 class="font-weight-semi-bold text-uppercase mb-3"><?=$row['name']?></h2>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Chi tiết</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <?php
                                for ($i = 0; $i < count($anh_arr); $i++) {
                            ?>
                                <img class="w-100 h-100" src="<?="admin/".$anh_arr[0]?>" alt="<?=$row['name']?>">
                            <?php
                            }
                            ?>  
                        </div> 
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?=$row['name']?></h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Đánh giá)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">Giá: <?=$row['price']?> VNĐ</h3>
                <p class="mb-4"><?=$row['summary']?></p>
                <!-- Mua -->
                <div class="d-flex align-items-center mb-4 pt-2">
                    <form method="post" style="display: inline-flex">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                            <!-- <div class="input-group-btn">
                                <button class="btn btn-primary btn-minus" >
                                <i class="fa fa-minus"></i>
                                </button>
                            </div> -->
                            <input type="text" class="form-control bg-secondary text-center" value="1">
                            <input type="hidden" class="form-control bg-secondary text-center" value="1" name="qty">
                            <input type="hidden" class="form-control bg-secondary text-center" value="<?=$idsp?>" name="pid">
                            <!-- <div class="input-group-btn">
                                <button class="btn btn-primary btn-plus">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div> -->
                        </div>
                        <button class="btn btn-primary px-3" name="atcbtn"><i class="fa fa-shopping-cart mr-1" ></i>Mua</button>
                    </form>
                    <script src="javascript/sort.js"></script>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Chia sẽ:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="#">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Miêu tả</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Thông tin</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Đánh giá (0)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Miêu tả sản phẩm</h4>
                        <?=$row['description']?>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <h4 class="mb-3">Thông tin bổ sung</h4>
                        <?=$row['summary']?>
                        <!-- <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                    </li>
                                  </ul> 
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0">
                                        Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                    </li>
                                    <li class="list-group-item px-0">
                                        Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                    </li>
                                  </ul> 
                            </div>
                        </div> -->
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">1 Đánh giá cho "<?=$row['name']?>"</h4>
                                <div class="media mb-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>Phát Tài<small> - <i>Ngày 11 tháng 9 năm 2024</i></small></h6>
                                        <div class="text-primary mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>Bức tranh này khá là đẹp tối rất thích nó.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Để lại đánh giá</h4>
                                <small>Địa chỉ email của bạn sẽ được không công khai. Điền bắt buộc thanh ghi có đánh dấu *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Xếp hạng * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Đánh giá *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Tên của bạn *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Địa chỉ email của bạn *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Đánh giá" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Các Sản Phảm Tương Tự</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
            <?php
            //tim cac san pham lien quan cung category_id voi san pham nay
            $dmid = $row['category_id'];
            $sql2 = "select * from products where category_id=$dmid  and id <> $idsp";
            $result2 = mysqli_query($conn, $sql2);
            while($row2 = mysqli_fetch_assoc($result2)) {
                $arrs = explode(";", $row2["images"]);
            ?>
                <div class="owl-carousel related-carousel">
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="<?="admin/".$arrs[0]?>" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><?=$row2['name']?></h6>
                            <div class="d-flex justify-content-center">
                                <h6>Giá: <?=$row2['price']?> VNĐ</h6>
                                <!-- <h6 class="text-muted ml-2"><del> <?=$row2['price']?> VNĐ</del></h6> -->
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="index.detail.php?id=<?=$row2['id']?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem</a>
                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Mua</a>
                        </div>
                    </div>
                </div>
                <?php 
                    } 
                ?> 
            </div>
        </div>
    </div>
    
    <!-- Products End -->
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

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>