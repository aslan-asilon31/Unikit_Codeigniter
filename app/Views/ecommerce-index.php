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
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="card"> 
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col align-self-center">
                                            <div class="media">
                                                <img src="/images/logos/money-beg.png" alt="" class="align-self-center" height="40">
                                                <div class="media-body align-self-center ms-3"> 
                                                    <h6 class="m-0 font-24 fw-bold">$1850.00</h6>
                                                    <p class="text-muted mb-0">Total Revenue</p>                                                                                                                                               
                                                </div><!--end media body-->
                                            </div><!--end media-->
                                        </div><!--end col-->  
                                        <div class="col-auto align-self-center">                                              
                                            <div class="">
                                                <div id="Revenu_Status_bar" class="apex-charts mb-n4"></div>
                                            </div>
                                        </div><!--end col-->                                      
                                    </div><!--end row-->                                                                                                                                  
                                </div><!--end card-body-->                                
                            </div><!--end card-->  
                            <div class="row">
                                <div class="col-12 col-lg-6"> 
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h5  fw-bold">$24,500</span>      
                                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Today's Revenue</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->
                                <div class="col-12 col-lg-6"> 
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h5  fw-bold">520</span>      
                                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Today's New Order</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->
                                <div class="col-12 col-lg-6"> 
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h5  fw-bold">82.8%</span>      
                                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Conversion Rate</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-body-->                     
                                </div><!--end col-->
                                <div class="col-12 col-lg-6"> 
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col text-center">                                                                        
                                                    <span class="h5  fw-bold">$80.5</span>      
                                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Avg. Value</h6>                
                                                </div><!--end col-->
                                            </div> <!-- end row -->
                                        </div><!--end card-body-->
                                    </div> <!--end card-->                     
                                </div><!--end col-->                                
                            </div><!--end row-->  
                            <div class="card"> 
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">View Invoices</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">                      
                                            <i class="las la-file-invoice-dollar font-36 text-muted"></i>                
                                        </div><!--end col-->   
                                        <div class="col">                      
                                            <div class="input-group">
                                                <select class="form-select">
                                                    <option selected>--- Select ---</option>
                                                    <option value="Jan 2021">Jan 2021</option>
                                                    <option value="Feb 2021">Feb 2021</option>
                                                    <option value="Mar 2021">Mar 2021</option>
                                                    <option value="Apr 2021">Apr 2021</option>
                                                </select>  
                                                <button class="btn btn-soft-primary btn-sm" type="button"><i class="las la-search"></i></button>
                                            </div>                         
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                                                                                                                                         
                                </div><!--end card-body-->                                
                            </div><!--end card-->                             
                        </div><!-- end col-->  
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Revenu Status</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   This Month<i class="las la-angle-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">This Year</a>
                                                </div>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">                                     
                                    <div class="">
                                        <div id="Revenu_Status" class="apex-charts"></div>
                                    </div>                                                                                                                          
                                </div><!--end card-body--> 
                            </div><!--end card-->   
                        </div><!-- end col-->                                    
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-2 col-md-4"> 
                            <div class="card">
                                <div class="card-body">
                                    <img src="/images/products/04.png" alt="" class="img-fluid px-2 px-lg-5">
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between"> 
                                        <div>
                                            <a href="#" class="font-15 fw-bold text-primary">N95 Mask</a>
                                            <p class="text-muted mb-0 fw-semibold font-13">Covid Safety</p>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="fw-bold font-22 m-0">$10</h6>
                                        </div>
                                    </div>
                                </div><!--end card-body-->                                
                            </div> <!--end card-->                     
                        </div><!--end col-->  
                        <div class="col-lg-2 col-md-4"> 
                            <div class="card">
                                <div class="card-body">
                                    <img src="/images/products/01.png" alt="" class="img-fluid px-2 px-lg-5">
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between"> 
                                        <div>
                                            <a href="#" class="font-15 fw-bold text-primary">White Table Camera</a>
                                            <p class="text-muted mb-0 fw-semibold font-13">Security</p>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="fw-bold font-22 m-0">$99</h6>
                                        </div>
                                    </div>
                                </div><!--end card-body-->                                
                            </div> <!--end card-->                     
                        </div><!--end col-->  
                        <div class="col-lg-2 col-md-4"> 
                            <div class="card">
                                <div class="card-body">
                                    <img src="/images/products/02.png" alt="" class="img-fluid px-2 px-lg-5">
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between"> 
                                        <div>
                                            <a href="#" class="font-15 fw-bold text-primary">New Colorfull Shoes</a>
                                            <p class="text-muted mb-0 fw-semibold font-13">Fashion & Life Style</p>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="fw-bold font-22 m-0">$89</h6>
                                        </div>
                                    </div>
                                </div><!--end card-body-->                                
                            </div> <!--end card-->                     
                        </div><!--end col--> 
                        <div class="col-lg-2 col-md-4"> 
                            <div class="card">
                                <div class="card-body">
                                    <img src="/images/products/03.png" alt="" class="img-fluid px-2 px-lg-5">
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between"> 
                                        <div>
                                            <a href="#" class="font-15 fw-bold text-primary">Imported VR Box</a>
                                            <p class="text-muted mb-0 fw-semibold font-13">Entertainment</p>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="fw-bold font-22 m-0">$49</h6>
                                        </div>
                                    </div>
                                </div><!--end card-body-->                                
                            </div> <!--end card-->                     
                        </div><!--end col-->  
                        <div class="col-lg-2 col-md-4"> 
                            <div class="card">
                                <div class="card-body">
                                    <img src="/images/products/05.png" alt="" class="img-fluid px-2 px-lg-5">
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between"> 
                                        <div>
                                            <a href="#" class="font-15 fw-bold text-primary">Fever Gun</a>
                                            <p class="text-muted mb-0 fw-semibold font-13">Electric</p>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="fw-bold font-22 m-0">$29</h6>
                                        </div>
                                    </div>
                                </div><!--end card-body-->                                
                            </div> <!--end card-->                     
                        </div><!--end col-->  
                        <div class="col-lg-2 col-md-4"> 
                            <div class="card">
                                <div class="card-body">
                                    <img src="/images/products/06.png" alt="" class="img-fluid px-2 px-lg-5">
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between"> 
                                        <div>
                                            <a href="#" class="font-15 fw-bold text-primary">Hand Bag</a>
                                            <p class="text-muted mb-0 fw-semibold font-13">Fashion & Life Style</p>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="fw-bold font-22 m-0">$69</h6>
                                        </div>
                                    </div>
                                </div><!--end card-body-->                                
                            </div> <!--end card-->                     
                        </div><!--end col-->                                 
                    </div><!--end row-->  
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Earnings Reports</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Date</th>                                                            
                                                    <th class="border-top-0">Item Count</th>
                                                    <th class="border-top-0">Text</th>
                                                    <th class="border-top-0">Earnings</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>                                                        
                                                    <td>01 January</td>                                                            
                                                    <td>50</td>
                                                    <td class="text-danger">-$70</td>
                                                    <td>$15,000</td>
                                                </tr><!--end tr-->     
                                                <tr>                                                        
                                                    <td>02 January</td>
                                                    <td>25</td>
                                                    <td>-</td>
                                                    <td>$9,500</td>
                                                    
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td>03 January</td>
                                                    <td>65</td>
                                                    <td class="text-danger">-$115</td>
                                                    <td>$35,000</td>
                                                    
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td>04 January</td>
                                                    <td>20</td>
                                                    <td>-</td>
                                                    <td>$8,500</td>
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td>05 January</td>
                                                    <td>40</td>
                                                    <td class="text-danger">-$60</td>
                                                    <td>$12,000</td>                                                            
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td>06 January</td>
                                                    <td>45</td>
                                                    <td class="text-danger">-$65</td>
                                                    <td>$13,500</td>                                                            
                                                </tr><!--end tr-->  
                                                <tr>                                                        
                                                    <td>07 January</td>
                                                    <td>30</td>
                                                    <td>-</td>
                                                    <td>$15,500</td>                                                            
                                                </tr><!--end tr-->                            
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->   
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Most Populer Products</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-top-0">Product</th>
                                                    <th class="border-top-0">Price</th>
                                                    <th class="border-top-0">Sell</th>
                                                    <th class="border-top-0">Status</th>
                                                    <th class="border-top-0">Action</th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                <tr>                                                        
                                                    <td>
                                                        <div class="media">
                                                            <img src="/images/products/01.png" height="30" class="me-3 align-self-center rounded" alt="...">
                                                            <div class="media-body align-self-center"> 
                                                                <h6 class="m-0">Unikit Camera EDM 5D(White)</h6>
                                                                <a href="#" class="font-12 text-primary">ID: A3652</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>$50 <del class="text-muted font-10">$70</del></td>                                   
                                                    <td>450 <small class="text-muted">(550)</small></td>
                                                    <td><span class="badge badge-soft-warning px-2">Stock</span></td>
                                                    <td>                                                       
                                                        <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                                    </td>
                                                </tr><!--end tr-->     
                                                <tr>                                                        
                                                    <td>
                                                        <div class="media">
                                                            <img src="/images/products/02.png" height="30" class="me-3 align-self-center rounded" alt="...">
                                                            <div class="media-body align-self-center"> 
                                                                <h6 class="m-0">Unikit Shoes Max-Zon</h6>
                                                                <a href="#" class="font-12 text-primary">ID: A5002</a>                                                                                          
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>$99 <del class="text-muted font-10">$150</del></td>                                   
                                                    <td>750 <small class="text-muted">(00)</small></td>
                                                    <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                                    <td>                                                       
                                                        <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                                    </td>
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td>
                                                        <div class="media">
                                                            <img src="/images/products/04.png" height="30" class="me-3 align-self-center rounded" alt="...">
                                                            <div class="media-body align-self-center"> 
                                                                <h6 class="m-0">Unikit Mask N99 [ISI]</h6>
                                                                <a href="#" class="font-12 text-primary">ID: A6598</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>$199 <del class="text-muted font-10">$250</del></td>                                   
                                                    <td>280 <small class="text-muted">(220)</small></td>
                                                    <td><span class="badge badge-soft-warning px-2">Stock</span></td>
                                                    <td>                                                       
                                                        <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                                    </td>
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td>
                                                        <div class="media">
                                                            <img src="/images/products/07.png" height="30" class="me-3 align-self-center rounded" alt="...">
                                                            <div class="media-body align-self-center"> 
                                                                <h6 class="m-0">Unikit Bag (Blue)</h6>
                                                                <a href="#" class="font-12 text-primary">ID: A9547</a>                                                                                            
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>$40 <del class="text-muted font-10">$49</del></td>                                   
                                                    <td>500 <small class="text-muted">(1000)</small></td>
                                                    <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                                    <td>                                                       
                                                        <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                                    </td>
                                                </tr><!--end tr-->    
                                                <tr>                                                        
                                                    <td>
                                                        <div class="media">
                                                            <img src="/images/products/05.png" height="30" class="me-3 align-self-center rounded" alt="...">
                                                            <div class="media-body align-self-center"> 
                                                                <h6 class="m-0">Unikit Fever Gun</h6>
                                                                <a href="#" class="font-12 text-primary">ID: A2047</a>                                                                                            
                                                            </div><!--end media body-->
                                                        </div>
                                                    </td>
                                                    <td>$80 <del class="text-muted font-10">$59</del></td>                                   
                                                    <td>800 <small class="text-muted">(2000)</small></td>
                                                    <td><span class="badge badge-soft-primary px-2">Out of Stock</span></td>
                                                    <td>                                                       
                                                        <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                                        <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                                    </td>
                                                </tr><!--end tr-->                           
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                                   
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
        <script src="/libs/apexcharts/apexcharts.min.js"></script>
        <script src="/pages/ecommerce-index.init.js"></script>
        <!-- App js -->
        <script src="/js/app.js"></script>

    </body>
    <!--end body-->
</html>