<?php
require "./connectDB.php";
$errors = [];
if (isset($_POST['pay'])) {
    $id = "OD" . random_int(10, 99);
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $adress = $_POST['adress'];
    $products = $_POST['products'];

    if (
        isset($_POST['fullname']) &&
        isset($_POST['phonenumber']) &&
        isset($_POST['adress'])
    ) {


        if (!empty($_POST['select'])) {
            $pay = $_POST['select'];
        } else {
            $errors['pay'] = "Vui lòng chọn phương thức thanh toán !";
        }

        if (strlen($fullname) == 0 || strlen($fullname) > 50) {
            $errors['fullname'] = "Họ và tên không được bỏ trống và không quá 50 kí tự !";
        }
        if (strlen($adress) == 0) {
            $errors['adress'] = "Địa chỉ không được bỏ trống !";
        }
        if (!preg_match('/^[0-9]+$/', $phonenumber)) {
            $errors['phonenumber'] = "Số điện thoại không hợp lệ !";
        } else if (strlen($phonenumber) == 0 || strlen($phonenumber) > 11) {
            $errors['phonenumber'] = "Số điện thoại không được bỏ trống và không quá 11 số !";
        }

        if (count($errors) === 0) {
            $sql = "INSERT INTO `customer_orders`
        (`id`,`fullname`,`phonenumber`,`adress`,`pay`,`products`)
        VALUES 
        ('$id','$fullname','$phonenumber','$adress','$pay','$products')
        ";

            // echo "<script>alert('Đăng ký thành công !')</script>";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $success = "<i class='fa-solid fa-circle-check'></i> Đặt hàng thành công !";
                include "./order.php";
            }
        } else {
            $fail = "fail";
            include "./order.php";
        }
    } else {
        include "./order.php";
    }
}
?>
