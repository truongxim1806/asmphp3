<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Care</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
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
            <a href="#"><img src="{{ asset('img/logo.webp') }}" alt="" style="width: 200px;"></a>
        </div>
        <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav nav-left me-auto mb-2 mb-lg-0 ml-3">
                    <li class="nav-item">
                        <a class="nav-link active fw-medium text-secondary" aria-current="page"
                            href="{{ '/' }}">Trang
                            chủ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active fw-medium text-secondary" href="{{ route('products.list') }}">
                            Sản phẩm
                        </a>
                        {{-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item fw-normal text-secondary" href="">Toner</a></li>
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
            <div class="row">
                <a href="tim-kiem-san-pham.html" class="text-secondary col" title="Tìm kiếm"><i
                        class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#" class="text-secondary col" title="giỏ hàng"><i
                        class="fa-solid fa-cart-shopping"></i></a>
                <a href="{{ route('login.login') }}" class="text-secondary col" title="Tài khoản"><i
                        class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </nav>
    <!--END HEADER-->

    <!-- CONTENT-->
    <div class="d-flex">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide_1_img.webp" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/slide_2_img.webp" class="d-block w-100" alt="">
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
    <div class="container">
        <div class="d-flex align-items-center justify-content-center fw-bolder" style="height: 100px;">
            <h3 class="text-warning-emphasis">TOP SẢN PHẨM BÁN CHẠY</h3>
        </div>
        <div class="section-content row">
            <div class="col-6">
                <figure class="groupbanner_image groupbanner-hover">
                    <a href="#" class="groupbanner_image_link">
                        <img class="lazyloaded" src="img/home_collection_1_banner.webp" alt="TOP SẢN PHẨM BÁN CHẠY"
                            style="height: 600px;">
                    </a>
                </figure>
            </div>
            <div class="col-6 row">
                {{-- @foreach ( as )
                    <div class="col-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <a href="{{ route('detail.show') }}"><img src="img/sp bán chạy1.webp"
                                    class="mw-100 mh-100" alt=""></a>
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>{{route}}</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
                @endforeach --}}
                <div class="col-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <a href="{{ route('detail.show') }}"><img src="img/sp bán chạy1.webp"
                                    class="mw-100 mh-100" alt=""></a>
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>Combo 10 mặt nạ BHA tràm trà Lucenbase</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
                <div class="col-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <img src="img/sp bán chạy1.webp" class="mw-100 mh-100" alt="">
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>Combo 10 mặt nạ BHA tràm trà Lucenbase</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
                <div class="col-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <img src="img/sp bán chạy1.webp" class="mw-100 mh-100" alt="">
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>Combo 10 mặt nạ BHA tràm trà Lucenbase</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
                <div class="col-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <img src="img/sp bán chạy1.webp" class="mw-100 mh-100" alt="">
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>Combo 10 mặt nạ BHA tràm trà Lucenbase</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center fw-bolder" style="height: 100px;">
            <h3 class="text-warning-emphasis">SẢN PHẨM MỚI NHẤT</h3>
        </div>
        <div class="section-content row">

            <div class="col-6 row">
                <div class="col-md-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <img src="img/sp bán chạy1.webp" class="mw-100 mh-100" alt="">
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>Combo 10 mặt nạ BHA tràm trà Lucenbase</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
                <div class="col-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <img src="img/sp bán chạy1.webp" class="mw-100 mh-100" alt="">
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>Combo 10 mặt nạ BHA tràm trà Lucenbase</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
                <div class="col-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <img src="img/sp bán chạy1.webp" class="mw-100 mh-100" alt="">
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>Combo 10 mặt nạ BHA tràm trà Lucenbase</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
                <div class="col-3">
                    <!--Hiển thị ảnh-->
                    <div class="border mb-4 overflow-hidden">
                        <!--Hiển thị ảnh dạng nâng cao-->
                        <div class="bg-danger ratio" style="--bs-aspect-ratio: 100%">
                            <img src="img/sp bán chạy1.webp" class="mw-100 mh-100" alt="">
                        </div>
                    </div>
                    <!--hiển thị text và button-->
                    <div class="">
                        <p>Combo 10 mặt nạ BHA tràm trà Lucenbase</p>
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">100.000</span>
                            <span class="text-secondary text-decoration-line-through">200.000</span>
                        </div>
                        <button class="btn btn-danger rounded-pill w-90 btn-sm">Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <figure class="groupbanner_image groupbanner-hover">
                    <a href="#" class="groupbanner_image_link">
                        <img class="lazyloaded" src="img/home_collection_2_banner.webp" alt="SẢN PHẨM MỚI NHẤT"
                            style="height: 600px;">
                    </a>
                </figure>
            </div>
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
                                    <p class="text-secondary">Website Skin Care - thương hiệu mỹ phẩm nội địa trung
                                        lành
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
                                        <a href="#" title="Chính sách đổi trả" class="text-secondary">Chính
                                            sách đổi
                                            trả</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Điều khoản dịch vụ" class="text-secondary">Điều
                                            khoản dịch
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
                                <ul class="d-flex footerNav-social">
                                    <a class="text-secondary" href="#" target="_blank" rel="noopener"
                                        title="Facebook" aria-label="Facebook">
                                        <i class="mx-2 fa-brands fa-facebook"></i>
                                    </a>
                                    <a class="text-secondary" href="#" target="_blank" rel="noopener"
                                        title="Instagram" aria-label="Instagram">
                                        <i class="mx-2 fa-brands fa-instagram"></i>
                                    </a>
                                    <a class="text-secondary" href="#" target="_blank" rel="noopener"
                                        title="Google" aria-label="Google">
                                        <i class="mx-2 fa-brands fa-google-plus-g"></i>
                                    </a>
                                    <a class="text-secondary" href="#" target="_blank" rel="noopener"
                                        title="Youtube" aria-label="Youtube">
                                        <i class="mx-2 fa-brands fa-youtube"></i>
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
</body>

</html>
