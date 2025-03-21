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
                                    <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
                                    <li class="breadcrumb-item active">Toasts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Toasts</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                                <p class="text-muted mb-0">To encourage extensible and predictable toasts, we recommend a header and body. </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                                        <h5 class="me-auto my-0">Unikit</h5>
                                        <small>11 mins ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body ">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div><!--end toast-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Translucent</h4>
                                <p class="text-muted mb-0">Toasts are slightly translucent, too, so they blend over
                                    whatever they might appear over.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="bg-light p-3">
                                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-header">
                                            <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                                            <h5 class="me-auto my-0">Unikit</h5>
                                            <small>11 mins ago</small>
                                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body ">
                                            Hello, world! This is a toast message.
                                        </div>
                                    </div><!--end toast-->
                                </div> <!--end /div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stacking</h4>
                                <p class="text-muted mb-0">You can stack toasts by wrapping them in a toast container, which will vertically add some spacing.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="bg-light p-3">
                                    <div class="toast-container position-relative">
                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                                                <h5 class="me-auto my-0">Unikit</h5>
                                                <small>11 mins ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body ">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div><!--end toast-->

                                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                                                <h5 class="me-auto my-0">Unikit</h5>
                                                <small>11 mins ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body ">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div><!--end toast-->
                                    </div><!--end toast-container-->
                                </div> <!--end div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom content</h4>
                                <p class="text-muted mb-0">Alternatively, you can also add additional controls and components to toasts.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="bg-light p-3">
                                    <div class="toast d-flex align-items-center mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                        <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>

                                    <div class="toast mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                            <div class="mt-2 pt-2 border-top">
                                                <button type="button" class="btn btn-de-primary btn-sm">Take action</button>
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="toast d-flex align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div> <!--end /div-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Toast Placement</h4>
                                <p class="text-muted mb-0">Place toasts with custom CSS as you need them.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form>
                                    <div class="form-group mb-3">
                                        <label for="selectToastPlacement">Toast placement</label>
                                        <select class="form-select mt-2" id="selectToastPlacement">
                                            <option value="" selected>Select a position...</option>
                                            <option value="top-0 start-0">Top left</option>
                                            <option value="top-0 start-50 translate-middle-x">Top center</option>
                                            <option value="top-0 end-0">Top right</option>
                                            <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                            <option value="top-50 start-50 translate-middle">Middle center</option>
                                            <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                            <option value="bottom-0 start-0">Bottom left</option>
                                            <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                            <option value="bottom-0 end-0">Bottom right</option>
                                        </select>
                                    </div>
                                </form>
                                <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts" style="height: 200px;">
                                    <div class="toast-container position-absolute p-3" id="toastPlacement">
                                        <div class="toast">
                                            <div class="toast-header">
                                                <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                                                <h5 class="me-auto my-0">Unikit</h5>
                                                <small>11 mins ago</small>
                                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body ">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end toast-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom Toast</h4>
                                <p class="text-muted mb-0">You can use custom toast. </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header border-0">
                                        <button type="button" class="btn-close ms-auto " data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body  text-center">
                                        <img src="/images/users/user-5.jpg" alt="" class="d-block mx-auto rounded-circle thumb-md">
                                        <h5 class="fw-bold mt-3 mb-1">Charles Smith</h5>
                                        <p class="text-muted mb-0">UI/UX front end developer</p>
                                        <div class="mt-3 mb-2">
                                            <button type="button" class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i class="fab fa-facebook-f"></i></button>
                                            <button type="button" class="btn btn-outline-info btn-icon-circle btn-icon-circle-sm"><i class="fab fa-twitter"></i></button>
                                            <button type="button" class="btn btn-outline-pink btn-icon-circle btn-icon-circle-sm"><i class="fab fa-dribbble"></i></button>
                                        </div>
                                    </div><!-- end toast-body -->
                                </div><!--end toast-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
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
    <script src="/pages/toast.init.js"></script>

</body>

</html>