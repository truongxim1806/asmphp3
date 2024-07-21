<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Care</title>
    <<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('lib/font-fontawesome-ae333ffef2.js') }}"></script>
</head>
<body>
    <!--HEADER-->
    <nav class="navbar navbar-expand-lg container">
        <div class="wrap-logo ">
            <a href=""><img src="img/logo.webp" alt="" style="width: 200px;"></a>
        </div>
        <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav nav-left me-auto mb-2 mb-lg-0 ml-3">
                    <li class="nav-item">
                        <a class="nav-link active fw-medium text-secondary" aria-current="page" href="{{'/'}}">Trang chủ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active fw-medium text-secondary" href="{{route ('products.list')}}" role="button"
                            >
                            Sản phẩm
                        </a>
                        {{-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item fw-normal text-secondary" href="#">Toner</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fw-normal text-secondary" href="#">Kem dưỡng ẩm</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item fw-normal text-secondary" href="#">Làm sạch da</a></li>
                        </ul> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-medium text-secondary" aria-current="page" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-medium text-secondary" aria-current="page" href="#">Về chúng
                            tôi</a>
                    </li>
                </ul>
            </div>
            <div class="" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="tim-kiem-san-pham.html" class="nav-link text-secondary " placeholder="Tìm kiếm"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="dang-nhap.html" class="nav-link text-secondary "><i class="fa-solid fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="chi-tiet-gio-hang.html" class="nav-link text-secondary " type="giỏ hàng" id="cartIconLink"><i class="fa-solid fa-cart-shopping"></i>
                            <span id="cartItemCount" class="badge bg-danger rounded-pill position-absolute">0</span>
                        </a>
                    </li>
                </ul>  
            </div>
        </div>
    </nav>
    <!--END HEADER-->

    <!-- CONTENT-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/sp bán chạy1.webp" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img/chi-tiet-sp1.webp" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img/chi-tiet-sp1.1.webp" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col">
                <h3 class="text-warning-emphasis">Combo 10 mặt nạ BHA tràm trà Lucenbase làm sạch sâu, giảm mụn</h3>
                <div class="">
                    <span class="text-body-tertiary text-decoration-line-through">200.000đ</span>
                    <span class="fw-bold text-danger fs-4">100.000đ</span>
                </div>
                <div class="mt-3">
                    <button id="addToCartBtn" class="btn btn-outline-warning">Thêm vào giỏ hàng</button>
                    <!-- Nút Mua ngay -->
                    <a href="xac-nhan-don-hang.html" id="buyNowBtn" class="btn btn-outline-danger">Mua ngay</a>
                </div>
                <div class="mt-4">
                    <p><i class="fa-brands fa-readme"></i> Cam kết 100% hàng chính hãng</p>
                    <p><i class="fa-solid fa-phone-volume"></i> Hỗ trợ 24/7 <br>
                               Với các kênh Facebook/Zalo/Instagram
                    </p>
                </div>
                <div class="mt-4">
                    <h6 class="text-warning-emphasis">THÔNG TIN SẢN PHẨM</h6>
                    <p>
                        Lucenbase là một hãng mỹ phẩm nội địa Trung chuyên về dưỡng da. Các sản phẩm của
                        Lucenbase không chứa dầu khoáng, không chứa huỳnh quang, bảng thành phần lành tính và phù hợp với mọi loại da.
                    </p>
                    <p>Combo 10 mặt nạ BHA tràm trà Lucenbase làm sạch sâu, giảm mụn.</p>
                    <p>THÀNH PHẦN:</p>
                    <p>-BHA: Tẩy tế bào chết, thu nhỏ lỗ chân lông, chống oxy hoá, giảm và loại bỏ các vấn đề gây nên mụn. <br>
                        -TRÀM TRÀ: Dọn sạch bã nhờn, hút sạch chất cặn trên da, làm sạch sâu, mềm mịn da sần sùi, loại bỏ mụn. <br>
                        -Sodium hyaluronate: Dưỡng ẩm, mềm da. <br>
                        -Chiết xuất từ hạt gỗ gụ: Điều chỉnh sự cân bằng của nước và dầu trên da. <br>
                        -Muối Amoni -73: Thúc đẩy quá trình giảm mụn. <br>
                        --------------------- <br>
                        CÔNG DỤNG: <br>
                        -Giamr và loại bỏ mụn <br>
                        -Dưỡng ẩm, làm mềm da <br>
                        --------------------- <br>
                        CÁCH SỬ DỤNG: <br>
                        -Bước 1: Rửa sạch mặt <br>
                        -Bước 2: Bôi tinh chất đều lên mặt, sau đó đắp mặt nạ <br>
                        -Bước 3: Đắp khoảng 15 phút rồi gỡ ra, không cần rửa lại bằng nước <br>

                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT-->

    <!-- FOOTER-->
    <footer class="bg-dark border-top p-3">
        <div class="footer-container">
            <div class="footer-expand-collapsed">
                <div class="container">
                    <div class="row">
                        <div class="col widget-footer">
                            <h4 class="title-footer  text-light">THÔNG TIN LIÊN HỆ</h4>
                            <div class="content-footer block-collapse row">
                                <div class="col">
                                    <p class="text-secondary">Website Skin Care - thương hiệu mỹ phẩm nội địa trung lành
                                        tính, dịu nhẹ bán chạy số 1 tại Việt Nam</p>
                                </div>
                                <div class="col">
                                    <div class="address-footer text-secondary">
                                        <ul>
                                            <li class="contact-1">
                                                <b>Địa chỉ:</b>
                                                Hoàng Mai, Hà Nội
                                            </li>
                                            <li class="contact-2">
                                                <b>Điện thoại:</b>
                                                0702890478
                                            </li>
                                            <li class="contact-3">
                                                <b>Email:</b>
                                                skincare2004@gmail.com
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h4 class="title-footer text-light">HỖ TRỢ KHÁCH HÀNG</h4>
                            <div class="content-footer block-collapse">
                                <ul class="footerNav-link text-secondary">
                                    <li class="item ">
                                        <a href="#" title="Tìm kiếm" class="text-secondary">Tìm kiếm</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Giới thiệu" class="text-secondary">Giới thiệu</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Chính sách đổi trả" class="text-secondary">Chính sách đổi
                                            trả</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Điều khoản dịch vụ" class="text-secondary">Điều khoản dịch
                                            vụ</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Liên hệ" class="text-secondary">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col widget-footer">
                            <h4 class="title-footer text-light">CHĂM SÓC KHÁCH HÀNG</h4>
                            <div class="content-footer block-collapse ">
                                <div class="footerInfo-hline">
                                    <div class="box-icon text-light ">
                                        <i class="fa-solid fa-phone-volume text-secondary"></i>
                                    </div>
                                    <div class="box-content">
                                        <span class="text-light">0702890478</span>
                                        <ul class="text-secondary">skincare2004@gmail.com</ul>
                                    </div>
                                </div>
                                <h4 class="fter-title text-light">FOLLOW US</h4>
                                <ul class="flex-row footerNav-social">
                                    <a class="text-secondary flex-col" href="#" target="_blank" rel="noopener"
                                        title="Facebook" aria-label="Facebook">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a class="text-secondary flex-col" href="#" target="_blank" rel="noopener"
                                        title="Instagram" aria-label="Instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a class="text-secondary flex-col" href="#" target="_blank" rel="noopener"
                                        title="Google" aria-label="Google">
                                        <i class="fa-brands fa-google-plus-g"></i>
                                    </a>
                                    <a class="text-secondary flex-col" href="#" target="_blank" rel="noopener"
                                        title="Youtube" aria-label="Youtube">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <span class="text-light">Copyringht 2024 by ximttph42906</span>
        </div>
    </footer>
    <!-- END FOOTER-->
    <script>
        // Biến đếm số lượng sản phẩm trong giỏ hàng
        let cartItemCount = 0;

        // Bắt sự kiện click nút "Thêm vào giỏ hàng"
        document.getElementById('addToCartBtn').addEventListener('click', function () {
            // Tăng số lượng sản phẩm trong giỏ hàng
            cartItemCount++;
            // Cập nhật số lượng sản phẩm trong biểu tượng giỏ hàng trên header
            document.getElementById('cartItemCount').innerText = cartItemCount;
        });
    </script>
    
</body>

</html>
