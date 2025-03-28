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
                                    <li class="breadcrumb-item active">Modals</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Modals</h4>
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
                                <h4 class="card-title">Optional sizes</h4>
                                <p class="text-muted mb-0">
                                    Modals have three optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Size</th>
                                                <th>Class</th>
                                                <th>Modal max-width</th>
                                                <th>Modal Demo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Small</td>
                                                <td><code>.modal-sm</code></td>
                                                <td><code>300px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSmall">
                                                        Launch demo modal
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Default</td>
                                                <td class="text-muted">None</td>
                                                <td><code>500px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
                                                        Launch demo modal
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Large</td>
                                                <td><code>.modal-lg</code></td>
                                                <td><code>800px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalLarge">
                                                        Launch demo modal
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Extra large</td>
                                                <td><code>.modal-xl</code></td>
                                                <td><code>1140px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bd-example-modal-xl">
                                                        Launch demo modal
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Default (Center Modal)</td>
                                                <td class="text-muted"><code>.modal-dialog-centered</code></td>
                                                <td><code>500px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                        Launch demo modal
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Default (Scroll Modal)</td>
                                                <td class="text-muted"><code>.modal-dialog-scrollable</code></td>
                                                <td><code>500px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                                                        Launch demo modal
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal -->

                                <div class="modal fade bd-example-modal-sm" id="exampleModalSmall" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="mySmallModalLabel">Small Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body text-center">
                                                <img src="/images/users/user-5.jpg" alt="" class="thumb-lg rounded-circle">
                                                <h5 class="mb-1">Good Morning!</h5>
                                                <p class="mb-0 text-muted">Hi, Aaron Gish ! Congratulations.</p>
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade" id="exampleModalDefault" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="exampleModalDefaultLabel">Default Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade bd-example-modal-lg" id="exampleModalLarge" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="myLargeModalLabel">Large Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center">
                                                        <img src="/images/small/flame.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-8 align-self-center">
                                                        <div class="error-content text-center">
                                                            <h1>404!</h1>
                                                            <h4 class=" mb-3">Looks like you've got lost...</h4>
                                                            <button type="button" class="btn btn-soft-primary">Back to Dashboard</button>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->

                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade bd-example-modal-xl" id="bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="myExtraLargeModalLabel">Extra Large Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <h5 class="mt-0">Overflowing text to show scroll behavior</h5>
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum.
                                                    Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac
                                                    consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Vivamus sagittis lacus vel
                                                    augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur.
                                                    Praesent commodo cursus magna, vel scelerisque
                                                    nisl consectetur et. Donec sed odio dui. Donec
                                                    ullamcorper nulla non metus auctor
                                                    fringilla.</p>
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="exampleModalCenterTitle">Center Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->


                                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="exampleModalScrollableTitle">Center Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>

                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div><!--end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fullscreen Modal</h4>
                                <p class="text-muted mb-0">
                                    Another override is the option to pop up a modal that covers the user viewport,
                                    available via modifier classes that are placed on a <code>.modal-dialog</code>.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Class</th>
                                                <th>Availability</th>
                                                <th>Modal Demo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code>.modal-fullscreen</code></td>
                                                <td>Always</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code>.modal-fullscreen-sm-down</code></td>
                                                <td>Below <code>576px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code>.modal-fullscreen-md-down</code></td>
                                                <td>Below <code>768px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code>.modal-fullscreen-lg-down</code></td>
                                                <td>Below <code>992px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code>.modal-fullscreen-xl-down</code></td>
                                                <td>Below <code>1200px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code>.modal-fullscreen-xxl-down</code></td>
                                                <td>Below <code>1400px</code></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">Full screen below xxl</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalFullscreenLabel">Full screen modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-sm-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalFullscreenSmLabel">Full screen below sm</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-md-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalFullscreenMdLabel">Full screen below md</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1" aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalFullscreenLgLabel">Full screen below lg</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1" aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalFullscreenXlLabel">Full screen below xl</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1" aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-xxl-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="exampleModalFullscreenXxlLabel">Full screen below xxl</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Themes Modal</h4>
                                <p class="text-muted mb-0">
                                    You can use custom modals with themes colors.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">

                                    <button type="button" class="btn btn-de-primary" data-bs-toggle="modal" data-bs-target="#exampleModalPrimary">Primary</button>

                                    <button type="button" class="btn btn-de-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalSecondary">Secondary</button>

                                    <button type="button" class="btn btn-de-success" data-bs-toggle="modal" data-bs-target="#exampleModalSuccess">Success</button>

                                    <button type="button" class="btn btn-de-warning" data-bs-toggle="modal" data-bs-target="#exampleModalWarning">Warning</button>

                                    <button type="button" class="btn btn-de-info" data-bs-toggle="modal" data-bs-target="#exampleModalInfo">Info</button>

                                    <button type="button" class="btn btn-de-danger" data-bs-toggle="modal" data-bs-target="#exampleModalDanger">Danger</button>

                                    <button type="button" class="btn btn-de-dark" data-bs-toggle="modal" data-bs-target="#exampleModalDark">Dark</button>
                                </div>

                                <div class="modal fade" id="exampleModalPrimary" tabindex="-1" role="dialog" aria-labelledby="exampleModalPrimary1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h6 class="modal-title m-0 text-white" id="exampleModalPrimary1">Primary Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-de-primary btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade" id="exampleModalSecondary" tabindex="-1" role="dialog" aria-labelledby="exampleModalSecondary1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-secondary">
                                                <h6 class="modal-title m-0 text-white" id="exampleModalSecondary1">Primary Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-primary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-de-secondary btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade" id="exampleModalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalSuccess1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success">
                                                <h6 class="modal-title m-0 text-white" id="exampleModalSuccess1">Primary Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-de-success btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade" id="exampleModalWarning" tabindex="-1" role="dialog" aria-labelledby="exampleModalWarning1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h6 class="modal-title m-0 text-white" id="exampleModalWarning1">Primary Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-de-warning btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade" id="exampleModalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalInfo1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info">
                                                <h6 class="modal-title m-0 text-white" id="exampleModalInfo1">Primary Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-de-info btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade" id="exampleModalDanger" tabindex="-1" role="dialog" aria-labelledby="exampleModalDanger1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h6 class="modal-title m-0 text-white" id="exampleModalDanger1">Primary Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-de-danger btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <div class="modal fade" id="exampleModalDark" tabindex="-1" role="dialog" aria-labelledby="exampleModalDark1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <h6 class="modal-title m-0 text-white" id="exampleModalDark1">Primary Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3 text-center align-self-center">
                                                        <img src="/images/small/btc.png" alt="" class="img-fluid">
                                                    </div><!--end col-->
                                                    <div class="col-lg-9">
                                                        <h5>Crypto Market Services</h5>
                                                        <span class="badge bg-soft-secondary">Disable Services</span>
                                                        <small class="text-muted ml-2">07 Oct 2020</small>
                                                        <ul class="mt-3 mb-0">
                                                            <li>Lorem Ipsum is dummy text.</li>
                                                            <li>It is a long established reader.</li>
                                                            <li>Contrary to popular belief, Lorem simply.</li>
                                                        </ul>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div><!--end modal-body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-de-dark btn-sm">Save changes</button>
                                            </div><!--end modal-footer-->
                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Login & Signup Modal</h4>
                                <p class="text-muted mb-0">
                                    You can use custom modals with Login and SignUp form.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLogin">
                                    Login demo modal
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLogin">
                                    Signup demo modal
                                </button>

                                <!--modal-->

                                <div class="modal fade" id="exampleModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="exampleModalDefaultLogin">Login Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="card-body p-0 auth-header-box">
                                                    <div class="text-center">
                                                        <a href="index.html" class="logo logo-admin">
                                                            <img src="/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                                        </a>
                                                        <h4 class="mt-3 mb-1 font-weight-semibold font-18">Let's Get Started Unikit</h4>
                                                        <p class="text-muted  mb-0">Sign in to continue to Unikit.</p>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="nav-border nav nav-pills" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active font-weight-semibold" data-bs-toggle="tab" href="#LogIn_Tab" role="tab">Log In</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link font-weight-semibold" data-bs-toggle="tab" href="#Register_Tab" role="tab">Register</a>
                                                        </li>
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                                            <form class="form-horizontal auth-form my-4" action="index.html">

                                                                <div class="form-group">
                                                                    <label for="username">Username</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                                    </div>
                                                                </div><!--end form-group-->

                                                                <div class="form-group">
                                                                    <label for="userpassword">Password</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                                    </div>
                                                                </div><!--end form-group-->

                                                                <div class="form-group row mt-4">
                                                                    <div class="col-sm-6">
                                                                        <div class="custom-control custom-switch switch-success">
                                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                    <div class="col-sm-6 text-end">
                                                                        <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                                                                    </div><!--end col-->
                                                                </div><!--end form-group-->

                                                                <div class="form-group mb-0 row">
                                                                    <div class="col-12 mt-2">
                                                                        <div class="d-grid">
                                                                            <button class="btn btn-primary btn-block" type="button">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div> <!--end form-group-->
                                                            </form><!--end form-->
                                                            <div class="m-3 text-center text-muted">
                                                                <p class="">Don't have an account ? <a href="auth-register.html" class="text-primary ml-2">Free Resister</a></p>
                                                            </div>
                                                            <div class="account-social text-center">
                                                                <h6 class="my-4">Or Login With</h6>
                                                            </div>
                                                            <div class="btn-group w-100">
                                                                <button type="button" class="btn btn-sm btn-outline-secondary">Facebook</button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary">Twitter</button>
                                                                <button type="button" class="btn btn-sm btn-outline-secondary">Google</button>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane px-3 pt-3" id="Register_Tab" role="tabpanel">
                                                            <form class="form-horizontal auth-form my-4" action="index.html">

                                                                <div class="form-group">
                                                                    <label for="username">Username</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                                    </div>
                                                                </div><!--end form-group-->

                                                                <div class="form-group">
                                                                    <label for="useremail">Email</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter Email">
                                                                    </div>
                                                                </div><!--end form-group-->

                                                                <div class="form-group">
                                                                    <label for="userpassword">Password</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                                    </div>
                                                                </div><!--end form-group-->

                                                                <div class="form-group">
                                                                    <label for="conf_password">Confirm Password</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="password" class="form-control" name="conf-password" id="conf_password" placeholder="Enter Confirm Password">
                                                                    </div>
                                                                </div><!--end form-group-->

                                                                <div class="form-group">
                                                                    <label for="mo_number">Mobile Number</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="mobile number" id="mo_number" placeholder="Enter Mobile Number">
                                                                    </div>
                                                                </div><!--end form-group-->

                                                                <div class="form-group row mt-4">
                                                                    <div class="col-sm-12">
                                                                        <div class="custom-control custom-switch switch-success">
                                                                            <input type="checkbox" class="custom-control-input" id="customSwitchSuccess2">
                                                                            <label class="custom-control-label text-muted" for="customSwitchSuccess2">You agree to the Unikit <a href="#" class="text-primary">Terms of Use</a></label>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div><!--end form-group-->

                                                                <div class="form-group mb-0 row">
                                                                    <div class="col-12 mt-2">
                                                                        <div class="d-grid">
                                                                            <button class="btn btn-primary" type="button">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                                        </div>
                                                                    </div><!--end col-->
                                                                </div> <!--end form-group-->
                                                            </form><!--end form-->
                                                            <div class="m-3 text-center text-muted">
                                                                <p class="mb-0 text-muted">Already have an account ?<a href="auth-login.html" class="text-primary ml-2">Log in</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--end card-body-->
                                                <div class="card-body bg-light-alt text-center mx-n3 mb-n3">
                                                    <span class="text-muted d-none d-sm-inline-block">Mannatthemes © 2021</span>
                                                </div>
                                            </div><!--end modal-body-->

                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->

                                <!--start signup-->
                                <div class="modal fade" id="exampleModalSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalDefaultSignup" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title m-0" id="exampleModalDefaultSignup">SignUp Modal</h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div><!--end modal-header-->
                                            <div class="modal-body">
                                                <div class="auth-page">
                                                    <div class="auth-card">
                                                        <div class="">
                                                            <div class="px-3">
                                                                <div class="auth-logo-box text-center">
                                                                    <a href="analytics-index.html" class="logo logo-admin"><img src="/images/logo-sm.png" height="40" alt="logo" class="auth-logo"></a>
                                                                </div><!--end auth-logo-box-->

                                                                <div class="text-center auth-logo-text">
                                                                    <h4 class="mt-0 m2-3 mt-3">Free Register for Unikit</h4>
                                                                    <p class="text-muted mb-0">Get your free Unikit account now.</p>
                                                                </div> <!--end auth-logo-text-->

                                                                <form class="form-horizontal auth-form my-4" action="index.html">

                                                                    <div class="form-group">
                                                                        <label for="username">Username</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                                                                        </div>
                                                                    </div><!--end form-group-->

                                                                    <div class="form-group">
                                                                        <label for="useremail">Email</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="email" class="form-control" id="useremail" placeholder="Enter Email">
                                                                        </div>
                                                                    </div><!--end form-group-->

                                                                    <div class="form-group">
                                                                        <label for="userpassword">Password</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                                                        </div>
                                                                    </div><!--end form-group-->

                                                                    <div class="form-group">
                                                                        <label for="conf_password">Confirm Password</label>
                                                                        <div class="input-group mb-3">
                                                                            <input type="password" class="form-control" id="conf_password" placeholder="Enter Confirm Password">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="mo_number">Mobile Number</label>
                                                                            <div class="input-group mb-3">
                                                                                <input type="text" class="form-control" id="mo_number" placeholder="Enter Mobile Number">
                                                                            </div>
                                                                        </div><!--end form-group-->
                                                                    </div><!--end form-group-->

                                                                    <div class="form-group row mt-4">
                                                                        <div class="col-sm-12">
                                                                            <div class="custom-control custom-switch switch-success">
                                                                                <input type="checkbox" class="custom-control-input" id="customSwitchSuccess_Signup">
                                                                                <label class="custom-control-label text-muted" for="customSwitchSuccess_Signup">By registering you agree to the Frogetor <a href="#" class="text-primary">Terms of Use</a></label>
                                                                            </div>
                                                                        </div><!--end col-->
                                                                    </div><!--end form-group-->

                                                                    <div class="form-group mb-0 row">
                                                                        <div class="col-12 mt-2">
                                                                            <button class="btn btn-primary btn-rounded btn-block" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                                        </div><!--end col-->
                                                                    </div> <!--end form-group-->
                                                                </form><!--end form-->
                                                            </div><!--end /div-->

                                                            <div class="m-3 text-center text-muted">
                                                                <p class="">Already have an account ? <a href="auth-login.html" class="text-primary ml-2">Log in</a></p>
                                                            </div>
                                                        </div><!--end card-body-->
                                                    </div><!--end card-->
                                                </div><!--end auth-page-->
                                            </div><!--end modal-body-->

                                        </div><!--end modal-content-->
                                    </div><!--end modal-dialog-->
                                </div><!--end modal-->
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