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
                                    <li class="breadcrumb-item active">Clients</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Clients</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-xl">
                                <h5 class="font-16 fw-bold">Charles Fang</h5>
                                <span class="text-muted me-3 fw-semibold"><i class="las la-map-marker me-1 text-secondary"></i>New York, USA</span>
                                <span class="text-muted fw-semibold"><i class="las la-phone me-1 text-secondary"></i>+1 123 456 789</span>
                                <p class="text-muted mt-1">It is a long established fact that a reader will be distracted when looking at its layout.</p>
                                <button type="button" class="btn btn-sm btn-primary">Project</button>
                                <button type="button" class="btn btn-sm btn-de-primary">Message</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xl">
                                <h5 class="font-16 fw-bold">Wendy Keen</h5>
                                <span class="text-muted fw-semibold me-3"><i class="las la-map-marker me-1 text-secondary"></i>New York, USA</span>
                                <span class="text-muted fw-semibold"><i class="las la-phone me-1 text-secondary"></i>+1 123 456 789</span>
                                <p class="text-muted mt-1">There are many variations of passages of Lorem Ipsum available, but the majority have .</p>
                                <button type="button" class="btn btn-sm btn-primary">Project</button>
                                <button type="button" class="btn btn-sm btn-de-primary">Message</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xl">
                                <h5 class="font-16 fw-bold">Marvin Turner</h5>
                                <span class="text-muted fw-semibold me-3"><i class="las la-map-marker me-1 text-secondary"></i>New York, USA</span>
                                <span class="text-muted fw-semibold"><i class="las la-phone me-1 text-secondary"></i>+1 123 456 789</span>
                                <p class="text-muted mt-1">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those.</p>
                                <button type="button" class="btn btn-sm btn-primary">Project</button>
                                <button type="button" class="btn btn-sm btn-de-primary">Message</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-xl">
                                <h5 class="font-16 fw-bold">Charles Fang</h5>
                                <span class="text-muted fw-semibold me-3"><i class="las la-map-marker me-1 text-secondary"></i>New York, USA</span>
                                <span class="text-muted fw-semibold"><i class="las la-phone me-1 text-secondary"></i>+1 123 456 789</span>
                                <p class="text-muted mt-1">Bonorum et Malorum" by Cicero are also reproduced in their exact original form.</p>
                                <button type="button" class="btn btn-sm btn-primary">Project</button>
                                <button type="button" class="btn btn-sm btn-de-primary">Message</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/users/user-9.jpg" alt="user" class="rounded-circle thumb-xl">
                                <h5 class="font-16 fw-bold">Joseph Cate</h5>
                                <span class="text-muted fw-semibold me-3"><i class="las la-map-marker me-1 text-secondary"></i>New York, USA</span>
                                <span class="text-muted fw-semibold"><i class="las la-phone me-1 text-secondary"></i>+1 123 456 789</span>
                                <p class="text-muted mt-1">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                                <button type="button" class="btn btn-sm btn-primary">Project</button>
                                <button type="button" class="btn btn-sm btn-de-primary">Message</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/users/user-10.jpg" alt="user" class="rounded-circle thumb-xl">
                                <h5 class="font-16 fw-bold">Robert Kipp</h5>
                                <span class="text-muted fw-semibold me-3"><i class="las la-map-marker me-1 text-secondary"></i>New York, USA</span>
                                <span class="text-muted fw-semibold"><i class="las la-phone me-1 text-secondary"></i>+1 123 456 789</span>
                                <p class="text-muted mt-1">Latin words, consectetur, from a Lorem Ipsum passage, and going through.</p>
                                <button type="button" class="btn btn-sm btn-primary">Project</button>
                                <button type="button" class="btn btn-sm btn-de-primary">Message</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/users/user-7.jpg" alt="user" class="rounded-circle thumb-xl">
                                <h5 class="font-16 fw-bold">Nancy Perdue</h5>
                                <span class="text-muted fw-semibold me-3"><i class="las la-map-marker me-1 text-secondary"></i>New York, USA</span>
                                <span class="text-muted fw-semibold"><i class="las la-phone me-1 text-secondary"></i>+1 123 456 789</span>
                                <p class="text-muted mt-1">Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics.</p>
                                <button type="button" class="btn btn-sm btn-primary">Project</button>
                                <button type="button" class="btn btn-sm btn-de-primary">Message</button>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xl">
                                <h5 class="font-16 fw-bold">Joseph Cate</h5>
                                <span class="text-muted fw-semibold me-3"><i class="las la-map-marker me-1 text-secondary"></i>New York, USA</span>
                                <span class="text-muted fw-semibold"><i class="las la-phone me-1 text-secondary"></i>+1 123 456 789</span>
                                <p class="text-muted mt-1">Contrary to popular belief, consectetur, from a Lorem Ipsum is not simply random text.</p>
                                <button type="button" class="btn btn-sm btn-primary">Project</button>
                                <button type="button" class="btn btn-sm btn-de-primary">Message</button>
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