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
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Timeline</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Timeline</h4>
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
                                <h4 class="card-title">Timeline</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="slimscroll activity-scroll">
                                    <div class="activity">
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-check-circle bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0 w-75">Task finished</h6>
                                                    <span class="text-muted d-block">10 Min ago</span>
                                                </div>
                                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-user-clock bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0  w-75">Task Overdue</h6>
                                                    <span class="text-muted">50 Min ago</span>
                                                </div>
                                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                                <span class="badge badge-soft-secondary">Design</span>
                                                <span class="badge badge-soft-secondary">HTML</span>
                                            </div>
                                        </div>
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-clipboard-check bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0  w-75">New Task</h6>
                                                    <span class="text-muted">10 hours ago</span>
                                                </div>
                                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-comment-dots bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0">New Comment</h6>
                                                    <span class="text-muted">Yesterday</span>
                                                </div>
                                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-user-friends bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6 class="m-0">New Lead Miting</h6>
                                                    <span class="text-muted">14 Nov 2019</span>
                                                </div>
                                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                    <a href="#" class="text-info">[more info]</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!--end activity-->
                                </div><!--end activity-scroll-->
                            </div> <!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Timeline</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="main-timeline mt-3">
                                    <div class="timeline">
                                        <span class="timeline-icon"></span>
                                        <span class="year">Feb 2019</span>
                                        <div class="timeline-content">
                                            <h5 class="title">Highest Account Value</h5>
                                            <span class="post">14 Feb 2019</span>
                                            <p class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis justo id pulvinar suscipit.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline">
                                        <span class="timeline-icon"></span>
                                        <span class="year">Jan 2018</span>
                                        <div class="timeline-content">
                                            <h5 class="title">Monthly Report</h5>
                                            <span class="post">26 Jan 2018</span>
                                            <p class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis justo id pulvinar suscipit.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline">
                                        <span class="timeline-icon"></span>
                                        <span class="year">April 2018</span>
                                        <div class="timeline-content">
                                            <h5 class="title">Second Trade</h5>
                                            <span class="post">1 April 2018</span>
                                            <p class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis justo id pulvinar suscipit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="timeline">
                                        <span class="timeline-icon"></span>
                                        <span class="year">Aug 2017</span>
                                        <div class="timeline-content">
                                            <h5 class="title">Sign Up</h5>
                                            <span class="post">15 Aug 2017</span>
                                            <p class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis justo id pulvinar suscipit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="timeline">
                                        <span class="timeline-icon"></span>
                                        <span class="year">Dec 2017</span>
                                        <div class="timeline-content">
                                            <h5 class="title">First Trade</h5>
                                            <span class="post">24 Dec 2017</span>
                                            <p class="description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis justo id pulvinar suscipit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end card-body-->
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