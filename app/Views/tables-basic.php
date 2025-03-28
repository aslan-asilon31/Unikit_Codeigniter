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
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Basic</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Basic Tables</h4>
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
                                <h4 class="card-title">Basic example</h4>
                                <p class="text-muted mb-0">For basic styling—light padding and
                                    only horizontal dividers—add the base class <code>.table</code> to any
                                    <code>&lt;table&gt;</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-centered">
                                        <thead>
                                            <tr>
                                                <th>Compny</th>
                                                <th>Bill</th>
                                                <th>Average Bill</th>
                                                <th>Paid Bill</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="/images/small/project-1.jpg" alt="" class="rounded-circle thumb-xs me-1">
                                                    Micromin
                                                </td>
                                                <td>4</td>
                                                <td>$250</td>
                                                <td>$800</td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="/images/small/project-2.jpg" alt="" class="rounded-circle thumb-xs me-1">
                                                    ZZ Diamond
                                                </td>
                                                <td>2</td>
                                                <td>$180</td>
                                                <td>$400</td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="/images/small/project-3.jpg" alt="" class="rounded-circle thumb-xs me-1">
                                                    Dairy Sweet
                                                </td>
                                                <td>6</td>
                                                <td>$210</td>
                                                <td>$500</td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="/images/small/project-4.jpg" alt="" class="rounded-circle thumb-xs me-1">
                                                    Corner Tea
                                                </td>
                                                <td>3</td>
                                                <td>$80</td>
                                                <td>$350</td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bordered table</h4>
                                <p class="text-muted mb-0">Add <code>.table-bordered</code> for
                                    borders on all sides of the table and cells.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 table-centered">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Order Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#124781</td>
                                                <td>25/11/2018</td>
                                                <td>$321</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#542136</td>
                                                <td>19/11/2018</td>
                                                <td>$227</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#234578</td>
                                                <td>11/10/2018</td>
                                                <td>$442</td>
                                                <td><span class="badge badge-soft-danger">Rejected</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#951357</td>
                                                <td>03/12/2018</td>
                                                <td>$625</td>
                                                <td><span class="badge badge-soft-success">Approved</span></td>
                                                <td class="text-end">
                                                    <div class="dropdown d-inline-block">
                                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-20 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                                            <a class="dropdown-item" href="#">Creat Project</a>
                                                            <a class="dropdown-item" href="#">Open Project</a>
                                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Striped rows</h4>
                                <p class="text-muted mb-0">
                                    Use <code>.table-striped</code> to add zebra-striping to any table row
                                    within the <code>&lt;tbody&gt;</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Email</th>
                                                <th>Contact No</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="/images/users/user-3.jpg" alt="" class="rounded-circle thumb-xs me-1"> Aaron Poulin</td>
                                                <td>Aaron@example.com</td>
                                                <td>+21 21547896</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="/images/users/user-4.jpg" alt="" class="rounded-circle thumb-xs me-1"> Richard Ali</td>
                                                <td>Richard@example.com</td>
                                                <td>+41 21547896</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="/images/users/user-5.jpg" alt="" class="rounded-circle thumb-xs me-1"> Juan Clark</td>
                                                <td>Juan@example.com</td>
                                                <td>+65 21547896</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="/images/users/user-6.jpg" alt="" class="rounded-circle thumb-xs me-1"> Albert Hull</td>
                                                <td>Albert@example.com</td>
                                                <td>+88 21547896</td>
                                                <td class="text-end">
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table head options</h4>
                                <p class="text-muted mb-0">Use one of two modifier classes to make
                                    <code>&lt;thead&gt;</code>s appear light or dark gray.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Access</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span class="badge badge-boxed  badge-outline-success">Business</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span class="badge badge-boxed  badge-outline-warning">Personal</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span class="badge badge-boxed  badge-outline-danger">Disabled</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span class="badge badge-boxed  badge-outline-success">Business</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Jacob</td>
                                                <td>XYZ@Example.com</td>
                                                <td><span class="badge badge-boxed  badge-outline-warning">Personal</span></td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Hoverable rows</h4>
                                <p class="text-muted mb-0">
                                    Use <code>.table-striped</code> to add zebra-striping to any table row
                                    within the <code>&lt;tbody&gt;</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dark table</h4>
                                <p class="text-muted mb-0">Your awesome text goes here.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-dark mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contextual classes</h4>
                                <p class="text-muted mb-0">Use contextual classes to color table rows or individual cells. </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-primary">
                                                <th scope="row">1</th>
                                                <td class="">Mark</td>
                                                <td class="">Otto</td>
                                                <td class="">@mdo</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <th scope="row">3</th>
                                                <td class="">Larry</td>
                                                <td class="">the Bird</td>
                                                <td class="">@twitter</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">4</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr class="table-success">
                                                <th scope="row">5</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">6</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class="table-info">
                                                <th scope="row">7</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">8</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class="table-warning">
                                                <th scope="row">9</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="">
                                                <th scope="row">10</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Captions Table</h4>
                                <p class="text-muted mb-0">A <code> &lt;caption&gt; </code>
                                    functions like a heading for a table.
                                    It helps users with screen readers to find a table and understand
                                    what it’s about and decide if they want to read it.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table mb-0">
                                        <caption>List of users</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Small table</h4>
                                <p class="text-muted mb-0">Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table table-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
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