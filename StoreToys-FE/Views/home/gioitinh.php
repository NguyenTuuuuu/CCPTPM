<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>StoreToys</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="../../Assets/css/home/base.css">
<link rel="stylesheet" href="../../Assets/css/home/main.css">
<link rel="stylesheet" href="../../Assets/css/home/container.css">
<link rel="stylesheet" href="../../Assets/css/home/collection.css">
</head>
<body>
<div class="wrapper">
    <div class="promo-bar">
        <span style="color: #F2C75C">Freeship cho đơn từ 1.000.000đ nội thành Hà Nội</span>
    </div>
    <header class="header">
        <div class="header-first">
            <div class="header-container">
                <h1 class="logo">
                    <a href="Home.html">
                        <img src="../../Assets/image/stoys.png" style="width: 80px">
                    </a>
                </h1>
                <div class="search">
                    <form class="search-form">
                        <input type="text" size="20" class="search-input" placeholder="Bạn tìm đồ chơi gì?" name="search">
                        <button type="submit" class="search-button">
                            <i class="fas fa-search search-icon hover-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
                <div class="icon">
                    <div class="fa">
                        <a href="Premise.html" class="fa fa-map-marker map-marker-icon hover-icon"></a>
                    </div>
                    <div>
                        <a class="fa fa-user-circle user-circle-icon hover-icon"></a>
                    </div>
                    <div>
                        <a href="Cart.html" class="fa fa-shopping-cart shopping-cart-icon hover-icon">
                            <span class="number-product"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="header-navbar">
            <div class="grid">
                <ul class="navbar-list">
                    <li class="navbar-item navbar-item-news">
                        <a href="ToyNews.html" class="item-link hover-icon">Có gì hot?</a>
                    </li>
                    <li class="navbar-item navbar-item-sex">
                        <div class="navbar-sex">
                            <ul class="news-list">
                                <li class="list-content hover-region">
                                    <a href="gioitinh.php?sex=nam" class="content">Bé trai</a>
                                </li>
                                <li class="list-content hover-region">
                                    <a href="gioitinh.php?sex=nu" class="content">Bé gái</a>
                                </li>
                                <li class="list-content hover-region">
                                    <a href="gioitinh.php?sex=unisex" class="content">Unisex</a>
                                </li>
                            </ul>
                        </div>
                        <a href="" class="item-link hover-icon">Giới tính</a>
                    </li>
                    <li class="navbar-item navbar-item-category">
                        <div class="navbar-category">
                            <ul class="news-list" id="category-name"></ul>
                        </div>
                        <a href="" class="item-link hover-icon">Thể loại</a>
                    </li>
                    <li class="navbar-item navbar-item-brand">
                        <div class="navbar-brand">
                            <ul class="news-list" id="brand-name">
                            </ul>
                        </div>
                        <a href="" class="item-link hover-icon">Thương hiệu</a>
                    </li>
                    <li class="navbar-item hover-region">
                        <a href="Premise.html" class="item-link hover-icon">Thông tin</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
		<section class="container-slider">
                <div class="slider-show">
                        <div class="slider-img">
                            <input type="radio" name="inputslider" id="img1" checked>
                            <input type="radio" name="inputslider" id="img2">
                            <input type="radio" name="inputslider" id="img3">
                            <input type="radio" name="inputslider" id="img4">
                            <div class="slider-item imgs1">
                                <a href="">
                                    <img src="../../Assets/image/dochoibupbe.jpg" alt="img1" class="imgslider">
                                </a>
                            </div>
                            <div class="slider-item imgs2">
                                <a href="">
                                    <img src="../../Assets/image/dochoitritue.jpg" alt="img2" class="imgslider">
                                </a>
                            </div>
                            <div class="slider-item imgs3">
                                <a href="">
                                    <img src="../../Assets/image/lego.jpg" alt="img3" class="imgslider">
                                </a>
                            </div>
                            <div class="slider-item imgs4">
                                <a href="">
                                    <img src="../../Assets/image/dochoidongvat.jpg" alt="img4" class="imgslider">
                                </a>
                            </div>
                        </div>
                    <div class="slider-label">
                        <label for="img1"></label>
                        <label for="img2"></label>
                        <label for="img3"></label>
                        <label for="img4"></label>
                    </div>
                </div>
        </section>
        <section class="grid">
                <div class="category-title">
                    <h1 class="title">Danh mục sản phẩm</h1>
                </div>
                <div class="category-product">
                    <div class="product-list"></div>		
			</div>
		</section>
    </div>
    <footer class="footer">
            <div class="footer-container grid">
                <div class="footer-content">
                    <div class="footer-content-title">GIỚI THIỆU</div>
                    <p class="footer-content-container">Stoys Công ty Cổ phần Những Trẻ Em Vàng 243 Hai Bà Trưng, Phường Võ Thị Sáu, Quận 3, Tp.HCM Giấy phép ĐKKD số 0309818464 do Sở KHĐT Tp.HCM cấp ngày 02/03/2010</p>
                    <div>
                        <img src="../../Assets/image/bocongthuong.png">
                    </div>
                </div >
                <div class="footer-content">
                    <div class="footer-content-title">CHÍNH SÁCH</div>
                    <div>
                        <ul class="title-list">
                            <li class="list-guide">
                                <a href="" class="guide">Giới thiệu</a>
                            </li>
                            <li class="list-guide">
                                <a href="" class="guide">Hỗ trợ khách hàng</a>
                            </li>
                            <li class="list-guide">
                                <a href="" class="guide">Chính sách mua hàng</a>
                            </li>
                            <li class="list-guide">
                                <a href="" class="guide">Chính sách thanh toán</a>
                            </li>
                            <li class="list-guide">
                                <a href="" class="guide">Chính sách giao hàng</a>
                            </li>
                            <li class="list-guide">
                                <a href="" class="guide">Chính sách đổi trả</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="footer-content-title">THÔNG TIN LIÊN HỆ</div>
                    <div>
                        <ul class="title-list">
                            <li class="list-contact">
                                <p class="footer-content-container">
                                    Citilight Tower, Phòng 805, 45 Võ Thị Sáu, P. Đakao, Quận 1, Tp. HCM
                                </p>
                            </li>
                            <li class="list-contact">
                                <p style="text-align: left">086 8586 299</p>
                            </li>
                            <li class="list-contact">
                                <p>csfunnyland@goldenkids.com.vn</p>                 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="footer-content-title">FANPAGE</div>
                    <div style="display: inline-block">
                        <div class="facebook-icon">
                            <a style="color: aliceblue" href="" class="fab fa-facebook youtube-icon"></a>
                        </div>
                        <div class="youtube-icon">
                            <a style="color: red" href="" class="fab fa-youtube facebook-icon"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>
  <script src="gioitinh.js"></script>
</body>
</html>
