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
                                    <li class="breadcrumb-item active">Create</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Create Project</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form>
                                            <div class="form-group">
                                                <label for="projectName" class="form-label">Project Name :</label>
                                                <input type="text" class="form-control" id="projectName" aria-describedby="emailHelp" placeholder="Enter project name">
                                            </div><!--end form-group-->
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                        <label class="form-label mt-2" for="pro-start-date">Project Start Date</label>
                                                        <input type="text" class="form-control" id="pro-start-date" placeholder="Enter start date">
                                                    </div><!--end col-->
                                                    <div class="col-lg-3 col-6 mb-2 mb-lg-0">
                                                        <label class="form-label mt-2" for="pro-end-date">Project End Date</label>
                                                        <input type="text" class="form-control" id="pro-end-date" placeholder="Enter end date">
                                                    </div><!--end col-->
                                                    <div class="col-lg-3 col-6">
                                                        <label class="form-label mt-2" for="pro-rate">Rate</label>
                                                        <input type="text" class="form-control" id="pro-rate" placeholder="Enter rate">
                                                    </div><!--end col-->
                                                    <div class="col-lg-3 col-6">
                                                        <label class="form-label mt-2" for="pro-end-date">Price Type</label>
                                                        <select class="form-select">
                                                            <option>Hourly</option>
                                                            <option>Daily</option>
                                                            <option>Fix</option>
                                                        </select>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end form-group-->
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-2 mb-lg-0">
                                                        <label class="form-label mt-2" for="pro-end-date">Required</label>
                                                        <select class="form-select">
                                                            <option>--Select--</option>
                                                            <option>UI/UX Design</option>
                                                            <option>Payment System </option>
                                                            <option>Android 10</option>
                                                        </select>
                                                    </div><!--end col-->
                                                    <div class="col-lg-3 col-6">
                                                        <label class="form-label mt-2" for="pro-end-date">Invoice Time</label>
                                                        <select class="form-select">
                                                            <option>30 Day</option>
                                                            <option>3 Month</option>
                                                            <option>1 Year</option>
                                                        </select>
                                                    </div><!--end col-->
                                                    <div class="col-lg-3 col-6">
                                                        <label class="form-label mt-2" for="pro-end-date">Priority</label>
                                                        <select class="form-select">
                                                            <option>-- select --</option>
                                                            <option>High</option>
                                                            <option>Medium</option>
                                                            <option>Low</option>
                                                        </select>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end form-group-->
                                            <div class="form-group mb-3">
                                                <label class="form-label mt-2" for="pro-message">Message</label>
                                                <textarea class="form-control" rows="5" id="pro-message" placeholder="writing here.."></textarea>
                                            </div><!--end form-group-->

                                            <button type="submit" class="btn btn-de-primary btn-sm">Create project</button>
                                            <button type="button" class="btn btn-de-danger btn-sm">Cancel</button>
                                        </form> <!--end form-->
                                    </div><!--end col-->
                                    <div class="col-lg-5 ms-auto align-self-center">
                                        <form>
                                            <div class="form-group">
                                                <label for="pro-avatar">Project Avatar</label>
                                                <img src="/images/small/project-3.jpg" alt="" class="thumb-lg rounded mx-3">
                                                <label class="btn btn-de-primary btn-sm text-light">
                                                    Change Avatar <input type="file" hidden>
                                                </label>
                                            </div><!--end form-group-->
                                            <h5 class="fw-normal my-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</h5>
                                            <div class="form-group">
                                                <label class="form-label" for="team-leader">Project team members</label>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <img src="/images/users/user-10.jpg" alt="user" class="rounded-circle thumb-xs">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img src="/images/users/user-9.jpg" alt="user" class="rounded-circle thumb-xs">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img src="/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-xs">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img src="/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-xs">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <img src="/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xs">
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="" class="user-avatar">
                                                            <span class="thumb-xs justify-content-center d-flex align-items-center bg-soft-info rounded-circle fw-semibold">+6</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <input id="add-member" type="file" name="files[]" multiple style='display: none;'>
                                            </div><!--end form-group-->
                                        </form>
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>
<!--end body-->

</html>