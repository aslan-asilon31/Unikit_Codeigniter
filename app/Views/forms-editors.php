<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Unikit")) ?>

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
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Editor</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Editor</h4>
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
                                <h4 class="card-title">TinyMCE Editor</h4>
                                <p class="text-muted mb-0">Bootstrap-wysihtml5 is a javascript
                                    plugin that makes it easy to create simple, beautiful wysiwyg editors
                                    with the help of wysihtml5 and Twitter Bootstrap.
                                </p>  
                            </div><!--end card-header-->
                            <div class="card-body">                                                  
                                <form method="post">
                                    <textarea id="basic-conf">Hello, World!</textarea>
                                </form>        
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
    <script src="/libs/tinymce/tinymce.min.js"></script>
    <script src="/pages/form-editor.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>