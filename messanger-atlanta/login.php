<?php 
 session_start();
 if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
 }
?>

<?php include_once "header.php"; ?>

<body>
 <div class="wrapper">
  <section id="draggable" class="form login">
   <span id="brand">atlanta.dev</span>
   <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="error-text"></div>
    <div class="field input">
     <label>Адрес E-mail</label>
     <input type="text" name="email" placeholder="Введите почту, указанную при регистрации" required>
    </div>
    <div class="field input">
     <label>Пароль</label>
     <input type="password" name="password" placeholder="Введите Ваш пароль" required>
     <i class="fas fa-eye"></i>
    </div>
    <div class="field button">
     <input type="submit" name="submit" value="Войти">
    </div>
   </form>
   <div class="link">Ещё не зарегистрировались? <a href="index.php">Сделать это сейчас</a></div>
  </section>
 </div>
 <script src="javascript/pass-show-hide.js"></script>
 <script src="javascript/login.js"></script>
</body>
</html>
