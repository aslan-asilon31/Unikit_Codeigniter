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
                                    <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                    <li class="breadcrumb-item active">Apex</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Apex Charts</h4>
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
                                <h4 class="card-title">Basic Line Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_line1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line with Data Labels</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_line2" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Area Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_area1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Area Chart - Datetime X-Axis</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div class="toolbar">
                                        <button class="btn btn-sm btn-outline-light" id="one_month">1M</button>
                                        <button class="btn btn-sm btn-outline-light" id="six_months">6M</button>
                                        <button class="btn btn-sm btn-outline-light active" id="one_year">1Y</button>
                                        <button class="btn btn-sm btn-outline-light" id="ytd">YTD</button>
                                        <button class="btn btn-sm btn-outline-light" id="all">ALL</button>
                                    </div>
                                    <div id="apex_area2" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Column Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_column1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Column Chart With Datalabels</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_column2" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Bar Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_bar" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multiple Y-Axis Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_mixed" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">3D Bubble Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_bubble" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Candlestick Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo">
                                    <div id="apex_candlestick" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Treemap</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo my-0">
                                    <div id="treemap_1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Treemap Color</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo my-0">
                                    <div id="treemap_2" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Polar Area</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo my-0">
                                    <div id="polar_Area_1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Monochrome</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo my-0">
                                    <div id="polar_Area_2" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Pie Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="">
                                    <div id="apex_pie1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gradient Donut Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="">
                                    <div id="apex_pie2" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Patterned Donut Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="">
                                    <div id="apex_pie3" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic RadialBar Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo m-0">
                                    <div id="apex_radialbar1" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multiple RadialBars</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo m-0">
                                    <div id="apex_radialbar2" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stroked Circular Guage</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="chart-demo m-0">
                                    <div id="apex_radialbar3" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sparkline inline</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div id="spark1" class="apex-charts"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="spark2" class="apex-charts"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="spark3" class="apex-charts"></div>
                                    </div>
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
    <script src="/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/pages/irregular-data-series.js"></script>
    <script src="/pages/ohlc.js"></script>
    <script src="/pages/apexcharts.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>