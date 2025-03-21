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
                                    <li class="breadcrumb-item active">Settings</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Settings</h4>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="met-profile">
                                    <div class="row">
                                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                            <div class="met-profile-main">
                                                <div class="met-profile-main-pic">
                                                    <img src="/images/users/user-4.jpg" alt="" height="110" class="rounded-circle">
                                                    <span class="met-profile_main-pic-change">
                                                        <i class="fas fa-camera"></i>
                                                    </span>
                                                </div>
                                                <div class="met-profile_user-detail">
                                                    <h5 class="met-user-name">Rosa Dodson</h5>
                                                    <p class="mb-0 met-user-name-post">UI/UX Designer, India</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-4 ms-auto align-self-center">
                                            <ul class="list-unstyled personal-detail mb-0">
                                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : +91 23456 78910</li>
                                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                                <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Website </b> :
                                                    <a href="https://mannatthemes.com/" class="font-14 text-primary">https://mannatthemes.com/</a>
                                                </li>
                                            </ul>

                                        </div><!--end col-->
                                        <div class="col-lg-4 align-self-center">
                                            <div class="row">
                                                <div class="col-auto text-end border-end">
                                                    <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
                                                    <p class="mb-0 font-weight-semibold">Facebook</p>
                                                    <h4 class="m-0 font-weight-bold">25k <span class="text-muted font-12 font-weight-normal">Followers</span></h4>
                                                </div><!--end col-->
                                                <div class="col-auto">
                                                    <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
                                                    <p class="mb-0 font-weight-semibold">Twitter</p>
                                                    <h4 class="m-0 font-weight-bold">58k <span class="text-muted font-12 font-weight-normal">Followers</span></h4>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end f_profile-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <label class="form-label" for="setFullName">Full Name</label>
                                    <input type="text" class="form-control" id="setFullName" placeholder="Full Name">
                                    <label class="form-label mt-2" for="setEmail">Email address</label>
                                    <input type="email" class="form-control" id="setEmail" placeholder="Enter email">
                                    <label class="form-label mt-2" for="setPassword">Password</label>
                                    <input type="password" class="form-control" id="setPassword" placeholder="Password">
                                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                                </form> <!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <label class="form-label" for="setLinkAc">Linked Account</label>
                                    <select class="form-select" id="setLinkAc">
                                        <option>PayPal</option>
                                        <option>VISA</option>
                                        <option>ICICI</option>
                                        <option>HDFC</option>
                                    </select>
                                    <label class="form-label mt-2" for="setCurrency">Collect Currency</label>
                                    <select class="form-select" id="setCurrency">
                                        <option>US Dollar</option>
                                        <option>Pounds</option>
                                        <option>Euro</option>
                                        <option>Yen</option>
                                    </select>
                                    <label class="form-label mt-2" for="setChangePassword">Change Wallet Password</label>
                                    <input type="password" class="form-control" id="setChangePassword" placeholder="Password">
                                    <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
                                </form> <!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Notification Setting</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="ICOnotify">
                                        <label class="form-check-label" for="ICOnotify">Get notification, New coin ICO in crypto market</label>
                                    </div>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" id="notyfySound">
                                        <label class="form-check-label" for="notyfySound">Notification with sound</label>
                                    </div>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" id="notifyF_friends">
                                        <label class="form-check-label" for="notifyF_friends">Get notification, Only my facebook's friends</label>
                                    </div>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" id="autoLockWallet" checked>
                                        <label class="form-check-label" for="autoLockWallet">Auto lock my wallet</label>
                                    </div>
                                </form> <!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->


                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-primary rounded-circle not-hover">
                                        <i data-feather="smartphone" class="align-self-center"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2">
                                        <h5 class="mt-0 mb-1">SMS Auth</h5>
                                        <p class="text-muted mb-2">Used for withdrawals and security modifications</p>
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                            <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                            <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                            <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                        </div>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-success rounded-circle not-hover">
                                        <i data-feather="chrome" class="align-self-center"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2">
                                        <h5 class="mt-0 mb-1">Google Auth</h5>
                                        <p class="text-muted mb-2">Used for withdrawals and security modifications</p>
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                            <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                            <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                            <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                        </div>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="d-flex justify-content-center align-items-center align-self-center thumb-md bg-soft-danger rounded-circle not-hover">
                                        <i data-feather="database" class="align-self-center"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2">
                                        <h5 class="mt-0 mb-1">API</h5>
                                        <p class="text-muted mb-2">Used for withdrawals and security modifications</p>
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio1" id="Enable1" autocomplete="off" checked>
                                            <label class="btn btn-outline-secondary btn-sm" for="Enable1">Enable</label>
                                            <input type="radio" class="btn-check" name="btnradio1" id="Enable2" autocomplete="off">
                                            <label class="btn btn-outline-secondary btn-sm" for="Enable2">Disable</label>
                                        </div>
                                    </div><!--end media body-->
                                </div><!--end media-->
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