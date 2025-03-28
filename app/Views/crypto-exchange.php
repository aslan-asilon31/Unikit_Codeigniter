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
                                    <li class="breadcrumb-item active">Exchange</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Exchange</h4>
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
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Example</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div id="ana_device" class="apex-charts"></div>
                                    </div><!--end col-->
                                    <div class="col-md-8 align-self-center">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 col-xl">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col text-center">
                                                                <span class="h4">$12450</span>
                                                                <h6 class="text-uppercase text-muted mt-2 m-0">Binance</h6>
                                                            </div><!--end col-->
                                                        </div> <!-- end row -->
                                                    </div><!--end card-body-->
                                                </div> <!--end card-body-->
                                            </div><!--end col-->
                                            <div class="col-12 col-lg-4 col-xl">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col text-center">
                                                                <span class="h4">$5520</span>
                                                                <h6 class="text-uppercase text-muted mt-2 m-0">Kraken</h6>
                                                            </div><!--end col-->
                                                        </div> <!-- end row -->
                                                    </div><!--end card-body-->
                                                </div> <!--end card-body-->
                                            </div><!--end col-->
                                            <div class="col-12 col-lg-4 col-xl">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col text-center">
                                                                <span class="h4">$2153</span>
                                                                <h6 class="text-uppercase text-muted mt-2 m-0">Bittrex</h6>
                                                            </div><!--end col-->
                                                        </div> <!-- end row -->
                                                    </div><!--end card-body-->
                                                </div> <!--end card-body-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="crypto-calcy w-100">
                                            <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="bitcoin" amount="1" border-radius="0.60rem" background-color="#202221" decimal-places="2"></crypto-converter-widget>
                                            <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js" async></script>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->

                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Coin Market</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active fw-semibold pt-0" data-bs-toggle="tab" href="#Dollor_ex" role="tab">
                                            Dollor
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#BTC_ex" role="tab">
                                            BTC
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#ETH_ex" role="tab">
                                            ETH
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="Dollor_ex" role="tabpanel" data-simplebar="" style="height: 235px;">
                                        <ul class="list-unsyled m-0 ps-0 mt-1">
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/btc.png" alt="" class="me-1" height="20">BTC-USD</a>
                                                <span class="text-muted">$1420.00</span>
                                                <span class="text-danger">-0.2%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/eth.png" alt="" class="me-1" height="20">ETH-USD</a>
                                                <span class="text-muted">$233.00</span>
                                                <span class="text-success">0.28%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/dash.png" alt="" class="me-1" height="20">BCH-USD</a>
                                                <span class="text-muted">$12.00</span>
                                                <span class="text-success">0.12%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/mon.png" alt="" class="me-1" height="20">BSV-USD</a>
                                                <span class="text-muted">$95.00</span>
                                                <span class="text-danger">-0.22%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/lite.png" alt="" class="me-1" height="20">LTC-USD</a>
                                                <span class="text-muted">$32.00</span>
                                                <span class="text-danger">-0.09%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/qub.png" alt="" class="me-1" height="20">BNB-USD</a>
                                                <span class="text-muted">$51.00</span>
                                                <span class="text-success">0.27%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1">
                                                <a href="#" class="my-1"><img src="/images/logos/dollar.png" alt="" class="me-1" height="20">ADA-USD</a>
                                                <span class="text-muted">$88.00</span>
                                                <span class="text-danger">-0.2%</span>
                                            </li>
                                        </ul>
                                    </div><!--end tab-pane-->
                                    <div class="tab-pane" id="BTC_ex" role="tabpanel" data-simplebar="" style="height: 210px;">
                                        <ul class="list-unsyled m-0 ps-0 mt-1">
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/btc.png" alt="" class="me-1" height="20">BTC-BTC</a>
                                                <span class="text-muted">0.000041</span>
                                                <span class="text-danger">-0.2%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/eth.png" alt="" class="me-1" height="20">ETH-BTC</a>
                                                <span class="text-muted">0.0000411</span>
                                                <span class="text-success">0.28%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/dash.png" alt="" class="me-1" height="20">BCH-BTC</a>
                                                <span class="text-muted">0.0000652</span>
                                                <span class="text-success">0.12%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/mon.png" alt="" class="me-1" height="20">BSV-BTC</a>
                                                <span class="text-muted">0.0000120</span>
                                                <span class="text-danger">-0.22%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/lite.png" alt="" class="me-1" height="20">LTC-BTC</a>
                                                <span class="text-muted">0.00001141</span>
                                                <span class="text-danger">-0.09%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/qub.png" alt="" class="me-1" height="20">BNB-BTC</a>
                                                <span class="text-muted">0.000096</span>
                                                <span class="text-success">0.27%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1">
                                                <a href="#" class="my-1"><img src="/images/logos/dollar.png" alt="" class="me-1" height="20">ADA-BTC</a>
                                                <span class="text-muted">0.0000321</span>
                                                <span class="text-danger">-0.2%</span>
                                            </li>
                                        </ul>
                                    </div><!--end tab-pane-->
                                    <div class="tab-pane" id="ETH_ex" role="tabpanel" data-simplebar="" style="height: 210px;">
                                        <ul class="list-unsyled m-0 ps-0 mt-1">
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/btc.png" alt="" class="me-1" height="20">BTC-ETH</a>
                                                <span class="text-muted">0.000096</span>
                                                <span class="text-danger">-0.2%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/eth.png" alt="" class="me-1" height="20">ETH-ETH</a>
                                                <span class="text-muted">0.000016</span>
                                                <span class="text-success">0.28%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/dash.png" alt="" class="me-1" height="20">BCH-ETH</a>
                                                <span class="text-muted">0.000044</span>
                                                <span class="text-success">0.12%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/mon.png" alt="" class="me-1" height="20">BSV-ETH</a>
                                                <span class="text-muted">0.0003254</span>
                                                <span class="text-danger">-0.22%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/lite.png" alt="" class="me-1" height="20">LTC-ETH</a>
                                                <span class="text-muted">0.00009621</span>
                                                <span class="text-danger">-0.09%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1 border-bottom">
                                                <a href="#" class="my-1"><img src="/images/logos/qub.png" alt="" class="me-1" height="20">BNB-ETH</a>
                                                <span class="text-muted">0.00009965</span>
                                                <span class="text-success">0.27%</span>
                                            </li>
                                            <li class="align-items-center d-flex justify-content-between py-1">
                                                <a href="#" class="my-1"><img src="/images/logos/dollar.png" alt="" class="me-1" height="20">ADA-ETH</a>
                                                <span class="text-muted">0.0065496</span>
                                                <span class="text-danger">-0.2%</span>
                                            </li>
                                        </ul>
                                    </div><!--end tab-pane-->
                                </div><!--end tab-content-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div><!--end row-->
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Buy Coins</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Amount</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">BTC</span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select w-25" aria-label="Default select example">
                                            <option selected>Last Trade Price</option>
                                            <option value="1">Last Buy Price</option>
                                            <option value="2">Last Sell Price</option>
                                        </select>
                                        <input type="text" class="form-control" aria-label="Amount" placeholder="$25,000">
                                        <span class="input-group-text">$ Dollor</span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Total</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">$ Dollor</span>
                                    </div>
                                    <div class=" mt-3 ms-auto">
                                        <a href="#" class="btn btn-success btn-sm">Buy Coins</a>
                                    </div>
                                </form> <!--end form-->
                                <hr class="hr-dashed">
                                <h6 class="mt-0">Last Trade</h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="media">
                                            <img src="/images/logos/btc.png" height="30" class="me-2 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">BTC</h6>
                                                <p class="mb-0 text-muted">$50,562.24</p>
                                            </div><!--end media body-->
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <p class="mb-0 text-success">0.95842536</p>
                                        <p class="mb-0 text-muted">$17,214</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Sell Coins</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Amount</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">BTC</span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select class="form-select w-25" aria-label="Default select example">
                                            <option selected>Last Trade Price</option>
                                            <option value="1">Last Buy Price</option>
                                            <option value="2">Last Sell Price</option>
                                        </select>
                                        <input type="text" class="form-control" aria-label="Amount" placeholder="$25,000">
                                        <span class="input-group-text">$ Dollor</span>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Total</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text">$ Dollor</span>
                                    </div>
                                    <div class=" mt-3 ms-auto">
                                        <a href="#" class="btn btn-danger btn-sm">Sell Coins</a>
                                    </div>
                                </form> <!--end form-->
                                <hr class="hr-dashed">
                                <h6 class="mt-0">Last Trade</h6>
                                <div class="row">
                                    <div class="col">
                                        <div class="media">
                                            <img src="/images/logos/eth.png" height="30" class="me-2 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">ETH</h6>
                                                <p class="mb-0 text-muted">$1,798.24</p>
                                            </div><!--end media body-->
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <p class="mb-0 text-danger">2.325468</p>
                                        <p class="mb-0 text-muted">$5,214</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Live Trading</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="table-responsive" style="height: 290px;" data-simplebar="">
                                            <table class="table table-sm mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Price(USD)</th>
                                                        <th scope="col">Amount(BTC)</th>
                                                        <th scope="col">Total(USD)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-success not-hover">
                                                        <td class="text-success">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-6">
                                        <div class="table-responsive" style="height: 290px;" data-simplebar="">
                                            <table class="table table-sm mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Price(USD)</th>
                                                        <th scope="col">Amount(BTC)</th>
                                                        <th scope="col">Total(USD)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>
                                                    <tr class="bg-soft-danger not-hover">
                                                        <td class="text-danger">1235.12</td>
                                                        <td class="text-muted">1.2154300</td>
                                                        <td class="text-muted">1235.21</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Transaction History</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive dash-social">
                                    <table id="datatable" class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Transaction ID</th>
                                                <th>Type</th>
                                                <th>Value</th>
                                            </tr><!--end tr-->
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>14 Jan 2021</td>
                                                <td>12:05PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$521.36</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>02</td>
                                                <td>13 Jan 2021</td>
                                                <td>10:15AM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>$990.00</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>03</td>
                                                <td>11 Jan 2021</td>
                                                <td>09:14PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$321.21</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>04</td>
                                                <td>08 Jan 2021</td>
                                                <td>12:05PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>$321.21</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>05</td>
                                                <td>06 Jan 2021</td>
                                                <td>11:30AM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$458.80</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>06</td>
                                                <td>05 Jan 2021</td>
                                                <td>05:50PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>125.50</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>07</td>
                                                <td>04 Jan 2021</td>
                                                <td>08:10PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$365.21</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>08</td>
                                                <td>03 Jan 2021</td>
                                                <td>01:30PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>$843.21</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>09</td>
                                                <td>03 Jan 2021</td>
                                                <td>12:05PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-danger">Sent</span></td>
                                                <td>$335.15</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>10</td>
                                                <td>02 Jan 2021</td>
                                                <td>03:15PM</td>
                                                <td>c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba</td>
                                                <td><span class="badge badge-soft-success">Received</span></td>
                                                <td>$554.50</td>
                                            </tr><!--end tr-->

                                        </tbody>
                                    </table>
                                </div>
                                <nav aria-label="..." class="float-end">
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul><!--end pagination-->
                                </nav><!--end nav-->
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
    <script src="/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/pages/crypto-exchange.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>