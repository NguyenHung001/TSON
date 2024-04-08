<?php
require "./connectDB.php";
$result = mysqli_query($conn, "select * from cart");
$data = mysqli_fetch_all($result, MYSQLI_BOTH);

$totalPrice = 0;
foreach($data as $item) {
  $totalPrice += $item['pd_price'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/imgs/favicon.webp" type="image/x-icon" />
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="./assets/css/variables.css" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/link_menu.css" />
    <link
      rel="stylesheet"
      href="./assets/font/fontawesome-6.5.1/css/all.min.css"
    />

    <style>
      .main-cart {
        padding: 50px 0;
        background-color: #fff;
      }
      .main-cart__content h4 {
        margin-bottom: 50px;
      }
      .main-cart__content table {
        width: 100%;
        /* text-align: left; */
        text-align: center;
      }
      tr {
        /* border-bottom: 1px solid #d6cccc; */
        padding: 10px 0;
        border: 1px solid black;
        margin-bottom: 10px;
      }
      .price {
        color: #ffc104;
      }
      #quality {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      #quality .box {
        width: 130px;
        border: 1px solid #d6cccc;
        padding: 10px;
      }
      #quality button {
        border: none;
        background-color: transparent;
        padding: 0 5px;
        cursor: pointer;
      }
      #quality span {
        margin: 0 20px;
      }
      .main-cart__content .total {
        display: flex;
        justify-content: right;
      }
      .main-cart__content .total button {
        border: none;
        background: #ffc104;
        line-height: 35px;
        color: #fff;
        height: 45px;
        padding: 0 50px;
        border-radius: 0px;
        font-size: 15px;
        border: none;
        cursor: pointer;
        margin-left: 15px;
        transition: 0.3s ease-in-out;
      }
      .main-cart__content .total button:first-child {
        background-color: #f1f1f1;
        color: #333;
      }
      .main-cart__content .total button:hover {
        opacity: 0.8;
      }
      .main-cart__content .total .total-price {
        text-align: right;
        margin-bottom: 20px;
      }
      .main-cart__content .total .total-price #total-price {
        margin-left: 20px;
        font-weight: 600;
        color: #ffc104
      }
      #deleteProduct a i{
        cursor: pointer;
        color: black;
        font-size: 25px;
      }
      .total-btn a {
        background-color: #ffc104;
        display: inline-block;
        padding: 13px 40px;
        transition: 0.3s ease-in-out;
        margin-left: 20px;
      }
      .total-btn a:hover {
        opacity: 0.7;
      }
      table td:first-child {
        width: 15%;
      }
      table img {
        width: 100%;
        object-fit: cover;
      }
      #price {
        color: #ffc104;
      }
      #price::after,
      #total-price::after {
        content: " ₫";
      }
      .cart {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .cart a {
        display: inline-block;
        display: flex;
        align-items: center;
        justify-content: center;
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
                <li><a href="news.php">tin tức</a></li>
                <li><a href="contact.php">liên hệ</a></li>
              </ul>
            </div>
            <div class="cart">
              <a href="cart.php" class="btn">
                <i class="fa-solid fa-cart-shopping"></i>
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
              <p>Giỏ hàng</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main-cart">
      <div class="container">
        <div class="main-cart__content">
          <h4>Giỏ hàng</h4>
          <div class="main-table">
            <table>
              <tr>
                <th>Sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
              </tr>
              <?php foreach($data as $item) { ?>
              <tr>
                <td>
                  <img src="<?php echo "./assets/imgs/".$item['image']; ?>" alt="" />
                </td>
                <td>
                  <p><?php echo $item['pd_name']; ?></p>
                </td>
                <td>
                  <span id="price"><?php echo $item['pd_price']; ?></span>
                  
                </td>
                <td>
                  <div id="quality">
                    <div class="box">
                      <button onclick="minusProduct()">-</button>
                      <span id="quality-text"><?php echo $item['quantity']; ?></span>
                      <button onclick="plusProduct()">+</button>
                    </div>
                  </div>
                </td>
                <td class="price">
                  <span class="toMoney"><?php echo $item['pd_price'] * $item['quantity']; ?></span>
                  <span>₫</span>
                </td>
                <td id="deleteProduct">
                  <a href="./deleteProduct.php?id=<?php echo $item['id'] ;?>" onclick="return confirmDelete();">
                    <i class="fa-regular fa-trash-can"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
            </table>
          </div>
          <div class="total">
            <div class="total__content">
              <div class="total-price">
                <span>Tổng tiền:</span>
                <span id="total-price"><?php echo $totalPrice; ?></span>
              </div>
              <div class="total-btn">
                <a href="./index.php">Tiếp tục mua hàng</a>
                <a href="./order.php">Tiếp tục đặt hàng</a>
              </div>
            </div>
          </div>
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
              <span
                >© Bản quyền thuộc về
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
    <script>
function confirmDelete() {
  return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng không?');
}
</script>
    <!-- <script src="./assets/js/main.js"></script> -->
  </body>
</html>
