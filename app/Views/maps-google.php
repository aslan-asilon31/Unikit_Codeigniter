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
                                    <li class="breadcrumb-item"><a href="#">Maps</a></li>
                                    <li class="breadcrumb-item active">Google Maps</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Google Maps</h4>
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
                                <h4 class="card-title">Default Map</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="gmaps-basic" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Map With Marker</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="gmaps-marker" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Overlays Map</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="gmaps-overlay" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Map Types</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="gmaps-types" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Layer Map</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div id="gmaps-layers" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
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
    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?"></script>
    <!-- Gmaps file -->
    <script src="/libs/gmaps/gmaps.min.js"></script>
    <!-- demo codes -->
    <script src="/pages/gmaps.init.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>