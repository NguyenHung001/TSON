<?php
require "./connectDB.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM cart WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: ./cart.php');
        exit;
    } 
}
?>