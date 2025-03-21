<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' =>  'Unikit')) ?>

    <link href="/libs/tui-chart/tui-chart.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                    <li class="breadcrumb-item active">Toast</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Toast Charts</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bar charts</h4>

                                <div id="bar-charts" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Column charts</h4>

                                <div id="column-charts" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Line charts</h4>

                                <div id="line-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Area charts</h4>

                                <div id="area-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bubble charts</h4>

                                <div id="bubble-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Scatter charts</h4>

                                <div id="scatter-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Pie charts</h4>

                                <div id="pie-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Donut pie charts</h4>

                                <div id="donut-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Heatmap charts</h4>

                                <div id="heatmap-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Treemap charts</h4>

                                <div id="treemap-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Map charts</h4>

                                <div id="map-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Boxplot charts</h4>

                                <div id="boxplot-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bullet charts</h4>

                                <div id="bullet-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Radial charts</h4>

                                <div id="radial-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
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
    <script src="/libs/tui-chart/tui-chart-all.min.js"></script>
    <script src="/libs/tui-chart/maps/usa.js"></script>
    <script src="/pages/toast-ui.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>