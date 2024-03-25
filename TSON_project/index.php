<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/imgs/favicon.webp" type="image/x-icon" />
    <title>Điện nước TSON</title>
    <link rel="stylesheet" href="./assets/css/variables.css" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/header.css" />
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link
      rel="stylesheet"
      href="./assets/font/fontawesome-6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <!-- HEADER -->
    <header>
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
                <li class="boder-bottom"><a href="index.php">trang chủ</a></li>
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
                <span id="quality"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="slideshow">
          <div class="slide__item fade">
            <img src="./assets/imgs/slide1.jpg" alt="slide" />
          </div>
          <div class="slide__item fade">
            <img src="./assets/imgs/slide2.jpg" alt="slide" />
          </div>
          <div class="slide__item fade">
            <img src="./assets/imgs/slide3.jpg" alt="slide" />
          </div>
        </div>
      </div>
    </header>
    <!-- HOT PRODUCTS -->
    <div class="products">
      <div class="container">
        <div class="products__content">
          <h2 class="title">SẢN PHẨM NỔI BẬT</h2>
        </div>
        <div class="produsts__list">
          <div class="item">
            <div class="img">
              <a href="">
                <img src="./assets/imgs/product1.webp" alt="" />
              </a>
              <div class="variants">
                <a href="">
                  <i class="fa-solid fa-cart-plus"></i>
                </a>
                <a href="">
                  <i class="fa-solid fa-magnifying-glass-plus"></i>
                </a>
              </div>
            </div>
            <p class="name">Máy phát điện siêu lạ</p>
            <p class="price">6.000.000₫</p>
          </div>
          <div class="item">
            <div class="img">
              <a href="">
                <img src="./assets/imgs/product2.webp" alt="" />
              </a>
              <div class="variants">
                <a href="">
                  <i class="fa-solid fa-cart-plus"></i>
                </a>
                <a href="">
                  <i class="fa-solid fa-magnifying-glass-plus"></i>
                </a>
              </div>
            </div>
            <p class="name">Thiết bị tiết kiệm điện</p>
            <p class="price">5.500.000₫</p>
          </div>
          <div class="item">
            <div class="img">
              <a href="">
                <img src="./assets/imgs/product3.webp" alt="" />
              </a>
              <div class="variants">
                <a href="">
                  <i class="fa-solid fa-cart-plus"></i>
                </a>
                <a href="">
                  <i class="fa-solid fa-magnifying-glass-plus"></i>
                </a>
              </div>
            </div>
            <p class="name">Vi xử lý TSON</p>
            <p class="price">3.000.000₫</p>
          </div>
          <div class="item">
            <div class="img">
              <a href="">
                <img src="./assets/imgs/product4.webp" alt="" />
              </a>
              <div class="variants">
                <a href="">
                  <i class="fa-solid fa-cart-plus"></i>
                </a>
                <a href="">
                  <i class="fa-solid fa-magnifying-glass-plus"></i>
                </a>
              </div>
            </div>
            <p class="name">Thiết bị thông minh 01</p>
            <p class="price">1.100.000₫</p>
          </div>
        </div>
      </div>
    </div>
    <div class="about-us">
      <div class="container">
        <h2 class="title">VỀ CHÚNG TÔI</h2>
        <div class="about-us__content">
          <div class="intro">
            <h4>TSON tự hào là thương hiệu TOP 10 VN</h4>
            <p>
              TSON là thương hiệu điện nước toàn cầu được đông đảo khách hàng
              tin tưởng và giới chuyên gia đánh giá cao. TSON nổi tiếng với các
              công thức chăm sóc sắc đẹp được nghiên cứu và phát triển bởi các
              nhà khoa học Châu Âu, nơi sở hữu nhiều nguồn tài nguyên quý giá
            </p>
            <ul class="list">
              <li class="flex-center">
                <i class="fa-solid fa-caret-right"></i>
                <p>Công nghệ kỹ thuật tiên tiến nhất</p>
              </li>
              <li class="flex-center">
                <i class="fa-solid fa-caret-right"></i>
                <p>Chế độ hậu mãi tuyệt với</p>
              </li>
              <li class="flex-center">
                <i class="fa-solid fa-caret-right"></i>
                <p>Hỗ trợ tư vấn 24/7</p>
              </li>
              <li class="flex-center">
                <i class="fa-solid fa-caret-right"></i>
                <p>Phục vụ tận tình tại nhà</p>
              </li>
            </ul>
            <div class="about-btn">
              <a href="" class="btn">xem thêm</a>
            </div>
          </div>
          <div class="img-vd">
            <a href="">
              <div class="box">
                <div class="about-overlay flex-center">
                    <div class="control-icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                </div>
                <img src="./assets/imgs/about.webp" alt="" />
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- SERVICES -->
    <div class="services">
        <div class="container">
            <h2 class="title">DỊCH VỤ</h2>
            <div class="services__content">
                <div class="service__item">
                    <div class="img">
                        <div class="service__overlay flex-center">
                            <a href="" class="btn">Chi tiết</a>
                        </div>
                        <img src="./assets/imgs/service-1.webp" alt="">
                    </div>
                    <div class="name">
                        <h4>Xây dựng hệ thống điện</h4>
                    </div>
                    <div class="content">
                        <p>Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với chúng...</p>
                    </div>
                </div>
                <div class="service__item">
                    <div class="img">
                        <div class="service__overlay flex-center">
                            <a href="" class="btn">Chi tiết</a>
                        </div>
                        <img src="./assets/imgs/service-2.webp" alt="">
                    </div>
                    <div class="name">
                        <h4>Sữa điều hòa tại nhà</h4>
                    </div>
                    <div class="content">
                        <p>Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với chúng...</p>
                    </div>
                </div>
                <div class="service__item">
                    <div class="img">
                        <div class="service__overlay flex-center">
                            <a href="" class="btn">Chi tiết</a>
                        </div>
                        <img src="./assets/imgs/service-3.webp" alt="">
                    </div>
                    <div class="name">
                        <h4>Sữa chữa  và bảo trì</h4>
                    </div>
                    <div class="content">
                        <p>Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với chúng...</p>
                    </div>
                </div>
                <div class="service__item">
                    <div class="img">
                        <div class="service__overlay flex-center">
                            <a href="" class="btn">Chi tiết</a>
                        </div>
                        <img src="./assets/imgs/service-4.webp" alt="">
                    </div>
                    <div class="name">
                        <h4>Điện công nghiệp</h4>
                    </div>
                    <div class="content">
                        <p>Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với chúng...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-to-action">
        <div class="container flex-center">
            <div class="left">
                <h4>Bạn cần chúng tôi tư vấn về thiết bị điện không?</h4>
                <p>Tư vấn miễn phí mọi vấn đề điện nước</p>
            </div>
            <div class="right">
                <a href="">LIÊN HỆ NGAY</a>
            </div>
        </div>
    </div>
    <!-- PROJECTS -->
    <div class="projects">
        <div class="container">
            <h2 class="title">DỰ ÁN GẦN ĐÂY</h2>
            <div class="projects__content">
                <div class="list-control">
                    <ul class="flex-center">
                        <li class="project-control project-active">Tất cả</li>
                        <li class="project-control">Điện dân dụng</li>
                        <li class="project-control">Điện công nghiệp</li>
                        <li class="project-control">Hệ thống nước</li>
                    </ul>
                </div>
                <div class="list-project">
                    <div class="projects-all">
                        <div class="project__item">
                            <div class="project-overlay ">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <p>DỰ ÁN FORMY</p>
                            </div>
                            <img src="./assets/imgs/project1.webp" alt="">
                        </div>
                        <div class="project__item">
                            <div class="project-overlay ">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <p>DỰ ÁN TUIGIGIs</p>
                            </div>
                            <img src="./assets/imgs/project2.webp" alt="">
                        </div>
                        <div class="project__item">
                            <div class="project-overlay ">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <p>NỘI THẤT PHỐ XINH</p>
                            </div>
                            <img src="./assets/imgs/project3.webp" alt="">
                        </div>
                        <div class="project__item">
                            <div class="project-overlay ">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <p>HỆ THỐNG SSD</p>
                            </div>
                            <img src="./assets/imgs/project4.webp" alt="">
                        </div>
                        <div class="project__item">
                            <div class="project-overlay ">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <p>ĐIỆN DLV</p>
                            </div>
                            <img src="./assets/imgs/project5.webp" alt="">
                        </div>
                        <div class="project__item">
                            <div class="project-overlay ">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <p>ĐIỆN BIZ</p>
                            </div>
                            <img src="./assets/imgs/project6.webp" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-team">
        <div class="container">
            <h2 class="title">CHUYÊN GIA</h2>
            <div class="our-team__content">
                <div class="our-team__item">
                    <div class="avt">
                        <div class="our-team__overlay flex-center">
                            <div class="icon">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                        <img src="./assets/imgs/avt1.webp" alt="">
                    </div>
                    <div class="info">
                        <div class="name">
                            <h4>Nguyễn Văn A</h4>
                            <p><p>Chuyên gia điện nước</p></p>
                        </div>
                        <div class="contact">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <span>ĐT: +84123456789</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>emaildemo@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="our-team__item">
                    <div class="avt">
                        <div class="our-team__overlay flex-center">
                            <div class="icon">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                        <img src="./assets/imgs/avt2.webp" alt="">
                    </div>
                    <div class="info">
                        <div class="name">
                            <h4>Nguyễn Văn A</h4>
                            <p><p>Chuyên gia điện nước</p></p>
                        </div>
                        <div class="contact">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <span>ĐT: +84123456789</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>emaildemo@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="our-team__item">
                    <div class="avt">
                        <div class="our-team__overlay flex-center">
                            <div class="icon">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                        <img src="./assets/imgs/avt3.webp" alt="">
                    </div>
                    <div class="info">
                        <div class="name">
                            <h4>Nguyễn Văn A</h4>
                            <p><p>Chuyên gia điện nước</p></p>
                        </div>
                        <div class="contact">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <span>ĐT: +84123456789</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>emaildemo@gmail.com</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="our-team__item">
                    <div class="avt">
                        <div class="our-team__overlay flex-center">
                            <div class="icon">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                        <img src="./assets/imgs/avt4.webp" alt="">
                    </div>
                    <div class="info">
                        <div class="name">
                            <h4>Nguyễn Văn A</h4>
                            <p><p>Chuyên gia điện nước</p></p>
                        </div>
                        <div class="contact">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <span>ĐT: +84123456789</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>emaildemo@gmail.com</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AWE -->
    <div class="awe">
        <div class="awe-overlay flex-center">
            <div class="container">
                <div class="awe__content">
                    <ul class="flex-center">
                        <li>
                            <div class="icon"><i class="fa-solid fa-users"></i></div>
                            <div class="number">
                                <p>150</p>
                            </div>
                            <div class="text">
                                <p>Dự án hoàn thành</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa-solid fa-trophy"></i></div>
                            <div class="number">
                                <p>1850</p>
                            </div>
                            <div class="text">
                                <p>Số lượt ghé thăm</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa-solid fa-user"></i></div>
                            <div class="number">
                                <p>481</p>
                            </div>
                            <div class="text">
                                <p>Số khách thanh toán</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                            <div class="number">
                                <p>2250</p>
                            </div>
                            <div class="text">
                                <p>Số chiến công đầu</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWS -->
    <div class="news">
        <div class="container">
            <h2 class="title">TIN TỨC</h2>
            <div class="news__content">
                <div class="news__item">
                    <div class="img">
                        <div class="date">
                            <h5>16</h5>
                            <p>TH 08</p>
                        </div>
                        <img src="./assets/imgs/news1.webp" alt="">
                    </div>
                    <div class="cmt">
                        <h3>Bài viết mẫu</h3>
                        <ul>
                            <li>
                                <i class="fa-solid fa-user"></i>
                                <span>Nguyên Hùng</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-comment"></i>
                                <span>0 bình luận</span>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <p>Máy biến áp cách ly hay còn gọi là biến thế cách ly, là loại máy có cuộn dây sơ cấp và cuộn dây thứ cấp được ghép với nhau bằng từ, không ghép bằng điện nên cách biệt và...</p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="img">
                        <div class="date">
                            <h5>16</h5>
                            <p>TH 08</p>
                        </div>
                        <img src="./assets/imgs/news2.webp" alt="">
                    </div>
                    <div class="cmt">
                        <h3>Bài viết mẫu</h3>
                        <ul>
                            <li>
                                <i class="fa-solid fa-user"></i>
                                <span>Nguyên Hùng</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-comment"></i>
                                <span>0 bình luận</span>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <p>Máy biến áp cách ly hay còn gọi là biến thế cách ly, là loại máy có cuộn dây sơ cấp và cuộn dây thứ cấp được ghép với nhau bằng từ, không ghép bằng điện nên cách biệt và...</p>
                    </div>
                </div>
                <div class="news__item">
                    <div class="img">
                        <div class="date">
                            <h5>16</h5>
                            <p>TH 08</p>
                        </div>
                        <img src="./assets/imgs/news3.webp" alt="">
                    </div>
                    <div class="cmt">
                        <h3>Bài viết mẫu</h3>
                        <ul>
                            <li>
                                <i class="fa-solid fa-user"></i>
                                <span>Nguyên Hùng</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-comment"></i>
                                <span>0 bình luận</span>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <p>Máy biến áp cách ly hay còn gọi là biến thế cách ly, là loại máy có cuộn dây sơ cấp và cuộn dây thứ cấp được ghép với nhau bằng từ, không ghép bằng điện nên cách biệt và...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND -->
    <div class="brand">
        <div class="container flex-center">
            <div class="brand__content">
                <div class="brand__item flex-center">
                    <img src="./assets/imgs/brand1.webp" alt="">
                </div>
                <div class="brand__item flex-center">
                    <img src="./assets/imgs/brand2.webp" alt="">
                </div>
                <div class="brand__item flex-center">
                    <img src="./assets/imgs/brand3.webp" alt="">
                </div>
                <div class="brand__item flex-center">
                    <img src="./assets/imgs/brand4.webp" alt="">
                </div>
                <div class="brand__item flex-center">
                    <img src="./assets/imgs/brand5.webp" alt="">
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
    <!-- BACKTOTOP -->
    <div class="backtotop">
        <i class="fa-solid fa-angle-up"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <scricipt src="./assets/js/jquery371.js"></scricipt>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
