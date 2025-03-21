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
                                    <li class="breadcrumb-item active">Clip Board</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Clip Board</h4>
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
                                <h4 class="card-title">Clipboard Examples</h4>
                                <p class="text-muted mb-0">Inpu example of clipboard</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="clipboardInput" value="Welcome toUnikit!" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-de-secondary " type="button" id="button-addon2" data-clipboard-action="copy" data-clipboard-target="#clipboardInput"><i class="far fa-copy me-2"></i>Copy</button>
                                    <button class="btn btn-de-primary " type="button" id="button-addon3" data-clipboard-action="cut" data-clipboard-target="#clipboardInput"><i class="fas fa-cut me-2"></i>Cut</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clipboard Examples of Paragraph</h4>
                                <p class="text-muted mb-0">Paragraph example of clipboard</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <p id="clipboardParagraph" class="border p-3">Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                    a Latin professor at Hampden-Sydney College in Virginia, looked
                                </p>
                                <div class="mt-3">
                                    <button type="button" class="btn btn-de-secondary btn-sm btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardParagraph"><i class="far fa-copy me-2"></i>Copy</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clipboard Examples of Textarea</h4>
                                <p class="text-muted mb-0">Textarea example of clipboard</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <textarea class="form-control" rows="3" id="clipboardTextarea">Welcome toUnikit !</textarea>
                                <div class="mt-3">
                                    <button type="button" class="btn btn-de-secondary btn-sm btn-clipboard" data-clipboard-action="copy" data-clipboard-target="#clipboardTextarea"><i class="far fa-copy me-2"></i>Copy</button>
                                    <button type="button" class="btn btn-de-primary btn-sm btn-clipboard" data-clipboard-action="cut" data-clipboard-target="#clipboardTextarea"><i class="fas fa-cut me-2"></i>Cut</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

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
    <script src="/libs/clipboard/clipboard.min.js"></script>
    <script src="/pages/clipboard.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>