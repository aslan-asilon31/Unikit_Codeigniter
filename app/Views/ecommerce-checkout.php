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
                                        <li class="breadcrumb-item active">Checkout</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Checkout</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Order Summary</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive shopping-cart">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>                                                        
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="/images/products/01.png" alt=""height="40">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Reebok Shoes</p> 
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>$198</td>                                                        
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="/images/products/06.png" alt=""height="40">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Night Lamp</p> 
                                                    </td>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>$150</td>                                                       
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="/images/products/04.png" alt=""height="40">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Lava Purse</p> 
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>$49</td>                                                       
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="/images/products/07.png" alt=""height="40">
                                                        <p class="d-inline-block align-middle mb-0 product-name">Important Chair</p>
                                                    </td>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>$99</td>
                                                </tr>  
                                                <tr>
                                                    <td class=" border-bottom-0">
                                                        <h6>Total :</h6>
                                                    </td>
                                                    <td class=" border-bottom-0"></td>
                                                    <td class="text-dark border-bottom-0"><strong>$496</strong></td>
                                                </tr>                                                    
                                            </tbody>
                                        </table>
                                    </div><!--end re-table-->
                                    <div class="total-payment">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="fw-semibold">Subtotal</td>
                                                    <td>$496.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">Shipping</td>
                                                    <td>
                                                        Shipping Charge : $5.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">Promo Code</td>
                                                    <td>-$10.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold  border-bottom-0">Total</td>
                                                    <td class="text-dark  border-bottom-0"><strong>$491.00</strong></td>
                                                </tr>
                                            </tbody>
                                        </table><!--end table-->
                                    </div><!--end total-payment-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Delivery Address</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <form class="mb-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" id="firstname" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Last Name <small class="text-danger font-13">*</small></label>
                                                    <input type="email" class="form-control" id="lastname" required="">
                                                </div>
                                            </div><!--end col-->                                                
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label class="form-label my-2">Delivery Address <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label class="form-label my-2">Address <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label my-2">City <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" id="city" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label my-2">State <small class="text-danger font-13">*</small></label>
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>Gujarat</option>
                                                        <option>New york</option>
                                                        <option>California</option>
                                                    </select>
                                                </div>
                                            </div> <!--end col-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label my-2">Country <small class="text-danger font-13">*</small></label>
                                                    <select class="form-select">
                                                        <option>Select</option>
                                                        <option>India</option>
                                                        <option>USA</option>
                                                        <option>New Zealand</option>                                                            
                                                    </select>
                                                </div>            
                                            </div> <!--end col-->                                               
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-md-3">                            
                                                <div class="form-group">
                                                    <label class="form-label my-2">Zip code <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">                            
                                                <div class="form-group">
                                                    <label class="form-label my-2">Email Address <small class="text-danger font-13">*</small></label>
                                                    <input type="email" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-3">                            
                                                <div class="form-group">
                                                    <label class="form-label my-2">Mobile No <small class="text-danger font-13">*</small></label>
                                                    <input type="text" class="form-control" required="">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row--> 
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mt-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Confirm Shipping Address
                                                        </label>
                                                    </div>
                                                </div>              
                                            </div><!--end col-->
                                        </div><!--end row-->                                            
                                    </form><!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title">Billing Details</h4>                      
                                                </div><!--end col-->                                        
                                            </div>  <!--end row-->                                  
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div class="accordion accordion-flush checkout-accordion" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header mt-0" id="flush-headingOne">
                                                    <button class="accordion-button d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                                        <span class="align-self-center">Credit Card</span>
                                                        <img src="/images/logos/card-2.png" alt="" height="30">
                                                    </button>
                                                  </h2>
                                                  <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="row">  
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="Card_No">Card No :</label>
                                                                    <input type="text" class="form-control" id="Card_No" required="" placeholder="1234-5678-9123-4567">
                                                                </div>
                                                            </div>  <!--end col-->                               
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="select_month" class="my-2 form-label">Expiry Month</label>
                                                                    <select class="form-select" id="select_month">
                                                                        <option selected="">-- Select --</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                </div>                                    
                                                            </div><!--end col-->  
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="select_year" class="my-2 form-label">Expiry Year</label>
                                                                    <select class="form-select" id="select_year">
                                                                        <option selected="">-- Select --</option>
                                                                        <option value="1">2020</option>
                                                                        <option value="2">2021</option>
                                                                        <option value="3">2022</option>
                                                                        <option value="4">2023</option>
                                                                        <option value="5">2024</option>
                                                                        <option value="6">2025</option>
                                                                    </select>
                                                                </div>
                                                            </div> <!--end col--> 
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label my-2" for="CVV_Code">Security Code</label>
                                                                    <input type="password" class="form-control" id="CVV_Code" required="" placeholder="Enter CVV">
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <h2 class="accordion-header mt-0" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        <span class="align-self-center">Paypal</span>
                                                        <img src="/images/logos/paypal.png" alt="" height="30">
                                                    </button>
                                                  </h2>
                                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <p class="mb-0 text-muted">
                                                            Add Paypal form page
                                                        </p> 
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-block btn-primary">Place Your Order</button>                      
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col-->
                                <div class="col-lg-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center align-item-center">                                                                    
                                                <h1 class="fw-bold my-0">4.8</h1> 
                                                <h4 class="header-title mb-0">Overall Rating</h4>  
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                    <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                    <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                    <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                                                    <li class="list-inline-item"><small class="text-muted">Total Review (700)</small></li>
                                                </ul>                                     
                                            </div> 
                                            <ul class="list-unstyled mt-3">
                                                <li class="mb-2">
                                                    <span class="text-dark">5 Star</span>
                                                    <small class="float-end text-muted ms-3 font-14">593</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%; border-radius:5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-dark">4 Star</span>
                                                    <small class="float-end text-muted ms-3 font-14">99</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 18%; border-radius:5px;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-dark">3 Star</span>
                                                    <small class="float-end text-muted ms-3 font-14">6</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 10%; border-radius:5px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-dark">2 Star</span>
                                                    <small class="float-end text-muted ms-3 font-14">2</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 1%; border-radius:5px;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="text-dark">1 Star</span>
                                                    <small class="float-end text-muted ms-3 font-14">0</small>
                                                    <div class="progress mt-2" style="height:5px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%; border-radius:5px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </li>
                                            </ul>                                           
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

    </body>
    <!--end body-->
</html>