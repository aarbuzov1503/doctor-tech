<!DOCTYPE html>

<html lang="ru">

    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="Cache-Control" content="no-cache">
         <meta name="description" content="Заправка картриджей, Вход">
         <meta property="og:title" content="Заправка картриджей, Вход"> 
         <title>Войти</title>
        <!-- подключение своих стилей-->
         <link rel="stylesheet" type="text/css" href="css/sign-in_style.css">
         <link rel="shortcut icon" href="../img/ico.svg" type="image/x-icon"/>
        
    </head>
<body>
 <header class="header wow slideInDown" data-wow-duration="2s" data-wow-delay="2s">
            <div class="container container-header">
                <button type="submit" class="burger" aria-label="Открыть меню">
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                </button>
                <div class="header__logo-wrap">
                    <div class="header__logo">
                        <a href="https://alex-verstak.ru/"> 
                            <img class="header__img header__logo" src="../img/logo.png" alt="Логотип"></a>
                    </div>
                </div>
                <div class="desktop-menu-nav">
                    <nav class="header__nav nav">
                        <ul class="header__list list-reset">
                            <li class="header__item"><a class="header__link" href="index.php">Главная</a></li>
                            <li class="header__item"> <a class="header__link" href="users.php">Регистрация</a></li>
                            <li class="header__item"><a class="header__link" href="check.php">Личный кабинет</a></li>
                            <li class="header__item"><a class="header__link" href="https://vk.com/alexverstak">Техподдержка</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
 <section class="hero section-form flex">     
  <form class="form" role="form" action="controllers/check-control.php" method="post">
        <h1 class="form__title">Вход</h1>

        <div class="form__group">
            <input class="form__input" id="username" name = "username" />
            <label class="form__label" id="username" name = "username" >Email</label>
        </div>

        <div class="form__group">
            <input class="form__input" type="password" name = "password" id="password" />
            <label class="form__label" name = "password" id="password">Пароль</label>
        </div>

        <button class="form__button">Войти</button>

    </form> </section>  
</div>
</body>
</html>