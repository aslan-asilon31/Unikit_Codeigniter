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
                                    <li class="breadcrumb-item active">Lists</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Lists</h4>
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
                                <h4 class="card-title">Basic Example</h4>
                                <p class="text-muted mb-0">List groups are a flexible and powerful component for displaying a series of content.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-group">
                                            <li class="list-group-item"><i class="la la-check text-success me-2"></i>Cras justo odio</li>
                                            <li class="list-group-item"><i class="la la-check text-success me-2"></i>Dapibus ac facilisis in</li>
                                            <li class="list-group-item"><i class="la la-check text-success me-2"></i>Morbi leo risus</li>
                                            <li class="list-group-item disabled"><i class="la la-check text-success me-2"></i>Disabled</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Active items</h4>
                                <p class="text-muted mb-0">Add <code> .active </code> to a <code> .list-group-item </code> to indicate the current active selection.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-group">
                                            <li class="list-group-item"><i class="la la-arrow-right text-secondary me-2"></i>Cras justo odio</li>
                                            <li class="list-group-item active"><i class="la la-arrow-right text-secondary me-2"></i>Dapibus ac facilisis in</li>
                                            <li class="list-group-item"><i class="la la-arrow-right text-secondary me-2"></i>Morbi leo risus</li>
                                            <li class="list-group-item"><i class="la la-arrow-right text-secondary me-2"></i>Porta ac consectetur ac</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Links and buttons</h4>
                                <p class="text-muted mb-0">Uses <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code>s to create actionable list group itemswith hover and active states by adding <code>.list-group-item-action</code>.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="list-group">
                                            <button type="button" class="list-group-item list-group-item-action active">
                                                <i class="la la-hand-o-right text-white me-2"></i>Button Active
                                            </button>
                                            <button type="button" class="list-group-item list-group-item-action"><i class="la la-hand-o-right text-primary me-2"></i>Button</button>
                                            <a href="#" class="list-group-item list-group-item-action"><i class="la la-hand-o-right text-primary me-2"></i>Link</a>
                                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"><i class="la la-hand-o-right text-primary me-2"></i>Link disabled</a>
                                        </div><!--end list-group-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Flush</h4>
                                <p class="text-muted mb-0">Add <code> .list-group-flush </code>to remove some borders and rounded corners.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Cras justo odio</li>
                                            <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Dapibus ac facilisis in</li>
                                            <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Morbi leo risus</li>
                                            <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Vestibulum at eros</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal</h4>
                                <p class="text-muted mb-0">Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <ul class="list-group list-group-horizontal-md">
                                            <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Cras justo</li>
                                            <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Dapibus</li>
                                            <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Morbi leo</li>
                                        </ul><!--end list-group-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">With badges</h4>
                                <p class="text-muted mb-0">Add badges to any list group item to show unread counts, activity.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="la la-check text-muted font-16 me-2"></i>Cras justo odio
                                                </div>
                                                <span class="badge badge-outline-primary badge-pill">4</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="la la-bell text-muted font-18 me-2"></i>New Notifications
                                                </div>

                                                <span class="badge badge-outline-secondary badge-pill">New</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="la la-money text-muted font-16 me-2"></i>Payment Successfull
                                                </div>
                                                <span class="badge badge-outline-success badge-pill">Successfully</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="la la-warning text-muted font-16 me-2"></i>Payment pending
                                                </div>
                                                <span class="badge badge-outline-warning">Pending</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <i class="la la-comments text-muted font-16 me-2"></i>Good Morning!
                                                </div>
                                                <span class="badge badge-outline-info badge-pill">1</span>
                                            </li>
                                        </ul><!--end list-group-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contextual classes</h4>
                                <p class="text-muted mb-0">Use contextual classes to style list items with a stateful background and color.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-group">
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                                            <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                                            <li class="list-group-item list-group-item-success">A simple success list group item</li>
                                            <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                                            <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                                            <li class="list-group-item list-group-item-info">A simple info list group item</li>
                                            <li class="list-group-item list-group-item-light">A simple light list group item</li>
                                            <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>