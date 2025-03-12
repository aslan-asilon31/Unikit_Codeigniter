<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Unikit")) ?>

    <link href="/libs/huebee/huebee.min.css" rel="stylesheet" type="text/css"/>
    <link href="/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css"/>

    <?= $this->include('partials/head-css') ?>
</head>


<body id="body" class="dark-sidebar">
<!-- leftbar-menu -->
<?= $this->include('partials/left-sidebar') ?>
<!-- end leftbar-menu-->

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
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Form Advanced</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Form Advanced</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Huebee Color</h4>
                            <p class="text-muted mb-0">Huebee is a JavaScript library for creating user-centric color
                                pickers.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control color-input" value="#228"/>
                                </div><!-- end col -->
                                <div class="col-md-4">
                                    <input class="form-control " value="#024" data-huebee/>
                                </div> <!-- end col -->
                                <div class="col-md-4">
                                    <input class="form-control " value="#f7f8f9"
                                           data-huebee='{ "setBGColor": true, "saturations": 2 }'/>
                                </div> <!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom Touch Spin</h4>
                            <p class="text-muted mb-0">Custom Touch Spin only HTML & JavaScript.</p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="input-group qty-icons w-25">
                                <button class="btn btn-primary"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-
                                </button>
                                <input type="number" class="form-control" min="0" name="quantity" value="0"
                                       style="pointer-events: none;">
                                <button class="btn btn-primary"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+
                                </button>
                            </div>
                        </div><!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Vanilla JS Datepicker</h4>
                            <p class="text-muted mb-0">A vanilla JavaScript remake of bootstrap-datepicker for Bulma and
                                other CSS frameworks.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mb-3">Default Datepicker</label>
                                    <input class="form-control mb-3" type="text" id="basic-datepicker">
                                    <label class="mb-3">Date Range Picker</label>
                                    <input type="text" class="form-control" id="datetime-datepicker"/>
                                </div><!-- end col -->
                                <div class="col-md-6">
                                    <label class="mb-3">Inline Datepicker</label>
                                    <input type="text" class="form-control" id="inline-datepicker"/>
                                </div> <!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Vanilla JS Datepicker</h4>
                            <p class="text-muted mb-0">A vanilla JavaScript remake of bootstrap-datepicker for Bulma and
                                other CSS frameworks.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="mb-2">RegExp (Russian postal code) <span
                                            class="desc ms-2 font-11 text-muted">/^[1-6]\d{0,5}$/</span></label>
                                <input id="regexp-mask" type="text" value="" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="mb-2">Type here against mask <span class="desc ms-2 font-11 text-muted">+{7}(000)000-00-00</span></label>
                                <input id="start-phone-mask" type="text" value="" class="form-control">
                                <div class="desc font-11 text-muted">unmasked: <span
                                            id="start-phone-unmasked"></span><span id="start-phone-complete"
                                                                                   class="example__complete"></span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="mb-2">Mask in overwrite and autofix modes</label>
                                <input id="date-overwrite-mask" type="text" value="" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label class="mb-2">Type to uppercase</label>
                                <input id="uppercase-mask" type="text" value="" class="form-control">
                            </div>

                            <div>
                                <label class="mb-2">Date and time</label>
                                <input id="moment-mask" type="text" value="" class="form-control">
                                <div class="desc font-11 text-muted">date: <span id="moment-value"></span></div>
                            </div>
                        </div><!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->

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
<script src="/libs/huebee/huebee.pkgd.min.js"></script>
<script src="/libs/flatpickr/flatpickr.min.js"></script>
<script src="/libs/imask/imask.min.js"></script>

<script src="/pages/forms-advanced.js"></script>
<!-- App js -->
<script src="/js/app.js"></script>

</body>
<!--end body-->

</html>