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
                                    <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                    <li class="breadcrumb-item active">Navbar</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Navbar</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Navbar</h4>
                                <p class="text-muted mb-0">Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar.
                                    Includes support for branding, navigation, and more, including support for our collapse plugin.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown <i class="la la-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="btn btn-soft-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end container-->
                                </nav> <!--end nav-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Navbar with Brand Image</h4>
                                <p class="text-muted mb-0">Adding images to the <code>.navbar-brand</code> will likely always require custom styles or utilities to properly size.
                                    Here are some examples to demonstrate.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">
                                            <img src="/images/logo-sm.png" height="26" alt="" class="mr-1">
                                        </a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown <i class="la la-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="btn btn-soft-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end container-->
                                </nav> <!--end nav-->
                                <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">
                                            <img src="/images/logo-sm.png" height="26" alt="" class="mr-1">
                                            <img src="/images/logo-dark.png" height="16" alt="">
                                        </a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown <i class="la la-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="btn btn-soft-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end container-->
                                </nav> <!--end nav-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Theme colors</h4>
                                <p class="text-muted mb-0">Theming the navbar has never been easier thanks to the combination of theming classes and
                                    <code class="highlighter-rouge">background-color</code> utilities.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent4">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown <i class="la la-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="btn btn-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end container-->
                                </nav> <!--end nav-->
                                <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-2">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent5" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent5">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown <i class="la la-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end container-->
                                </nav> <!--end nav-->
                                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent6">
                                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Link</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown <i class="la la-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                </li>
                                            </ul>
                                            <form class="d-flex">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <button class="btn btn-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end container-->
                                </nav> <!--end nav-->
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

</html>