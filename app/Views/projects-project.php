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
                                    <li class="breadcrumb-item active">Projects</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Projects</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h5 class="mt-0">Here the list of all continu projects. <span class="badge badge-pink">6</span></h5>
                            </li>
                        </ul>
                    </div><!--end col-->

                    <div class="col-lg-6 text-end">
                        <div class="text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <div class="input-group">
                                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control form-control-sm" placeholder="Search">
                                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-filter"></i></button>
                                </li>
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-primary btn-sm">Add New Project</button>
                                </li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media mb-3">
                                    <img src="/images/small/project-2.jpg" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-2">
                                        <h4 class="m-0 fw-bold text-dark font-18">Banking</h4>
                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                    </div><!--end media-body-->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-semibold">Start : <span class="text-muted font-weight-normal"> 15 Nov 2021</span></h6>
                                    <h6 class="fw-semibold">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2022</span></h6>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-16 fw-bold m-0">$56,800</h5>
                                    <p class="mb-0 text-muted fw-semibold">Total Budget</p>
                                </div>
                                <div>
                                    <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                        <h6 class="fw-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                    </div>
                                    <p class="text-muted text-end mb-1">15% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
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
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">15/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ms-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media mb-3">
                                    <img src="/images/small/project-1.jpg" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-2">
                                        <h4 class="m-0 fw-bold text-dark font-18">Transfer money</h4>
                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Jack Z Jackson</p>
                                    </div><!--end media-body-->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-semibold">Start : <span class="text-muted font-weight-normal"> 08 Dec 2021</span></h6>
                                    <h6 class="fw-semibold">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2022</span></h6>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-16 fw-bold m-0">$33,100</h5>
                                    <p class="mb-0 text-muted fw-semibold">Total Budget</p>
                                </div>
                                <div>
                                    <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                        <h6 class="fw-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-success fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                    </div>
                                    <p class="text-muted text-end mb-1">15% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
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
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">15/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ms-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media mb-3">
                                    <img src="/images/small/project-3.jpg" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-2">
                                        <h4 class="m-0 fw-bold text-dark font-18">Organic Farming</h4>
                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                    </div><!--end media-body-->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-semibold">Start : <span class="text-muted font-weight-normal"> 15 Nov 2021</span></h6>
                                    <h6 class="fw-semibold">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2022</span></h6>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-16 fw-bold m-0">$56,800</h5>
                                    <p class="mb-0 text-muted fw-semibold">Total Budget</p>
                                </div>
                                <div>
                                    <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                        <h6 class="fw-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-primary fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                    </div>
                                    <p class="text-muted text-end mb-1">15% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
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
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">15/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ms-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media mb-3">
                                    <img src="/images/small/project-1.jpg" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-2">
                                        <h4 class="m-0 fw-bold text-dark font-18">Book My World</h4>
                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                    </div><!--end media-body-->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-semibold">Start : <span class="text-muted font-weight-normal"> 15 Nov 2021</span></h6>
                                    <h6 class="fw-semibold">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2022</span></h6>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-16 fw-bold m-0">$82,000</h5>
                                    <p class="mb-0 text-muted fw-semibold">Total Budget</p>
                                </div>
                                <div>
                                    <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                        <h6 class="fw-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-warning fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                    </div>
                                    <p class="text-muted text-end mb-1">15% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
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
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">15/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ms-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media mb-3">
                                    <img src="/images/small/project-3.jpg" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-2">
                                        <h4 class="m-0 fw-bold text-dark font-18">New GPS System</h4>
                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                    </div><!--end media-body-->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-semibold">Start : <span class="text-muted font-weight-normal"> 15 Nov 2021</span></h6>
                                    <h6 class="fw-semibold">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2022</span></h6>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-16 fw-bold m-0">$35,200</h5>
                                    <p class="mb-0 text-muted fw-semibold">Total Budget</p>
                                </div>
                                <div>
                                    <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                        <h6 class="fw-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                    </div>
                                    <p class="text-muted text-end mb-1">15% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
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
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">15/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ms-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media mb-3">
                                    <img src="/images/small/project-2.jpg" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-2">
                                        <h4 class="m-0 fw-bold text-dark font-18">Body Care</h4>
                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                    </div><!--end media-body-->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="fw-semibold">Start : <span class="text-muted font-weight-normal"> 15 Nov 2021</span></h6>
                                    <h6 class="fw-semibold">Deadline : <span class="text-muted font-weight-normal"> 28 Fab 2022</span></h6>
                                </div>
                                <div class="mt-3">
                                    <h5 class="font-16 fw-bold m-0">$28,500</h5>
                                    <p class="mb-0 text-muted fw-semibold">Total Budget</p>
                                </div>
                                <div>
                                    <p class="text-muted mt-4 mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-semibold">All Hours : <span class="text-muted font-weight-normal"> 530 / 281:30</span></h6>
                                        <h6 class="fw-semibold">Today : <span class="text-muted font-weight-normal"> 2:45</span><span class="badge badge-soft-info fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                    </div>
                                    <p class="text-muted text-end mb-1">15% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
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
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">15/100</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">3</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="ms-2" href="#">
                                                    <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end task-box-->
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