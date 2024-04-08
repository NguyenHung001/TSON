<?php
require "./connectDB.php";
$errors = [];
$email = $_POST['email'];
$passnew = $_POST['password'];

if (!empty($_POST['email']) && !empty($_POST['password'])) {


    $result = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email'");
    $data = mysqli_fetch_all($result, MYSQLI_BOTH);

    if (mysqli_num_rows($result) > 0) {
        $id = $data[0]['id'];
        $sql = "UPDATE customers SET pass_word = '$passnew' WHERE id = '$id'";
        mysqli_query($conn, $sql);
        $success = "<i class='fa-solid fa-circle-check'></i> Đổi mật khẩu thành công !";
    } else {
        $fail = "fail";
        $errors['email'] = "Email không tồn tại !";
    }
    include "./forgot-pass.php";

} else {
    if (empty($_POST['email'])) {
        $errors['email'] = "Bạn chưa nhập email !";
    }
    if (empty($_POST['password']) && !empty($_POST['email'])) {
        $errors['password'] = "Bạn chưa nhập mật khẩu !";
        $errors['email'] ="";
    }
    include "./forgot-pass.php";
}
?>