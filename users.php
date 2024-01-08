<!DOCTYPE html>

<html lang="ru">

    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
		<link rel="stylesheet" href="css/reg.css">
		<link rel="shortcut icon" href="../img/ico.svg" type="image/x-icon"/>
	    <meta name="description" content="Заправка картриджей, Регистрация">
        <meta property="og:title" content="Заправка картриджей, Регистрация">
        <title>Регистрация</title>
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
                            <li class="header__item"> <a class="header__link" href="check.php">Войти</a></li>
                            <li class="header__item"><a class="header__link" href="https://vk.com/alexverstak">Техподдержка</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
 <section class="hero section-form flex">     
  <form class="form" role="form" action="controllers/baza.php" method="post">
        <h1 class="form__title">Регистрация</h1>

        <div class="form__group">
            <input class="form__input" id="username" name ="username" />
            <label class="form__label" >Email</label>
        </div>

        <div class="form__group">
            <input class="form__input" type="password" id ="password" name ="password" />
            <label class="form__label">Пароль</label>
        </div>

        <button class="form__button">Зарегистрироваться</button>

    </form> </section>  
 
</body>
</html>