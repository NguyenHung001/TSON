
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/imgs/favicon.webp" type="image/x-icon" />
  <title>Liên hệ</title>
  <link rel="stylesheet" href="./assets/css/variables.css" />
  <link rel="stylesheet" href="./assets/css/reset.css" />
  <link rel="stylesheet" href="./assets/css/header.css" />
  <link rel="stylesheet" href="./assets/css/footer.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
  <link rel="stylesheet" href="./assets/css/link_menu.css">
  <link rel="stylesheet" href="./assets/font/fontawesome-6.5.1/css/all.min.css" />
  <style>
    .login .container {
        display: flex;
        padding: 50px 0;
    }
    form {
        width: 50%;
        padding-right: 60px;
    }
    .image {
        width: 50%;
    }
    input {
        width: 100%;
        padding: 8px 15px;
        border: 1px solid #dfdfdf;
    }
    input:focus {
        outline: none;
    }
    label {
        margin-bottom: 5px;
        font-size: 17px;
        font-weight: 700;
        display: inline-block;
    }
    label::after {
        content: " *";
        color: red;
    }
    .item {
        margin-bottom: 20px;
    }
    .item p {
        color: red;
        font-size: 14px;
        font-weight: 400;
        margin-top: 10px;
    }
    .item h3 {
        margin-top: 40px;
    }
    .login-btn {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    
    button {
        height: 50px;
        width: 110px;
        background-color: #ffc104;
        color: white;
        border: none;
        cursor: pointer;
        transition: 0.2s ease-in-out;
        margin-right: 20px;
    }
    button:hover {
        background-color: #ffd249;
    }
    .login-btn a {
        display: inline-block;
        padding: 15px 25px;
        color: white;
        background-color: #68b1e5;
        height: 50px;
        transition: 0.2s ease-in-out;
    }
    .image {
        overflow: hidden;
    }
    .image img {
        height: 400px;
        object-fit: cover;
    }
    form .item .error {
      color: red;
      font-size: 13px;
      margin-top: 8px;
    }

    .success p {
      text-align: center;
      color: green;
      font-size: 20px;
      margin-bottom: 40px;
      font-weight: 700;
    }

    .success p i {
      color: green;
    }
  </style>
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
                <a href="./register.php">Đăng kí</a>
              </li>
              <li>
                <i class="fa-solid fa-user"></i>
                <a href="./login.php">Đăng nhập</a>
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
                <a href="products.php">Sản phẩm
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
              <li><a href="news.php">tin tức</a></li>
              <li><a class="active" href="contact.php">liên hệ</a></li>
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
            <p>Quên mật khẩu</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="login">
    <div class="container">
        <form action="./handle-forgot-pass.php" method="post">
        <div class="item">
            <h3>QUÊN MẬT KHẨU</h3>
            <p>(*) Mục không được bỏ trống.</p>
        </div>
        <div class="item">
                <label for="email">Nhập email của bạn</label>
                <input type="email" name="email" id="email" value="<?php 
                echo (isset($errors['email'])) ? $email : "";
                ?>">
                <p class="error"><?php
                echo (isset($errors['email'])) ? $errors['email'] : "";
                ?></p>
            </div>
            <div class="item">
                <label for="password">Nhập mật khẩu mới</label>
                <input type="password" name="password" id="password">
                <p class="error"><?php  
                echo (isset($errors['password'])) ? $errors['password'] : "";
                ?></p>
            </div>
            <div class="item login-btn">
                <button name="updatepass" value="updatepass">
                  Đổi mật khẩu</button>
            </div>
        </form>
        <div class="image">
            <img src="./assets/imgs/service-1.webp" alt="">
        </div>
    </div>
    <div class="success">
      <p><?php 
      echo isset($success) ? $success : "";
      ?></p>
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
            <span>| Cung cấp bởi</span>
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