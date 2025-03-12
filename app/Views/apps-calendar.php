<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Unikit")) ?>

    <link href="/libs/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item"><a href="#">Apps</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Calendar</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Calendar</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/small/calendar.svg" alt="" class="img-fluid">
                                <ul class="list-group">
                                    <li class="list-group-item align-items-center d-flex">
                                        <div class="media">
                                            <img src="/images/small/project-1.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1 fw-bold">Meeting with UI/UX Designers</h6>
                                                <p class="text-muted mb-0">Today 07:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center ">
                                        <div class="media">
                                            <img src="/images/users/user-5.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1 fw-bold">Lunch with my friend</h6>
                                                <p class="text-muted mb-0">Today 12:30 PM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center">
                                        <div class="media">
                                            <img src="/images/small/project-3.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1 fw-bold">Call for payment Project ID : #254136</h6>
                                                <p class="text-muted mb-0">Tomorrow 10:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center ">
                                        <div class="media">
                                            <img src="/images/users/user-4.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1 fw-bold">Picnic with my Family</h6>
                                                <p class="text-muted mb-0">01 June 2019 - 09:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center">
                                        <div class="media">
                                            <img src="/images/small/project-4.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Meeting with Developers</h6>
                                                <p class="text-muted mb-0">04 June 2019 - 07:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div id='calendar'></div>
                                <div style='clear:both'></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!-- End row -->

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

    <script src="/libs/fullcalendar/main.min.js"></script>
    <script src="/pages/calendar.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>