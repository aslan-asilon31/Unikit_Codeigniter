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
                                    <li class="breadcrumb-item active">Badges</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Badges</h4>
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
                                        <h4 class="card-title">Badge Examples</h4>
                                        <p class="text-muted mb-0">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <span class="badge bg-primary">Primary</span>
                                <span class="badge bg-secondary">Secondary</span>
                                <span class="badge bg-success">Success</span>
                                <span class="badge bg-danger">Danger</span>
                                <span class="badge bg-warning">Warning</span>
                                <span class="badge bg-info">Info</span>
                                <span class="badge bg-light text-dark">Light</span>
                                <span class="badge bg-dark">Dark</span>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Pill Badges Examples</h4>
                                        <p class="mb-0 text-muted">Documentation and examples for badges, our small count and labeling component.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <span class="badge rounded-pill bg-primary">Primary</span>
                                <span class="badge rounded-pill bg-secondary">Secondary</span>
                                <span class="badge rounded-pill bg-success">Success</span>
                                <span class="badge rounded-pill bg-danger">Danger</span>
                                <span class="badge rounded-pill bg-warning">Warning</span>
                                <span class="badge rounded-pill bg-info">Info</span>
                                <span class="badge rounded-pill text-dark bg-light">Light</span>
                                <span class="badge rounded-pill bg-dark">Dark</span>
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
                                        <h4 class="card-title">Links Badges Examples</h4>
                                        <p class="text-muted mb-0">Documentation and examples for badges, our small count and labeling component.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <a href="#" class="badge bg-primary">Primary</a>
                                <a href="#" class="badge bg-secondary">Secondary</a>
                                <a href="#" class="badge bg-success">Success</a>
                                <a href="#" class="badge bg-danger">Danger</a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Links Pill Badges Examples</h4>
                                        <p class="text-muted mb-0">Documentation and examples for badges, our small count and labeling component.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <a href="#" class="badge rounded-pill bg-primary">Primary</a>
                                <a href="#" class="badge rounded-pill bg-secondary">Secondary</a>
                                <a href="#" class="badge rounded-pill bg-success">Success</a>
                                <a href="#" class="badge rounded-pill bg-danger">Danger</a>
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
                                        <h4 class="card-title">Badges Soft Examples</h4>
                                        <p class="text-muted mb-0">Documentation and examples for badges, our small count and labeling component.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <span class="badge badge-soft-primary">Primary</span>
                                <span class="badge badge-soft-secondary">Secondary</span>
                                <span class="badge badge-soft-success">Success</span>
                                <span class="badge badge-soft-danger">Danger</span>
                                <span class="badge badge-soft-warning">Warning</span>
                                <span class="badge badge-soft-info">Info</span>
                                <span class="badge badge-soft-purple">Purple</span>
                                <span class="badge badge-soft-dark">Dark</span>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Pill Badges Soft Examples</h4>
                                        <p class="mb-0 text-muted">Documentation and examples for badges, our small count and labeling component.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <span class="badge rounded-pill badge-soft-primary">Primary</span>
                                <span class="badge rounded-pill badge-soft-secondary">Secondary</span>
                                <span class="badge rounded-pill badge-soft-success">Success</span>
                                <span class="badge rounded-pill badge-soft-danger">Danger</span>
                                <span class="badge rounded-pill badge-soft-warning">Warning</span>
                                <span class="badge rounded-pill badge-soft-info">Info</span>
                                <span class="badge rounded-pill badge-soft-pink">Pink</span>
                                <span class="badge rounded-pill badge-soft-dark">Dark</span>
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
                                        <h4 class="card-title">Outline Badges Examples</h4>
                                        <p class="mb-0 text-muted">Documentation and examples for badges, our small count and labeling component.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <span class="badge badge-outline-primary">Primary</span>
                                <span class="badge badge-outline-secondary">Secondary</span>
                                <span class="badge badge-outline-success">Success</span>
                                <span class="badge badge-outline-danger">Danger</span>
                                <span class="badge badge-outline-warning">Warning</span>
                                <span class="badge badge-outline-info">Info</span>
                                <span class="badge badge-outline-purple">Purple</span>
                                <span class="badge badge-outline-dark">Dark</span>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Outline Pill Badges Examples</h4>
                                        <p class="mb-0 text-muted">Documentation and examples for badges, our small count and labeling component.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <span class="badge rounded-pill badge-outline-primary">Primary</span>
                                <span class="badge rounded-pill badge-outline-secondary">Secondary</span>
                                <span class="badge rounded-pill badge-outline-success">Success</span>
                                <span class="badge rounded-pill badge-outline-danger">Danger</span>
                                <span class="badge rounded-pill badge-outline-warning">Warning</span>
                                <span class="badge rounded-pill badge-outline-info">Info</span>
                                <span class="badge rounded-pill badge-outline-pink">Pink</span>
                                <span class="badge rounded-pill badge-outline-dark">Dark</span>
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
                                        <h4 class="card-title">Buttons Examples</h4>
                                        <p class="mb-0 text-muted">Badges can be used as part of links or buttons to provide a counter.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-sm">
                                    Notifications <span class="badge bg-light text-dark">4</span>
                                </button>
                                <button type="button" class="btn btn-secondary btn-sm">
                                    Notifications <span class="badge bg-light text-dark">4</span>
                                </button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Buttons With Icon Examples</h4>
                                        <p class="mb-0 text-muted">Badges can be used as part of links or buttons with icon to provide a counter.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm me-2 position-relative">
                                    <i class="mdi mdi-bell font-16"></i>
                                    <span class="badge badge-dot online d-flex align-items-center position-absolute end-0 top-50"></span>
                                </button>
                                <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm me-2 position-relative">
                                    <i class="mdi mdi-account font-16"></i>
                                    <span class="badge badge-dot offline d-flex align-items-center position-absolute end-0 top-50"></span>
                                </button>
                                <button type="button" class="btn btn-soft-warning btn-icon-circle btn-icon-circle-sm me-2 position-relative">
                                    <i class="mdi mdi-bell font-16"></i>
                                    <span class="badge badge-dot online d-flex align-items-center position-absolute end-0 top-50"></span>
                                </button>
                                <button type="button" class="btn btn-soft-danger btn-icon-circle btn-icon-circle-sm position-relative">
                                    <i class="mdi mdi-account font-16"></i>
                                    <span class="badge badge-dot offline d-flex align-items-center position-absolute end-0 top-50"></span>
                                </button>
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