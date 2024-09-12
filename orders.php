<?php
session_start();
require_once('./db/conn.php');

// Kiểm tra người dùng đã đăng nhập chưa
if (!isset($_SESSION['user'])) {
    header("Location: login1.php");
    exit();
}

// Lấy thông tin người dùng từ phiên làm việc (dùng email làm định danh)
$user_email = $_SESSION['user']['email'];

// Lấy danh sách đơn hàng của người dùng dựa trên email
$sql_orders = "SELECT * FROM orders WHERE email = '$user_email' ORDER BY created_at DESC";
$result_orders = mysqli_query($conn, $sql_orders);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>User - Orders</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <div id="wrapper">
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-text mx-3">User <sup>Shop Tranh</sup></div>
        </a>
        <hr class="sidebar-divider my-0" />
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <hr class="sidebar-divider" />
        <div class="sidebar-heading">Chức năng chính:</div>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-wallet"></i>
            <span>Đơn hàng</span>
          </a>
          <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Các chức năng:</h6>
              <a class="collapse-item" href="orders.php">Các đơn hàng</a>
            </div>
          </div>
        </li>

        <hr class="sidebar-divider d-none d-md-block" />
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>

      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php
                      $user = $_SESSION['user'];
                      echo $user['name'];
                    ?>
                  </span>
                  <img class="img-profile rounded-circle" src="admin/img/undraw_profile.svg" />
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">Hồ sơ</a>
                  <a class="dropdown-item" href="#">Cài Đặt</a>
                  <a class="dropdown-item" href="#">Nhật ký</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Đăng Xuất</a>
                </div>
              </li>
            </ul>
          </nav>

          <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Danh Sách Đơn Hàng</h1>
            
            <!-- Danh sách đơn hàng -->
            <?php while ($order = mysqli_fetch_assoc($result_orders)) { 
                $order_id = $order['id'];
                $order_details_sql = "SELECT * FROM order_details WHERE order_id = $order_id";
                $order_details_result = mysqli_query($conn, $order_details_sql);
            ?>
              <div class="card mb-4">
                <div class="card-header">
                  <h5 class="card-title">Đơn hàng #<?= $order['id'] ?> - Ngày tạo: <?= date('d-m-Y H:i', strtotime($order['created_at'])) ?></h5>
                </div>
                <div class="card-body">
                  <p><strong>Người nhận:</strong> <?= htmlspecialchars($order['firstname']) ?> <?= htmlspecialchars($order['lastname']) ?></p>
                  <p><strong>Địa chỉ:</strong> <?= htmlspecialchars($order['address']) ?></p>
                  <p><strong>Điện thoại:</strong> <?= htmlspecialchars($order['phone']) ?></p>
                  <p><strong>Email:</strong> <?= htmlspecialchars($order['email']) ?></p>
                  <p><strong>Trạng thái:</strong> <?= htmlspecialchars($order['status']) ?></p>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Id Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($detail = mysqli_fetch_assoc($order_details_result)) { 
                          $product_id = $detail['product_id'];
                          $product_sql = "SELECT name FROM products WHERE id = $product_id";
                          $product_result = mysqli_query($conn, $product_sql);
                          $product = mysqli_fetch_assoc($product_result);
                      ?>
                        <tr>
                          <td><?= htmlspecialchars($detail['product_id']) ?></td>
                          <td><?= htmlspecialchars($product['name']) ?></td>
                          <td><?= number_format($detail['price'], 0, ',', '.') ?> VNĐ</td>
                          <td><?= htmlspecialchars($detail['qty']) ?></td>
                          <td><?= number_format($detail['total'], 0, ',', '.') ?> VNĐ</td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
