<?php
?>

<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compotible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
    <meta name = "kaywords" content = "соцсеть">
    <style>
        :root {
            --color1: #334249;
            --color2: #294d6e;
            --color3: #eee;
        }

        /*Цвет*/
        .color1 {
            color: var(--color1)
        }
        .color2 {
            color: var(--color2)
        }
        .color3 {
            color: var(--color3)
        }

        html {
            background-color:#214c84;
            background-blend-mode:overlay;
            display:flex;
            align-items:center;
            justify-content:center;
            background-repeat:no-repeat;
            background-size:cover;
            height:100%;
        }

        body {
            background-color:transparent;
        }
        form {
            position: center;
        }
    </style>
</head>
<body>
<header>
    <div class="nav">
        <a class="active" href="#home">Главная</a>
        <a href="#news">Профиль</a>
        <a href="#contact">Регистрация</a>
        <a href="#about">Авторицация</a>
    </div>
</header>
<main>

    <section class="authorizationForm" style="text-align: center;">
        <div class="form">
            <form method="post" action="script.php">
                <h3 class="text-center">Форма авторизации</h3>
                <div class="form-group">
                    <input class="form-control item" type="text" name="name" maxlength="15" minlength="4" placeholder="Имя" required>
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text" name="phone" minlength="11" placeholder="Номер телефона" required>
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text" name="pass" minlength="6" placeholder="Пароль" required>
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text" name="mail" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="submit">
                </div>
            </form>
        </div>
    </section>

</main>

<footer id="footer" style="text-align: center;">
</footer>
</body>
</html>