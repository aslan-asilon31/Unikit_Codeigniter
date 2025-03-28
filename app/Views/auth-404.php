<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Unikit")) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body id="body" class="auth-page" style="background-image: url('/images/p-1.png'); background-size: cover; background-position: center center;">
    <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="/" class="logo logo-admin">
                                            <img src="/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Oops! Sorry page does not found</h4>
                                        <p class="text-muted  mb-0">Back to dashboard of Unikit.</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="ex-page-content text-center">
                                        <img src="/images/error.svg" alt="0" class="" height="170">
                                        <h1 class="mt-5 mb-4">404!</h1>
                                        <h5 class="font-16 text-muted mb-5">Somthing went wrong</h5>
                                    </div>
                                    <a class="btn btn-primary w-100" href="/">Back to Dashboard <i class="fas fa-redo ml-1"></i></a>
                                </div><!--end card-body-->
                                <div class="card-body bg-light-alt text-center">
                                    &copy; <script>
                                        document.write(new Date().getFullYear())
                                    </script> Unikit
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>