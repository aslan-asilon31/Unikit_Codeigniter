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
                                    <li class="breadcrumb-item active">Buttons</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Buttons</h4>
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
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Default Buttons Examples</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-de-primary">Primary</button>

                                    <button type="button" class="btn btn-de-secondary">Secondary</button>

                                    <button type="button" class="btn btn-de-success">Success</button>

                                    <button type="button" class="btn btn-de-warning">Warning</button>

                                    <button type="button" class="btn btn-de-info">Info</button>

                                    <button type="button" class="btn btn-de-danger">Danger</button>

                                    <button type="button" class="btn btn-de-dark">Dark</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Default Dashed buttons</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-de-dashed-primary">Primary</button>

                                    <button type="button" class="btn btn-de-dashed-secondary">Secondary</button>

                                    <button type="button" class="btn btn-de-dashed-success">Success</button>

                                    <button type="button" class="btn btn-de-dashed-warning">Warning</button>

                                    <button type="button" class="btn btn-de-dashed-info">Info</button>

                                    <button type="button" class="btn btn-de-dashed-danger">Danger</button>

                                    <button type="button" class="btn btn-de-dashed-dark">Dark</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Examples</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary">Primary</button>

                                    <button type="button" class="btn btn-secondary">Secondary</button>

                                    <button type="button" class="btn btn-success">Success</button>

                                    <button type="button" class="btn btn-warning">Warning</button>

                                    <button type="button" class="btn btn-info">Info</button>

                                    <button type="button" class="btn btn-danger">Danger</button>

                                    <button type="button" class="btn btn-dark">Dark</button>

                                    <button type="button" class="btn btn-light">Light</button>

                                    <button type="button" class="btn btn-link">Link</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Outline buttons</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-outline-primary">Primary</button>

                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>

                                    <button type="button" class="btn btn-outline-success">Success</button>

                                    <button type="button" class="btn btn-outline-info">Info</button>

                                    <button type="button" class="btn btn-outline-warning">Warning</button>

                                    <button type="button" class="btn btn-outline-danger">Danger</button>

                                    <button type="button" class="btn btn-outline-dark">Dark</button>

                                    <button type="button" class="btn btn-outline-purple">Purple</button>

                                    <button type="button" class="btn btn-outline-pink">Pink</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Icon Examples</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary"><i class="mdi mdi-check-all me-2"></i>Primary</button>
                                    <button type="button" class="btn btn-secondary"><i class="mdi mdi-alert-outline me-2"></i>Secondary</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Outline Icon Examples</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-outline-primary"><i class="mdi mdi-send me-2"></i>Primary</button>
                                    <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-power me-2"></i>Secondary</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Round Buttons Examples</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary btn-round">Primary</button>
                                    <button type="button" class="btn btn-secondary btn-round">Secondary</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Round Outline Buttons Examples</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-outline-primary btn-round">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary btn-round">Secondary</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Soft Buttons Examples</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-soft-primary">Primary</button>
                                    <button type="button" class="btn btn-soft-secondary">Secondary</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Squeare Buttons Examples</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-outline-primary btn-square">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary btn-square">secondary</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Outline Border Buttons Examples</h4>
                                        <p class="text-muted mb-0">Fancy custom Outline Border Buttons in only squeare style.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary btn-square btn-outline-dashed">Primary</button>
                                    <button type="button" class="btn btn-secondary btn-square btn-outline-dashed">Secondary</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Skew Buttons Examples</h4>
                                        <p class="text-muted mb-0">Fancy custom Skew Buttons.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-outline-primary btn-square btn-skew"><span>Primary</span></button>
                                    <button type="button" class="btn btn-outline-secondary btn-square btn-skew"><span>Secondary</span></button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Buttons With Different Tag</h4>
                                        <p class="text-muted mb-0">Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button class="btn btn-primary" type="submit">Button</button>
                                    <input class="btn btn-secondary" type="submit" value="Submit">
                                    <input class="btn btn-warning" type="button" value="Input">
                                    <input class="btn btn-dark" type="reset" value="Reset">
                                    <a class="btn btn-light" href="#" role="button">Link</a>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Disabled Buttons Examples</h4>
                                        <p class="text-muted mb-0">Make buttons look inactive by adding the disabled boolean attribute to any <code>&lt;button&gt;</code> element.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary" disabled="">Disable</button>
                                    <button type="button" class="btn btn-outline-secondary" disabled="">Disable</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Buttons Sizes Examples</h4>
                                        <p class="text-muted mb-0">New extra larger or smaller buttons added
                                            <code class="highlighter-rouge">.btn-xl</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.
                                        </p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                    <button type="button" class="btn btn-primary">Default button</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                                    <button type="button" class="btn btn-secondary btn-xs">Extra Small</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Check And Radio Buttons</h4>
                                        <p class="text-muted mb-0">Bootstrap’s checkbox or radio style button.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">

                                <div class="btn-group mb-2 mb-lg-0" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                                </div>


                                <div class="btn-group float-end" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                    <label class="btn btn-outline-secondary" for="btnradio1">Radio 1</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                    <label class="btn btn-outline-secondary" for="btnradio2">Radio 2</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                    <label class="btn btn-outline-secondary" for="btnradio3">Radio 3</label>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Only Icon Buttons Examples</h4>
                                        <p class="text-muted mb-0">A button variant for using only icons.Add <code>.btn-icon-square</code></p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary btn-icon-square-sm"><i class="fab fa-facebook-f"></i></button>
                                    <button type="button" class="btn btn-info btn-icon-square-sm"><i class="fab fa-twitter"></i></button>
                                    <button type="button" class="btn btn-pink btn-icon-square-sm"><i class="fab fa-dribbble"></i></button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Icon Circle Buttons Examples</h4>
                                        <p class="text-muted mb-0">A button variant for using only icons.Add <code>.btn-icon-circle</code></p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="button-items">
                                    <button type="button" class="btn btn-outline-info btn-icon-circle btn-icon-circle-sm"><i class="fab fa-skype"></i></button>
                                    <button type="button" class="btn btn-outline-danger btn-icon-circle btn-icon-circle-sm"><i class="fab fa-pinterest"></i></button>
                                    <button type="button" class="btn btn-outline-dark btn-icon-circle btn-icon-circle-sm"><i class="fab fa-github"></i></button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Block Buttons Examples</h4>
                                        <p class="text-muted mb-0">Create block level buttons—those that
                                            span the full width of a parent—by adding <code class="highlighter-rouge">.d-grid</code>.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn btn-secondary">Block level button</button>
                                    <button type="button" class="btn btn-outline-purple btn-lg">Block level button</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Button Group Examples</h4>
                                        <p class="text-muted mb-0">Group a series of buttons together on a single line with the button group, and super-power them with JavaScript.</p>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="btn-group-vertical">
                                                <button type="button" class="btn btn-primary">Button 1</button>
                                                <button type="button" class="btn btn-primary">Button 2</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-secondary"><i class="fa fa-align-left"></i></button>
                                                <button type="button" class="btn btn-outline-secondary"><i class="fa fa-align-center"></i></button>
                                                <button type="button" class="btn btn-outline-secondary"><i class="fa fa-align-right"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="btn-group" aria-label="Basic example" role="group">
                                                <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-play"></i></button>
                                                <button type="button" class="btn btn-outline-primary active"><i class="mdi mdi-pause"></i></button>
                                                <button type="button" class="btn btn-outline-secondary"><i class="mdi mdi-stop"></i></button>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-secondary">Left</button>
                                                <button type="button" class="btn btn-outline-secondary">Middle</button>
                                                <button type="button" class="btn btn-outline-secondary">Right</button>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-secondary">1</button>
                                                <button type="button" class="btn btn-outline-secondary">2</button>
                                                <button type="button" class="btn btn-primary active">3</button>
                                                <button type="button" class="btn btn-outline-secondary">4</button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-secondary">5</button>
                                                <button type="button" class="btn btn-primary active">6</button>
                                                <button type="button" class="btn btn-outline-secondary">7</button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-secondary">8</button>
                                            </div>
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



    <!-- Javascript  -->
    <!-- App js -->
    <script src="/js/app.js"></script>

</body>

</html>