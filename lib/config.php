<?php
$mysqlConnect = mysqli_connect("localhost", "root", "", "raus_db");

if (mysqli_connect_errno()) {
    echo "Connecting is fail -> : " . mysqli_connect_error();
}
