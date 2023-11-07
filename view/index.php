<?php
$page = 'index';
include 'komponen/header.php';
?>

<body onload="startTime()">
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->\
      <?php
      include 'komponen/aside.php';
      ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php
        include 'komponen/navbar.php';
        ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="card-body">
            <div class="row g-3">
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-primary rounded shadow">
                      <i class="mdi mdi-trending-up mdi-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <div class="small mb-1">Sales</div>
                    <h5 class="mb-0">245k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-success rounded shadow">
                      <i class="mdi mdi-account-outline mdi-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <div class="small mb-1">Customers</div>
                    <h5 class="mb-0">12.5k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-warning rounded shadow">
                      <i class="mdi mdi-cellphone-link mdi-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <div class="small mb-1">Product</div>
                    <h5 class="mb-0">1.54k</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="d-flex align-items-center">
                  <div class="avatar">
                    <div class="avatar-initial bg-info rounded shadow">
                      <i class="mdi mdi-currency-usd mdi-24px"></i>
                    </div>
                  </div>
                  <div class="ms-3">
                    <div class="small mb-1">Revenue</div>
                    <h5 class="mb-0">$88k</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <!-- Footer -->
          <?php
          include 'komponen/footer.php';
          ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->

      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Time -->
  <script src="scripts/time.js"></script>
  <script src="scripts/dashboard.js"></script>





  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>



</body>

</html>