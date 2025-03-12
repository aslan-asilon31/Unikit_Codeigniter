<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' =>  'Unikit')) ?>

    <link href="/libs/tabulator-tables/css/tabulator_bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Editable</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Editable</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Editable Data </h4>
                                <p class="text-muted mb-0">Using the editable setting on each column, you can make a user editable table.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="mb-2">
                                        <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-add">Add New Row</button>
                                        <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-delete">Remove Row</button>
                                        <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-update">Update First Row Name</button>
                                    </div>
                                    <div id="editable"></div>
                                </div>
                            </div>
                        </div>
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
    <script src="/libs/tabulator-tables/js/tabulator.min.js"></script>
    <script src="/pages/editable.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>