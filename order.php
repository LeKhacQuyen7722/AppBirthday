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

        <a href="index.php" class="logo"><img src="img/logo2.jpg"></img></a>

        <nav class="navbar">
            <a class="active"  href="index.php">trang chủ</a>
            <a href="dishes.php">nổi bật</a>
            <a href="menu.php">sản phẩm</a>
            <a href="review.php">đánh giá </a>
            <a href="order.php">đặt hàng</a>
        </nav>
    
        <div class="icons">
            <a><i class="fas fa-bars" id="menu-bars"></i></a>
            <a href="login.php"><i class="fa-solid fa-user" id="login-icon"></i></a>
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

    <section class="order" id="order">

        <h3 class="sub-heading" style="margin-top: 100px;"> order now </h3>
        <h1 class="heading">Miễn phí hoặc nhanh </h1>
    
        <form action="">
    
            <div class="inputBox">
                <div class="input">
                    <span>Họ và tên</span>
                    <input type="text" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>Số điện thoại</span>
                    <input type="number" placeholder="enter your number">
                </div>
            </div>      
            <div class="inputBox">
                <div class="input">
                    <span>Địa chỉ </span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>Lời nhắc</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Phương thức thanh toán</span>
                    <select id="thanhtoan"style="border: 1px solid black;width:425px;height: 50px;border-radius:5px;background-color:#eeeeee">
                        <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                        <option value="Thanh toán bằng thẻ ATM">Thanh toán bằng thẻ ATM</option>
                    </select>
                </div>
                
            </div>  
    
            <button onclick="" style="margin-top: 20px;"class="btn">Order Now</button>
    
        </form>
    
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
                <a href="#">Lê Khắc Quyền</a>
                <a href="#">Nguyễn Quang Anh</a>
            </div>
    
            <div class="box">
                <h4>ID</h4>
                <a href="#">22IT.B172</a>
                <a href="#">22IT.B005</a>
            </div>
    
            <div class="box">
                <h4>contact info</h4>
                <a href="#">quyenlk.22itb@vku.udn.vn</a>
                <a href="#">anhnq.22itb@vku.udn.vn</a>
            </div>
    
            <div class="box">
                <h4>follow us</h4>
               <a href="https://www.facebook.com/quyen.92123/"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="https://www.facebook.com/profile.php?id=100033279441036"><i class="fab fa-facebook"></i> Facebook</a>
            </div>
    
        </div>
    
    </section>

</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>