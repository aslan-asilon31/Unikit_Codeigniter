<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' =>  'Unikit')) ?>

    <link href="/libs/tobii/css/tobii.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Profile</h4>
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
                                <div class="met-profile">
                                    <div class="row">
                                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                            <div class="met-profile-main">
                                                <div class="met-profile-main-pic">
                                                    <img src="/images/users/user-4.jpg" alt="" height="110" class="rounded-circle">
                                                    <span class="met-profile_main-pic-change">
                                                        <i class="fas fa-camera"></i>
                                                    </span>
                                                </div>
                                                <div class="met-profile_user-detail">
                                                    <h5 class="met-user-name">Rosa Dodson</h5>
                                                    <p class="mb-0 met-user-name-post">UI/UX Designer, India</p>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-4 ms-auto align-self-center">
                                            <ul class="list-unstyled personal-detail mb-0">
                                                <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> phone </b> : +91 23456 78910</li>
                                                <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                                <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Website </b> :
                                                    <a href="https://mannatthemes.com/" class="font-14 text-primary">https://mannatthemes.com/</a>
                                                </li>
                                            </ul>

                                        </div><!--end col-->
                                        <div class="col-lg-4 align-self-center">
                                            <div class="row">
                                                <div class="col-auto text-end border-end">
                                                    <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm mb-2">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
                                                    <p class="mb-0 fw-semibold">Facebook</p>
                                                    <h4 class="m-0 fw-bold">25k <span class="text-muted font-12 fw-normal">Followers</span></h4>
                                                </div><!--end col-->
                                                <div class="col-auto">
                                                    <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm mb-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
                                                    <p class="mb-0 fw-semibold">Twitter</p>
                                                    <h4 class="m-0 fw-bold">58k <span class="text-muted font-12 fw-normal">Followers</span></h4>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end f_profile-->
                            </div><!--end card-body-->
                            <div class="card-body p-0">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Post" role="tab" aria-selected="true">Post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Gallery" role="tab" aria-selected="false">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Settings" role="tab" aria-selected="false">Settings</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane p-3 active" id="Post" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body  report-card">
                                                                <div class="row d-flex justify-content-center">
                                                                    <div class="col">
                                                                        <p class="text-dark mb-1 fw-semibold">Views</p>
                                                                        <h3 class="my-2 font-24 fw-bold">24k</h3>
                                                                        <p class="mb-0 text-truncate text-muted"><i class="ti ti-bell text-warning font-18"></i>
                                                                            <span class="text-dark fw-semibold">1500</span> New subscribers this week
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-auto align-self-center">
                                                                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light-alt rounded-circle mx-auto">
                                                                            <i class="ti ti-eye font-30 align-self-center text-muted"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!--end card-body-->
                                                        </div> <!--end card-->
                                                    </div><!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body  report-card">
                                                                <div class="row d-flex justify-content-center">
                                                                    <div class="col">
                                                                        <p class="text-dark mb-1 fw-semibold">Comments</p>
                                                                        <h3 class="my-2 font-24 fw-bold">24k</h3>
                                                                        <p class="mb-0 text-truncate text-muted"><i class="ti ti-thumb-up text-success font-18"></i>
                                                                            <span class="text-dark fw-semibold">854</span> New Like this week
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-auto align-self-center">
                                                                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light-alt rounded-circle mx-auto">
                                                                            <i class="ti ti-brand-hipchat font-30 align-self-center text-muted"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!--end card-body-->
                                                        </div> <!--end card-->
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="/images/small/1.jpg" alt="" class="img-fluid">
                                                        <div class="post-title mt-4">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <span class="badge badge-soft-primary">Natural</span>
                                                                </div><!--end col-->
                                                                <div class="col-auto">
                                                                    <span class="text-muted"><i class="far fa-calendar me-1"></i>02 July 2020</span>
                                                                </div><!--end col-->
                                                            </div><!--end row-->

                                                            <h5 href="#" class="font-20 fw-bold d-block mt-3 mb-4">There is nothing more beautiful than nature.</h5>
                                                            <span class="font-15 bg-light py-2 px-3 rounded">Taking pictures is savouring life intensely.</span>
                                                            <p class="font-15 mt-4">It is a long established fact that a reader will be distracted by the readable content of
                                                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                                                more-or-less normal distribution of letters, as opposed to using
                                                                'Content here, content here', making it look like readable English.
                                                                Many desktop publishing packages and web page editors now use Lorem Ipsum
                                                                as their default model text, and a search for 'lorem ipsum' will uncover many
                                                                web sites still in their infancy.

                                                            </p>
                                                            <blockquote class="blockquote border-start ps-4">
                                                                <p class="font-18"><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                            </blockquote>
                                                            <p class="font-15">Taking pictures is savouring life intensely, every hundredth of a second – Marc Riboud.
                                                                Joy in looking and comprehending is nature’s most beautiful gift.</p>
                                                            <p class="font-15 mb-0">It is a long established fact that a reader will be distracted by the readable content of
                                                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                                                more-or-less normal distribution of letters, as opposed to using
                                                                'Content here, content here', making it look like readable English.
                                                                Many desktop publishing packages and web page editors now use Lorem Ipsum
                                                                as their default model text, and a search for 'lorem ipsum' will uncover many
                                                                web sites still in their infancy.

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <p class="text-dark fw-semibold mb-0">Artical tags</p>
                                                            </div>
                                                        </div>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Music</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Animals</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Natural</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Food</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Fashion</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Helth</span>
                                                        <span class="badge bg-soft-dark px-3 py-2 fw-semibold">Charity</span>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body pb-0">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="text-dark fw-semibold mb-0">Comments (205)</p>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                    <div class="card-body border-bottom-dashed">
                                                        <ul class="list-unstyled mb-0">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-auto">
                                                                        <img src="/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle">
                                                                    </div><!--end col-->
                                                                    <div class="col">
                                                                        <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <p class="text-dark fw-semibold mb-2">Martin Luther</p>
                                                                                </div><!--end col-->
                                                                                <div class="col-auto">
                                                                                    <span class="text-muted"><i class="far fa-clock me-1"></i>30 min ago</span>
                                                                                </div><!--end col-->
                                                                            </div><!--end row-->
                                                                            <p>It is a long established fact that a reader will be distracted by the
                                                                                readable content of a page when looking at its layout. The point of
                                                                                using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                                                                                as opposed to using 'Content here, content here', making it look like readable English.
                                                                            </p>
                                                                            <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                                <ul class="list-unstyled ms-5">
                                                                    <li>
                                                                        <div class="row mt-3">
                                                                            <div class="col-auto">
                                                                                <img src="/images/logo-sm.png" alt="" class="thumb-md rounded-circle">
                                                                            </div><!--end col-->
                                                                            <div class="col">
                                                                                <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <p class="text-dark fw-semibold mb-2">Unikit Author</p>
                                                                                        </div><!--end col-->
                                                                                        <div class="col-auto">
                                                                                            <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                                        </div><!--end col-->
                                                                                    </div><!--end row-->
                                                                                    <p>It is a long established fact that a reader will be distracted by the
                                                                                        readable content of a page when looking at its layout.
                                                                                    </p>
                                                                                    <p class="mb-0">Thank you</p>
                                                                                </div>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="mt-3">
                                                                <div class="row">
                                                                    <div class="col-auto">
                                                                        <img src="/images/users/user-1.jpg" alt="" class="thumb-md rounded-circle">
                                                                    </div><!--end col-->
                                                                    <div class="col">
                                                                        <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <p class="text-dark fw-semibold mb-2">Joseph Rust</p>
                                                                                </div><!--end col-->
                                                                                <div class="col-auto">
                                                                                    <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                                                </div><!--end col-->
                                                                            </div><!--end row-->
                                                                            <p>Is it a long established fact that a reader will be distracted by the
                                                                                readable content of a page when looking at its layout?
                                                                            </p>
                                                                            <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                            </li>
                                                            <li class="mt-3">
                                                                <div class="row">
                                                                    <div class="col-auto">
                                                                        <img src="/images/users/user-5.jpg" alt="" class="thumb-md rounded-circle">
                                                                    </div><!--end col-->
                                                                    <div class="col">
                                                                        <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <p class="text-dark fw-semibold mb-2">Matt Rosales</p>
                                                                                </div><!--end col-->
                                                                                <div class="col-auto">
                                                                                    <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                                                </div><!--end col-->
                                                                            </div><!--end row-->
                                                                            <p>Is it a long established fact that a reader will be distracted by the
                                                                                readable content of a page when looking at its layout?
                                                                            </p>
                                                                            <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div><!--end row-->
                                                                <ul class="list-unstyled ms-5">
                                                                    <li>
                                                                        <div class="row mt-3">
                                                                            <div class="col-auto">
                                                                                <img src="/images/logo-sm.png" alt="" class="thumb-md rounded-circle">
                                                                            </div><!--end col-->
                                                                            <div class="col">
                                                                                <div class="comment-body ms-n2 bg-light-alt p-3">
                                                                                    <div class="row">
                                                                                        <div class="col">
                                                                                            <p class="text-dark fw-semibold mb-2">Unikit Author</p>
                                                                                        </div><!--end col-->
                                                                                        <div class="col-auto">
                                                                                            <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                                        </div><!--end col-->
                                                                                    </div><!--end row-->
                                                                                    <p>It is a long established fact that a reader will be distracted by the
                                                                                        readable content of a page when looking at its layout.
                                                                                    </p>
                                                                                    <p class="mb-0">Thank you</p>
                                                                                </div>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div><!--end card-body-->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="text-dark fw-semibold mb-0">Leave a comment</p>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end card-body-->
                                                    <div class="card-body pt-0">
                                                        <form>
                                                            <div class="form-group mb-3">
                                                                <textarea class="form-control" rows="5" id="leave_comment" placeholder="Message"></textarea>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12 text-end">
                                                                    <button type="submit" class="btn btn-de-primary px-4">Send Message</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div><!--end card-body-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="card-title">Latest Posts</h4>
                                                            </div><!--end col-->
                                                            <div class="col-auto">
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Today<i class="las la-angle-down ms-1"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Today</a>
                                                                        <a class="dropdown-item" href="#">Yesterday</a>
                                                                        <a class="dropdown-item" href="#">Last Week</a>
                                                                    </div>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div> <!--end row-->
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="blog-card">
                                                            <img src="/images/small/img-1.jpg" alt="" class="img-fluid rounded">
                                                            <span class="badge badge-purple px-3 py-2 bg-soft-primary fw-semibold mt-3">Photography</span>
                                                            <h4 class="my-3 font-15">
                                                                <a href="" class="">There are many variations of passages of Lorem</a>
                                                            </h4>
                                                            <p class="text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Cum sociis natoque penatibus et magnis.</p>
                                                            <hr class="hr-dashed">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="meta-box">
                                                                    <div class="media">
                                                                        <img src="/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                                                        <div class="media-body align-self-center text-truncate">
                                                                            <h6 class="m-0 text-dark">Donald Gardner</h6>
                                                                            <ul class="p-0 list-inline mb-0">
                                                                                <li class="list-inline-item">26 mars 2020</li>
                                                                                <li class="list-inline-item">by <a href="">admin</a></li>
                                                                            </ul>
                                                                        </div><!--end media-body-->
                                                                    </div>
                                                                </div><!--end meta-box-->
                                                                <div class="align-self-center">
                                                                    <a href="#" class="text-dark">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><!--end blog-card-->
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="card-title">Popular Posts</h4>
                                                            </div><!--end col-->
                                                            <div class="col-auto">
                                                                <div class="dropdown">
                                                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Today<i class="las la-angle-down ms-1"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#">Today</a>
                                                                        <a class="dropdown-item" href="#">Yesterday</a>
                                                                        <a class="dropdown-item" href="#">Last Week</a>
                                                                    </div>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div> <!--end row-->
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <ul class="list-group custom-list-group mb-n3">
                                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                                <div class="media">
                                                                    <img src="/images/small/img-2.jpg" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                    <div class="media-body align-self-center">
                                                                        <a href="#" class="m-0 d-block fw-semibold font-13">Dastyle - Admin Dashboard</a>
                                                                        <a href="#" class="font-12 text-primary">analytic-index.html</a>
                                                                    </div><!--end media body-->
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <span class="text-muted mb-n2">20 June</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                                <div class="media">
                                                                    <img src="/images/small/img-1.jpg" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                    <div class="media-body align-self-center">
                                                                        <a href="#" class="m-0 d-block fw-semibold font-13">Unikit Simple- Admin Dashboard</a>
                                                                        <a href="#" class="font-12 text-primary">sales-index.html</a>
                                                                    </div><!--end media body-->
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <span class="text-muted mb-n2">18 june</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                                <div class="media">
                                                                    <img src="/images/small/img-4.jpg" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                    <div class="media-body align-self-center">
                                                                        <a href="#" class="m-0 d-block fw-semibold font-13">Crovex - Admin Dashboard</a>
                                                                        <a href="#" class="font-12 text-primary">helpdesk-index.html</a>
                                                                    </div><!--end media body-->
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <span class="text-muted mb-n2">15 june</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item align-items-center d-flex justify-content-between">
                                                                <div class="media">
                                                                    <img src="/images/small/img-5.jpg" height="40" class="me-3 align-self-center rounded" alt="...">
                                                                    <div class="media-body align-self-center">
                                                                        <a href="#" class="m-0 d-block fw-semibold font-13">Annex - Admin Dashboard</a>
                                                                        <a href="#" class="font-12 text-primary">calendar.html</a>
                                                                    </div><!--end media body-->
                                                                </div>
                                                                <div class="align-self-center">
                                                                    <span class="text-muted mb-n2">12 june</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->

                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="card-title">Social Profile</h4>
                                                            </div><!--end col-->
                                                        </div> <!--end row-->
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="button-list btn-social-icon">
                                                            <button type="button" class="btn btn-soft-primary btn-icon-circle">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </button>

                                                            <button type="button" class="btn btn-soft-info btn-icon-circle ms-2">
                                                                <i class="fab fa-twitter"></i>
                                                            </button>

                                                            <button type="button" class="btn btn-soft-pink btn-icon-circle  ms-2">
                                                                <i class="fab fa-dribbble"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-soft-info btn-icon-circle  ms-2">
                                                                <i class="fab fa-linkedin-in"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-soft-danger btn-icon-circle  ms-2">
                                                                <i class="fab fa-google-plus-g"></i>
                                                            </button>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                    <div class="tab-pane p-3" id="Gallery" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-auto filters-group-wrap">
                                                <div class="filters-group mb-3">
                                                    <div class="btn-group filter-options">
                                                        <button class="btn btn-primary" data-group="fashion">Fashion</button>
                                                        <button class="btn btn-primary" data-group="animal">Animal</button>
                                                        <button class="btn btn-primary" data-group="food">Food</button>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->


                                        <div id="grid" class="row g-0">
                                            <div class="col-md-4 col-lg-3 picture-item" data-groups='["fashion"]'>
                                                <a href="/images/small/img-1.jpg" class="lightbox">
                                                    <img src="/images/small/img-1.jpg" alt="" class="img-fluid" />
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["food"]'>
                                                <a href="/images/small/img-2.jpg" class="lightbox">
                                                    <img src="/images/small/img-2.jpg" alt="" class="img-fluid" />
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item" data-groups='["animal"]'>
                                                <a href="/images/small/img-3.jpg" class="lightbox">
                                                    <img src="/images/small/img-3.jpg" alt="" class="img-fluid" />
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                                                <a href="/images/small/img-4.jpg" class="lightbox">
                                                    <img src="/images/small/img-4.jpg" alt="" class="img-fluid" />
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item" data-groups='["food", "animal"]'>
                                                <a href="/images/small/img-5.jpg" class="lightbox">
                                                    <img src="/images/small/img-5.jpg" alt="" class="img-fluid" />
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["fashion"]'>
                                                <a href="/images/small/img-6.jpg" class="lightbox">
                                                    <img src="/images/small/img-6.jpg" alt="" class="img-fluid" />
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                                                <a href="/images/small/img-2.jpg" class="lightbox">
                                                    <img src="/images/small/img-2.jpg" alt="" class="img-fluid" />
                                                </a>
                                            </div><!--end col-->
                                            <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["fashion"]'>
                                                <a href="/images/small/img-1.jpg" class="lightbox">
                                                    <img src="/images/small/img-1.jpg" alt="" class="img-fluid" />
                                                </a>
                                            </div> <!--end col-->
                                        </div><!--end row-->
                                    </div>
                                    <div class="tab-pane p-3" id="Settings" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h4 class="card-title">Personal Information</h4>
                                                            </div><!--end col-->
                                                        </div> <!--end row-->
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">First Name</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="text" value="Rosa">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Last Name</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="text" value="Dodson">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Company Name</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="text" value="MannatThemes">
                                                                <span class="form-text text-muted font-12">We'll never share your email with anyone else.</span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact Phone</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="las la-phone"></i></span>
                                                                    <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email Address</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="las la-at"></i></span>
                                                                    <input type="text" class="form-control" value="rosa.dodson@demo.com" placeholder="Email" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Website Link</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="la la-globe"></i></span>
                                                                    <input type="text" class="form-control" value=" https://mannatthemes.com/" placeholder="Email" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">USA</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <select class="form-select">
                                                                    <option>London</option>
                                                                    <option>India</option>
                                                                    <option>USA</option>
                                                                    <option>Canada</option>
                                                                    <option>Thailand</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                <button type="submit" class="btn btn-de-primary">Submit</button>
                                                                <button type="button" class="btn btn-de-danger">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!--end col-->
                                            <div class="col-lg-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Change Password</h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body">
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current Password</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" placeholder="Password">
                                                                <a href="#" class="text-primary font-12">Forgot password ?</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New Password</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" placeholder="New Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm Password</label>
                                                            <div class="col-lg-9 col-xl-8">
                                                                <input class="form-control" type="password" placeholder="Re-Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                                <button type="submit" class="btn btn-de-primary">Change Password</button>
                                                                <button type="button" class="btn btn-de-danger">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Other Settings</h4>
                                                    </div><!--end card-header-->
                                                    <div class="card-body">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                                            <label class="form-check-label" for="Email_Notifications">
                                                                Email Notifications
                                                            </label>
                                                            <span class="form-text text-muted font-12 mt-0">Do you need them?</span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                                            <label class="form-check-label" for="API_Access">
                                                                API Access
                                                            </label>
                                                            <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end card-->
                                            </div> <!-- end col -->
                                        </div><!--end row-->
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
    <script src="/libs/tobii/js/tobii.min.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>
    <script>
        const tobii = new Tobii()
    </script>

</body>

</html>