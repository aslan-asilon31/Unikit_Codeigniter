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
                                    <li class="breadcrumb-item active">Progress</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Progress</h4>
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
                                <h4 class="card-title">Basic Example</h4>
                                <p class="text-muted mb-0">Use background utility classes to
                                    change the appearance of individual progress bars.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width:20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width:30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Striped and Animated Stripes Example</h4>
                                <p class="text-muted mb-0">Add <code>.progress-bar-animated</code> to .progress-bar to animate the stripes right to left via CSS3 animations.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="progress mb-3">
                                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width:30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-gray progress-bar-striped progress-bar-animated" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Labels and Multiple bars Example</h4>
                                <p class="text-muted mb-0">Add labels to your progress bars by placing text within the <code class="highlighter-rouge">.progress-bar</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-secondary progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                    <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Height And Background Color Example</h4>
                                <p class="text-muted mb-0">We only set a <code class="highlighter-rouge">height</code>
                                    value on the <code class="highlighter-rouge">.progress-bar</code>, And add background color class.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="progress mb-3" style="height: 3px;">
                                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3"">
                                    <div class=" progress-bar progress-bar-striped" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress" style="height: 14px;">
                                <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Vertical Example</h4>
                            <p class="text-muted mb-0">Add <code class="highlighter-rouge">.progress-vertical</code>
                                to any <code class="highlighter-rouge">.progress-bar-animated</code> to apply a
                                stripe via CSS gradient over the progress bar’s background color.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class="progress progress-vertical my-3" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress progress-vertical my-3" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress progress-vertical my-3" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="height: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-4  d-flex justify-content-center">
                                    <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="height: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-4 d-flex justify-content-center">
                                    <div class="progress progress-vertical-bottom my-3" style="width: 30px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="height: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="progress progress-vertical-bottom my-3" style="width: 30px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
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