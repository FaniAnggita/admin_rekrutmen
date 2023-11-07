<?php
session_start();

if (isset($_SESSION['smarthome_user'])) {
  header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $loginData = $_POST; // The form data is automatically available in the $_POST superglobal array

  // Make the POST request using cURL
  $ch = curl_init("http://localhost:3000/api/user/loginHandler");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($loginData));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $response = curl_exec($ch);
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  curl_close($ch);

  if ($httpCode === 200) {
    $responseData = json_decode($response, true);
    $role = $responseData['user']['role'];
    $email = $responseData['user']['email'];
    $name = $responseData['user']['name'];
    // Process the successful login response here
    $_SESSION['smarthome_user'] = $email;
    $_SESSION['smarthome_role'] = $role;
    $_SESSION['smarthome_name'] = $name;
    $_SESSION['user_detail'] = $responseData['user'];
    unset($_SESSION['login_error']);
    header("Location: index.php");
  } else {
    $errorData = json_decode($response, true);
    $errorMessage = $errorData['error'];
    // Handle the login error here (e.g., show an error message)

    // echo "Error: " . $errorMessage;
    // Store the error message in a session variable to display it on the next page load
    $_SESSION['login_error'] = $errorMessage;

    header("Location: login.php"); // Redirect back to the login page
    exit(); // Terminate the script after redirection
  }
}
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

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
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 800px; margin: 0 auto;">
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
              <img class="card-img card-img-left" src="../assets/img/elements/smart-house-isometric-composition-poster_1284-18749.png" alt="Card image" />
            </div>
            <div class="col-md-8 d-flex justify-content-center align-items-center">

              <div class="card-body">

                <h3 class="card-title text-center mb-4">Smarthome App</h3>
                <!-- form -->
                <form method="post" onsubmit="handleSubmit(event)">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="email">Email</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="mail@example.com" autocomplete="off" required>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="password">Password</label>
                    <div class="col-sm-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-key"></i></span>
                        <input type="password" id="password" name="password" class="form-control" placeholder="**********" required>
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


  <script>
    // Wait for the document to be ready
    $(document).ready(function() {
      // Check if the "alert-message" session variable exists
      var errorMessage = "<?php echo isset($_SESSION['login_error']) ? $_SESSION['login_error'] : ''; ?>";

      // If there is an error message, display it in the "alert-message" element
      if (errorMessage !== '') {
        $("#alert-response").fadeIn().delay(3000).fadeOut();
      } else {
        $("#aalert-response").hide(); // Hide the element if there is no error message
      }
    });
  </script>

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