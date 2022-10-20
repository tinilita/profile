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
        /*#ff7088*/
        footer, section {
            padding: 30px 0;
        }
        header {
            position: center;
            width: 100%;
            background-color: #eee;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
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

        h2 {
            font-weight: 600;
            letter-spacing: 2px;
            font-size: 30px;
        }
        h4, li, p{
            font-size: 20px;
            font-weight: 300;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
<header>
</header>
<main>
    <section class="about">
        <h1 style="text-align: center;">Капустина Кристина Александровна<br>Стажер php разработчик</h1>
    </section>


    <section class="kontacts" style="text-align: center;">
        <h2></h2>
        <p></p>
        <div class="js-form ">
            <form submit.prevent="onclick" class="form" action="/" method="post" enctype="application/x-www-fors-urlencoded">
                <fieldset class="form__fieldset">
                    <label class="form__label">
                        <input type="text" class="form__input" placeholder="Имя">
                    </label>
                    <label class="form__label">
                        <input type="email" class="form__input" placeholder="email">
                    </label>
                    <label class="form__label">
                        <textarea class="form__input form__input--textarea"></textarea>
                    </label>
                </fieldset>
                <button class="form__submit" type="submit">Нажать</button>
            </form>
        </div>
    </section>
</main>

<footer id="footer" style="text-align: center;">
</footer>
</body>
</html>