<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    body {
      background-image: url(../assets/img/elements/4853433.jpg);
      background-size: cover;
    }
  </style>
</head>

<body>

  <!-- Content -->
  <div class="container d-flex justify-content-center align-items-center"
    style="height: 100vh; max-width: 800px; margin: 0 auto;">
    <!-- Horizontal -->

    <div class="row mb-5 ">
      <div class="card-body" id="alert-response" style="display: none;">
        <div class="alert alert-danger alert-dismissible" role="alert" id="alert-box">
          <div id="responseMessage">Invalid email and password!</div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      <div class="col-md">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img class="card-img card-img-center" src="../assets/img/elements/4171344.jpg" alt="Card image" />
            </div>
            <div class="col-md-8 d-flex justify-content-center align-items-center">

              <div class="card-body">

                <h3 class="card-title text-center mb-4">Rekrutmen PIM</h3>
                <!-- form -->
                <form method="post" onsubmit="handleSubmit(event)">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="email">Email</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="mail@example.com"
                          autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="password">Password</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-key"></i></span>
                        <input type="password" id="password" name="password" class="form-control"
                          placeholder="**********" required>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <div class="col-sm-9">
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                  </div>
                </form>
                <!-- end form -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/ Horizontal -->
  </div>




  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/masonry/masonry.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>