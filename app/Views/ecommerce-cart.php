<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view("partials/title-meta", array("title" => "Unikit")) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-tab-menu -->
    <?= $this->include('partials/left-sidebar') ?>
    <!-- end leftbar-tab-menu-->

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
                                    <li class="breadcrumb-item"><a href="#">Unikit</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Ecommerce</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Cart</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Cart</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Shopping Cart</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <p class="mb-4 text-muted">Unikit morden shopping cart.</p>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="/images/products/01.png" alt="" height="40" class="me-2">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</a>
                                                        <br>
                                                        <span class="text-muted font-13">size-08 (Model 2019)</span>
                                                    </p>
                                                </td>
                                                <td>$99</td>
                                                <td>
                                                    <input class="form-control w-25" type="number" value="2" id="example-number-input1">
                                                </td>
                                                <td>$198</td>
                                                <td>
                                                    <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="/images/products/04.png" alt="" height="40" class="me-2">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Red Morden Chair</a>
                                                        <br>
                                                        <span class="text-muted font-13">size-06 (Model 2019)</span>
                                                    </p>
                                                </td>
                                                <td>$75</td>
                                                <td>
                                                    <input class="form-control w-25" type="number" value="2" id="example-number-input2">
                                                </td>
                                                <td>$150</td>
                                                <td>
                                                    <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="/images/products/06.png" alt="" height="40" class="me-2">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Lava Purse</a>
                                                        <br>
                                                        <span class="text-muted font-13">Pure Lether 100%(Model 2019)</span>
                                                    </p>
                                                </td>
                                                <td>$49</td>
                                                <td>
                                                    <input class="form-control w-25" type="number" value="1" id="example-number-input3">
                                                </td>
                                                <td>$49</td>
                                                <td>
                                                    <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="/images/products/07.png" alt="" height="40" class="me-2">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name">Important Chair</a>
                                                        <br>
                                                        <span class="text-muted font-13">size-07 (Model 2019)</span>
                                                    </p>
                                                </td>
                                                <td>$99</td>
                                                <td>
                                                    <input class="form-control w-25" type="number" value="1" id="example-number-input4">
                                                </td>
                                                <td>$99</td>
                                                <td>
                                                    <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-6 align-self-center">
                                        <div class="text-center cart-promo">
                                            <img src="/images/logo-sm.png" alt="" height="50" class="mb-2">
                                            <h4 class="">Have a promo code ?</h4>
                                            <p class="font-13">If you have a promocode, You can take discount !</p>
                                            <div class="input-group w-75 mx-auto">
                                                <input type="text" class="form-control" placeholder="Use Promocode" aria-describedby="button-addon2">
                                                <button class="btn btn-soft-primary " type="button" id="button-addon2">Apply</button>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="" class="text-primary"><i class="fas fa-long-arrow-alt-left me-1"></i> Continue Shopping</a>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <a href="ecommerce-checkout.html" class="text-primary">Checkout <i class="fas fa-long-arrow-alt-right ml-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="total-payment p-3 mt-4">
                                            <h4 class="header-title">Total Payment</h4>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-semibold">Subtotal</td>
                                                        <td>$496.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">Shipping</td>
                                                        <td>
                                                            <ul class="list-unstyled mb-0">
                                                                <li>
                                                                    <div class="radio radio-info">
                                                                        <input type="radio" name="radio" id="radio_1" value="option_1" checked>
                                                                        <label for="radio_1">
                                                                            Shipping Charge : $5.00
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="radio radio-info">
                                                                        <input type="radio" name="radio" id="radio_2" value="option_2">
                                                                        <label for="radio_2">
                                                                            Express Shipping Charge : $10.00
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="" class="text-dark"><strong>Change Address</strong></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-semibold">Promo Code</td>
                                                        <td>-$10.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-bottom-0">Total</td>
                                                        <td class="text-dark border-bottom-0"><strong>$491.00</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-->
                        </div><!--end card-body-->
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

</body>
<!--end body-->

</html>