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
                                    <li class="breadcrumb-item active">Images</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Images</h4>
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
                                <h4 class="card-title">Responsive images</h4>
                                <p class="text-muted mb-0">Images in Bootstrap are made responsive with
                                    <code class="highlighter-rouge">.img-fluid</code>. <code class="highlighter-rouge">max-width: 100%;</code> and
                                    <code class="highlighter-rouge">height: auto;</code>
                                    are applied to the image so that it scales with the parent element.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <img src="/images/small/1.jpg" alt="" class="img-fluid">
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Image thumbnails</h4>
                                <p class="text-muted mb-0">You can use <code class="highlighter-rouge">.img-thumbnail</code>
                                    to give an image a rounded.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="media">
                                    <img src="/images/users/user-4.jpg" alt="" class="img-thumbnail">
                                    <div class="media-body align-self-center ms-3 text-truncate">
                                        <h3 class="my-0 fw-bold">Kathryn Money</h3>
                                        <p class="text-muted mb-2 font-13">UI & UX Designer, Japan</p>
                                        <button type="button" class="btn btn-sm btn-de-primary">Massage</button>
                                    </div><!--end media-body-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Image rounded</h4>
                                <p class="text-muted mb-0">You can use <code class="highlighter-rouge">.rounded</code>
                                    to give an image a rounded.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="media">
                                    <img src="/images/users/user-5.jpg" alt="" class="rounded">
                                    <div class="media-body align-self-center ms-3 text-truncate">
                                        <h3 class="my-0 fw-bold">Anthony Stover</h3>
                                        <p class="text-muted mb-2 font-13">UI & UX Designer, USA</p>
                                        <button type="button" class="btn btn-sm btn-de-primary">Massage</button>
                                    </div><!--end media-body-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Image circle</h4>
                                <p class="text-muted mb-0">You can use <code class="highlighter-rouge">.rounded-circle</code>
                                    to give an image a circle.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="media">
                                    <img src="/images/users/user-6.jpg" alt="" class="rounded-circle">
                                    <div class="media-body align-self-center ms-3 text-truncate">
                                        <h3 class="my-0 fw-bold">Catherine Orman</h3>
                                        <p class="text-muted mb-2 font-13">UI & UX Designer, India</p>
                                        <button type="button" class="btn btn-sm btn-de-primary">Massage</button>
                                    </div><!--end media-body-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Aligning images</h4>
                                <p class="text-muted mb-0">You can use <code class="highlighter-rouge">.float-end</code> and <code class="highlighter-rouge">.float-start</code>
                                    to give an image position.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <img src="/images/users/user-4.jpg" alt="" class="rounded float-start">
                                <img src="/images/users/user-10.jpg" alt="" class="rounded float-end">
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Aligning images</h4>
                                <p class="text-muted mb-0">You can use <code class="highlighter-rouge">.d-block .mx-auto</code>
                                    image center.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <img src="/images/users/user-7.jpg" alt="" class="rounded d-block mx-auto">
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>