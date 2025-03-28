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
                                    <li class="breadcrumb-item active">Chartjs</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Chartjs Charts</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <canvas id="lineChart" width="300" height="300"></canvas>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Donut Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <canvas id="doughnut" height="300"></canvas>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <canvas id="bar" height="300"></canvas>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Polar Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <canvas id="polarArea" height="300"> </canvas>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pie Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <canvas id="pie" height="300"></canvas>
                            </div><!--end card-body-->
                        </div> <!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Radar Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <canvas id="radar" height="300"></canvas>
                            </div><!--end card-body-->
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
    <script src="/libs/chart.js/chart.umd.js"></script>
    <script src="/pages/chartjs.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>
</body>

</html>