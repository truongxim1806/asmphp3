<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('lib/font-fontawesome-ae333ffef2.js') }}"></script>
    <style>
        .background{
            background-color: rgb(255, 245, 233);
        }
    </style>
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
            <div class="row">
                <a href="#" class="text-secondary col" placeholder="Tìm kiếm"><i
                        class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#" class="text-secondary col" type="giỏ hàng"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="#" class="text-secondary col"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </nav>
    <!--END HEADER-->

    <!-- CONTENT-->
    <div class="background d-flex justify-content-around">
        <div class="pt-4" style="min-height:calc(100vh - 113px);">
            <div class="container">
                <p class="text-body-secondary fs-1 fst-italic text-center">Đăng nhập</p>
            </div>
            <div class="">
                <form style="width: 500px;">
                    <div class="mb-8" >
                        <label for="exampleInputTel" class="form-label">Số điện thoại:</label>
                        <input type="number" class="form-control" id="exampleInputTel" aria-describedby="telHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-outline-dark w-100">Đăng nhập</button>
                    <div class="mb-3">
                        <a href="#" class="text-dark">Quên mật khẩu</a>
                    </div>
                    <br>
                    <div class="text-center">
                        Bạn mới biết đến lucenbase? <a href="dang-ky.html" class="text-dark">Đăng ký</a>
                    </div>
                    
                </form>
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
</body>

</html>