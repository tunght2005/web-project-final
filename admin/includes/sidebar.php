<!-- Sidebar -->
<ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.php"
        >
          <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div> -->
          <div class="sidebar-brand-text mx-3">Admin <sup>Shop Tranh</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Chức năng chính:</div>

        <!-- Brands -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseOne"
            aria-expanded="true"
            aria-controls="collapseOne"
          >
            <i class="fas fa-calendar-day"></i>
            <span>Thương Hiệu</span>
          </a>
          <div
            id="collapseOne"
            class="collapse"
            aria-labelledby="collapseOne"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Các chức năng:</h6>
              <a class="collapse-item" href="./listbrands.php">Liệt kê</a>
              <a class="collapse-item" href="./addbrand.php">Thêm mới</a>
            </div>
          </div>
        </li>
        <!-- End Brand -->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fas fa-calendar-day"></i>
            <span>Danh mục sản phẩm</span>
          </a>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Các chức năng:</h6>
              <a class="collapse-item" href="./listcats.php">Liệt kê</a>
              <a class="collapse-item" href="./addcategory.php">Thêm mới</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseThree"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fab fa-product-hunt"></i>
            <span>Sản phẩm</span>
          </a>
          <div
            id="collapseThree"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Các chức năng:</h6>
              <a class="collapse-item" href="./listsanpham.php">Liệt kê</a>
              <a class="collapse-item" href="./themsanpham2.php">Thêm mới</a>
            </div>
          </div>
        </li>

        <!-- Tin tức -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseDMTT"
            aria-expanded="true"
            aria-controls="collapseDMTT"
          >
            <i class="fas fa-calendar-day"></i>
            <span>Danh mục tin tức</span>
          </a>
          <div
            id="collapseDMTT"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Các chức năng:</h6>
              <a class="collapse-item" href="./listnewscats.php">Liệt kê</a>
              <a class="collapse-item" href="./themdanhmuctintuc.php">Thêm mới</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseTT"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fab fa-product-hunt"></i>
            <span>Tin tức</span>
          </a>
          <div
            id="collapseTT"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Các chức năng:</h6>
              <a class="collapse-item" href="./listnews.php">Liệt kê</a>
              <a class="collapse-item" href="./themtintuc.php">Thêm mới</a>
            </div>
          </div>
        </li>
        <!-- End Tin tức -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseFour"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fas fa-wallet"></i>
            <span>Đơn hàng</span>
          </a>
          <div
            id="collapseFour"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Các chức năng:</h6>
              <a class="collapse-item" href="./listorders.php">Các đơn hàng</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseFive"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            <i class="fas fa-users"></i>
            <span>Người dùng</span>
          </a>
          <div
            id="collapseFive"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionSidebar"
          >
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Các chức năng:</h6>
              <a class="collapse-item" href="./listusers.php">Liệt kê</a>
              <a class="collapse-item" href="./themuser.php">Thêm mới</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
      </ul>
      <!-- End of Sidebar -->