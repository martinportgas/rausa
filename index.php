<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PT. RIDIA AKUSA UTAMA SHIPPING</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="assets/css/shared/style.css">
  <link rel="stylesheet" href="assets/css/demo_1/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block">PT. RIDIA AKUSA UTAMA SHIPPING</li>

        </ul>
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-item font-weight" href="#">Home</a>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a href="#">Account</a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Page Title Header Starts-->
          <div class="row page-title-header">
            <div class="col-12">
              <div class="page-header">
                <h4 class="page-title">Dashboard</h4>

              </div>
            </div>
          </div>
          <!-- Page Title Header Ends-->
          <div class="row">
            <div class="col-md-12">
              <div class="jumbotron">
                <h1>Company Banner</h1>
                <p>Description of company / Image of company</p>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <Label>Kapal Perusahaan</Label>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="txt-search" placeholder="cari...">
                  </div>


                  <div id="ship-company" class="d-flex flex-column flex-lg-row">

                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <Label>Kapal Sewa</Label>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="txtSearch" placeholder="cari...">
                  </div>
                  <div class="d-flex flex-column flex-lg-row">

                    <div class="col-6 p-1">

                      <div class="card white-text">

                        <div class="card-body pt-10">
                          <h6 class="font-weight-bold mb-1">Kapal 1</h6>
                          <p class="mb-0">Deskripsi Kapal</p>
                        </div>
                      </div>

                    </div>
                    <div class="col-6 p-1">

                      <div class="card white-text">

                        <div class="card-body pt-10">
                          <h6 class="font-weight-bold mb-1">Kapal 2</h6>
                          <p class="mb-0">Deskripsi Kapal</p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 | All rights
              reserved.</span>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="assets/js/shared/off-canvas.js"></script>
  <script src="assets/js/shared/misc.js"></script>
  <script src="assets/js/demo_1/dashboard.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
</body>

</html>
<script type="text/javascript">
  var ship = {};

  ship.init = {
    Load: function() {
      $param = $('#txt-search').val() || '';
      $.ajax({
        dataType: 'json',
        url: 'api/read-ship.php',
        data: {
          param: $param
        }
      }).done(function(data) {
        $.each(data.data, function(index, value) {
          $('#ship-company').append(
            '<div class="col-3 p-1">' +
            '<div class ="card white-text">' +
            '<div class="card-body pt-10">' +
            '<a href="pages/ship-detail?id=' + value.ship_id + '" class="font-weight-bold mb-1" style="cursor: pointer">' + value.ship_name + '</a>' +
            '<p class="mb-0" >' + value.ship_name + '</p></div> </div> </div>'
          );
        });
      });
    },
    Form: function() {
      $('#txt-search').keyup(function() {
        $('#ship-company').text('');
        ship.init.Load();
      });
    }
  };
  $(document).ready(function() {
    ship.init.Load();
    ship.init.Form();
  });
</script>