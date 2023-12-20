<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Rekrutmen PIM</title>

  <meta name="description" content />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <script src="../assets/js/config.js"></script>

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!-- axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  <!-- DataTables JS -->
  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

  <!-- DataTables Scroller CSS and JS -->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/scroller/2.0.6/css/scroller.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css">
  <script src="https://cdn.datatables.net/scroller/2.0.6/js/dataTables.scroller.min.js"></script>


  <!-- Include Select2 CSS from CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">

  <!-- Include Select2 JS from CDN -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/searchpanes/1.3.3/js/dataTables.searchPanes.min.js"></script>

  <!-- include summernote css/js -->
  <!-- Summernote CSS -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <!-- Summernote JS -->
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


  <!-- Include DataTables Buttons CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.dataTables.min.css">

  <style>
    /* table {
      margin: 0 auto;
      width: 1200%;
      clear: both;
      border-collapse: collapse;
      table-layout: auto;
      word-wrap: break-word;
    }

    thead {
      width: calc(1200% - 17px);

    }



    tbody {
      width: 1200%;
    }



    td.editable {
      cursor: pointer;
    }

    td.editable input {
      width: 1200%;
      box-sizing: border-box;

    } */

    #deviceTable {
      table-layout: auto !important;
    }


    #deviceTable th,
    #deviceTable td {
      white-space: nowrap;
      overflow: hidden;
      text-overf low: ellipsis;
    }


    .dropdown-menu {
      overflow: overlay !important;
      overflow-x: overlay !important;
      overflow-y: overlay !important;
    }

    .btn-group-xs>.btn,
    .btn-xs {
      padding: 1px 5px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px;
    }

    table.dataTable tbody th,
    table.dataTable tbody td {
      padding: 0 10px;
      /* e.g. change 8x to 4px here */
    }
  </style>

</head>

