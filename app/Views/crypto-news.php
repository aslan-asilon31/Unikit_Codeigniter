<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Unikit")) ?>

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
                                    <li class="breadcrumb-item"><a href="#">Crypto</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">News</li>
                                </ol>
                            </div>
                            <h4 class="page-title">News</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="align-self-center">
                                <button type="button" class="btn btn-de-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-xs me-2"></i>Send</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalSend" tabindex="-1" aria-labelledby="exampleModalSendLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="exampleModalDefaultSend">Send Coin</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-2">
                                                    <label for="cryptocurrency">Crypto Currency</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>-- Currency --</option>
                                                        <option value="BTC">BTC</option>
                                                        <option value="ETH">ETH</option>
                                                    </select>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="cryptocurrency">Currency From</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>-- My wallet --</option>
                                                        <option value="BTC">BTC</option>
                                                        <option value="ETH">ETH</option>
                                                    </select>
                                                </div>
                                                <div class=" mb-2">
                                                    <label for="toaddress">To</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="QUcode"><i class="fas fa-qrcode"></i></span>
                                                        <input type="text" class="form-control" placeholder="Can you scan" aria-label="Scancode">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="toaddress">USD</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="US-dollor"><i class="fas fa-dollar-sign"></i></span>
                                                                <input type="text" class="form-control" placeholder="USD" aria-label="US-dollor">
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-2">
                                                            <label for="BTC">BTC</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="BTC-coin"><i class="fab fa-btc"></i></span>
                                                                <input type="text" class="form-control" placeholder="BTC" aria-label="BTC-coin">
                                                            </div>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                                <div class="mb-2">
                                                    <label for="Description">Description</label>
                                                    <textarea class="form-control" rows="3" aria-label="With textarea"></textarea>
                                                </div>
                                                <div class="mt-2 mb-1">
                                                    <label for="NetworkFree">Network Free</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Regular" value="option1">
                                                    <label class="form-check-label" for="Regular">Regular</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-0">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Priority" value="option2">
                                                    <label class="form-check-label" for="Priority">Priority</label>
                                                </div>
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button class="btn btn-de-primary btn-sm" type="button">Continue</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <button type="button" class="btn btn-de-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-xs me-2"></i>Request</button>
                                <div class="modal fade" id="exampleModalRequest" tabindex="-1" aria-labelledby="exampleModalRequestLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="exampleModalRequestLabel">Request Coin</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-2">
                                                    <label for="cryptocurrency">Crypto Currency</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>-- Currency --</option>
                                                        <option value="BTC">BTC</option>
                                                        <option value="ETH">ETH</option>
                                                    </select>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="cryptocurrency">Receive To</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>-- My wallet --</option>
                                                        <option value="BTC">BTC</option>
                                                        <option value="ETH">ETH</option>
                                                    </select>
                                                </div>
                                                <div class=" mb-2">
                                                    <label for="toaddress">Address</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="W-Address" value="c12b001a15f9bd46ef1c6551386c">
                                                        <button class="btn btn-outline-light" type="button" id="Copy_link"><i class="fas fa-copy"></i></button>
                                                    </div>
                                                </div>
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button class="btn btn-de-success btn-sm" type="button">Done</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->
                            </div><!--end /div-->
                            <div class="media">
                                <img src="/images/logos/btc.png" class="me-2 thumb-sm align-self-center rounded-circle" alt="...">
                                <div class="media-body align-self-center">
                                    <p class="mb-1 text-muted">Total Balance</p>
                                    <h5 class="mt-0 text-dark mb-1">122.00125503 BTC</h5>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </div><!--end /div-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-light">
                            <div class="card-body">
                                <div class="text-slider">
                                    <ul class="list-inline move-text mb-0">
                                        <li class="list-inline-item">
                                            <img src="/images/logos/btc.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 8435.21</span>
                                            <span class="mb-0 font-12 text-success">+7.88%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/dash.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 1233.54</span>
                                            <span class="mb-0 font-12 text-success">+5.12%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/dollar.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">BTC: 8435.21</span>
                                            <span class="mb-0 font-12 text-danger">-2.62%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/btc.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 226.64</span>
                                            <span class="mb-0 font-12 text-success">+1.91%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/lite.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 12.91</span>
                                            <span class="mb-0 font-12 text-danger">-1.55%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/eth.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 0.50</span>
                                            <span class="mb-0 font-12 text-danger">-0.45%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/btc.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 8435.21</span>
                                            <span class="mb-0 font-12 text-success">+7.88%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/dash.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 1233.54</span>
                                            <span class="mb-0 font-12 text-success">+5.12%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/dollar.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">BTC: 8435.21</span>
                                            <span class="mb-0 font-12 text-danger">-2.62%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/btc.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 226.64</span>
                                            <span class="mb-0 font-12 text-success">+1.91%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/dash.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 1233.54</span>
                                            <span class="mb-0 font-12 text-success">+5.12%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/dollar.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">BTC: 8435.21</span>
                                            <span class="mb-0 font-12 text-danger">-2.62%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/btc.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 226.64</span>
                                            <span class="mb-0 font-12 text-success">+1.91%</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <img src="/images/logos/lite.png" alt="" class="thumb-xs rounded">
                                            <span class="fw-semibold font-14">USD: 12.91</span>
                                            <span class="mb-0 font-12 text-danger">-1.55%</span>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Live Crypto News</h4>
                                <p class="text-muted mb-0">Aspect ratios can be customized with modifier classes.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <!-- 16:9 aspect ratio -->
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/hj6GPGA_syE" title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <img src="/images/small/news-2.jpg" height="90" class="me-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <div class="mb-2">
                                            <span class="badge bg-soft-success px-3">Crypto</span>
                                            <span class="ms-2 text-muted">26 March 2021</span>
                                        </div>
                                        <a href="" class="font-16 d-block fw-semibold">It is a long established fact that a reader will be
                                            distracted of a page.
                                        </a>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <img src="/images/small/news-1.jpg" height="90" class="me-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <div class="mb-2">
                                            <span class="badge bg-soft-secondary px-3">Crypto</span>
                                            <span class="ms-2 text-muted">26 March 2021</span>
                                        </div>
                                        <a href="" class="font-16 d-block fw-semibold">It is a long established fact that a reader will be
                                            distracted of a page.
                                        </a>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <img src="/images/small/news-3.jpg" height="90" class="me-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <div class="mb-2">
                                            <span class="badge bg-soft-warning px-3">Crypto</span>
                                            <span class="ms-2 text-muted">26 March 2021</span>
                                        </div>
                                        <a href="" class="font-16 d-block fw-semibold">It is a long established fact that a reader will be
                                            distracted of a page.
                                        </a>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <img src="/images/small/news-2.jpg" height="90" class="me-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <div class="mb-2">
                                            <span class="badge bg-soft-primary px-3">Crypto</span>
                                            <span class="ms-2 text-muted">26 March 2021</span>
                                        </div>
                                        <a href="" class="font-16 d-block fw-semibold">It is a long established fact that a reader will be
                                            distracted of a page.
                                        </a>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <img src="/images/small/news-1.jpg" height="90" class="me-3" alt="...">
                                    <div class="media-body align-self-center">
                                        <div class="mb-2">
                                            <span class="badge bg-soft-info px-3">Crypto</span>
                                            <span class="ms-2 text-muted">26 March 2021</span>
                                        </div>
                                        <a href="" class="font-16 d-block fw-semibold">It is a long established fact that a reader will be
                                            distracted of a page.
                                        </a>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->

                </div><!--end row-->


                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/small/news-1.jpg" alt="" class="img-fluid" />
                                <ul class="p-0 mt-4 list-inline">
                                    <li class="list-inline-item"><span class="badge bg-soft-primary px-3">Crypto</span></li>
                                    <li class="list-inline-item">26 March 2021</li>
                                    <li class="list-inline-item">by <a href="">admin</a></li>
                                </ul>
                                <a href="" class="h4 mt-2">It is a long established fact that a reader will be</a>
                                <p class="text-muted mt-2">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/small/news-3.jpg" alt="" class="img-fluid" />
                                <ul class="p-0 mt-4 list-inline">
                                    <li class="list-inline-item"><span class="badge bg-soft-success px-3">Crypto</span></li>
                                    <li class="list-inline-item">26 March 2021</li>
                                    <li class="list-inline-item">by <a href="">admin</a></li>
                                </ul>
                                <a href="" class="h4 mt-2">College in Virginia, looked up one of the more obscure</a>
                                <p class="text-muted mt-2">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/small/news-2.jpg" alt="" class="img-fluid" />
                                <ul class="p-0 mt-4 list-inline">
                                    <li class="list-inline-item"><span class="badge bg-soft-warning px-3">Crypto</span></li>
                                    <li class="list-inline-item">26 March 2021</li>
                                    <li class="list-inline-item">by <a href="">admin</a></li>
                                </ul>
                                <a href="" class="h4 mt-2">There are many variations of passages of using</a>
                                <p class="text-muted mt-2">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                <a href="#" class="text-primary">Continue Reading <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>