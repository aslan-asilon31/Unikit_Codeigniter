<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('partials/title-meta', array('title' => 'Unikit')) ?>

    <!-- Sweet Alert -->
    <link href="/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="/libs/animate.css/animate.min.css" rel="stylesheet" type="text/css">

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
                                <li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
                                <li class="breadcrumb-item active">Sweet Alert</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sweet Alert</h4>
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
                            <h4 class="card-title">Trigger modal And Trigger toast</h4>
                            <p class="text-muted mb-0">And you can even trigger SweetAlert2 popups declaratively!
                                Use the bindClickHandler() method for that:
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <button type="button" class="btn btn-de-primary btn-sm" data-swal-template="#my-template"
                                    onclick="executeExample('TriggerModalToast')">Trigger modal
                            </button>
                            <button type="button" class="btn btn-de-primary btn-sm"
                                    data-swal-toast-template="#my-template"
                                    onclick="executeExample('TriggerModalToast')">Trigger toast
                            </button>
                            <template id="my-template">
                                <swal-title>
                                    Save changes to "Untitled 1" before closing?
                                </swal-title>
                                <swal-icon type="warning" color="red"></swal-icon>
                                <swal-button type="confirm">
                                    Save As
                                </swal-button>
                                <swal-button type="cancel">
                                    Cancel
                                </swal-button>
                                <swal-button type="deny">
                                    Close without Saving
                                </swal-button>
                                <swal-param name="allowEscapeKey" value="false"/>
                                <swal-param name="customClass" value='{ "popup": "my-popup" }'/>
                            </template>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Icons</h4>
                            <p class="text-muted mb-0">A beautiful, responsive, customizable and accessible
                                (WAI-ARIA) replacement for JavaScript's popup boxes.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <button type="button" class="btn btn-de-success btn-sm" onclick="executeExample('success')">
                                Success
                            </button>
                            <button type="button" class="btn btn-de-danger btn-sm" onclick="executeExample('error')">
                                Error
                            </button>
                            <button type="button" class="btn btn-de-warning btn-sm" onclick="executeExample('warning')">
                                Warning
                            </button>
                            <button type="button" class="btn btn-de-info btn-sm" onclick="executeExample('info')">Info
                            </button>
                            <button type="button" class="btn btn-de-secondary btn-sm"
                                    onclick="executeExample('question')">Question
                            </button>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Examples</h4>
                            <p class="text-muted mb-0">A beautiful, responsive, customizable
                                and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                dependencies.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>A
                                            basic message
                                        </td>
                                        <td class="border-0">
                                            <button class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('basicMessage')">
                                                Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-success"></i>A
                                            title with a text under
                                        </td>
                                        <td class="border-0">
                                            <button class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('titleText')">
                                                Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>A
                                            modal with a title, an error icon, a text, and a footer
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('errorType')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-dark"></i>Custom
                                            HTML description and buttons with ARIA labels
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('customHtml')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>A
                                            dialog with three buttons
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('threeButtons')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-info"></i>A
                                            custom positioned dialog
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('customPosition')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-primary"></i>Custom
                                            animation with Animation
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('customAnimation')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-secondary"></i>A
                                            confirm dialog, with a function attached to the "Confirm"-button...
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('warningConfirm')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-danger"></i>...
                                            and by passing a parameter, you can execute something else for "Cancel".
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('handleDismiss')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-purple"></i>A
                                            message with a custom image
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('customImage')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-success"></i>A
                                            message with custom width, padding, background and animated Nyan Cat
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('customWidth')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>A
                                            message with auto close timer
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('timer')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-info"></i>Right-to-left
                                            support for Arabic, Persian, Hebrew, and other RTL languages
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('rtl')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-pink"></i>AJAX
                                            request example
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('ajaxRequest')">Click me
                                            </button>
                                        </td>
                                    </tr>

                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>Mixin
                                            example
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('mixin')">Click me
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-0">
                                        <td class="border-0"><i class="mdi mdi-circle-outline me-1 text-warning"></i>Declarative
                                            template example
                                        </td>
                                        <td class="border-0">
                                            <button type="button" class="btn btn-de-primary btn-sm"
                                                    onclick="executeExample('declarativeTemplate')">Click me
                                            </button>
                                        </td>
                                        <template id="my-template">
                                            <swal-title>
                                                Save changes to "Untitled 1" before closing?
                                            </swal-title>
                                            <swal-icon type="warning" color="red"></swal-icon>
                                            <swal-button type="confirm">
                                                Save As
                                            </swal-button>
                                            <swal-button type="cancel">
                                                Cancel
                                            </swal-button>
                                            <swal-button type="deny">
                                                Close without Saving
                                            </swal-button>
                                            <swal-param name="allowEscapeKey" value="false"/>
                                            <swal-param name="customClass" value='{ "popup": "my-popup" }'/>
                                        </template>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!--table responsive-->
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
<!-- Sweet-Alert  -->
<script src="/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="/pages/sweet-alert.init.js"></script>
<!-- App js -->
<script src="/js/app.js"></script>

</body>

</html>