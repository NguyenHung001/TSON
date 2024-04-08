<?php
    $host = "localhost";
    $dbname = "TSONproject";
    $username = "root";
    $password = "lnh070601.";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_error() != null) {
        echo "Kết nối không thành công !";
        exit;
    }

?>
