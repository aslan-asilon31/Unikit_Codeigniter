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
                                    <li class="breadcrumb-item active">Kanban</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kanban Board</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="kanban-board">
                                    <div class="kanban-col">
                                        <div class="kanban-main-card">
                                            <div class="kanban-box-title">
                                                <h4 class="header-title mb-3">New Projects</h4>
                                                <div class="dropdown kanban-main-dropdown">
                                                    <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="las la-ellipsis-v font-24 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="project-list-left" class="pb-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                                        <h5 class="my-1 font-14">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop3" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop3">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-2.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop4" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop4">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-3.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop5" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop5">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop6" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop6">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-2.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end project-list-left-->
                                            <button type="button" class="btn w-100 btn-soft-primary btn-sm">Add Task</button>
                                        </div><!--end /div-->
                                    </div><!--end kanban-col-->
                                    <div class="kanban-col">
                                        <div class="kanban-main-card">
                                            <div class="kanban-box-title">
                                                <h4 class="header-title mb-3">To Do</h4>
                                                <div class="dropdown kanban-main-dropdown">
                                                    <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="las la-ellipsis-v font-24 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="project-list-center-left" class="pb-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                                        <h5 class="my-1 font-14">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop3" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop3">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-2.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop4" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop4">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-3.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop5" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop5">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop6" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop6">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-2.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end project-list-left-->
                                            <button type="button" class="btn w-100 btn-soft-primary btn-sm">Add Task</button>
                                        </div><!--end /div-->
                                    </div><!--end kanban-col-->

                                    <div class="kanban-col">
                                        <div class="kanban-main-card">
                                            <div class="kanban-box-title">
                                                <h4 class="header-title mb-3">In Progress</h4>
                                                <div class="dropdown kanban-main-dropdown">
                                                    <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="las la-ellipsis-v font-24 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="project-list-center" class="pb-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop08" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop08">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop9" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop9">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-2.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop10" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop10">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-3.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop11">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-4.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end project-list-left-->
                                            <button type="button" class="btn w-100  btn-soft-primary btn-sm">Add Task</button>
                                        </div><!--end /div-->
                                    </div><!--end kanban-col-->

                                    <div class="kanban-col">
                                        <div class="kanban-main-card">
                                            <div class="kanban-box-title">
                                                <h4 class="header-title mb-3">Code Review</h4>
                                                <div class="dropdown kanban-main-dropdown">
                                                    <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="las la-ellipsis-v font-24 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="project-list-center-right" class="pb-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop13" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop13">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop14" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop14">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-6.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop15" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop15">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-7.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end project-list-right-->
                                            <button type="button" class="btn w-100  btn-soft-primary btn-sm">Add Task</button>
                                        </div><!--end /div-->
                                    </div><!--end kanban-col-->

                                    <div class="kanban-col">
                                        <div class="kanban-main-card">
                                            <div class="kanban-box-title">
                                                <h4 class="header-title mb-3">Done</h4>
                                                <div class="dropdown kanban-main-dropdown">
                                                    <a class="dropdown-toggle arrow-none" id="drop1" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                        <i class="las la-ellipsis-v font-24 text-muted"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop1">
                                                        <a class="dropdown-item" href="#">Create Project</a>
                                                        <a class="dropdown-item" href="#">Open Project</a>
                                                        <a class="dropdown-item" href="#">Tasks Details</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="project-list-right" class="pb-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop17" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop17">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-warning"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-5.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop18" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop18">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-purple"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-6.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop19" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop19">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-danger"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-7.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown d-inline-block float-end">
                                                            <a class="dropdown-toggle mr-n2 mt-n2" id="drop20" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop20">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div><!--end dropdown-->
                                                        <i class="mdi mdi-circle-outline d-block mt-n2 font-14 text-success"></i>
                                                        <h5 class="my-1">Mobile Account Setting</h5>
                                                        <p class="text-muted mb-2">Mobile App</p>
                                                        <div class="row justify-content-center">
                                                            <div class="col-6 align-self-center">
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-item d-inline-block mr-2">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">0/5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-item d-inline-block">
                                                                        <a class="" href="#">
                                                                            <i class="mdi mdi-comment-outline text-muted"></i>
                                                                            <span class="text-muted font-weight-bold">3</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col-6 align-self-center">
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-8.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                                <a class="float-end" href="#">
                                                                    <img src="/images/users/user-2.jpg" alt="user" class="thumb-xs rounded-circle">
                                                                </a>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end project-list-right-->
                                            <button type="button" class="btn w-100  btn-soft-primary btn-sm">Add Task</button>
                                        </div><!--end /div-->
                                    </div><!--end kanban-col-->
                                </div><!--end kanban-board-->
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
<!--end body-->

</html>