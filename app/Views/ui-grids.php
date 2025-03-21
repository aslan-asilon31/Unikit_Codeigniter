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
                                    <li class="breadcrumb-item active">Grid</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Grid</h4>
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
                                <h4 class="card-title">Grid options</h4>
                                <p class="text-muted mb-0">See how aspects of the Bootstrap grid
                                    system work across multiple devices with a handy table.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-centered">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">
                                                    xs<br>
                                                    <span class="fw-normal">&lt;576px</span>
                                                </th>
                                                <th scope="col">
                                                    sm<br>
                                                    <span class="fw-normal">≥576px</span>
                                                </th>
                                                <th scope="col">
                                                    md<br>
                                                    <span class="fw-normal">≥768px</span>
                                                </th>
                                                <th scope="col">
                                                    lg<br>
                                                    <span class="fw-normal">≥992px</span>
                                                </th>
                                                <th scope="col">
                                                    xl<br>
                                                    <span class="fw-normal">≥1200px</span>
                                                </th>
                                                <th scope="col">
                                                    xxl<br>
                                                    <span class="fw-normal">≥1400px</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Container <code class="fw-normal">max-width</code></th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                                <td>1320px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                                <td><code>.col-xl-</code></td>
                                                <td><code>.col-xxl-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="6">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="6">1.5rem (.75rem on left and right)</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Custom gutters</th>
                                                <td colspan="6"><a href="#">Yes</a></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Nestable</th>
                                                <td colspan="6"><a href="#">Yes</a></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Column ordering</th>
                                                <td colspan="6"><a href="#">Yes</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sm Grid-Example</h4>
                                <p class="text-muted mb-0">Columns collapse at 576px</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-sm-3"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-sm-3</span></div>
                                    <div class="col-sm-3"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-sm-3</span></div>
                                    <div class="col-sm-3"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-sm-3</span></div>
                                    <div class="col-sm-3"><span class="border py-2 bg-light d-block">.col-sm-3</span></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Md Grid-Example</h4>
                                <p class="text-muted mb-0">Columns collapse at 768px</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-md-3"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-md-3</span></div>
                                    <div class="col-md-6"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-md-6</span></div>
                                    <div class="col-md-3"><span class="border py-2 bg-light d-block">.col-md-3</span></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lg Grid-Example</h4>
                                <p class="text-muted mb-0">Columns collapse at 992px</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-lg-6"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-lg-6</span></div>
                                    <div class="col-lg-6"><span class="border py-2 bg-light d-block">.col-lg-6</span></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Xl Grid-Example</h4>
                                <p class="text-muted mb-0">Columns collapse at 1200px</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row  text-center">
                                    <div class="col-lg-4"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-xl-4</span></div>
                                    <div class="col-lg-4"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-xl-4</span></div>
                                    <div class="col-lg-4"><span class="border py-2 bg-light d-block">.col-xl-4</span></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">XXl Grid-Example</h4>
                                <p class="text-muted mb-0">Columns collapse at 1400px</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row  text-center">
                                    <div class="col-xxl-6"><span class="border py-2 bg-light d-block mb-2 mb-lg-0">.col-xxl-6</span></div>
                                    <div class="col-xxl-6"><span class="border py-2 bg-light d-block">.col-xxl-6</span></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Grid-Example</h4>
                                <p class="text-muted mb-0">Using a single set of <code>.col-sm-*</code> classes, you can create a basic grid system that starts out stacked on extra small devices before becoming horizontal on desktop (medium) devices.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                        <div class="col-sm-1"><span class="border py-2 bg-light d-block mb-2">.col-sm-1</span></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2"><span class="border py-2 bg-light d-block mb-2">.col-sm-2</span></div>
                                        <div class="col-sm-2"><span class="border py-2 bg-light d-block mb-2">.col-sm-2</span></div>
                                        <div class="col-sm-2"><span class="border py-2 bg-light d-block mb-2">.col-sm-2</span></div>
                                        <div class="col-sm-2"><span class="border py-2 bg-light d-block mb-2">.col-sm-2</span></div>
                                        <div class="col-sm-2"><span class="border py-2 bg-light d-block mb-2">.col-sm-2</span></div>
                                        <div class="col-sm-2"><span class="border py-2 bg-light d-block mb-2">.col-sm-2</span></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3"><span class="border py-2 bg-light d-block mb-2">.col-sm-3</span></div>
                                        <div class="col-sm-3"><span class="border py-2 bg-light d-block mb-2">.col-sm-3</span></div>
                                        <div class="col-sm-3"><span class="border py-2 bg-light d-block mb-2">.col-sm-3</span></div>
                                        <div class="col-sm-3"><span class="border py-2 bg-light d-block mb-2">.col-sm-3</span></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4"><span class="border py-2 bg-light d-block mb-2">.col-sm-4</span></div>
                                        <div class="col-sm-4"><span class="border py-2 bg-light d-block mb-2">.col-sm-4</span></div>
                                        <div class="col-sm-4"><span class="border py-2 bg-light d-block mb-2">.col-sm-4</span></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6"><span class="border py-2 bg-light d-block mb-2">.col-sm-6</span></div>
                                        <div class="col-sm-6"><span class="border py-2 bg-light d-block mb-2">.col-sm-6</span></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12"><span class="border py-2 bg-light d-block">.col-sm-12</span></div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Offset (Max-Auto)</h4>
                                <p class="text-muted mb-0">Move columns to the right using <code>.offset-md-*</code> classes.
                                    These classes increase the left margin of a column by * columns.
                                    For example, <code>.offset-md-4</code> moves <code>.col-md-4</code> over four columns.
                                    With the move to flexbox in v4, you can use margin utilities like <code>.mr-auto</code>
                                    to force sibling columns away from one another.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-sm-8 offset-sm-2"><span class="border py-2 bg-light d-block mb-2">.col-sm-8 offset-sm-2</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 ml-auto"><span class="border py-2 bg-light d-block mb-2">.col-sm-3 ml-auto</span></div>
                                        <div class="col-sm-3 ml-auto"><span class="border py-2 bg-light d-block mb-2">.col-sm-3 ml-auto</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"><span class="border py-2 bg-light d-block mb-2">.col-sm-3</span></div>
                                        <div class="col-sm-3 offset-sm-3"><span class="border py-2 bg-light d-block mb-2">.col-sm-3 offset-sm-3</span></div>
                                    </div>
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
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>