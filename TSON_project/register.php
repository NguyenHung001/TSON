<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/imgs/favicon.webp" type="image/x-icon" />
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./assets/css/variables.css" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/link_menu.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-6.5.1/css/all.min.css" />
    <style>
        h3 {
            margin-top: 40px;
        }

        .register .container>p {
            color: red;
            font-size: 14px;
            font-weight: 400;
            margin-top: 10px;
        }

        form {
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 50px;
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

        input {
            width: 100%;
            padding: 8px 15px;
            border: 1px solid #dfdfdf;
        }

        input:focus {
            outline: none
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

        form a {
            display: inline-block;
            padding: 15px 25px;
            color: white;
            background-color: #68b1e5;
            height: 50px;
            transition: 0.2s ease-in-out;
        }

        form a:hover {
            background-color: #169eff;
        }

        .register-btn {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        form .item p {
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
                        <p>Đăng kí tài khoản</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register">
        <div class="container">
            <h3>ĐĂNG KÝ TÀI KHOẢN</h3>
            <p>(*) Mục không được bỏ trống.</p>
            <form action="handle-register.php" method="post">
                <div class="item">
                    <label for="lastname">Họ và tên đệm</label>
                    <input type="text" name="lastname" id="lastname" value="<?php echo (isset($fail)) ? $lastnameValue : "" ?>">
                    <p><?php echo (isset($errors['lastname'])) ? $errors['lastname'] : "" ?>
                    </p>
                </div>
                <div class="item">
                    <label for="firstname">Tên</label>
                    <input type="text" name="firstname" id="firstname" value="<?php echo (isset($fail)) ? $firstnameValue : "" ?>">
                    <p><?php echo (isset($errors['firstname'])) ? $errors['firstname'] : "" ?>
                    </p>
                </div>
                <div class="item">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" name="username" id="username" value="<?php echo (isset($fail)) ? $usernameValue : "" ?>">
                    <p><?php echo (isset($errors['username'])) ? $errors['username'] : "" ?>
                    </p>
                </div>
                <div class="item">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" value="<?php echo (isset($fail)) ? $passwordValue : "" ;?>">
                    <p><?php echo (isset($errors['password'])) ? $errors['password'] : "" ?>
                    </p>
                </div>
                <div class="item">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo (isset($fail)) ? $emailValue : "" ;?>">
                    <p><?php echo (isset($errors['email'])) ? $errors['email'] : ""; ?>
                    </p>
                </div>
                <div class="item">
                    <label for="phonenumber">Số điện thoại</label>
                    <input type="text" name="phonenumber" id="phonenumber" value="<?php echo (isset($fail)) ? $phonenumberValue : ""; ?>">
                    <p><?php echo (isset($errors['phonenumber'])) ? $errors['phonenumber'] : "" ;?>
                    </p>
                </div>
                <div class="item register-btn">
                    <button type="submit" name="register" value="register">Đăng ký</button>
                    <a href="./login.php">Đăng nhập</a>
                </div>
                <div class="item">
                    <a href="./list-customers.php">Danh sách khách hàng đã đăng kí</a>
                </div>
            </form>
            <div class="success">
                <p><?php echo (isset($success)) ? $success : ""; ;?></p>
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