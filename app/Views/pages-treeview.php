<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' =>  'Unikit')) ?>

    <link href="/libs/listree/listree.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item active">Treeview</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Treeview</h4>
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
                                <h4 class="card-title">Listree Example</h4>
                                <p class="text-muted mb-0">An extremely lightweight JavaScript library to create a minimal, clean,
                                    collapsible tree structure from nested HTML lists.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">

                                <ul class="listree">
                                    <li>
                                        <div class="listree-submenu-heading">Metrics</div>
                                        <ul class="listree-submenu-items">
                                            <li>
                                                <div class="listree-submenu-heading">Daily Metrics</div>
                                                <ul class="listree-submenu-items">
                                                    <li>
                                                        <div class="listree-submenu-heading">Daily Order Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Daily order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Categorywise daily order count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Categorywise daily bookings</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Daily order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Storewise daily order count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Storewise daily bookings</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="listree-submenu-heading">Daily Invoice Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Daily invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Categorywise daily invoice count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Categorywise daily revenue</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Daily invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Storewise daily invoice count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Storewise daily revenue</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="listree-submenu-heading">Monthly Metrics</div>
                                                <ul class="listree-submenu-items">
                                                    <li>
                                                        <div class="listree-submenu-heading">Monthly Order Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Monthly order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Categorywise monthly order count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Categorywise monthly bookings</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Monthly order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Storewise monthly order count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Storewise monthly bookings</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="listree-submenu-heading">Monthly Invoice Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Monthly invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Categorywise monthly invoice count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Categorywise monthly revenue</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Monthly invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Storewise monthly invoice count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Storewise monthly revenue</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="listree-submenu-heading">Settings</div>
                                        <ul class="listree-submenu-items">
                                            <li>
                                                <div class="listree-submenu-heading">Personal Settings</div>
                                                <ul class="listree-submenu-items">
                                                    <li><a href="">Password Settings</a></li>
                                                    <li><a href="">Viewing Preferences</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="listree-submenu-heading">Org Settings</div>
                                                <ul class="listree-submenu-items">
                                                    <li><a href="">Teams</a></li>
                                                    <li><a href="">Billing</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>


                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listree Custom Folder Icon</h4>
                                <p class="text-muted mb-0">An extremely lightweight JavaScript library to create a minimal, clean,
                                    collapsible tree structure from nested HTML lists.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">

                                <ul class="listree folder-icon">
                                    <li>
                                        <div class="listree-submenu-heading">Metrics</div>
                                        <ul class="listree-submenu-items">
                                            <li>
                                                <div class="listree-submenu-heading">Daily Metrics</div>
                                                <ul class="listree-submenu-items">
                                                    <li>
                                                        <div class="listree-submenu-heading">Daily Order Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Daily order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Categorywise daily order count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Categorywise daily bookings</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Daily order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Storewise daily order count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Storewise daily bookings</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="listree-submenu-heading">Daily Invoice Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Daily invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Categorywise daily invoice count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Categorywise daily revenue</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Daily invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Storewise daily invoice count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Storewise daily revenue</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="listree-submenu-heading">Monthly Metrics</div>
                                                <ul class="listree-submenu-items">
                                                    <li>
                                                        <div class="listree-submenu-heading">Monthly Order Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Monthly order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Categorywise monthly order count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Categorywise monthly bookings</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Monthly order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Storewise monthly order count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Storewise monthly bookings</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="listree-submenu-heading">Monthly Invoice Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Monthly invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Categorywise monthly invoice count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Categorywise monthly revenue</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Monthly invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                    <li>
                                                                        <a href="">Storewise monthly invoice count</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="">Storewise monthly revenue</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="listree-submenu-heading">Settings</div>
                                        <ul class="listree-submenu-items">
                                            <li>
                                                <div class="listree-submenu-heading">Personal Settings</div>
                                                <ul class="listree-submenu-items">
                                                    <li><a href="">Password Settings</a></li>
                                                    <li><a href="">Viewing Preferences</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="listree-submenu-heading">Org Settings</div>
                                                <ul class="listree-submenu-items">
                                                    <li><a href="">Teams</a></li>
                                                    <li><a href="">Billing</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
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
    <script src="/libs/listree/listree.umd.min.js"></script>
    <script src="/pages/tree.init.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>