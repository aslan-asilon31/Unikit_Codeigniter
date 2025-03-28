<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' =>  'Unikit')) ?>

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
                                    <li class="breadcrumb-item"><a href="#">Unikit</a></li>
                                    <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                    <li class="breadcrumb-item active">Spinners</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Spinners</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Border spinner</h4>
                                <p class="text-muted mb-0">Use the border spinners for a lightweight loading indicator.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Growing spinner</h4>
                                <p class="text-muted mb-0">If you don’t fancy a border spinner,
                                    switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="spinner-grow text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Colors</h4>
                                <p class="text-muted mb-0">You can use any
                                    of our text color utilities on the standard spinner.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="spinner-border text-primary" role="status"></div>
                                <div class="spinner-border text-secondary" role="status"></div>
                                <div class="spinner-border text-success" role="status"></div>
                                <div class="spinner-border text-danger" role="status"></div>
                                <div class="spinner-border text-warning" role="status"></div>
                                <div class="spinner-border text-info" role="status"></div>
                                <div class="spinner-border text-purple" role="status"></div>
                                <div class="spinner-border text-light" role="status"></div>
                                <div class="spinner-border text-dark" role="status"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Color Growing spinner</h4>
                                <p class="text-muted mb-0">Here it is in blue, along with the supported variants.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="spinner-grow text-primary" role="status"></div>
                                <div class="spinner-grow text-secondary" role="status"></div>
                                <div class="spinner-grow text-success" role="status"></div>
                                <div class="spinner-grow text-danger" role="status"></div>
                                <div class="spinner-grow text-warning" role="status"></div>
                                <div class="spinner-grow text-info" role="status"></div>
                                <div class="spinner-grow text-purple" role="status"></div>
                                <div class="spinner-grow text-light" role="status"></div>
                                <div class="spinner-grow text-dark" role="status"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alignment</h4>
                                <p class="text-muted mb-0">Use flexbox utilities, float utilities, or text alignment utilities
                                    to place spinners exactly where you need them in any situation.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div class="spinner-border text-primary" role="status"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Placement</h4>
                                <p class="text-muted mb-0">Use <a href="#">flexbox utilities</a>,
                                    <a href="#">float utilities</a>, or <a href="#">text alignment</a>
                                    utilities to place spinners exactly where you need them in any situation.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <strong>Loading...</strong>
                                    <div class="spinner-border text-primary ms-auto" role="status" aria-hidden="true"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Size</h4>
                                <p class="text-muted mb-0">Add <code class="highlighter-rouge">.spinner-border-sm</code> and
                                    <code class="highlighter-rouge">.spinner-grow-sm .thumb-md</code>
                                    to make a smaller spinner that can quickly be used within other components.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="spinner-border thumb-md text-primary" role="status"></div>
                                        <div class="spinner-grow thumb-md text-secondary" role="status"></div>
                                    </div><!-- end col -->

                                    <div class="col-lg-4">
                                        <div class="spinner-border text-primary" role="status"></div>
                                        <div class="spinner-border text-secondary" role="status"></div>
                                    </div><!-- end col -->

                                    <div class="col-lg-4">
                                        <div class="spinner-border spinner-border-sm" role="status"></div>
                                        <div class="spinner-grow spinner-grow-sm" role="status"></div>
                                    </div><!-- end col -->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buttons spinners</h4>
                                <p class="text-muted mb-0">Use spinners within buttons to indicate an action is currently processing or taking place.
                                    You may also swap the text out of the spinner element and utilize button text as needed.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div><!-- end col -->
                                    <div class="col-lg-6">
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span>
                                        </button>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                            Loading...
                                        </button>
                                    </div><!-- end col -->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom spinners</h4>
                                <p class="text-muted mb-0">you can use custom border spinner, only add <code>.spinner-border-custom-1</code> /2 /3.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="spinner-border spinner-border-custom-1 text-primary" role="status"></div>
                                <div class="spinner-border spinner-border-custom-2 text-secondary" role="status"></div>
                                <div class="spinner-border spinner-border-custom-3 border-success" role="status"></div>
                                <div class="spinner-border spinner-border-custom-4 text-warning" role="status"></div>
                                <div class="spinner-border spinner-border-custom-5 border-info" role="status"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom Icon Spinners</h4>
                                <p class="text-muted mb-0">You can use custom icon spinners</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <i class="la la-spinner text-primary la-spin progress-icon-spin"></i>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <i class="la la-refresh text-secondary la-spin progress-icon-spin"></i>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <i class="la la-sun-o text-warning la-spin progress-icon-spin"></i>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <i class="la la-cog la-spin progress-icon-spin"></i>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>