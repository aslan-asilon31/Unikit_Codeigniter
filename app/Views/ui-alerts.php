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
                                    <li class="breadcrumb-item active">Alerts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Alerts</h4>
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
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Alerts Examples</h4>
                                        <p class="text-muted mb-0">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="alert alert-primary border-0" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message. 😀
                                </div>
                                <div class="alert alert-light border-0" role="alert">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                </div>
                                <div class="alert alert-success border-0" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-danger border-0" role="alert">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                </div>
                                <div class="alert alert-warning border-0" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-info border-0" role="alert">
                                    A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Alerts Outline Examples</h4>
                                        <p class="text-muted mb-0">You can see this in action with a live demo:</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="alert alert-outline-primary" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-outline-secondary" role="alert">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                </div>
                                <div class="alert alert-outline-success" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-outline-danger" role="alert">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                </div>
                                <div class="alert alert-outline-warning" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                </div>
                                <div class="alert alert-outline-info mb-0" role="alert">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again. 🎉
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Dismissing Examples</h4>
                                        <p class="text-muted mb-0">You can see this in action with a live demo:</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="alert alert-primary alert-dismissible fade show border-0 b-round" role="alert">
                                    <strong>Well done!</strong> 👍 You successfully read this important alert message.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-light alert-dismissible fade show border-0" role="alert">
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Dismissing Outline Examples</h4>
                                        <p class="text-muted mb-0">You can see this in action with a live demo:</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="alert alert-outline-primary b-round alert-dismissible fade show" role="alert">
                                    <strong>Well done!</strong> You successfully read this important alert message.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert icon-custom-alert alert-outline-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all alert-icon"></i>
                                    <div class="alert-text">
                                        <strong>Well done!</strong> You successfully read this important alert message.
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Custom Alerts Examples</h4>
                                        <p class="text-muted mb-0">You can see this in action with a live demo:</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="alert custom-alert custom-alert-primary icon-custom-alert shadow-sm fade show" role="alert">
                                    <i class="mdi mdi-alert-outline alert-icon text-primary align-self-center font-30 me-3"></i>
                                    <div class="alert-text my-1">
                                        <h5 class="mb-1 fw-bold mt-0">Primary</h5>
                                        <span>Oh snap! Change a few things up and try submitting again.</span>
                                    </div>
                                    <div class="alert-close">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="alert custom-alert custom-alert-danger icon-custom-alert shadow-sm fade show" role="alert">
                                    <i class="la la-skull-crossbones alert-icon text-danger align-self-center font-30 me-3"></i>
                                    <div class="alert-text my-1">
                                        <h5 class="mb-1 fw-bold mt-0">Danger</h5>
                                        <span>Oh snap! Change a few things up and try submitting again.</span>
                                    </div>
                                    <div class="alert-close">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Additional content</h4>
                                        <p class="text-muted mb-0">Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="alert alert-light mb-0" role="alert">
                                    <h4 class="alert-heading font-18">Well done!</h4>
                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>