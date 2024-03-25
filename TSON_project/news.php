<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/imgs/favicon.webp" type="image/x-icon" />
    <title>Tin tức</title>
    <link rel="stylesheet" href="./assets/css/variables.css" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/link_menu.css">
    <link
      rel="stylesheet"
      href="./assets/font/fontawesome-6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <!-- HEADER -->
    <header style="height: auto;">
      <div class="header__content">
        <div class="header__content__top flex-center">
          <div class="container flex-center">
            <div class="contact">
              <ul class="flex-center">
                <li>
                  <i class="fa-solid fa-phone"></i>
                  <a href="#">Gọi: 0966418674</a>
                </li>
                <li>
                  <i class="fa-solid fa-envelope"></i>
                  <a href="#">Email: ng.hung01.it@gmail.com</a>
                </li>
              </ul>
            </div>
            <div class="form">
              <ul class="flex-center">
                <li>
                  <i class="fa-solid fa-lock"></i>
                  <a href="#">Đăng kí</a>
                </li>
                <li>
                  <i class="fa-solid fa-user"></i>
                  <a href="#">Đăng nhập</a>
                </li>
                <li>
                  <i class="fa-solid fa-magnifying-glass"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="header__content__bottom flex-center">
          <div class="container flex-center">
            <div class="logo">
              <img src="./assets/imgs/logo.webp" alt="LOGO" />
            </div>
            <div class="menu">
              <ul class="flex-center">
                <li><a href="index.php">trang chủ</a></li>
                <li class="dropdown">
                  <a href="products.php"
                    >Sản phẩm
                    <i class="fa-solid fa-angle-right"></i>
                  </a>
                  <div class="menu-dropdown">
                    <ul>
                      <li><a href="">Máy móc</a></li>
                      <li><a href="">Thiết bị điện </a></li>
                      <li><a href="">Thiết bị nước</a></li>
                      <li><a href="">Đồ bảo hộ</a></li>
                      <li><a href="">Dụng cụ khác</a></li>
                    </ul>
                  </div>
                </li>
                <li><a href="services.php">dịch vụ</a></li>
                <li class="boder-bottom"><a href="news.php">tin tức</a></li>
                <li><a href="contact.php">liên hệ</a></li>
              </ul>
            </div>
            <div class="cart">
              <a href="cart.php" class="btn">
                <i class="fa-solid fa-cart-shopping"></i>
                <span id="quality"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
        <!-- LINK MENU -->
        <div id="link-menu">
            <div class="container">
                <div class="link-menu__content">
                    <ul class="flex-center">
                        <li>
                            <a href="index.php">Trang chủ </a>
                            <i class="fa-solid fa-angle-right"></i>
                        </li>
                        <li>
                            <p>Tin tức</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer__content">
                <div class="footer__top">
                    <div class="item item1">
                        <div class="logo">
                            <img src="./assets/imgs/logo-footer.webp" alt="">
                            <p>Đây là theme TSON, theme giới thiệu doanh nghiệp, bán hàng, bán máy móc thiết bị, giới thiệu dịch vụ cho công ty tốt nhất Bizwebs</p>
                        </div>
                        <div class="showroom">
                            <h3>
                                <a href="">LIÊN HỆ</a>
                            </h3>
                            <ul class="adress">
                                <li>Địa chỉ: k408 Hoàng Diệu, Hải Châu, Đà Nẵng</li>
                                <li>Email: ng.hung01.it@mail.com</li>
                                <li>Điện thoại: 0966418674</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <h4>Dịch Vụ</h4>
                        <ul>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Trang chủ</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Sản phẩm</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Dịch vụ</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Tin tức</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Trang khác</span>
                            </a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Dịch Vụ</h4>
                        <ul>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Trang chủ</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Sản phẩm</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Dịch vụ</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Tin tức</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Trang khác</span>
                            </a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Dịch Vụ</h4>
                        <ul>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Trang chủ</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Sản phẩm</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Dịch vụ</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Tin tức</span>
                            </a></li>
                            <li><a href="">
                                <i class="fa-solid fa-angle-right"></i>
                                <span>Trang khác</span>
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__bottom flex-center">
                    <div class="copy-right">
                        <span>© Bản quyền thuộc về
                            <b>TSON</b> 
                        </span>
                        <span>|  Cung cấp bởi</span>
                        <span>
                            <a href="">Sapo</a>
                        </span>

                    </div>
                    <div class="contact">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-google-plus-g"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </body>
</html>
