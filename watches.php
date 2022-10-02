<?php
    session_start();
    $logined=0;
    if(!isset($_SESSION['luottruycap'])) $_SESSION['luottruycap']=0;
    else $_SESSION['luottruycap']+=1;

    if(isset($_COOKIE['user'])&&isset($_COOKIE['pass'])){
        echo "Cookie đã đăng ký là: ".$_COOKIE['user']." - ".$_COOKIE['pass'];
    }

    if(isset($_GET['delc'])&&($_GET['delc']==1)){
        setcookie("user","",time()-(86400*7));
        setcookie("pass","",time()-(86400*7));
        echo "<br><font color='red'>Bạn đã xóa cookie</font>";
    }

    if(isset($_POST['login'])&&($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if(($user=="demo")&&($pass=="demo")){
            $_SESSION['user']=$user;
            $_SESSION['pass']=$pass;
            $logined=1;
            $msg= "<br><font color='blue'>Các bạn đăng nhập thành công</font>";
        }else{
            $logined=0;
            $msg= "<br><font color='red'>Vui lòng đăng nhập</font>";
        }
        if(isset($_POST['ghinho'])&&($_POST['ghinho'])){
            setcookie("user",$user,time()+(86400*7));
            setcookie("pass",$pass,time()+(86400*7));
            $msgcookie="<br>Đã ghi nhận cookie!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="./css/style.css">

    <title>Timups</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

    <div class="hero_area">

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Timups
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="watches.html"> Watches <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <div class="user_option-box">
                            <a href="./account.html">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <a href="cart.php">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                            <ul id="subnav">
                                <input type="text" name="search" placeholder="Nhập....">
                                <a href="">
                                    Tìm kiếm
                                </a>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Watches
                </h2>
            </div>



            <div class="row">


                <div class="col-sm-6" id="hot">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h1.jpg" alt="">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành :
                                    <br><strike>376</strike><sup>$</sup>
                                    <i class="fas fa-arrow-right"></i>
                                    292 <sup>$</sup>
                                </p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value="Apple Watches SE 40mm viền nhôm">
                                    <input type="hidden" name="gia" value=" 292">
                                    <input type="hidden" name="hinh" value="h1.jpg">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 15%;">
                                <h6>
                                    Apple Watch SE 40mm viền nhôm
                                </h6>
                            </div>
                            <div class="new" style="background-color: red;">
                                <span>
                                    Hot 2022
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="hot">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h2.jpg" style="width: 100%;">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành :
                                    <br><strike>230</strike><sup>$</sup>
                                    <i class="fas fa-arrow-right"></i>
                                    179<sup>$</sup>
                                </p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value="HONOR Watch GS3 45.9mm dây cao su">
                                    <input type="hidden" name="gia" value=" 179">
                                    <input type="hidden" name="hinh" value="h2.jpg">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 10%; object-fit: contain;">
                                <h6>
                                    HONOR Watch GS3 45.9mm dây cao su
                                </h6>
                            </div>
                            <div class="new" style="background-color: red;">
                                <span>
                                    Sale 50%
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="hot">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h3.jpg" alt="">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành :
                                    <br><strike>271</strike><sup>$</sup>
                                    <i class="fas fa-arrow-right"></i>
                                    136 <sup>$</sup>
                                </p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value="Samsung Galaxy Watch5 LTE 40mm">
                                    <input type="hidden" name="gia" value=" 136">
                                    <input type="hidden" name="hinh" value="h3.jpg">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 10%;">
                                <h6>
                                    Samsung Galaxy Watch5 LTE 40mm
                                </h6>
                            </div>
                            <div class="new" style="background-color: red;">
                                <span>
                                    Sale 50%
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="small">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h4.jpg" style="width: 100%;">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành : 108<sup>$</sup></p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value="Amazfit GTS 4 mini 41.8mm dây silicone">
                                    <input type="hidden" name="gia" value=" 108">
                                    <input type="hidden" name="hinh" value="h4.jpg">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 10%;">
                                <h6>
                                    Amazfit GTS 4 mini 41.8mm dây silicone
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    New
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="big">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h5.png">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành : 84<sup>$</sup></p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value="Realme Watch 3 45mm dây silicone">
                                    <input type="hidden" name="gia" value=" 84">
                                    <input type="hidden" name="hinh" value="h5.png">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 10%;">
                                <h6>
                                    Realme Watch 3 45mm dây silicone
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    New
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="big">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h6.jpg" alt="">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành : 101<sup>$</sup></p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value=" Kidcare S8 4G 43.4mm Hồng">
                                    <input type="hidden" name="gia" value=" 101">
                                    <input type="hidden" name="hinh" value="h6.jpg">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 20%;">
                                <h6>
                                    Kidcare S8 4G 43.4mm Hồng
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    New
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="big">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h7.jpg" alt="">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành : 356<sup>$</sup></p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value="Samsung Galaxy Watch 4 Classic 42mm">
                                    <input type="hidden" name="gia" value=" 356">
                                    <input type="hidden" name="hinh" value="h7.jpg">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 5%;">
                                <h6>
                                    Samsung Galaxy Watch 4 Classic 42mm
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    New
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="big">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h8.jpg" alt="">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành : 230<sup>$</sup></p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value="Xiaomi Watch S1 46.5mm dây da">
                                    <input type="hidden" name="gia" value=" 230">
                                    <input type="hidden" name="hinh" value="h8.jpg">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 15%;">
                                <h6>
                                    Xiaomi Watch S1 46.5mm dây da
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    New
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="hot">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="images/h9.jpg" alt="">
                            </div>
                            <!-- Mua ngay -->
                            <a class="buynow">
                                <p style="color: white;text-align: center;">Giá thành : 502<sup>$</sup></p>
                                <form action="cart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="submit" name="addcart" value="Đặt hàng">
                                    <input type="hidden" name="tensp" value="Apple Watch Series 7 GPS 41mm">
                                    <input type="hidden" name="gia" value=" 502">
                                    <input type="hidden" name="hinh" value="h9.jpg">
                                </form>
                            </a>
                            <div class="detail-box" style="padding-left: 15%;">
                                <h6>
                                    Apple Watch Series 7 GPS 41mm
                                </h6>
                            </div>
                            <div class="new">
                                <span>
                                    New
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    View All
                </a>
            </div>
        </div>
    </section>

    <!-- end shop section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_detail">
                        <h4>
                            About
                        </h4>
                        <p>
                            Để biết thêm thông tin chi tiết về sản phẩm cũng như thông tin về chúng tôi, Hãy liên hệ qua
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Info ...
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    470 Tran Dai Nghia, Hoa Quy, Ngu Hanh Son, Da Nang
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    097 464 9644
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    vuongtb.21it@vku.udn.vn
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    rontt.21it@vku.udn.vn
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Subscribe
                        </h4>
                        <form action="">
                            <input type="text" placeholder="Enter email" />
                            <button type="submit" id="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="map_container">
                        <div id="googleMap" style="border-radius: 4px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.5031686739485!2d108.24050221433573!3d15.98730144587612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142109c13343a6f%3A0x83277fe2ed0a4020!2zMzk5IMSQLiBNYWkgxJDEg25nIENoxqFuLCBIb8OgIFF1w70sIE5nxakgSMOgbmggU8ahbiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1655175600701!5m2!1svi!2s"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script src="./js/buy.js"></script>


</body>

</html>