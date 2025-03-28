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
                                    <li class="breadcrumb-item active">Files</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Files</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Categories</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <!-- <i class="las la-menu align-self-center text-muted icon-xs"></i>  -->
                                                <i class="mdi mdi-dots-horizontal text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Create Folder</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                                <a class="dropdown-item" href="#">Settings</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="files-nav">
                                    <div class="nav flex-column nav-pills" id="files-tab" aria-orientation="vertical">
                                        <a class="nav-link active" id="files-projects-tab" data-bs-toggle="pill" href="#files-projects" aria-selected="true">

                                            <i data-feather="folder" class="align-self-center icon-dual-file icon-sm me-2"></i>
                                            <div class="d-inline-block align-self-center">
                                                <h5 class="m-0">Projects</h5>
                                                <small>80GB/200GB Used</small>
                                            </div>
                                        </a>
                                        <a class="nav-link" id="files-pdf-tab" data-bs-toggle="pill" href="#files-pdf" aria-selected="false">
                                            <i data-feather="folder" class="align-self-center icon-dual-file icon-sm me-2"></i>
                                            <div class="d-inline-block align-self-center">
                                                <h5 class="m-0">Pdf Files</h5>
                                                <small>80GB/200GB Used</small>
                                            </div>
                                        </a>
                                        <a class="nav-link  align-items-center" id="files-documents-tab" data-bs-toggle="pill" href="#files-documents" aria-selected="false">
                                            <i data-feather="folder" class="align-self-center icon-dual-file icon-sm me-2"></i>
                                            <div class="d-inline-block align-self-center">
                                                <h5 class="m-0">Documents</h5>
                                                <small>80GB/200GB Used</small>
                                            </div>
                                            <span class="badge bg-success ms-auto font-10">8</span>
                                        </a>
                                        <a class="nav-link mb-0" href="#" data-bs-toggle="modal" data-animation="bounce" data-bs-target=".hide-modal">
                                            <i data-feather="lock" class="align-self-center icon-dual-file icon-sm me-2"></i>
                                            <div class="d-inline-block align-self-center">
                                                <h5 class="m-0">Files Lock</h5>
                                                <small>80GB/200GB Used</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-body">
                                <small class="float-end">62%</small>
                                <h6 class="mt-0">620GB / 1TB Used</h6>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-9">
                        <div class="">
                            <div class="tab-content" id="files-tabContent">
                                <div class="float-end">
                                    <div class="add-file btn btn-primary position-relative overflow-hidden">
                                        <i class="las la-cloud-upload-alt me-2 font-15"></i>Upload File
                                        <input type="file" name="file" class="add-file-input" />
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="files-projects">
                                    <h4 class="card-title mt-0 mb-3">Projects</h4>
                                    <div class="file-box-content">
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-alt text-primary"></i>
                                                <h6 class="text-truncate">Admin_Panel</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-code text-danger"></i>
                                                <h6 class="text-truncate">Ecommerce.pdf</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-code text-warning"></i>
                                                <h6 class="text-truncate">Payment_app.zip</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file text-secondary"></i>
                                                <h6 class="text-truncate">App_landing_001</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="card-title my-3">Freelancing Projects</h4>
                                        </div>
                                    </div>
                                    <div class="file-box-content">
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-alt text-primary"></i>
                                                <h6 class="text-truncate">Admin_Panel</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-code text-info"></i>
                                                <h6 class="text-truncate">Ecommerce.pdf</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end tab-pane-->

                                <div class="tab-pane fade" id="files-pdf">
                                    <h4 class="mt-0 card-title mb-3">PDF Files</h4>
                                    <div class="file-box-content">
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-info"></i>
                                                <h6 class="text-truncate">Admin_Panel</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-danger"></i>
                                                <h6 class="text-truncate">Ecommerce.pdf</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-code text-warning"></i>
                                                <h6 class="text-truncate">Payment_app.zip</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-secondary"></i>
                                                <h6 class="text-truncate">App_landing_001.pdf</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end tab-pane-->

                                <div class="tab-pane fade" id="files-documents">
                                    <h4 class="mt-0 card-title mb-3">Documents</h4>
                                    <div class="file-box-content">
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-info"></i>
                                                <h6 class="text-truncate">Adharcard_update</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-danger"></i>
                                                <h6 class="text-truncate">Pancard</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-warning"></i>
                                                <h6 class="text-truncate">ICICI_statment</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-secondary"></i>
                                                <h6 class="text-truncate">March_Invoice</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="card-title my-3">Company Documents</h4>
                                        </div>
                                    </div>
                                    <div class="file-box-content">
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-success"></i>
                                                <h6 class="text-truncate">Adharcard_update</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-pink"></i>
                                                <h6 class="text-truncate">Pancard</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-purple"></i>
                                                <h6 class="text-truncate">ICICI_statment</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="card-title my-3">Personal Documents</h4>
                                        </div>
                                    </div>
                                    <div class="file-box-content">
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-blue"></i>
                                                <h6 class="text-truncate">Adharcard_update</h6>
                                                <small class="text-muted">06 March 2021 / 5MB</small>
                                            </div>
                                        </div>
                                        <div class="file-box">
                                            <a href="#" class="download-icon-link">
                                                <i class="las la-download file-download-icon"></i>
                                            </a>
                                            <div class="text-center">
                                                <i class="lar la-file-pdf text-dark"></i>
                                                <h6 class="text-truncate">Pancard</h6>
                                                <small class="text-muted">15 March 2021 / 8MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end tab-pen-->

                                <div class="tab-pane fade" id="files-hide">
                                    <h4 class="mt-0 card-title mb-3">Hide</h4>
                                </div><!--end tab-pane-->
                            </div> <!--end tab-content-->
                        </div><!--end card-body-->
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
    <div class="modal fade hide-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title mt-0" id="exampleModalLabel">Enter Password</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="index.html">
                        <div class="mb-4 mt-2 ">
                            <span class="thumb-xl justify-content-center d-flex align-items-center bg-soft-danger rounded-circle mx-auto"><i class="las la-lock"></i></span>
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="HideCard">
                            <button class="btn btn-de-primary" type="button" id="HideCard"><i class="las la-key"></i></button>
                        </div>
                        <div class="text-end mt-1">
                            <a href="#" class="text-primary font-12"><i class="las la-lock"></i> Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Javascript  -->
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>