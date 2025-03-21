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
                  <li class="breadcrumb-item active">Validation</li>
                </ol>
              </div>
              <h4 class="page-title">Validation</h4>
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
                <h4 class="card-title">Bootstrap Custom styles</h4>
                <p class="text-muted mb-0">Custom feedback styles apply custom colors, borders, focus styles, and background
                  icons to better communicate feedback. Background icons for <code>&lt;select&gt;</code>s are
                  only available with <code>.form-select</code>, and not <code>.form-control</code>.
                </p>
              </div><!--end card-header-->
              <div class="card-body">
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">State</label>
                    <select class="form-select" id="validationCustom04" required>
                      <option selected disabled value="">Choose...</option>
                      <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
                </form><!--end form-->
              </div><!--end card-body-->
            </div><!--end card-->
          </div><!--end col-->

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Validation Tooltips</h4>
                <p class="text-muted mb-0">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for
                  <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.
                </p>
              </div><!--end card-header-->
              <div class="card-body">
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4 position-relative">
                    <label for="validationTooltip01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 position-relative">
                    <label for="validationTooltip02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 position-relative">
                    <label for="validationTooltipUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                      <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                      <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationTooltip03" required>
                    <div class="invalid-tooltip">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3 position-relative">
                    <label for="validationTooltip04" class="form-label">State</label>
                    <select class="form-select" id="validationTooltip04" required>
                      <option selected disabled value="">Choose...</option>
                      <option>...</option>
                    </select>
                    <div class="invalid-tooltip">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-3 position-relative">
                    <label for="validationTooltip05" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="validationTooltip05" required>
                    <div class="invalid-tooltip">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
                </form><!--end form-->
              </div><!--end card-body-->
            </div><!--end card-->
          </div><!--end col-->
        </div><!--end row-->

        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Custom Validation Form</h4>
                <p class="text-muted mb-0">Custom javascript form validation
                  library.
                </p>
              </div><!--end card-header-->
              <div class="card-body">
                <form id="form-validation-2" class="form">
                  <div class="mb-2">
                    <label for="username" class="mb-2">Username</label>
                    <input class="form-control" type="text" id="username" placeholder="Enter Username">
                    <small>Error Message</small>
                  </div>
                  <div class="mb-2">
                    <label for="email" class="mb-2">Email</label>
                    <input class="form-control" type="text" id="email" placeholder="Enter email">
                    <small>Error Message</small>
                  </div>
                  <div class="mb-2">
                    <label for="password" class="mb-2">Password</label>
                    <input class="form-control" type="password" id="password" placeholder="Enter password">
                    <small>Error Message</small>
                  </div>
                  <div class="mb-2">
                    <label for="password2" class="mb-2">Confirm Password</label>
                    <input class="form-control" type="password" id="password2" placeholder="Enter password again">
                    <small>Error Message</small>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit form</button>
                </form><!--end form-->
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
  <script src="/pages/form-validation.js"></script>
  <!-- App js -->
  <script src="/js/app.js"></script>

</body>

</html>