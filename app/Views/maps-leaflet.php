<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' =>  'Unikit')) ?>

    <link href="/libs/leaflet/leaflet.css" rel="stylesheet">

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
                                    <li class="breadcrumb-item"><a href="#">Maps</a></li>
                                    <li class="breadcrumb-item active">Leaflet</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Leaflet</h4>
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
                                <h4 class="card-title">Leaflet Quick Start Guide</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="Leaf_default" class="" style="height: 400px"></div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bounds Extend</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="Bounds_Extend" class="" style="height: 400px"></div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vector Bounds</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="Vector_bounds" class="" style="height: 400px"></div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Moov Canvas</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="Moov_Canvas" class="" style="height: 400px"></div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Array Map</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="Array_Map" class="" style="height: 400px"></div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Vector Map</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="V_Simple" class="" style="height: 400px"></div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
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
    <script src="/libs/leaflet/leaflet.js"></script>
    <script src="/pages/leaflet-map.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>