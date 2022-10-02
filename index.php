<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyChat</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
    <section class="form signup">
        <header>Регистрация</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="login-details">
                <div class="field input">
                    <label>Логин</label>
                    <input type="text" name="login" placeholder="Введите логин" required>
                </div>
            </div>
            <div class="field input">
                <label>Электронная почта</label>
                <input type="text" name="email" placeholder="Введите почту" required>
            </div>
            <div class="field input">
                <label>Пароль</label>
                <input type="password" name="password" placeholder="Введите пароль" required>

            </div>
            <div class="field image">
                <label>Выберите изображение</label>
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Начать чат">
            </div>
        </form>
        <div class="link">Уже зарегистрированы? <a href="login.php">Войти</a></div>
    </section>
</div>

<script src="javascript/signup.js"></script>

</body>
</html>