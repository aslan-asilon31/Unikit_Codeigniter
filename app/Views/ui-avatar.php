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
                                    <li class="breadcrumb-item active">Avatar</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Avatar</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Avatar</h4>
                                        <p class="text-muted mb-0">Single user example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <div class="media">
                                            <a class="" href="#">
                                                <img src="/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-sm">
                                            </a>
                                            <div class="media-body align-self-center ms-2">
                                                <p class="font-14 font-weight-semibold mb-0">Charles Smith</p>
                                                <p class="mb-0 font-12 text-muted">Charles@example.com</p>
                                            </div>
                                        </div><!--end media-->
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <div class="button-items">
                                            <button type="button" class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i class="fab fa-facebook-f"></i></button>
                                            <button type="button" class="btn btn-outline-info btn-icon-circle btn-icon-circle-sm"><i class="fab fa-twitter"></i></button>
                                            <button type="button" class="btn btn-outline-pink btn-icon-circle btn-icon-circle-sm"><i class="fab fa-dribbble"></i></button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Group Avatar</h4>
                                        <p class="text-muted mb-0">Group user example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <div class="img-group">
                                            <a class="user-avatar" href="#">
                                                <img src="/images/users/user-8.jpg" alt="user" class="thumb-sm rounded-circle">
                                            </a>
                                            <a class="user-avatar ms-n3" href="#">
                                                <img src="/images/users/user-5.jpg" alt="user" class="thumb-sm rounded-circle">
                                            </a>
                                            <a class="user-avatar ms-n3" href="#">
                                                <img src="/images/users/user-4.jpg" alt="user" class="thumb-sm rounded-circle">
                                            </a>
                                            <a class="user-avatar ms-n3" href="#">
                                                <img src="/images/users/user-6.jpg" alt="user" class="thumb-sm rounded-circle">
                                            </a>
                                            <a href="" class="avatar-box thumb-sm align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-weight-normal"><i class="las la-plus"></i></span>
                                            </a>
                                        </div><!--end img-group-->
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <button type="button" class="btn btn-outline-light btn-sm">Message</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Avatar With Badge</h4>
                                        <p class="text-muted mb-0">Single user with badge example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <div class="img-group">
                                            <a class="user-avatar me-1" href="#">
                                                <img src="/images/users/user-10.jpg" alt="user" class="rounded-circle thumb-sm">
                                                <span class="avatar-badge online"></span>
                                            </a>
                                            <a class="user-avatar me-1" href="#">
                                                <img src="/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-sm">
                                                <span class="avatar-badge offline"></span>
                                            </a>
                                            <a class="user-avatar me-1" href="#">
                                                <img src="/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-sm">
                                                <span class="avatar-badge online"></span>
                                            </a>
                                        </div><!--end img-group-->
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-bs-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="more-horizontal" class="align-self-center text-muted icon-xs"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">New Group</a>
                                                <a class="dropdown-item" href="#">Settings</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
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
                                        <h4 class="card-title">Avatar Size</h4>
                                        <p class="text-muted mb-0">Avatar size rounded-circle example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-10.jpg" alt="user" class="thumb-xl rounded-circle">
                                </a>
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-10.jpg" alt="user" class="thumb-lg rounded-circle">
                                </a>
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-10.jpg" alt="user" class="thumb-md rounded-circle">
                                </a>
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-10.jpg" alt="user" class="thumb-sm rounded-circle">
                                </a>
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-10.jpg" alt="user" class="thumb-xs rounded-circle">
                                </a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Avatar Size</h4>
                                        <p class="text-muted mb-0">Avatar size square example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-5.jpg" alt="user" class="thumb-xl rounded">
                                </a>
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-5.jpg" alt="user" class="thumb-lg rounded">
                                </a>
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-5.jpg" alt="user" class="thumb-md rounded">
                                </a>
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-5.jpg" alt="user" class="thumb-sm rounded">
                                </a>
                                <a class="user-avatar me-2" href="#">
                                    <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded">
                                </a>
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
                                        <h4 class="card-title">Text Avatar</h4>
                                        <p class="text-muted mb-0">Round Shape avatar text in soft color example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <span class="thumb-xl justify-content-center d-flex align-items-center bg-soft-success rounded-circle me-2">MT</span>
                                    <span class="thumb-lg justify-content-center d-flex align-items-center bg-soft-pink rounded-circle me-2">MT</span>
                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-soft-purple rounded-circle me-2">MT</span>
                                    <span class="thumb-sm justify-content-center d-flex align-items-center bg-soft-warning rounded-circle me-2">MT</span>
                                    <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle me-2">MT</span>
                                </div><!--end /div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Text Avatar</h4>
                                        <p class="text-muted mb-0">Square Shape avatar text in soft color example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <span class="thumb-xl justify-content-center d-flex align-items-center bg-soft-success rounded me-2">MT</span>
                                    <span class="thumb-lg justify-content-center d-flex align-items-center bg-soft-pink rounded me-2">MT</span>
                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-soft-purple rounded me-2">MT</span>
                                    <span class="thumb-sm justify-content-center d-flex align-items-center bg-soft-warning rounded me-2">MT</span>
                                    <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded me-2">MT</span>
                                </div><!--end /div-->
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
                                        <h4 class="card-title">Icon Avatar</h4>
                                        <p class="text-muted mb-0">Round Shape avatar icon in theme color example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <span class="thumb-xl justify-content-center d-flex align-items-center bg-primary rounded-circle me-2">
                                        <i class="far fa-grin-alt text-white"></i>
                                    </span>
                                    <span class="thumb-lg justify-content-center d-flex align-items-center bg-pink rounded-circle me-2">
                                        <i class="far fa-user text-white"></i>
                                    </span>
                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-purple rounded-circle me-2">
                                        <i class="fab fa-mailchimp text-white"></i>
                                    </span>
                                    <span class="thumb-sm justify-content-center d-flex align-items-center bg-warning rounded-circle me-2">
                                        <i class="fas fa-user text-white"></i>
                                    </span>
                                    <span class="thumb-xs justify-content-center d-flex align-items-center bg-info rounded-circle me-2">
                                        <i class="fas fa-smile text-white"></i>
                                    </span>
                                </div><!--end-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Icon Avatar</h4>
                                        <p class="text-muted mb-0">Square Shape avatar icon in theme color example</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <span class="thumb-xl justify-content-center d-flex align-items-center bg-primary rounded me-2">
                                        <i class="far fa-grin-alt text-white"></i>
                                    </span>
                                    <span class="thumb-lg justify-content-center d-flex align-items-center bg-pink rounded me-2">
                                        <i class="far fa-user text-white"></i>
                                    </span>
                                    <span class="thumb-md justify-content-center d-flex align-items-center bg-purple rounded me-2">
                                        <i class="fab fa-mailchimp text-white"></i>
                                    </span>
                                    <span class="thumb-sm justify-content-center d-flex align-items-center bg-warning rounded me-2">
                                        <i class="fas fa-user text-white"></i>
                                    </span>
                                    <span class="thumb-xs justify-content-center d-flex align-items-center bg-info rounded me-2">
                                        <i class="fas fa-smile text-white"></i>
                                    </span>
                                </div><!--end-->
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