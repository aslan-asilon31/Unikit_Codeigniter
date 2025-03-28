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
                                    <li class="breadcrumb-item active">Wallet</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Wallet</h4>
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
                    <div class="col-lg-6">
                        <div class="card bg-transparent shadow-none">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col align-self-center mt-4 mt-lg-0">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active fw-semibold pt-0" data-bs-toggle="tab" href="#wallet_BTC" role="tab">
                                                    BTC
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#wallet_ETH" role="tab">
                                                    ETH
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#wallet_DASH" role="tab">
                                                    DASH
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#wallet_LTC" role="tab">
                                                    LITE
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content my-4">
                                            <div class="tab-pane active" id="wallet_BTC" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-12 col-lg">
                                                        <div class="media">
                                                            <img src="/images/logos/btc.png" class="me-2 thumb-md align-self-center rounded-circle" alt="...">
                                                            <div class="media-body align-self-center">
                                                                <h3 class="m-0 font-24 fw-bold">3.18424000 BTC</h3>
                                                                <p class="text-muted font-12 mb-0">$ 33277.36605044718</p>
                                                            </div><!--end media body-->
                                                        </div><!--end media-->
                                                    </div><!--end col-->
                                                    <div class="col-12 col-lg-auto align-self-center mt-2 mt-lg-0">
                                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-xs me-2"></i>Send</button>
                                                        <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-xs me-2"></i>Request</button>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end tab-pane-->
                                            <div class="tab-pane" id="wallet_ETH" role="tabpanel">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="media">
                                                            <img src="/images/logos/eth.png" class="me-2 thumb-md align-self-center rounded-circle" alt="...">
                                                            <div class="media-body align-self-center">
                                                                <h3 class="m-0 font-24 fw-bold">1.17424000 ETH</h3>
                                                                <p class="text-muted font-12 mb-0">$ 77.36605044718</p>
                                                            </div><!--end media body-->
                                                        </div><!--end media-->
                                                    </div><!--end col-->
                                                    <div class="col-auto align-self-center">
                                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-xs me-2"></i>Send</button>
                                                        <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-xs me-2"></i>Request</button>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end tab-pane-->
                                            <div class="tab-pane" id="wallet_DASH" role="tabpanel">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="media">
                                                            <img src="/images/logos/dash.png" class="me-2 thumb-md align-self-center rounded-circle" alt="...">
                                                            <div class="media-body align-self-center">
                                                                <h3 class="m-0 font-24 fw-bold">2.99424000 DASH</h3>
                                                                <p class="text-muted font-12 mb-0">$ 277.36605044718</p>
                                                            </div><!--end media body-->
                                                        </div><!--end media-->
                                                    </div><!--end col-->
                                                    <div class="col-auto align-self-center">
                                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-xs me-2"></i>Send</button>
                                                        <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-xs me-2"></i>Request</button>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end tab-pane-->
                                            <div class="tab-pane" id="wallet_LTC" role="tabpanel">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="media">
                                                            <img src="/images/logos/lite.png" class="me-2 thumb-md align-self-center rounded-circle" alt="...">
                                                            <div class="media-body align-self-center">
                                                                <h3 class="m-0 font-24 fw-bold">5.00024000 LTC</h3>
                                                                <p class="text-muted font-12 mb-0">$ 57.36605044718</p>
                                                            </div><!--end media body-->
                                                        </div><!--end media-->
                                                    </div><!--end col-->
                                                    <div class="col-auto align-self-center">
                                                        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-xs me-2"></i>Send</button>
                                                        <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-xs me-2"></i>Request</button>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end tab-pane-->
                                        </div><!--end tab-content-->
                                        <div class="">
                                            <h6 class="font-15 mt-0">Tags :</h6>
                                            <span class="badge badge-soft-primary px-2 py-1 font-11">BTC</span>
                                            <span class="badge badge-soft-primary px-2 py-1 font-11">ETH</span>
                                            <span class="badge badge-soft-primary px-2 py-1 font-11">DASH</span>
                                            <span class="badge badge-soft-primary px-2 py-1 font-11">BNB</span>
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="bg-soft-success p-3 rounded">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-15 mt-0">Sent <span class="badge bg-soft-success ms-1">Confirmed</span></h6>
                                                    <p class="mb-0 text-muted">There are many variations of passages of
                                                        have suffered alteration in some form, Lorem Ipsum available.</p>
                                                </div><!--end col-->
                                                <div class="col-auto">
                                                    <span class="fw-semibold font-16 text-danger">-$2531.00</span>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <img src="/images/small/cry_logo.png" alt="" class="" height="30">
                                            <div class="media-body align-self-center ms-2">
                                                <h6 class="fw-semibold font-16 d-inline-block m-0">Kraken</h6>
                                                <p class="text-muted mb-0 fw-semibold">USA top broker in cryptocurrency exchanges</p>
                                            </div>
                                        </div>
                                        <div class="apexchart-wrapper my-5">
                                            <div id="wallet_kra" class="chart-gutters"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-2">
                                                <h2 class="font-22 fw-bold mb-0">$8172.60</h2>
                                                <h6 class="text-muted m-0 fw-semibold">Total Balance</h6>
                                            </div> <!--end col-->
                                        </div> <!--end row-->
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-soft-primary btn-sm">Open Ac.</button>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class="col-lg-6 col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <img src="/images/small/cry_logo-2.png" alt="" class="" height="30">
                                            <div class="media-body align-self-center ms-2">
                                                <h6 class="fw-semibold font-16 d-inline-block m-0">Coinex</h6>
                                                <p class="text-muted mb-0 fw-semibold">USA top broker in cryptocurrency exchanges</p>
                                            </div>
                                        </div>
                                        <div class="apexchart-wrapper my-5">
                                            <div id="wallet_coi" class="chart-gutters"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-2">
                                                <h2 class="font-22 fw-bold mb-0">$142.00</h2>
                                                <h6 class="text-muted m-0 fw-semibold">Total Balance</h6>
                                            </div> <!--end col-->
                                        </div> <!--end row-->
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-soft-primary btn-sm">Open Ac.</button>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->

                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Transaction History</h4>
                                    </div><!--end col-->
                                    <div class="col-auto d-flex align-self-center">
                                        <div class="input-group me-2">
                                            <input type="text" class="form-control form-control-sm" placeholder="Search" aria-describedby="wallet_search">
                                            <button class="btn btn-outline-light btn-sm" type="button" id="wallet_search">
                                                <i class="las la-search text-secondary"></i>
                                            </button>
                                        </div>
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
    <script src="/pages/crypto-wallet.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>