<?php 
 session_start();
 if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
 }
?>

<?php include_once "header.php"; ?>
<head>
  <link rel="stylesheet" href="index.php">
</head>
<body>
 <div class="wrapper">
  
  <section class="form signup">
   <header style="font-weight:400">atlanta.dev</header>
   <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="error-text"></div>
    <div class="name-details">
     <div class="field input">
      <label>Имя</label>
      <input type="text" name="fname" placeholder="Введите имя" required>
     </div>
     <div class="field input">
      <label>Фамилия</label>
      <input type="text" name="lname" placeholder="Введите фамилию" required>
     </div>
    </div>
    <div class="field input">
     <label>Адрес E-mail</label>
     <input type="text" name="email" placeholder="Введите адрес E-mail" required>
    </div>
    <div class="field input">
     <label>Пароль</label>
     <input type="password" name="password" placeholder="Введите новый пароль" required>
     <i class="fas fa-eye"></i>
    </div>
    <div class="field image">
     <label>Выберите изображение</label>
     <input id="img-input" type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
    </div>
    <div class="field button">
     <input type="submit" name="submit" value="Продолжить">
    </div>
   </form>
   <div class="link">Уже зарегистрированы? <a href="login.php">Войти</a></div>
  </section>
 </div>
 <script src="javascript/pass-show-hide.js"></script>
 <script src="javascript/signup.js"></script>
</body>
</html>