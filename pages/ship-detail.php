<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PT. RIDIA AKUSA UTAMA SHIPPING</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
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
                                <h4 class="page-title">Memorandum Pemeriksaan Kapal</h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    include("../lib/config.php");
                                    $param = $_GET['id'];
                                    $query = "SELECT * FROM tbl_ship WHERE ship_id =" . $param;
                                    $data = mysqli_query($mysqlConnect, $query);
                                    $row = mysqli_fetch_object($data);
                                    ?>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="ship-name">Nama Kapal</label>
                                            <input type="text" readonly class="form-control" id="ship-name" value="<?php echo $row->ship_name; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">Tahun Pembuatan</label>
                                            <input type="text" readonly class="form-control" id="ship-production-year" value="<?php echo $row->ship_production_year; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">Tipe Kapal</label>
                                            <input type="text" readonly class="form-control" id="ship-type" value="<?php echo $row->ship_type; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">GT</label>
                                            <input type="text" readonly class="form-control" id="ship-gt" value="<?php echo $row->ship_gt; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">Kelas</label>
                                            <input type="text" readonly class="form-control" id="ship-class" value="<?php echo $row->ship_class; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">Posisi Kapal</label>
                                            <input type="text" readonly class="form-control" id="ship-position" value="<?php echo $row->ship_position; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">Key. PSA/ Non</label>
                                            <input type="text" readonly class="form-control" id="ship-psa" value="<?php echo $row->ship_psa; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">Bendera</label>
                                            <input type="text" readonly class="form-control" id="ship-flag" value="<?php echo $row->ship_flag; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">Wilayah</label>
                                            <input type="text" readonly class="form-control" id="ship-region" value="<?php echo $row->ship_region; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="staticEmail">Produk</label>
                                            <input type="text" readonly class="form-control" id="ship-product" value="<?php echo $row->ship_product; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <?php
                                        include("../lib/config.php");

                                        $rowNumber = 1;
                                        $query = "SELECT * FROM tbl_ship_detail WHERE ship_id =" . $param;
                                        $data = mysqli_query($mysqlConnect, $query);
                                        ?>
                                        <thead>
                                            <tr>
                                                <th scope="col">NO</th>
                                                <th scope="col">DOKUMEN/ SERTIFIKAT</th>
                                                <th scope="col">DIBERIKAN OLEH</th>
                                                <th scope="col">TANGGAL</th>
                                                <th scope="col">BERLAKU S/D</th>
                                                <th scope="col">KETERANGAN</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_object($data)) {
                                                echo "
                                                    <tr>
                                                        <td>" . $rowNumber . "</td>
                                                        <td>" . $row->ship_document . "</td>
                                                        <td>" . $row->ship_is_given_by . "</td>
                                                        <td>" . $row->ship_date_given . "</td>
                                                        <td>" . $row->ship_valid_date . "</td>
                                                        <td>" . $row->ship_desc . "</td>
                                                        <td></td>
                                                    </tr>
                                                ";
                                                $rowNumber++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <script src="../assets/js/demo_1/dashboard.js"></script>
</body>

</html>