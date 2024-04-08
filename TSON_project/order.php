<?php
require "./connectDB.php";
$result = mysqli_query($conn, "select * from cart");
$data = mysqli_fetch_all($result, MYSQLI_BOTH);

$totalPrice = 0;
foreach($data as $item) {
  $totalPrice += $item['pd_price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/imgs/favicon.webp" type="image/x-icon" />
    <title>Thanh toán</title>
    <link rel="stylesheet" href="./assets/css/variables.css" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/link_menu.css" />
    <link rel="stylesheet" href="./assets/font/fontawesome-6.5.1/css/all.min.css" />
    <style>
        .pay>.container {
            display: flex;
            padding: 50px 0;
        }

        .pay .container .left h3,
        .pay .container .right form h3 {
            margin-bottom: 30px;
            font-size: 28px;
        }

        .pay .left,
        .pay .right {
            width: 50%;
        }

        .pay .left {
            padding-right: 50px;
            margin-right: 50px;
            border-right: 1px solid #e3e3e3;
        }

        .pay .img {
            width: 90px;
            height: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pay .img img {
            width: 100%;
            object-fit: cover;
        }

        .pay .item-left {
            display: flex;
        }

        .pay .name {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            margin-left: 20px;
            font-weight: 700;
        }

        .pay .name .num {
            font-weight: 500;
            opacity: 0.7;
        }

        .pay .pay-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #e3e3e3;
            padding: 10px 0;
        }

        .item-right {
            display: flex;
            align-items: center;
            color: #ffc104;
            font-size: 20px;
            font-weight: 700;
        }

        form input {
            width: 100%;
            padding: 8px 15px;
            border: 1px solid #dfdfdf;
            outline: none;
        }

        form label {
            margin-bottom: 5px;
            font-size: 17px;
            font-weight: 700;
            display: inline-block;
        }

        form .select input {
            width: 30px;
        }

        .form-item {
            margin-bottom: 25px;
        }

        .pay-btn {
            margin-top: 20px;
        }

        .pay-btn button {
            width: 100%;
            padding: 13px 0;
            border: none;
            background-color: #006edf;
            color: white;
            font-weight: 700;
            font-size: 18px;
            transition: .3s ease-in-out;
        }

        .pay-btn button:hover {
            opacity: 0.7;
        }

        .pay-btn input {
            visibility: hidden;
        }

        .pay .error {
            color: red;
            font-size: 15px;
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
        .total-price {
            display: flex;
            justify-content: flex-end;
            padding: 40px 0;
            color: #ffc104;
    font-size: 30px;
    font-weight: 700;
        }
        .total-price span:first-child {
            color: #5c5c5c;
            margin-right: 15px;
        }
        .total-price span:last-child::after {
            content: "₫";
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header style="height: auto">
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
                        <p>Thanh toán</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="pay">
        <div class="container">
            <div class="left">
                <h3>Đơn hàng</h3>
                <?php foreach ($data as $item) { ?>
                    <div class="pay-item">
                        <div class="item-left">
                            <div class="img">
                                <img src="<?php echo "./assets/imgs/" . $item['image']; ?>" alt="">
                            </div>
                            <div class="name">
                                <span><?php
                                        echo $item['pd_name'];
                                        ?>
                                </span>
                                <div class="num">
                                    <span>Số lượng:</span>
                                    <span><?php
                                            echo $item['quantity'];
                                            ?>
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="item-right">
                            <span><?php echo $item['pd_price'] * $item['quantity']; ?></span>
                            <span>₫</span>
                        </div>

                    </div>
                <?php } ?>
                <div class="total-price">
                    <span>Tổng tiền: </span>
                    <span><?php echo $totalPrice ?></span>
                </div>
            </div>
            <div class="right">
                <form action="./handle-order.php" method="post">
                    <h3>Thông tin nhận hàng</h3>
                    <div class="form-item">
                        <label for="fullname">Họ và tên</label>
                        <input type="text" name="fullname" id="fullname" value="<?php echo (isset($fail)) ? $fullname : "" ; ?>">
                        <p class="error">
                        <?php echo (isset($errors['fullname'])) ? $errors['fullname'] : "" ; ?>

                        </p>
                    </div>
                    <div class="form-item">
                        <label for="phonenumber">Số điện thoại</label>
                        <input type="text" name="phonenumber" id="phonenumber" value="<?php echo (isset($fail)) ? $phonenumber : "" ; ?>">
                        <p class="error">
                        <?php echo (isset($errors['phonenumber'])) ? $errors['phonenumber'] : "" ; ?>

                        </p>
                    </div>
                    <div class="form-item">
                        <label for="adress">Địa chỉ</label>
                        <input type="text" name="adress" id="adress" value="<?php echo (isset($fail)) ? $adress : "" ; ?>">
                        <p class="error">
<?php echo (isset($errors['adress'])) ? $errors['adress'] : "" ; ?>

                        </p>
                    </div>
                    <div class="form-item select">
                        <label for="">Phương thức thanh toán</label><br />
                        <input type="radio" name="select" value="on">
                        <span>Thanh toán qua MOMO</span> <br />
                        <input type="radio" name="select" value="off">
                        <span>Thanh toán khi nhận hàng</span> <br />
                        <p class="error">
                        <?php echo (isset($errors['pay'])) ? $errors['pay'] : "" ; ?>

                        </p>
                    </div>
                    <div class="form-item pay-btn">
                        <input type="text" name="products" value="<?php
                                                                    foreach ($data as $item) {
                                                                        echo $item['pd_name'] . " x" . $item['quantity'] . ", ";
                                                                    }
                                                                    ?>">
                        <button name="pay" value="pay">Đặt hàng</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="success">
            <p><?php echo (isset($success)) ? $success : ""; ?></p>
        </div>
    </div>
    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer__content">
                <div class="footer__top">
                    <div class="item item1">
                        <div class="logo">
                            <img src="./assets/imgs/logo-footer.webp" alt="" />
                            <p>
                                Đây là theme TSON, theme giới thiệu doanh nghiệp, bán hàng,
                                bán máy móc thiết bị, giới thiệu dịch vụ cho công ty tốt nhất
                                Bizwebs
                            </p>
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
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Sản phẩm</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Dịch vụ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Tin tức</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Trang khác</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Dịch Vụ</h4>
                        <ul>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Sản phẩm</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Dịch vụ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Tin tức</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Trang khác</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h4>Dịch Vụ</h4>
                        <ul>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Sản phẩm</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Dịch vụ</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Tin tức</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-solid fa-angle-right"></i>
                                    <span>Trang khác</span>
                                </a>
                            </li>
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

    <script src="./assets/js/main.js"></script>
</body>

</html>