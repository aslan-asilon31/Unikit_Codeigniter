<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Unikit")) ?>

    <link href="/libs/@splidejs/splide/css/splide.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>
</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-tab-menu -->
    <?= $this->include('partials/left-sidebar') ?>
    <!-- end leftbar-tab-menu-->

    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Unikit</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Ecommerce</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Detail</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Product Detail</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 offset-lg-1 align-self-center">
                                        <div id="main-slider" class="splide mb-5">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="/images/products/01.png" alt="" class="mx-auto  d-block" height="300">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/images/products/02.png" alt="" class="mx-auto  d-block" height="300">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/images/products/03.png" alt="" class="mx-auto  d-block" height="300">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div id="thumbnail-slider" class="splide">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="/images/products/01.png" alt="" class="mx-auto  d-block" height="300">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/images/products/02.png" alt="" class="mx-auto  d-block" height="300">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="/images/products/03.png" alt="" class="mx-auto  d-block" height="300">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div><!--end col-->
                                    <div class="col-lg-4 offset-lg-1 align-self-center">
                                        <div class="">
                                            <span class="badge badge-soft-danger font-14 fw-semibold mb-2">Unikit</span>
                                            <h5 class="font-30 mb-0">Unikit Air Max Shoes</h5>
                                            <ul class="list-inline mb-3">
                                                <li class="list-inline-item me-n1"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item me-n1"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item me-n1"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item me-n1"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star-half text-warning font-16"></i></li>
                                                <li class="list-inline-item">4.5 (9830 reviews)</li>
                                            </ul>
                                            <h6 class="font-30 fw-bold text-primary mb-3">$89.00 <span class="font-14 text-muted fw-semibold"><del>$180.00</del></span><span class="text-danger font-14 fw-semibold ms-2">50% Off</span></h6>
                                            <h6 class="font-13 fw-bold">Detail :</h6>
                                            <p class="text-muted">There are many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look.
                                            </p>
                                            <h6 class="font-13 fw-bold">Features :</h6>
                                            <ul class="list-unstyled border-0">
                                                <li class="mb-2"><i class="las la-check-circle text-success me-1"></i>It is a long established fact that a reader will be distracted.</li>
                                                <li class="mb-2"><i class="las la-check-circle text-success me-1"></i>Contrary to popular belief, Lorem Ipsum is not text. </li>
                                                <li><i class="las la-check-circle text-success me-1"></i>There are many variations of passages of Lorem Ipsum available. </li>
                                            </ul>
                                            <div class="mt-3">
                                                <input class="form-control  d-inline-block" style="width:100px;" type="number" min="0" value="0" id="example-number-input">
                                                <a href="" class="btn btn-primary px-4 d-inline-block"><i class="mdi mdi-cart me-2"></i>Add to Cart</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <i class="mdi mdi-truck-fast text-success font-40"></i>
                                <h4 class="header-title fw-bold">Fast Delivery</h4>
                                <p class="text-muted mb-0">
                                    It is a long established fact that a reader will be distracted.
                                    Contrary to popular belief.
                                </p>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <i class="mdi mdi-refresh text-danger font-40"></i>
                                <h4 class="header-title fw-bold">Returns in 30 Days</h4>
                                <p class="text-muted mb-0">
                                    It is a long established fact that a reader will be distracted.
                                    Contrary to popular belief.
                                </p>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <i class="mdi mdi-headset text-warning font-40"></i>
                                <h4 class="header-title fw-bold">Online Support 24/7</h4>
                                <p class="text-muted mb-0">
                                    It is a long established fact that a reader will be distracted.
                                    Contrary to popular belief.
                                </p>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <i class="mdi mdi-wallet text-purple font-40"></i>
                                <h4 class="header-title fw-bold">Secure Payment</h4>
                                <p class="text-muted mb-0">
                                    It is a long established fact that a reader will be distracted.
                                    Contrary to popular belief.
                                </p>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mt-0">Related Products</h5>
                                <p class="text-muted mb-3 font-14">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look even slightly believable.
                                    If you are going to use a passage.
                                </p>
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="ribbon1 rib1-primary">
                                            <span class="text-white text-center rib1-primary">50% off</span>
                                        </div><!--end ribbon-->
                                        <img src="/images/products/05.png" alt="" class="d-block mx-auto my-4" height="150">
                                        <div class="d-flex justify-content-between align-items-center my-4">
                                            <div>
                                                <p class="text-muted mb-2">Electric</p>
                                                <a href="#" class="header-title">Fever Gun</a>
                                            </div>
                                            <div>
                                                <h4 class="text-dark mt-0 mb-2">$49.00 <small class="text-muted font-14"><del>$99.00</del></small></h4>
                                                <ul class="list-inline mb-0 product-review align-self-center">
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ms-n2"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-soft-primary">Add To Cart</button>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="ribbon1 rib1-primary">
                                            <span class="text-white text-center rib1-primary">50% off</span>
                                        </div><!--end ribbon-->
                                        <img src="/images/products/03.png" alt="" class="d-block mx-auto my-4" height="150">
                                        <div class="d-flex justify-content-between align-items-center my-4">
                                            <div>
                                                <p class="text-muted mb-2">Entertainment</p>
                                                <a href="#" class="header-title">Imported VR Box</a>
                                            </div>
                                            <div>
                                                <h4 class="text-dark mt-0 mb-2">$39.00 <small class="text-muted font-14"><del>$99.00</del></small></h4>
                                                <ul class="list-inline mb-0 product-review align-self-center">
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ms-n2"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-soft-primary">Add To Cart</button>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="ribbon1 rib1-primary">
                                            <span class="text-white text-center rib1-primary">50% off</span>
                                        </div><!--end ribbon-->
                                        <img src="/images/products/04.png" alt="" class="d-block mx-auto my-4" height="150">
                                        <div class="d-flex justify-content-between align-items-center my-4">
                                            <div>
                                                <p class="text-muted mb-2">Covid Safety</p>
                                                <a href="#" class="header-title">N95 Mask</a>
                                            </div>
                                            <div>
                                                <h4 class="text-dark mt-0 mb-2">$9.00 <small class="text-muted font-14"><del>$18.00</del></small></h4>
                                                <ul class="list-inline mb-0 product-review align-self-center">
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star text-warning font-16 ms-n2"></i></li>
                                                    <li class="list-inline-item"><i class="la la-star-half-o text-warning font-16 ms-n2"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-soft-primary">Add To Cart</button>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center align-item-center">
                                    <h1 class="fw-bold my-0">4.8</h1>
                                    <h4 class="header-title mb-0 fw-bold">Overall Rating</h4>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                        <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                        <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                        <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                        <li class="list-inline-item"><small class="text-muted">Total Review (700)</small></li>
                                    </ul>
                                </div>
                                <ul class="list-unstyled mt-3">
                                    <li class="mb-2">
                                        <span class="text-dark">5 Star</span>
                                        <small class="float-end text-muted ms-3 font-14">593</small>
                                        <div class="progress mt-2" style="height:5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%; border-radius:5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-dark">4 Star</span>
                                        <small class="float-end text-muted ms-3 font-14">99</small>
                                        <div class="progress mt-2" style="height:5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 18%; border-radius:5px;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-dark">3 Star</span>
                                        <small class="float-end text-muted ms-3 font-14">6</small>
                                        <div class="progress mt-2" style="height:5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 10%; border-radius:5px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-dark">2 Star</span>
                                        <small class="float-end text-muted ms-3 font-14">2</small>
                                        <div class="progress mt-2" style="height:5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 1%; border-radius:5px;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="text-dark">1 Star</span>
                                        <small class="float-end text-muted ms-3 font-14">0</small>
                                        <div class="progress mt-2" style="height:5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%; border-radius:5px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bg-light p-3 text-center align-item-center">
                                    <h3 class="mt-0">100%</h3>
                                    <h4 class="header-title fw-bold">Satisfied Customer</h4>
                                    <p class="text-muted mb-0 fw-semibold">All Customers give this product 5 Star Rating.</p>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div><!-- container -->

            <!--Start Rightbar-->
            <?= $this->include('partials/right-sidebar') ?>
            <!--end Rightbar-->

            <!--Start Footer-->
            <?= $this->include('partials/footer') ?>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <script src="/libs/@splidejs/splide/js/splide.min.js"></script>
    <script src="/pages/splide.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>