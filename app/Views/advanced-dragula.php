<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' =>  'Unikit')) ?>

    <link href="/libs/dragula/dragula.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
                                    <li class="breadcrumb-item active">Dragula</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dragula</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bg-light p-3">
                                            <div class="dropdown d-inline-block float-end mt-n2">
                                                <a class="nav-link dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v font-18 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                    <a class="dropdown-item" href="#">Create Project</a>
                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                </div>
                                            </div>
                                            <h4 class="header-title mb-3 mt-0">Project Active</h4>
                                            <div id="project-list-left" class="pb-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="task-box">
                                                            <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>
                                                            <p class="text-muted float-end">
                                                                <span class="text-muted">01:33</span> /
                                                                <span class="text-muted">9:30</span>
                                                                <span class="mx-1">·</span>
                                                                <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                            </p>
                                                            <h5 class="mt-0">Organic Farming</h5>
                                                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                                                but the majority have suffered alteration in some form.
                                                            </p>
                                                            <p class="text-muted text-end mb-1">15% Complete</p>
                                                            <div class="progress mb-4" style="height: 4px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="img-group">
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                </div><!--end img-group-->
                                                                <ul class="list-inline mb-0 align-self-center">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                            <span class="text-muted font-weight-bold">15/100</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="ml-2" href="#">
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
                                                            <p class="text-muted float-end">
                                                                <span class="text-muted">01:33</span> /
                                                                <span class="text-muted">9:30</span>
                                                                <span class="mx-1">·</span>
                                                                <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                            </p>
                                                            <h5 class="mt-0">Transfer money</h5>
                                                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                                                but the majority have suffered alteration in some form.
                                                            </p>
                                                            <p class="text-muted text-end mb-1">50% Complete</p>
                                                            <div class="progress mb-4" style="height: 4px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="img-group">
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                </div><!--end img-group-->
                                                                <ul class="list-inline mb-0 align-self-center">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                            <span class="text-muted font-weight-bold">25/50</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                            <span class="text-muted font-weight-bold">7</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="ml-2" href="#">
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
                                                            <p class="text-muted float-end">
                                                                <span class="text-muted">01:20</span> /
                                                                <span class="text-muted">1:30</span>
                                                                <span class="mx-1">·</span>
                                                                <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                            </p>
                                                            <h5 class="mt-0">Mobile Account Setting</h5>
                                                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                                                but the majority have suffered alteration in some form.
                                                            </p>
                                                            <p class="text-muted text-end mb-1">100% Complete</p>
                                                            <div class="progress mb-4" style="height: 4px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                            <span class="text-muted font-weight-bold">128/128</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                            <span class="text-muted font-weight-bold">13</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="ml-2" href="#">
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
                                            </div><!--end project-list-left-->
                                        </div><!--end /div-->
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="bg-light p-3">
                                            <div class="dropdown d-inline-block float-end mt-n2">
                                                <a class="nav-link dropdown-toggle arrow-none" id="drop3" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v font-18 text-muted"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop3">
                                                    <a class="dropdown-item" href="#">Create Project</a>
                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                </div>
                                            </div>

                                            <h4 class="header-title mb-3 mt-0">Project Complete</h4>

                                            <div id="project-list-right" class="pb-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="task-box">
                                                            <div class="task-priority-icon"><i class="fas fa-circle text-danger"></i></div>
                                                            <p class="text-muted float-end">
                                                                <span class="text-danger">10:33</span> /
                                                                <span class="text-danger">9:30</span>
                                                                <span class="mx-1">·</span>
                                                                <span><i class="far fa-fw fa-clock"></i> June 08</span>
                                                            </p>
                                                            <h5 class="mt-0">Book My World</h5>
                                                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                                                but the majority have suffered alteration in some form.
                                                            </p>
                                                            <p class="text-muted text-end mb-1">95% Complete</p>
                                                            <div class="progress mb-4" style="height: 4px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="img-group">
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                </div><!--end img-group-->
                                                                <ul class="list-inline mb-0 align-self-center">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                            <span class="text-muted font-weight-bold">82/90</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                            <span class="text-muted font-weight-bold">11</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="ml-2" href="#">
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
                                                            <p class="text-muted float-end">
                                                                <span class="badge badge-danger mr-2">Stop</span>
                                                                <span class="text-muted">01:33</span> /
                                                                <span class="text-muted">9:30</span>
                                                                <span class="mx-1">·</span>
                                                                <span><i class="far fa-fw fa-clock"></i> June 18</span>
                                                            </p>
                                                            <h5 class="mt-0">Body Care</h5>
                                                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                                                but the majority have suffered alteration in some form.
                                                            </p>
                                                            <p class="text-muted text-end mb-1">37% Complete</p>
                                                            <div class="progress mb-4" style="height: 4px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="img-group">
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                    <a class="user-avatar user-avatar-group" href="#">
                                                                        <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xs">
                                                                    </a>
                                                                </div><!--end img-group-->
                                                                <ul class="list-inline mb-0 align-self-center">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                            <span class="text-muted font-weight-bold">55/150</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                            <span class="text-muted font-weight-bold">8</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="ml-2" href="#">
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
                                                            <p class="text-muted float-end">
                                                                <span class="badge badge-warning mr-2">Panding</span>
                                                                <span class="text-muted">01:33</span> /
                                                                <span class="text-muted">9:30</span>
                                                                <span class="mx-1">·</span>
                                                                <span><i class="far fa-fw fa-clock"></i> June 18</span>
                                                            </p>
                                                            <h5 class="mt-0">New GPS System</h5>
                                                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                                                but the majority have suffered alteration in some form.
                                                            </p>
                                                            <p class="text-muted text-end mb-1">01% Complete</p>
                                                            <div class="progress mb-4" style="height: 4px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                                            <span class="text-muted font-weight-bold">01/80</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                                            <span class="text-muted font-weight-bold">0</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="ml-2" href="#">
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
                                            </div><!--end project-list-right-->
                                        </div><!--end /div-->
                                    </div><!--end col-->
                                </div><!--end row-->
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
    <script src="/libs/dragula/dragula.min.js"></script>
    <script src="/pages/dragula.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>