<?php
require "./connectDB.php";
$result = mysqli_query($conn, "select * from customers");
$data = mysqli_fetch_all($result, MYSQLI_BOTH);
$errorsLogin = [];

// if (isset($_POST['login'])) {

//   $username = $_POST['username'];
//   $password = $_POST['password'];

//   if (empty($username) && empty($password)) {
//     $errorsLogin['username'] = "Bạn chưa nhập tên đăng nhập!";
//     $errorsLogin['password'] = "Bạn chưa nhập mật khẩu!";
//   } else if (empty($username)) {
//     $errorsLogin['username'] = "Bạn chưa nhập tên đăng nhập!";
//   } else if (empty($password)) {
//     $errorsLogin['password'] = "Bạn chưa nhập mật khẩu!";
//   } else {
//     foreach ($data as $item) {
//       if ($username == $item['user_name'] && $password == $item['pass_word']) {
//           $success = "<i class='fa-solid fa-circle-check'></i> Đăng nhập thành công";
//           break;
//       } 
//       if ($username != $item['user_name']) {
//           $errorsLogin['username'] = "Tên đăng nhập không tồn tại !";
//       }
      
//       if ($password != $item['pass_word']) {
//           $errorsLogin['password'] = "Mật khẩu không đúng !";
//       }
//   }
//   }

//   if (count($errorsLogin) == 0) {
//     include "./login.php";

//   } else {
//     $fail = "fail";
//     $usernameValue = $username;
//     include "./login.php";
//   }
// } else {
//   include "./login.php";
// }
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
      if (empty($username)) {
          $errorsLogin['username'] = "Bạn chưa nhập tên đăng nhập!";
      }
      if (empty($password)) {
          $errorsLogin['password'] = "Bạn chưa nhập mật khẩu!";
      }
  } else {
      $found = false; // Biến này để kiểm tra xem tên đăng nhập có tồn tại không
      foreach ($data as $item) {
          if ($username == $item['user_name']) {
              $found = true; // Tìm thấy tên đăng nhập trong danh sách
              if ($password == $item['pass_word']) {
                  $success = "<i class='fa-solid fa-circle-check'></i> Đăng nhập thành công";
                  break;
              } else {
                  // Nếu tìm thấy tên đăng nhập, nhưng mật khẩu không khớp
                  $errorsLogin['password'] = "Mật khẩu không đúng !";
                  break;
              }
          }
      }
      if (!$found) {
          // Nếu không tìm thấy tên đăng nhập trong danh sách
          $errorsLogin['username'] = "Tên đăng nhập không tồn tại !";
      }
  }

  if (count($errorsLogin) == 0 && isset($success)) {
      include "./login.php";
  } else {
      $fail = "fail";
      $usernameValue = $username;
      include "./login.php";
  }
} else {
  include "./login.php";
}

?>