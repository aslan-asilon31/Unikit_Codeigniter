<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' =>  'Unikit')) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-tab-menu -->
    <?= $this->include('partials/left-sidebar') ?>
    <!-- end leftbar-tab-menu-->

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
                                    <li class="breadcrumb-item"><a href="#">Unikit</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Projects</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Teams</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Teams</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="m-0 font-14">Here the list of all available teams. <span class="badge badge-soft-pink">6</span></h5>
                    </div><!--end col-->

                    <div class="col-lg-6 text-end">
                        <button type="button" class="btn btn-primary btn-sm mb-3">Create Card</button>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card team-card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Edit Card</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <div class="img-group">
                                        <a class="user-avatar me-1" href="#">
                                            <img src="/images/users/user-10.jpg" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                    </div>
                                    <div class="media-body ms-2 align-self-center">
                                        <h5 class="m-0">Marnie Flowers</h5>
                                        <p class="text-muted font-12 mb-0">Team Leader</p>
                                    </div>
                                </div>
                                <h4 class="m-0 mt-3 font-13 mb-0 fw-bold">UI/UX Design Team</h4>
                                <p class="text-muted mb-0 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply</p>
                                <div class="mt-3 d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar" href="#">
                                            <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-6.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a href="" class="user-avatar">
                                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                                        </a>
                                    </div>
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-xs btn-light btn-round">View Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div>
                                </div>
                                <hr class="hr-dashed my-3">
                                <div class="media align-items-center">
                                    <img src="/images/small/project-2.jpg" alt="" class="rounded-circle thumb-sm">
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Banking</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">50/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">55% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card team-card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Edit Card</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <div class="img-group">
                                        <a class="user-avatar me-1" href="#">
                                            <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                    </div>
                                    <div class="media-body ms-2 align-self-center">
                                        <h5 class="m-0">Willie Miller</h5>
                                        <p class="text-muted font-12 mb-0">Team Leader</p>
                                    </div>
                                </div>
                                <h4 class="m-0 mt-3 font-13 mb-0 fw-bold">Web Design Team</h4>
                                <p class="text-muted mb-0 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply</p>
                                <div class="mt-3 d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar" href="#">
                                            <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-6.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a href="" class="user-avatar">
                                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                                        </a>
                                    </div>
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-xs btn-light btn-round">View Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div>
                                </div>
                                <hr class="hr-dashed my-3">
                                <div class="media align-items-center">
                                    <img src="/images/small/project-1.jpg" alt="" class="rounded-circle thumb-sm">
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Payment App</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">50/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">55% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card team-card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Edit Card</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <div class="img-group">
                                        <a class="user-avatar me-1" href="#">
                                            <img src="/images/users/user-9.jpg" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                    </div>
                                    <div class="media-body ms-2 align-self-center">
                                        <h5 class="m-0">Jason Haston</h5>
                                        <p class="text-muted font-12 mb-0">Team Leader</p>
                                    </div>
                                </div>
                                <h4 class="m-0 mt-3 font-13 mb-0 fw-bold">Frontend Developer Team</h4>
                                <p class="text-muted mb-0 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply</p>
                                <div class="mt-3 d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar" href="#">
                                            <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-6.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a href="" class="user-avatar">
                                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                                        </a>
                                    </div>
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-xs btn-light btn-round">View Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div>
                                </div>
                                <hr class="hr-dashed my-3">
                                <div class="media align-items-center">
                                    <img src="/images/small/project-3.jpg" alt="" class="rounded-circle thumb-sm">
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Transfer Money</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">50/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">55% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-pink" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card team-card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Edit Card</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <div class="img-group">
                                        <a class="user-avatar me-1" href="#">
                                            <img src="/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                    </div>
                                    <div class="media-body ms-2 align-self-center">
                                        <h5 class="m-0">Marnie Flowers</h5>
                                        <p class="text-muted font-12 mb-0">Team Leader</p>
                                    </div>
                                </div>
                                <h4 class="m-0 mt-3 font-13 mb-0 fw-bold">UI/UX Design Team</h4>
                                <p class="text-muted mb-0 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply</p>
                                <div class="mt-3 d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar" href="#">
                                            <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-6.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a href="" class="user-avatar">
                                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                                        </a>
                                    </div>
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-xs btn-light btn-round">View Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div>
                                </div>
                                <hr class="hr-dashed my-3">
                                <div class="media align-items-center">
                                    <img src="/images/small/project-3.jpg" alt="" class="rounded-circle thumb-sm">
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Banking</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">50/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">55% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card team-card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Edit Card</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <div class="img-group">
                                        <a class="user-avatar me-1" href="#">
                                            <img src="/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                    </div>
                                    <div class="media-body ms-2 align-self-center">
                                        <h5 class="m-0">Willie Miller</h5>
                                        <p class="text-muted font-12 mb-0">Team Leader</p>
                                    </div>
                                </div>
                                <h4 class="m-0 mt-3 font-13 mb-0 fw-bold">Web Design Team</h4>
                                <p class="text-muted mb-0 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply</p>
                                <div class="mt-3 d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar" href="#">
                                            <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-6.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a href="" class="user-avatar">
                                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                                        </a>
                                    </div>
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-xs btn-light btn-round">View Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div>
                                </div>
                                <hr class="hr-dashed my-3">
                                <div class="media align-items-center">
                                    <img src="/images/small/project-2.jpg" alt="" class="rounded-circle thumb-sm">
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Payment App</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">50/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">55% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card team-card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle" id="dLabel1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v font-24 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Edit Card</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media align-items-center">
                                    <div class="img-group">
                                        <a class="user-avatar me-1" href="#">
                                            <img src="/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-md">
                                            <span class="avatar-badge online"></span>
                                        </a>
                                    </div>
                                    <div class="media-body ms-2 align-self-center">
                                        <h5 class="m-0">Jason Haston</h5>
                                        <p class="text-muted font-12 mb-0">Team Leader</p>
                                    </div>
                                </div>
                                <h4 class="m-0 mt-3 font-13 mb-0 fw-bold">Frontend Developer Team</h4>
                                <p class="text-muted mb-0 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply</p>
                                <div class="mt-3 d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar" href="#">
                                            <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a class="user-avatar ms-n3" href="#">
                                            <img src="/images/users/user-6.jpg" alt="user" class="thumb-xs rounded-circle">
                                        </a>
                                        <a href="" class="user-avatar">
                                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                                        </a>
                                    </div>
                                    <div class="align-self-center">
                                        <button type="button" class="btn btn-xs btn-light btn-round">View Details <i class="mdi mdi-arrow-right"></i></button>
                                    </div>
                                </div>
                                <hr class="hr-dashed my-3">
                                <div class="media align-items-center">
                                    <img src="/images/small/project-1.jpg" alt="" class="rounded-circle thumb-sm">
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Transfer Money</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">50/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">55% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>