<?php
header("Content-type:application/json");
include '../lib/config.php';

if (isset($_POST)) {
    $ship_name = $_POST['ship_name'];
    $ship_type = $_POST['ship_type'];
    $ship_class = $_POST['ship_class'];
    $ship_psa = $_POST['ship_psa'];
    $ship_region = $_POST['ship_region'];
    $ship_production_year = $_POST['ship_production_years'];
    $ship_gt = $_POST['ship_gt'];
    $ship_position = $_POST['ship_position'];
    $ship_flag = $_POST['ship_flag'];
    $ship_product = $_POST['ship_product'];
    $ship_rent = $_POST['ship_rent'];

    $sql = "INSERT INTO tbl_ship (`ship_name`, `ship_type`, `ship_class`, `ship_psa`, `ship_region`, `ship_production_year`, `ship_gt`,  `ship_position`, `ship_flag`, `ship_product`, `ship_rent`) 
    VALUE($ship_name, $ship_type, $ship_class, $ship_psa, $ship_region, $ship_production_year, $ship_gt, $ship_position, $ship_flag, $ship_product, $ship_rent)";

    $result = mysqli_query($mysqlConnect, $sql);
    $data['data'] = $result;
    echo json_encode($data, JSON_PRETTY_PRINT);
}
