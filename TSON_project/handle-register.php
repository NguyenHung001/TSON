<?php
require "./connectDB.php";
$errors = [];
if (isset($_POST['register'])) {
    if (
        isset($_POST['lastname']) &&
        isset($_POST['firstname']) &&
        isset($_POST['username']) &&
        isset($_POST['password']) &&
        isset($_POST['email']) &&
        isset($_POST['phonenumber'])
    ) {

        $id = "KH" . random_int(10, 99);
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $fullname = $lastname . $firstname;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];

        if (strlen($lastname) == 0 || strlen($lastname) > 30) {
            $errors['lastname'] = "Họ không được bỏ trống và không quá 20 kí tự !";
        }
        if (strlen($firstname) == 0 || strlen($firstname) > 30) {
            $errors['firstname'] = "Tên không được bỏ trống và không quá 20 kí tự !";
        }
        if (strlen($username) == 0 || strlen($username) > 30) {
            $errors['username'] = "Tên đăng nhập không được bỏ trống và không quá 30 kí tự !";
        }
        if (strlen($password) == 0 || strlen($password) > 30) {
            $errors['password'] = "Mật khẩu không được bỏ trống và không quá 30 kí tự !";
        }
        if (strlen($email) == 0 || strlen($email) > 30) {
            $errors['email'] = "Email không được bỏ trống và không quá 30 kí tự !";
        }
        if (!preg_match('/^[0-9]+$/', $phonenumber)) {
            $errors['phonenumber'] = "Số điện thoại không hợp lệ !";
        } else if (strlen($phonenumber) == 0 || strlen($phonenumber) > 11) {
            $errors['phonenumber'] = "Số điện thoại không được bỏ trống và không quá 11 số !";
        }

        $lastnameValue = isset($lastname) ? $lastname : "";
        $firstnameValue = isset($firstname) ? $firstname : "";
        $usernameValue = isset($username) ? $username : "";
        $passwordValue = isset($password) ? $password : "";
        $emailValue = isset($email) ? $email : "";
        $phonenumberValue = isset($phonenumber) ? $phonenumber : "";

        if (count($errors) === 0) {
            $sql = "INSERT INTO `customers`
        (`id`,`last_name`,`first_name`,`user_name`,`pass_word`,`email`,`phonenumber`)
        VALUES 
        ('$id','$lastname','$firstname','$username','$password','$email','$phonenumber')
        ";

            // echo "<script>alert('Đăng ký thành công !')</script>";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $success = "<i class='fa-solid fa-circle-check'></i> Đăng ký thành công !";
                include "./register.php";
            }
        } else {
            $fail = "fail";
            include "./register.php";
        }
    } else {
        include "./register.php";
    }
}
?>
