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
                                    <li class="breadcrumb-item active">Tasks</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tasks</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="apexchart-wrapper">
                                    <div id="task_status" class="apex-charts"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="me-3 rounded-circle thumb-xl" src="/images/users/user-4.jpg" alt="">
                                    <div class="">
                                        <h5 class="mb-0 fw-bold">Robert Marshall</h5>
                                        <small class="text-muted">Project Manager</small>
                                        <ul class="list-unstyled list-inline my-1">
                                            <li class="list-inline-item me-0">
                                                <i class="mdi mdi-star text-warning font-18"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="mdi mdi-star text-warning font-18"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="mdi mdi-star text-warning font-18"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="mdi mdi-star text-warning font-18"></i>
                                            </li>
                                            <li class="list-inline-item me-0">
                                                <i class="mdi mdi-star-half text-warning font-18"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="text-muted px-3 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text.
                                        It has roots in a piece of classical Latin.
                                    </p>
                                    <div class="mb-3">
                                        <a href="#" class="me-3 text-warning">2843 Followers</a>
                                        <a href="#" class=" text-warning">295 Following</a>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-primary">More Detail</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Milestones</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="media align-items-center mb-3">
                                    <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-warning rounded-circle fw-semibold">A</span>
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Overall</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">85/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">85% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                                <div class="media align-items-center mb-3">
                                    <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-purple rounded-circle fw-semibold">F</span>
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Frunted</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">55/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">55% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                                <div class="media align-items-center mb-3">
                                    <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-pink rounded-circle fw-semibold">B</span>
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Backend</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">45/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">45% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-pink" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                                <div class="media align-items-center">
                                    <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-success rounded-circle fw-semibold">T</span>
                                    <div class="media-body ms-3 align-self-center">
                                        <h6 class="m-0 font-15">Testing</h6>
                                        <div class="d-flex justify-content-between">
                                            <span>
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success"></i>
                                                    <span class="text-muted">35/100</span>
                                                </a>
                                            </span>
                                            <span class="text-muted">35% Complete</span>
                                        </div>
                                        <div class="progress mt-0" style="height:3px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->


                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h5 class="d-inline-block me-2">🏆 Unikit's availabel team members.</h5>
                        <div class="img-group d-inline-block">
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

                    </div><!--end col-->

                    <div class="col-lg-6 text-end align-self-center">
                        <button type="button" class="btn btn-sm btn-primary">Add New Task</button>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>
                                    <p class="text-muted float-right">
                                        <span class="text-muted">01:33</span> /
                                        <span class="text-muted">9:30</span>
                                        <span class="mx-1">·</span>
                                        <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                    </p>
                                    <h5 class="mt-0 mb-1">Organic Farming</h5>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-end mb-1">15% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xs">
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

                        <div class="card">
                            <div class="card-body">
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-circle text-secondary"></i></div>
                                    <p class="text-muted float-right">
                                        <span class="text-muted">01:33</span> /
                                        <span class="text-muted">9:30</span>
                                        <span class="mx-1">·</span>
                                        <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                    </p>
                                    <h5 class="mt-0 mb-1">Transfer money</h5>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-end mb-1">50% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">25/50</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">7</span>
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



                        <div class="card">
                            <div class="card-body">
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-check text-success"></i></div>
                                    <p class="text-muted float-right">
                                        <span class="text-muted">01:20</span> /
                                        <span class="text-muted">1:30</span>
                                        <span class="mx-1">·</span>
                                        <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                    </p>
                                    <h5 class="mt-0 mb-1">Mobile Account Setting</h5>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-end mb-1">100% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">128/128</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">13</span>
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

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-circle text-danger"></i></div>
                                    <p class="text-muted float-right">
                                        <span class="text-danger">10:33</span> /
                                        <span class="text-danger">9:30</span>
                                        <span class="mx-1">·</span>
                                        <span><i class="far fa-fw fa-clock"></i> June 08</span>
                                    </p>
                                    <h5 class="mt-0 mb-1">Book My World</h5>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-end mb-1">95% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-9.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">82/90</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">11</span>
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

                        <div class="card">
                            <div class="card-body">
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-circle text-info"></i></div>
                                    <p class="text-muted float-right">
                                        <span class="badge bg-danger me-2">Stop</span>
                                        <span class="text-muted">01:33</span> /
                                        <span class="text-muted">9:30</span>
                                        <span class="mx-1">·</span>
                                        <span><i class="far fa-fw fa-clock"></i> June 18</span>
                                    </p>
                                    <h5 class="mt-0 mb-1">Body Care</h5>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-end mb-1">37% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">55/150</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">8</span>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="task-box">
                                    <div class="task-priority-icon"><i class="fas fa-circle text-info"></i></div>
                                    <p class="text-muted float-right">
                                        <span class="badge bg-warning me-2">Panding</span>
                                        <span class="text-muted">01:33</span> /
                                        <span class="text-muted">9:30</span>
                                        <span class="mx-1">·</span>
                                        <span><i class="far fa-fw fa-clock"></i> June 18</span>
                                    </p>
                                    <h5 class="mt-0 mb-1">New GPS System</h5>
                                    <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                        but the majority have suffered alteration in some form.
                                    </p>
                                    <p class="text-muted text-end mb-1">01% Complete</p>
                                    <div class="progress mb-4" style="height: 4px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="img-group">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-10.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                        </div><!--end img-group-->
                                        <ul class="list-inline mb-0 align-self-center">
                                            <li class="list-item d-inline-block me-2">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                    <span class="text-muted fw-bold">01/80</span>
                                                </a>
                                            </li>
                                            <li class="list-item d-inline-block">
                                                <a class="" href="#">
                                                    <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                    <span class="text-muted fw-bold">0</span>
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
    <script src="/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/pages/projects-task.init.js"></script>

    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>