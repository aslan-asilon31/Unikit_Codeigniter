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
                                    <li class="breadcrumb-item active">ICO</li>
                                </ol>
                            </div>
                            <h4 class="page-title">ICO</h4>
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
                    <div class="col-lg-4">
                        <div class="card ">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="media">
                                            <img src="/images/logos/btc.png" class="me-2 thumb-sm rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h5 class="m-0 font-15">Bitcoin</h5>
                                                <p class="text-muted fw-semibold mb-0">Basic Attention Token</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <span class="badge bg-soft-success">ICO Active</span>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 ">Start Date : <span class="text-muted">10/05/2021</span></p>
                                        <p class="">End Date : <span class="text-muted">20/05/2021</span></p>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-end align-self-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <a href="" class="btn btn-sm btn-outline-primary float-end ">Buy Now</a>
                                <ul class="list-inline socials mb-0">
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card ">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="media">
                                            <img src="/images/logos/qub.png" class="me-2 thumb-sm rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h5 class="m-0 font-15">Qubitica</h5>
                                                <p class="text-muted fw-semibold mb-0">Basic Attention Token</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <span class="badge bg-soft-success">ICO Active</span>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 ">Start Date : <span class="text-muted">10/05/2021</span></p>
                                        <p class="">End Date : <span class="text-muted">20/05/2021</span></p>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-end align-self-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <a href="" class="btn btn-sm btn-outline-primary float-end ">Buy Now</a>
                                <ul class="list-inline socials mb-0">
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card ">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="media">
                                            <img src="/images/logos/lite.png" class="me-2 thumb-sm rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h5 class="m-0 font-15">Litecoin</h5>
                                                <p class="text-muted fw-semibold mb-0">Basic Attention Token</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <span class="badge bg-soft-danger">ICO End</span>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 ">Start Date : <span class="text-muted">10/05/2021</span></p>
                                        <p class="">End Date : <span class="text-muted">20/05/2021</span></p>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-end align-self-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <a href="" class="btn btn-sm btn-outline-primary float-end disabled">Buy Now</a>
                                <ul class="list-inline socials mb-0">
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card ">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="media">
                                            <img src="/images/logos/eth.png" class="me-2 thumb-sm rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h5 class="m-0 font-15">Ethereum</h5>
                                                <p class="text-muted fw-semibold mb-0">Basic Attention Token</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <span class="badge bg-soft-danger">ICO End</span>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 ">Start Date : <span class="text-muted">10/05/2021</span></p>
                                        <p class="">End Date : <span class="text-muted">20/05/2021</span></p>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-end align-self-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <a href="" class="btn btn-sm btn-outline-primary float-end disabled">Buy Now</a>
                                <ul class="list-inline socials mb-0">
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card ">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="media">
                                            <img src="/images/logos/mon.png" class="me-2 thumb-sm rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h5 class="m-0 font-15">Monero</h5>
                                                <p class="text-muted fw-semibold mb-0">Basic Attention Token</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <span class="badge bg-soft-success">ICO Active</span>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 ">Start Date : <span class="text-muted">10/05/2021</span></p>
                                        <p class="">End Date : <span class="text-muted">20/05/2021</span></p>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-end align-self-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <a href="" class="btn btn-sm btn-outline-primary float-end ">Buy Now</a>
                                <ul class="list-inline socials mb-0">
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card ">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="media">
                                            <img src="/images/logos/dash.png" class="me-2 thumb-sm rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h5 class="m-0 font-15">Dashcoin</h5>
                                                <p class="text-muted fw-semibold mb-0">Basic Attention Token</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <span class="badge bg-soft-success">ICO Active</span>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-0 ">Start Date : <span class="text-muted">10/05/2021</span></p>
                                        <p class="">End Date : <span class="text-muted">20/05/2021</span></p>
                                    </div><!--end col-->
                                    <div class="col-md-6 text-end align-self-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <a href="" class="btn btn-sm btn-outline-primary float-end ">Buy Now</a>
                                <ul class="list-inline socials mb-0">
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-medium-m"></i></a>
                                    </li>
                                    <li class="list-inline-item me-0">
                                        <a href="#" class=""><i class="fab fa-telegram"></i></a>
                                    </li>
                                </ul>
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>