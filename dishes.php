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
            <a class="active" href="index.php">trang chủ</a>
            <a href="dishes.php">nổi bật</a>
            <a href="menu.php">sản phẩm</a>
            <a href="review.php">đánh giá</a>
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

    <section class="dishes" id="dishes">

        <h3 class="sub-heading" style="margin-top: 100px;"> our dishes </h3>
        <h1 class="heading">Nổi bật </h1>
    
        <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/pianonb.jpg" alt="">
                <h3>Yamaha W102 </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h5 >83000000₫</h5>
                <p><span>79000000</span><sup>₫</sup></p>
                <button class="btn">add to cart</button>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/pianonb1.jpg" alt="">
                <h3>Yamaha U1H</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h5 >200000000₫</h5>
                <p><span>185000000</span><sup>₫</sup></p>
                <button class="btn">add to cart</button>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/pianonb2.jpg" alt="">
                <h3>Model K-52</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h5 >1200000000₫</h5>
                <p><span>990000000</span><sup>₫</sup></p>
                <button class="btn">add to cart</button>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/pianonb3.jpg" alt="">
                <h3>Model JM600BS</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h5 >97000000₫</h5>
                <p><span>93500000</span><sup>₫</sup></p>
                <button class="btn">add to cart</button>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/pianonb4.jpg" alt="">
                <h3>Roland RP-302</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h5 >27000000₫</h5>
                <p><span>24500000</span><sup>₫</sup></p>
                <button class="btn">add to cart</button>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/pianonb5.jpg" alt="">
                <h3>Piano K126-AD</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h5 >12000000₫</h5>
                <p><span>10000000</span><sup>₫</sup></p>
                <button class="btn">add to cart</button>
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