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
                                    <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                    <li class="breadcrumb-item active">Invoice</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Invoice</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-body invoice-head">
                                <div class="row">
                                    <div class="col-md-4 align-self-center">
                                        <img src="/images/logo-sm.png" alt="logo-small" class="logo-sm me-1" height="24">
                                        <img src="/images/logo-dark.png" alt="logo-large" class="logo-lg brand-dark" height="16">
                                        <img src="/images/logo.png" alt="logo-large" class="logo-lg brand-light" height="16">
                                        <p class="mt-2 mb-0 text-muted">If account is not paid within 7 days the credits details supplied as confirmation.</p>
                                    </div><!--end col-->
                                    <div class="col-md-8">

                                        <ul class="list-inline mb-0 contact-detail float-end">
                                            <li class="list-inline-item">
                                                <div class="ps-3">
                                                    <i class="mdi mdi-web"></i>
                                                    <p class="text-muted mb-0">www.abcdefghijklmno.com</p>
                                                    <p class="text-muted mb-0">www.qrstuvwxyz.com</p>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="ps-3">
                                                    <i class="mdi mdi-phone"></i>
                                                    <p class="text-muted mb-0">+123 123456789</p>
                                                    <p class="text-muted mb-0">+123 123456789</p>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="ps-3">
                                                    <i class="mdi mdi-map-marker"></i>
                                                    <p class="text-muted mb-0">2821 Kensington Road,</p>
                                                    <p class="text-muted mb-0">Avondale Estates, GA 30002 USA.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                            <div class="card-body">
                                <div class="row row-cols-3 d-flex justify-content-md-between">
                                    <div class="col-md-3 d-print-flex">
                                        <div class="">
                                            <h6 class="mb-0"><b>Order Date :</b> 11/05/2021</h6>
                                            <h6><b>Order ID :</b> # 23654789</h6>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-3 d-print-flex">
                                        <div class="">
                                            <address class="font-13">
                                                <strong class="font-14">Billed To :</strong><br>
                                                Joe Smith<br>
                                                795 Folsom Ave<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-3 d-print-flex">
                                        <div class="">
                                            <address class="font-13">
                                                <strong class="font-14">Shipped To:</strong><br>
                                                Joe Smith<br>
                                                795 Folsom Ave<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>
                                        </div>
                                    </div> <!--end col-->
                                </div><!--end row-->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive project-invoice">
                                            <table class="table table-bordered mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Project Breakdown</th>
                                                        <th>Hours</th>
                                                        <th>Rate</th>
                                                        <th>Subtotal</th>
                                                    </tr><!--end tr-->
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="mt-0 mb-1 font-14">Project Design</h5>
                                                            <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                        </td>
                                                        <td>60</td>
                                                        <td>$50</td>
                                                        <td>$3000.00</td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td>
                                                            <h5 class="mt-0 mb-1 font-14">Development</h5>
                                                            <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                        </td>
                                                        <td>100</td>
                                                        <td>$50</td>
                                                        <td>$5000.00</td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <td>
                                                            <h5 class="mt-0 mb-1 font-14">Testing & Bug Fixing</h5>
                                                            <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                                        </td>
                                                        <td>10</td>
                                                        <td>$20</td>
                                                        <td>$200.00</td>
                                                    </tr><!--end tr-->

                                                    <tr>
                                                        <td colspan="2" class="border-0"></td>
                                                        <td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
                                                        <td class="border-0 font-14 text-dark"><b>$82,000.00</b></td>
                                                    </tr><!--end tr-->
                                                    <tr>
                                                        <th colspan="2" class="border-0"></th>
                                                        <td class="border-0 font-14 text-dark"><b>Tax Rate</b></td>
                                                        <td class="border-0 font-14 text-dark"><b>$0.00%</b></td>
                                                    </tr><!--end tr-->
                                                    <tr class="bg-black text-white">
                                                        <th colspan="2" class="border-0"></th>
                                                        <td class="border-0 font-14"><b>Total</b></td>
                                                        <td class="border-0 font-14"><b>$82,000.00</b></td>
                                                    </tr><!--end tr-->
                                                </tbody>
                                            </table><!--end table-->
                                        </div> <!--end /div-->
                                    </div> <!--end col-->
                                </div><!--end row-->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5 class="mt-4">Terms And Condition :</h5>
                                        <ul class="ps-3">
                                            <li><small class="font-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                            <li><small class="font-12">To be paid by cheque or credit card or direct payment online.</small></li>
                                            <li><small class="font-12"> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>
                                        </ul>
                                    </div> <!--end col-->
                                    <div class="col-lg-6 align-self-center">
                                        <div class="float-none float-md-end" style="width: 30%;">
                                            <small>Account Manager</small>
                                            <img src="/images/signature.png" alt="" class="mt-2 mb-1" height="20">
                                            <p class="border-top">Signature</p>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <hr>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                        <div class="text-center"><small class="font-12">Thank you very much for doing business with us.</small></div>
                                    </div><!--end col-->
                                    <div class="col-lg-12 col-xl-4">
                                        <div class="float-end d-print-none mt-2 mt-md-0">
                                            <a href="javascript:window.print()" class="btn btn-info btn-sm">Print</a>
                                            <a href="#" class="btn btn-primary btn-sm">Submit</a>
                                            <a href="#" class="btn btn-danger btn-sm">Cancel</a>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
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



    <!-- javascript  -->
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>