<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Food Website Design Tutorial</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header>
    <section class="flex">
        <a href="#" class="logo"><img src="img/logo2.jpg"></img></a>
        <nav class="navbar">
            <a class="active"  href="index.php">trang chủ</a>
            <a href="dishes.php">nổi bật</a>
            <a href="menu.php">sản phẩm</a>
            <a href="review.php">đánh giá </a>
            <a href="order.php">đặt hàng</a>
        </nav>
        <div class="icons">
            <a><i class="fas fa-bars" id="menu-bars"></i></a>
            <a href="login.html"><i class="fa-solid fa-user" id="login-icon"></i></a>
            <a><i class="fas fa-search" id="search-icon"></i></a>
            <a><i class="fas fa-shopping-cart"></i></a><p style="margin-left:160px ;"><span class="">0</span><sup>đ</sup></p>
        </div>
    </section>
</header>
<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<div class="container">
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>HHH</span>
                        <h3>ESTONIA 190 GRAND</h3>
                        <p>Có chiều dài 6'3″ hay 190 cm và do đó cung cấp đủ chiều dài dây
                             và diện tích bề mặt thùng đàn cho các nhạc sĩ chuyên nghiệp làm việc cùng.</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="box-right">
                        <img src="img/piano3.jpg" alt="">
                      </div>
                </div>
    
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>HHH</span>
                        <h3>HẠ NẮP PHÍM THỦY LỰC</h3>
                        <p>Chống Sập Nắp Phím Đàn Piano - Thiết Bị Đóng Chậm Nắp Phím Đàn</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="box-right">
                        <img src="img/piano4.jpg" alt="">
                      </div>
                </div>
    
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>HHH</span>
                        <h3>Máy Metronome Am-707</h3>
                        <p>Phụ Kiện Đàn Piano Cơ Nhịp Điệu</p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="box-right">
                        <img src="img/piano5.jpg" alt="">

                      </div>
                </div>
    
            </div>
    
            <div class="swiper-pagination"></div>
    
        </div>
    
    </section>

</div>



<div class="container">
    <section class="cart" id="cart">
        <span class="cart-icon"><i class="fas fa-times "></i></span>
        <h2>Cart</h2>
        <form action="">
            <table>
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Chọn</th>
                    </tr>

                </thead>
                <tbody>
                
                </tbody>
            </table>
            <div stylec="text-align:right;" class="price-total">
                <p style="font-weight: bold;">Tổng tiền :<span>0</span><sup>đ</sup></p>
            </div>
            <a href="order.html">Thanh Toán</a>
        </form>
    </section>
</div>

<div style="background-color: rgb(206, 143, 97);margin-top: 100px;" class="container">

    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <h4>Design By:</h4>
                <a href="#">Nguyễn Nhất Bảo</a>
                <a href="#">Trần Văn Hậu</a>
            </div>
    
            <div class="box">
                <h4>ID</h4>
                <a href="#">22IT.B014</a>
                <a href="#">22IT.B069</a>
            </div>
    
            <div class="box">
                <h4>contact info</h4>
                <a href="#">baonn.22itb@vku.udn.vn</a>
                <a href="#">hautv.22itb@vku.udn.vn</a>
            </div>
    
            <div class="box">
                <h4>follow us</h4>
               <a href="https://www.facebook.com/vku.udn.vn"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            </div>
    
        </div>
    
    </section>

</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>