        <script src="javascript/sort.js"></script>
       <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <!-- <div class="inner-top">
                    <div class="inner-content" id="registration-form">
                    Đăng ký ngay để hưởng những <strong>Ưu Đãi</strong>
                    </div>
                    <form action="" class="inner-form">
                    <input type="email" name="email" id="email" placeholder="Nhập email của bạn...">
                    <button type="button" onclick="register()">Đăng Ký Ngay</button>
                    </form>
                    <div id="notification" class="notification"></div>
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
                        <img src="./assets/images/logo_3.png" alt="">
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