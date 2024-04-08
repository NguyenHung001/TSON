<?php
require "./connectDB.php";

$idSp = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM cart WHERE id = '" . $idSp . "'");
$data = mysqli_fetch_all($result, MYSQLI_BOTH);

if (mysqli_num_rows($result) > 0) {
    $id = $data[0]['id'];
    $update_query = "UPDATE cart SET quantity = quantity + 1 WHERE id = '$id'";
    mysqli_query($conn, $update_query);
    echo "<script>alert('Sản phẩm đã tồn tại trong giỏ hàng. Số lượng đã được cập nhật.');</script>";
} else {
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = '" . $idSp . "'");
    $data = mysqli_fetch_assoc($result);

    $id = $data['id'];
    $name = $data['pd_name'];
    $price = $data['pd_price'];
    $quantity = 1;
    $image = $data['image'];

    $sql = "INSERT INTO cart (id, pd_name, pd_price, quantity, image) VALUES ('$id', '$name', '$price', '$quantity', '$image')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Đã thêm vào giỏ hàng.');</script>";
}

// header("Location: detail-products.php?id=" . $idSp);
include "./cart.php";
exit;
?>