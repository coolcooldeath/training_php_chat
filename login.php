<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyChat</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Войти</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Электронная почта</label>
          <input type="text" name="email" placeholder="Введите почту" required>
        </div>
        <div class="field input">
          <label>Пароль</label>
          <input type="password" name="password" placeholder="Введите пароль" required>

        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Начать чат">
        </div>
      </form>
      <div class="link">Не зарегистрированы? <a href="index.php">Регистрация</a></div>
    </section>
  </div>

  <script src="javascript/login.js"></script>

</body>
</html>
