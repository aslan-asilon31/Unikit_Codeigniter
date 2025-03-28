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
                                    <li class="breadcrumb-item active">Cards</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Cards</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-fluid bg-light-alt" src="/images/small/img-4.jpg" alt="Card image cap">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Card title</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <img class="rounded-circle" src="/images/users/user-7.jpg" alt="" height="24">
                                        <span class="badge badge-outline-light">30 May 2020</span>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <p class="card-text text-muted ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-de-primary btn-sm">Go somewhere</a>
                            </div><!--end card -body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Card Body</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="card-body border">
                                    <p class="card-subtitle font-14 mb-2">This is the card subtitle</p>
                                    <p class="card-text text-muted">Some quick example text the bulk of the card's content.
                                        It is a long established fact that a reader will be distracted by the readable
                                        content.
                                    </p>
                                </div>
                            </div><!--end card -body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Titles, text, and links</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <h6 class="card-subtitle font-14 mb-2 font-weight-normal">This is the card subtitle</h6>
                                <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link text-primary">Card link</a>
                                <a href="#" class="card-link text-primary">Another link</a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Kitchen sink</h4>
                            </div><!--end card-header-->
                            <div class="card-body pb-0">
                                <p class="mb-0 text-muted font-13">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div><!--end card -body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4 class="card-title text-white">Header - Primary</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div><!--end card-body-->
                            <p class="card-footer bg-light-alt m-0">Footer - 2020 Unikit</p>
                        </div><!--end card-->

                    </div><!--end col-->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <blockquote class="card-bodyquote mb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                        erat a amet, consectetur adipiscing elit ante.</p>
                                    <footer class="blockquote-footer font-14">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote>
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Group</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <ul class="list-group list-group-flush border">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-3 align-self-center text-center">
                                    <img class="" height="80" src="/images/small/btc.png" alt="Card image">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title">Card title</h4>
                                            </div><!--end col-->
                                            <div class="col-auto">
                                                <img class="rounded-circle" src="/images/users/user-7.jpg" alt="" height="24">
                                                <span class="badge badge-outline-light">30 May 2020</span>
                                            </div><!--end col-->
                                        </div> <!--end row-->
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                            er card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div><!--end card-body-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Active</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <h5 class="card-title mb-2">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-de-primary btn-sm">Go somewhere</a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-9">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h4 class="card-title">Card title</h4>
                                            </div><!--end col-->
                                            <div class="col-auto">
                                                <img class="rounded-circle" src="/images/users/user-7.jpg" alt="" height="24">
                                                <span class="badge badge-outline-light">30 May 2020</span>
                                            </div><!--end col-->
                                        </div> <!--end row-->
                                    </div><!--end card-header-->
                                    <div class="card-body">
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                            er card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div><!--end card-body-->
                                </div><!--end col-->
                                <div class="col-md-3 align-self-center text-center">
                                    <img class="" height="80" src="/images/small/btc.png" alt="Card image">
                                </div>
                            </div><!--end row-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Special title treatment</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-de-primary btn-sm">Go somewhere</a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card text-center">
                            <div class="card-header">
                                <h4 class="card-title">Special title treatment</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-de-primary btn-sm">Go somewhere</a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card text-end">
                            <div class="card-header">
                                <h4 class="card-title">Special title treatment</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <p class="card-text text-muted ">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-de-primary btn-sm">Go somewhere</a>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-group mb-3">
                            <div class="card">
                                <img class="img-fluid bg-light-alt" src="/images/small/ex-card.png" alt="Card image">
                                <div class="card-header">
                                    <h4 class="card-title">Card Groups Example</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <p class="card-text">This is a wider card supporting text below to content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <img class="img-fluid bg-light-alt" src="/images/small/ex-card.png" alt="Card image">
                                <div class="card-header">
                                    <h4 class="card-title">Card Groups Example</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <p class="card-text">This is a wider card supporting text below to content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="card">
                                <img class="img-fluid bg-light-alt" src="/images/small/ex-card.png" alt="Card image">
                                <div class="card-header">
                                    <h4 class="card-title">Card Groups Example</h4>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <p class="card-text">This is a wider card supporting text below to content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end card-group-->
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 bg-light-alt align-self-center">
                                    <img src="/images/small/ex-card.png" alt="..." class="img-fluid bg-light-alt">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text mb-0">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text mb-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="row row-cols-1 row-cols-md-2 gx-3">
                            <div class="col">
                                <div class="card">
                                    <img src="/images/small/ex-card.png" class="card-img-top bg-light-alt" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col">
                                <div class="card">
                                    <img src="/images/small/ex-card.png" class="card-img-top bg-light-alt" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col">
                                <div class="card">
                                    <img src="/images/small/ex-card.png" class="card-img-top bg-light-alt" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class="col">
                                <div class="card">
                                    <img src="/images/small/ex-card.png" class="card-img-top bg-light-alt" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->
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
    <script>
        var entityMap = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;',
            '/': '&#x2F;',
            '`': '&#x60;',
            '=': '&#x3D;'
        };

        function escapeHtml(string) {
            return String(string).replace(/[&<>"'`=\/]/g, function(s) {
                return entityMap[s];
            });
        }

        for (e of document.getElementsByClassName('escape')) {
            e.innerHTML = escapeHtml(e.innerHTML).trim();
        }
    </script>

</body>

</html>