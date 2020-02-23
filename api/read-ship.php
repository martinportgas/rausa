<?php
header("Content-type:application/json");
include '../lib/config.php';

if (isset($_GET)) {
    $param = $_GET['param'];
    $sql = "SELECT * FROM tbl_ship WHERE ship_name LIKE '%$param%'";
    $result = mysqli_query($mysqlConnect, $sql);
    while ($row = $result->fetch_assoc()) {
        $json[] = $row;
    }
    $data['data'] = $json;
    echo json_encode($data, JSON_PRETTY_PRINT);
}
