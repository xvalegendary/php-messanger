<?php 
 session_start();
 include_once "config.php";
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 if (!empty($email) && !empty($password)) {
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
  if (mysqli_num_rows($sql) > 0) {
   $row = mysqli_fetch_assoc($sql);
   $user_pass = md5($password);
   $enc_pass = $row['password'];
   if($user_pass === $enc_pass) {
    $status = "Пользователь активен";
    $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
    if ($sql2) {
     $_SESSION['unique_id'] = $row['unique_id'];
     echo "Успешно";
    }
    else {
     echo "Что-то пошло не так. Пожалуйста, попробуйте ещё раз!";
    }
   }
   else {
    echo "E-mail или пароль указан неверно!";
   }
  }
  else {
   echo "$email - этого адреса E-mail нет в базе!";
  }
 }
 else {
  echo "Все поля ввода обязательны!";
 }
?>