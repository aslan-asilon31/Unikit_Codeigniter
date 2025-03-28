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
                                    <li class="breadcrumb-item active">Wizard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Wizard</h4>
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
                                <h4 class="card-title">Custom Steps Wizard</h4>
                                <p class="text-muted mb-0">You can use Steps Wizard with Bootstrap 5.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <form action="" method="post" id="custom-step">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab">
                                            <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Seller Details</a>
                                            <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Company Document</a>
                                            <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3">Bank Details</a>
                                            <a class="nav-link" id="step4-tab" data-bs-toggle="tab" href="#step4">Confirm Detail</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane active" id="step1">
                                            <h4 class="card-title mt-3 mb-1">Seller Details</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label text-end">Contact Person</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtLastNameBilling" class="col-lg-3 col-form-label text-end">Mobile No.</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtCompanyBilling" class="col-lg-3 col-form-label text-end">Landline No.</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label text-end">Email Address</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtAddress1Billing" class="col-lg-3 col-form-label text-end">Address 1</label>
                                                        <div class="col-lg-9">
                                                            <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control"></textarea>
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtAddress2Billing" class="col-lg-3 col-form-label text-end">Warehouse Address</label>
                                                        <div class="col-lg-9">
                                                            <textarea id="txtAddress2Billing" name="txtAddress2Billing" rows="4" class="form-control"></textarea>
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtCityBilling" class="col-lg-3 col-form-label text-end">Company Type</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label text-end">Live Market A/C</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtStateProvinceBilling" name="txtStateProvinceBilling" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label text-end">Product Category</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label text-end">Product Sub Category</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="">
                                                <button type="button" id="step1Next" class="btn btn-primary float-end">Next</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="step2">
                                            <h4 class="card-title mt-3 mb-1">Company Document</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtFirstNameShipping" class="col-lg-3 col-form-label text-end">PAN Card</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtLastNameShipping" class="col-lg-3 col-form-label text-end">VAT/TIN No.</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtLastNameShipping" name="txtLastNameShipping" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtCompanyShipping" class="col-lg-3 col-form-label text-end">CST No.</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtCompanyShipping" name="txtCompanyShipping" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label text-end">Service Tax No.</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtEmailAddressShipping" name="txtEmailAddressShipping" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtCityShipping" class="col-lg-3 col-form-label text-end">Company UIN</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label text-end">Declaration</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtStateProvinceShipping" name="txtStateProvinceShipping" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div>
                                                <button type="button" id="step2Prev" class="btn btn-secondary float-start">Previous</button>
                                                <button type="button" id="step2Next" class="btn btn-primary float-end">Next</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="step3">
                                            <h4 class="card-title mt-3 mb-1">Bank Details</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtNameCard" class="col-lg-3 col-form-label text-end">Name on Card</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="ddlCreditCardType" class="col-lg-3 col-form-label text-end">Credit Card Type</label>
                                                        <div class="col-lg-9">
                                                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-select">
                                                                <option value="">--Please Select--</option>
                                                                <option value="AE">American Express</option>
                                                                <option value="VI">Visa</option>
                                                                <option value="MC">MasterCard</option>
                                                                <option value="DI">Discover</option>
                                                            </select>
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtCreditCardNumber" class="col-lg-3 col-form-label text-end">Credit Card Number</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label text-end">Card Verification Number</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtCardVerificationNumber" name="txtCardVerificationNumber" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row mb-2">
                                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label text-end">Expiration Date</label>
                                                        <div class="col-lg-9">
                                                            <input id="txtExpirationDate" name="txtExpirationDate" type="text" class="form-control">
                                                        </div>
                                                    </div><!--end form-group-->
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <div>
                                                <button type="button" id="step3Prev" class="btn btn-secondary float-start">Previous</button>
                                                <button type="button" id="step3Next" class="btn btn-primary float-end">Next</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="step4">
                                            <h4 class="card-title mt-3">Confirm Detail</h4>
                                            <div class="form-check my-2">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree with the Terms and Conditions.
                                                </label>
                                            </div>
                                            <div>
                                                <button type="button" id="step4Prev" class="btn btn-secondary float-start">Previous</button>
                                                <button type="button" id="step4Finish" class="btn btn-danger float-end">Finish</button>
                                            </div>
                                        </div>
                                    </div>
                                </form><!--end form-->
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
    <script src="/pages/form-wizard.js"></script>
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>