<body>
  <!-- Layout wrapper -->
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


        <div class="app-brand demo ">
          <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">

              <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/1200/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path
                    d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                    id="path-1"></path>
                  <path
                    d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                    id="path-3"></path>
                  <path
                    d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                    id="path-4"></path>
                  <path
                    d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                    id="path-5"></path>
                </defs>
                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <use fill="#696cff" xlink:href="#path-1"></use>
                        <g id="Path-3" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-3"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                        </g>
                        <g id="Path-4" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-4"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                        </g>
                      </g>
                      <g id="Triangle"
                        transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                        <use fill="#696cff" xlink:href="#path-5"></use>
                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>

            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>



        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
              <span class="badge badge-center rounded-pill bg-danger ms-auto">5</span>
            </a>
            <ul class="menu-sub">
              <li class="menu-item active">
                <a href="dashboards-analytics.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Analytics">Analytics</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="dashboards-crm.html" class="menu-link">
                  <div class="text-truncate" data-i18n="CRM">CRM</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-ecommerce-dashboard.html" class="menu-link">
                  <div class="text-truncate" data-i18n="eCommerce">eCommerce</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-logistics-dashboard.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Logistics">Logistics</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-academy-dashboard.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Academy">Academy</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-layout"></i>
              <div class="text-truncate" data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub">

              <li class="menu-item">
                <a href="layouts-collapsed-menu.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Collapsed menu">Collapsed menu</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-content-navbar.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Content navbar">Content navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                  <div class="text-truncate" data-i18n="Horizontal">Horizontal</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-without-menu.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Without menu">Without menu</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-without-navbar.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Without navbar">Without navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-fluid.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Fluid">Fluid</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-container.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Container">Container</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="layouts-blank.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Blank">Blank</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Front Pages -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-store'></i>
              <div class="text-truncate" data-i18n="Front Pages">Front Pages</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
                  <div class="text-truncate" data-i18n="Landing">Landing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
                  <div class="text-truncate" data-i18n="Pricing">Pricing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                  <div class="text-truncate" data-i18n="Payment">Payment</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                  <div class="text-truncate" data-i18n="Checkout">Checkout</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
                  <div class="text-truncate" data-i18n="Help Center">Help Center</div>
                </a>
              </li>
            </ul>
          </li>


          <!-- Apps & Pages -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
          </li>
          <li class="menu-item">
            <a href="app-email.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-envelope"></i>
              <div class="text-truncate" data-i18n="Email">Email</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-chat.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-chat"></i>
              <div class="text-truncate" data-i18n="Chat">Chat</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-calendar.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-calendar"></i>
              <div class="text-truncate" data-i18n="Calendar">Calendar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-kanban.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-grid"></i>
              <div class="text-truncate" data-i18n="Kanban">Kanban</div>
            </a>
          </li>
          <!-- e-commerce-app menu start -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-cart-alt'></i>
              <div class="text-truncate" data-i18n="eCommerce">eCommerce</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-ecommerce-dashboard.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Products">Products</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-ecommerce-product-list.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Product List">Product List</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-product-add.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Add Product">Add Product</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-category-list.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Category List">Category List</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Order">Order</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-ecommerce-order-list.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Order List">Order List</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-order-details.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Order Details">Order Details</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Customer">Customer</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-ecommerce-customer-all.html" class="menu-link">
                      <div class="text-truncate" data-i18n="All Customers">All Customers</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <div class="text-truncate" data-i18n="Customer Details">Customer Details</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                          <div class="text-truncate" data-i18n="Overview">Overview</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                          <div class="text-truncate" data-i18n="Security">Security</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                          <div class="text-truncate" data-i18n="Address & Billing">Address & Billing</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                          <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                        </a>
                      </li>

                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Manage Reviews">Manage Reviews</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-ecommerce-referral.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Referrals">Referrals</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Settings">Settings</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-detail.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Store Details">Store Details</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-payments.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Payments">Payments</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Checkout">Checkout</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-locations.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Locations">Locations</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- e-commerce-app menu end -->
          <!-- Academy menu start -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-book-open'></i>
              <div class="text-truncate" data-i18n="Academy">Academy</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-academy-dashboard.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-academy-course.html" class="menu-link">
                  <div class="text-truncate" data-i18n="My Course">My Course</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-academy-course-details.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Course Details">Course Details</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Academy menu end -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-car'></i>
              <div class="text-truncate" data-i18n="Logistics">Logistics</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-logistics-dashboard.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-logistics-fleet.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Fleet">Fleet</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-food-menu'></i>
              <div class="text-truncate" data-i18n="Invoice">Invoice</div>
              <span class="badge badge-center rounded-pill bg-success ms-auto">4</span>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-invoice-list.html" class="menu-link">
                  <div class="text-truncate" data-i18n="List">List</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-invoice-preview.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Preview">Preview</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-invoice-edit.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Edit">Edit</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-invoice-add.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Add">Add</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user"></i>
              <div class="text-truncate" data-i18n="Users">Users</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-user-list.html" class="menu-link">
                  <div class="text-truncate" data-i18n="List">List</div>
                </a>
              </li>

              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="View">View</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-user-view-account.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Account">Account</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-user-view-security.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Security">Security</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-user-view-billing.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Billing & Plans">Billing & Plans</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-user-view-notifications.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="app-user-view-connections.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Connections">Connections</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bx-check-shield'></i>
              <div class="text-truncate" data-i18n="Roles & Permissions">Roles & Permissions</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="app-access-roles.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Roles">Roles</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="app-access-permission.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Permission">Permission</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div class="text-truncate" data-i18n="Pages">Pages</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="User Profile">User Profile</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="pages-profile-user.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Profile">Profile</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-profile-teams.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Teams">Teams</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-profile-projects.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Projects">Projects</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-profile-connections.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Connections">Connections</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Account Settings">Account Settings</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Account">Account</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-account-settings-security.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Security">Security</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-account-settings-billing.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Billing & Plans">Billing & Plans</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Notifications">Notifications</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Connections">Connections</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="pages-faq.html" class="menu-link">
                  <div class="text-truncate" data-i18n="FAQ">FAQ</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="pages-pricing.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Pricing">Pricing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Misc">Misc</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Error">Error</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Coming Soon">Coming Soon</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Not Authorized">Not Authorized</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
              <div class="text-truncate" data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Login">Login</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-login-cover.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Register">Register</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-register-cover.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Multi-steps">Multi-steps</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Verify Email">Verify Email</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Reset Password">Reset Password</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Forgot Password">Forgot Password</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Two Steps">Two Steps</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                      <div class="text-truncate" data-i18n="Cover">Cover</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
              <div class="text-truncate" data-i18n="Wizard Examples">Wizard Examples</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="wizard-ex-checkout.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Checkout">Checkout</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="wizard-ex-property-listing.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Property Listing">Property Listing</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="wizard-ex-create-deal.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Create Deal">Create Deal</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="modal-examples.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-window-open"></i>
              <div class="text-truncate" data-i18n="Modal Examples">Modal Examples</div>
            </a>
          </li>

          <!-- Components -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text"
              data-i18n="Components">Components</span></li>
          <!-- Cards -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-collection"></i>
              <div class="text-truncate" data-i18n="Cards">Cards</div>
              <span class="badge badge-center rounded-pill bg-danger ms-auto">6</span>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="cards-basic.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-advance.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Advance">Advance</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-statistics.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Statistics">Statistics</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-analytics.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Analytics">Analytics</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-gamifications.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Gamifications">Gamifications</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="cards-actions.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Actions">Actions</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- User interface -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-box"></i>
              <div class="text-truncate" data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="ui-accordion.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Accordion">Accordion</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-alerts.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Alerts">Alerts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-badges.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Badges">Badges</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-buttons.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Buttons">Buttons</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-carousel.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Carousel">Carousel</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-collapse.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Collapse">Collapse</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-dropdowns.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Dropdowns">Dropdowns</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-footer.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Footer">Footer</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-list-groups.html" class="menu-link">
                  <div class="text-truncate" data-i18n="List Groups">List groups</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-modals.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Modals">Modals</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-navbar.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Navbar">Navbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-offcanvas.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Offcanvas">Offcanvas</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-progress.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Progress">Progress</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-spinners.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Spinners">Spinners</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-tabs-pills.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-toasts.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Toasts">Toasts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-tooltips-popovers.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="ui-typography.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Typography">Typography</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Extended components -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-copy"></i>
              <div class="text-truncate" data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="extended-ui-avatar.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Avatar">Avatar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-blockui.html" class="menu-link">
                  <div class="text-truncate" data-i18n="BlockUI">BlockUI</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-drag-and-drop.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Drag & Drop">Drag &amp; Drop</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-media-player.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Media Player">Media Player</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-star-ratings.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Star Ratings">Star Ratings</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-sweetalert2.html" class="menu-link">
                  <div class="text-truncate" data-i18n="SweetAlert2">SweetAlert2</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-text-divider.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Text Divider">Text Divider</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <div class="text-truncate" data-i18n="Timeline">Timeline</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="extended-ui-timeline-basic.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                      <div class="text-truncate" data-i18n="Fullscreen">Fullscreen</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="extended-ui-tour.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Tour">Tour</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-treeview.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Treeview">Treeview</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="extended-ui-misc.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Miscellaneous">Miscellaneous</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Icons -->
          <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-crown"></i>
              <div class="text-truncate" data-i18n="Icons">Icons</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="icons-boxicons.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Boxicons">Boxicons</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="icons-font-awesome.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Fontawesome">Fontawesome</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Forms & Tables -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text" data-i18n="Forms & Tables">Forms
              &amp; Tables</span></li>
          <!-- Forms -->
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div class="text-truncate" data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="forms-basic-inputs.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Basic Inputs">Basic Inputs</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-input-groups.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Input groups">Input groups</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-custom-options.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Custom Options">Custom Options</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-editors.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Editors">Editors</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-file-upload.html" class="menu-link">
                  <div class="text-truncate" data-i18n="File Upload">File Upload</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-pickers.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Pickers">Pickers</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-selects.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Select & Tags">Select &amp; Tags</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-sliders.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Sliders">Sliders</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-switches.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Switches">Switches</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="forms-extras.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Extras">Extras</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-detail"></i>
              <div class="text-truncate" data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="form-layouts-vertical.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Vertical Form">Vertical Form</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="form-layouts-horizontal.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Horizontal Form">Horizontal Form</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="form-layouts-sticky.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Sticky Actions">Sticky Actions</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-carousel"></i>
              <div class="text-truncate" data-i18n="Form Wizard">Form Wizard</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="form-wizard-numbered.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Numbered">Numbered</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="form-wizard-icons.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Icons">Icons</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-list-check"></i>
              <div class="text-truncate" data-i18n="Form Validation">Form Validation</div>
            </a>
          </li>
          <!-- Tables -->
          <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-table"></i>
              <div class="text-truncate" data-i18n="Tables">Tables</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-grid"></i>
              <div class="text-truncate" data-i18n="Datatables">Datatables</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="tables-datatables-basic.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Basic">Basic</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="tables-datatables-advanced.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Advanced">Advanced</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="tables-datatables-extensions.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Extensions">Extensions</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Charts & Maps -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Charts & Maps">Charts &amp; Maps</span>
          </li>
          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-chart"></i>
              <div class="text-truncate" data-i18n="Charts">Charts</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="charts-apex.html" class="menu-link">
                  <div class="text-truncate" data-i18n="Apex Charts">Apex Charts</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="charts-chartjs.html" class="menu-link">
                  <div class="text-truncate" data-i18n="ChartJS">ChartJS</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="maps-leaflet.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-map-alt"></i>
              <div class="text-truncate" data-i18n="Leaflet Maps">Leaflet Maps</div>
            </a>
          </li>

          <!-- Misc -->
          <li class="menu-header small text-uppercase"><span class="menu-header-text" data-i18n="Misc">Misc</span></li>
          <li class="menu-item">
            <a href="https://themeselection.com/support/" target="_blank" class="menu-link">
              <i class="menu-icon tf-icons bx bx-support"></i>
              <div class="text-truncate" data-i18n="Support">Support</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
              target="_blank" class="menu-link">
              <i class="menu-icon tf-icons bx bx-file"></i>
              <div class="text-truncate" data-i18n="Documentation">Documentation</div>
            </a>
          </li>
        </ul>



      </aside>
      <!-- / Menu -->
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <!-- Navbar -->




        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">











          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>


          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">




            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                  <i class="bx bx-search bx-sm"></i>
                  <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                </a>
              </div>
            </div>
            <!-- /Search -->





            <ul class="navbar-nav flex-row align-items-center ms-auto">




              <!-- Language -->
              <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class='bx bx-globe bx-sm'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                      <span class="align-middle">English</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                      <span class="align-middle">French</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                      <span class="align-middle">Arabic</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                      <span class="align-middle">German</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- /Language -->

              <!-- Quick links  -->
              <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside" aria-expanded="false">
                  <i class='bx bx-grid-alt bx-sm'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0">
                  <div class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                      <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
                    </div>
                  </div>
                  <div class="dropdown-shortcuts-list scrollable-container">
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-calendar fs-4"></i>
                        </span>
                        <a href="app-calendar.html" class="stretched-link">Calendar</a>
                        <small class="text-muted mb-0">Appointments</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-food-menu fs-4"></i>
                        </span>
                        <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                        <small class="text-muted mb-0">Manage Accounts</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-user fs-4"></i>
                        </span>
                        <a href="app-user-list.html" class="stretched-link">User App</a>
                        <small class="text-muted mb-0">Manage Users</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-check-shield fs-4"></i>
                        </span>
                        <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                        <small class="text-muted mb-0">Permission</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                        </span>
                        <a href="index.html" class="stretched-link">Dashboard</a>
                        <small class="text-muted mb-0">User Profile</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-cog fs-4"></i>
                        </span>
                        <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                        <small class="text-muted mb-0">Account Settings</small>
                      </div>
                    </div>
                    <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-help-circle fs-4"></i>
                        </span>
                        <a href="pages-faq.html" class="stretched-link">FAQs</a>
                        <small class="text-muted mb-0">FAQs & Articles</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                        <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                          <i class="bx bx-window-open fs-4"></i>
                        </span>
                        <a href="modal-examples.html" class="stretched-link">Modals</a>
                        <small class="text-muted mb-0">Useful Popups</small>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Quick links -->


              <!-- Style Switcher -->
              <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class='bx bx-sm'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                      <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                      <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                      <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- / Style Switcher-->


              <!-- Notification -->
              <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside" aria-expanded="false">
                  <i class="bx bx-bell bx-sm"></i>
                  <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                  <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Notification</h5>
                      <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                    </div>
                  </li>
                  <li class="dropdown-notifications-list scrollable-container">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                            <p class="mb-0">Won the monthly best seller gold badge</p>
                            <small class="text-muted">1h ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Charles Franklin</h6>
                            <p class="mb-0">Accepted your connection</p>
                            <small class="text-muted">12hr ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">New Message ✉️</h6>
                            <p class="mb-0">You have new message from Natalie</p>
                            <small class="text-muted">1h ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i
                                  class="bx bx-cart"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                            <p class="mb-0">ACME Inc. made new order $1,154</p>
                            <small class="text-muted">1 day ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Application has been approved 🚀 </h6>
                            <p class="mb-0">Your ABC project application has been approved.</p>
                            <small class="text-muted">2 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i
                                  class="bx bx-pie-chart-alt"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Monthly report is generated</h6>
                            <p class="mb-0">July monthly financial report is generated </p>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Send connection request</h6>
                            <p class="mb-0">Peter sent you connection request</p>
                            <small class="text-muted">4 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">New message from Jane</h6>
                            <p class="mb-0">Your have new message from Jane</p>
                            <small class="text-muted">5 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-warning"><i
                                  class="bx bx-error"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">CPU is running high</h6>
                            <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                            <small class="text-muted">5 days ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="bx bx-x"></span></a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-menu-footer border-top p-3">
                    <button class="btn btn-primary text-uppercase w-1200">view all notifications</button>
                  </li>
                </ul>
              </li>
              <!--/ Notification -->
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-profile-user.html">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-faq.html">
                      <i class="bx bx-help-circle me-2"></i>
                      <span class="align-middle">FAQ</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pages-pricing.html">
                      <i class="bx bx-dollar me-2"></i>
                      <span class="align-middle">Pricing</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->


            </ul>
          </div>


          <!-- Search Small Screens -->
          <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
              aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
          </div>


        </nav>



        <!-- / Navbar -->
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Basic Bootstrap Table -->
            <div class="card">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Dashboard</h5>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <div class="avatar-initial bg-primary rounded shadow">
                          <i class="fa-solid fa-briefcase"></i>
                        </div>
                      </div>
                      <div class="ms-3">
                        <div class="small mb-1">Posisi</div>
                        <h5 class="mb-0">
                          80
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <div class="avatar-initial bg-warning rounded shadow">
                          <i class="fa-solid fa-briefcase"></i>
                        </div>
                      </div>
                      <div class="ms-3">
                        <div class="small mb-1">Pelamar</div>
                        <h5 class="mb-0">
                          13 </h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <div class="avatar-initial bg-success rounded shadow">
                          <i class="fa-solid fa-check"></i>
                        </div>
                      </div>
                      <div class="ms-3">
                        <div class="small mb-1">Pelamar Lolos</div>
                        <h5 class="mb-0">
                          0 </h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <div class="avatar-initial bg-danger rounded shadow">
                          <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                      </div>
                      <div class="ms-3">
                        <div class="small mb-1">Pelamar Tidak Lolos</div>
                        <h5 class="mb-0">
                          2 </h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">

              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">Laporan Proses Rekrutmen</h6>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                      data-bs-target="#modalFilterDashboard">
                      <i class="fa-solid fa-filter"></i> Filter
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modalFilterDashboard" tabindex="-1" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Filter Tanggal Lamaran</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form class="row g-3" action="" method="post">
                              <div class="col-md-6">
                                <label for="start_date" class="form-label">Tanggal Awal Lamaran:</label>
                                <input type="date" id="start_date" class="form-control" name="start_date" value="">
                              </div>
                              <div class="col-md-6">
                                <label for="end_date" class="form-label">Tanggal Akhir Lamaran:</label>
                                <input type="date" id="end_date" class="form-control" name="end_date" value="">
                              </div>
                              <div class="col-12">
                                <button type="submit" class="btn btn-primary">Cari</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr>
                          <th colspan="6"></th>
                          <th colspan="4">Seleksi Administrasi</th>
                          <th colspan="4">Walk in Interview</th>
                          <th colspan="5">Psikotest</th>
                          <th colspan="4">Wawancara HRD</th>
                          <th colspan="4">Wawancara User</th>
                        </tr>
                        <tr>
                          <th>No.</th>
                          <th>Posisi</th>
                          <th>Kode Posisi</th>
                          <th>PT</th>
                          <th>Total Kebutuhan</th>
                          <th>Total Pelamar</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Belum Diseleksi</th>
                          <th>Total</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Belum Dijadwalkan</th>
                          <th>Total</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Dalam Proses</th>
                          <th>Tidak Psikotest</th>
                          <th>Total</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Belum Dijadwalkan</th>
                          <th>Total</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Belum Dijadwalkan</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Creative Designer</td>
                          <td>CD</td>
                          <td> PIM </td>
                          <td>5</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Desainer Multimedia</td>
                          <td>DM</td>
                          <td> PIM </td>
                          <td>5</td>
                          <td>5</td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>2</td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>2</td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>2</td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Marketing Area</td>
                          <td>MA</td>
                          <td> PIM </td>
                          <td>5</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Marketing Manager</td>
                          <td>MM</td>
                          <td> PIM </td>
                          <td></td>
                          <td>3</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Staff Admin Ekspedisi dan Transportasi</td>
                          <td>SAE</td>
                          <td> PIM </td>
                          <td>12</td>
                          <td>3</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr class="text-center">
                          <td colspan="5"><b>Total</b></td>
                          <td class='text-center fw-bold'>
                            13 </td>
                          <td class="text-center fw-bold">
                            3 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            3 </td>
                          <td class="text-center fw-bold">
                            3 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            3 </td>
                          <td class="text-center fw-bold">
                            2 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            2 </td>
                          <td class="text-center fw-bold">
                            2 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            2 </td>
                          <td class="text-center fw-bold">
                            1 </td>
                          <td class="text-center fw-bold">
                            1 </td>
                          <td class="text-center fw-bold">
                            0 </td>
                          <td class="text-center fw-bold">
                            2 </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>

            </div>

          </div>



          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>

              </div>
              <div>
                <a href="https://fanianggita.github.io/" class="footer-link me-4" target="_blank">About</a>
              </div>
          </footer> <!-- / Footer -->

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

  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>

  <!-- Bootstrap and jQuery scripts -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- DataTables JavaScript -->
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.table').DataTable({

        fixedColumns: {
          left: 3,
        },

        scrollX: true,
        dom: 'Blfrtip',
        buttons: [
          'excelHtml5',
        ],
        lengthMenu: [10, 25, 50, 1200], // Specify the available page lengths
        pageLength: 10 // Set the initial page length
      });
    });
  </script>

</body>

</html>