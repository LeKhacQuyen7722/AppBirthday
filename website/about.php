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

        <a href="#" class="logo"><img src="images/vku.png"></img></a>

        <nav class="navbar">
            <a class="active"  href="index.html">trang chủ</a>
            <a href="dishes.html">nổi bật</a>
            <a href="about.html">chi tiết</a>
            <a href="menu.html">sản phẩm</a>
            <a href="review.html">đánh giá </a>
            <a href="order.html">đặt hàng</a>
        </nav>
    
        <div class="icons">
            <a href="login.html"><i class="fa-solid fa-user" id="login-icon"></i></a>
            <a><i class="fas fa-bars" id="menu-bars"></i></a>
            <a><i class="fas fa-search" id="search-icon"></i></a>
            <a><i class="fas fa-shopping-cart"></i></a><p style="margin-left:160px ;"><span class="">0</span><sup>$</sup></p>
        </div>
        
    </section>

</header>

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>






<div class="container">

    <section class="about" id="about">

        <h3 class="sub-heading" style="margin-top: 100px;"> about us </h3>
        <h1 class="heading"> Tại sao chọn chúng tôi? </h1>
    
        <div class="row">
    
            <div class="image">
                <img src="images/aovietnamdo.jpg" alt="">
            </div>
    
            <div class="content">
                <h3>Mẫu áo hot nhất hiện tại</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque deleniti iste alias, eum natus.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>
    
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
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Chọn</th>
                    </tr>

                </thead>
                <tbody>
                    <!-- <tr>
                        <td style="display: flex; align-items: center;"><img style="width: 70px;"src="images/aovietnam.jpg" alt="">Áo việt nam</td>
                        <td><p><span>15.99</span><sup>$</sup></p></td>
                        <td>
                            <select>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </td>
                        <td><input style="width:30px;outline: none;"type="number" value="1" min="0"></td>
                        <td style="cursor: pointer;">Xóa</td>
                    </tr> -->
                </tbody>
            </table>
            <div stylec="text-align:right;" class="price-total">
                <p style="font-weight: bold;">Tổng tiền :<span>0</span><sup>$</sup></p>
            </div>
            <a href="order.html">Thanh Toán</a>
        </form>
    </section>
</div>

<div style="background-color: rgb(206, 143, 97);" class="container">

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