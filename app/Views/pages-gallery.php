<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' => 'Unikit')) ?>

    <link href="/libs/tobii/css/tobii.min.css" rel="stylesheet" type="text/css"/>

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
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Gallery</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Gallery</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">

                <div class="col-md-6 col-lg-auto filters-group-wrap">
                    <div class="filters-group mb-3">
                        <p class="filter-label mb-0">Filter</p>
                        <div class="btn-group filter-options">
                            <button class="btn btn-primary" data-group="fashion">Fashion</button>
                            <button class="btn btn-primary" data-group="animal">Animal</button>
                            <button class="btn btn-primary" data-group="food">Food</button>
                        </div>
                    </div>
                </div>
            </div>


            <div id="grid" class="row">
                <div class="col-md-4 col-lg-3 picture-item" data-groups='["fashion"]'>
                    <a href="/images/small/img-1.jpg" class="lightbox">
                        <img src="/images/small/img-1.jpg" alt="" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["food"]'>
                    <a href="/images/small/img-2.jpg" class="lightbox">
                        <img src="/images/small/img-2.jpg" alt="" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 picture-item" data-groups='["animal"]'>
                    <a href="/images/small/img-3.jpg" class="lightbox">
                        <img src="/images/small/img-3.jpg" alt="" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                    <a href="/images/small/img-4.jpg" class="lightbox">
                        <img src="/images/small/img-4.jpg" alt="" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 picture-item" data-groups='["food", "animal"]'>
                    <a href="/images/small/img-5.jpg" class="lightbox">
                        <img src="/images/small/img-5.jpg" alt="" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["fashion"]'>
                    <a href="/images/small/img-6.jpg" class="lightbox">
                        <img src="/images/small/img-6.jpg" alt="" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                    <a href="/images/small/img-2.jpg" class="lightbox">
                        <img src="/images/small/img-2.jpg" alt="" class="img-fluid"/>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["fashion"]'>
                    <a href="/images/small/img-1.jpg" class="lightbox">
                        <img src="/images/small/img-1.jpg" alt="" class="img-fluid"/>
                    </a>
                </div>
            </div>
        </div>

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
<script src="/libs/shufflejs/shuffle.min.js"></script>
<script src="/libs/tobii/js/tobii.min.js"></script>
<script src="/pages/gallery.init.js"></script>
<!-- App js -->
<script src="/js/app.js"></script>

</body>

</html>