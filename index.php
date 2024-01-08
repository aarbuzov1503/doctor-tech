<?php 
session_start(); // стратуем сессию, чтобы использовать 
//проерку авторизации пользователя
?> 

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
        <meta name="description" content="Заправка картриджей, Ремонт компьютеров и телефонов Doctor-tech">
        <meta property="og:title" content="Заправка картриджей, Ремонт компьютеров и телефонов Doctor-tech">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/media.css"> 
        <link rel="shortcut icon" href="../img/ico.svg" type="image/x-icon"/>
        <title> Заправка картриджей, Ремонт компьютеров и телефонов Doctor-tech</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="js/Element-scrollIntoView.js" defer></script>
        <script src="js/wow.min.js" defer></script>
        <script src="js/app.js" defer></script>
    </head>
    <body class="section-body">
        <header class="header wow slideInDown" data-wow-duration="2s" data-wow-delay="2s">
            <div class="container container-header">
                <button type="submit" class="burger" aria-label="Открыть меню">
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                </button>
                <div class="header__logo-wrap">
                    <div class="header__logo">
                        <a href="#"> 
                            <img class="header__img header__logo" src="../img/logo.png" alt="Логотип"></a>
                    </div>
                </div>
                <div class="desktop-menu-nav">
                    <nav class="header__nav nav">
                        <ul class="header__list list-reset">
                            <li class="header__item"> 
                                <a class="header__link" href="#about">О нас</a></li>
                            <li class="header__item"> 
                                <a class="header__link" href="#servise">Дополнительные услуги</a></li>
                            <!--<li class="header__item"> <a class="header__link" href="check.php">Личный кабинет</a></li>-->
                                <?php if (!empty($_SESSION['id'])) // здесь происходит следующее
                 // если пользователь авторизован направляем его в личный кабинет
			      {?>
                      <li class="header__item"><a class="header__link"  href="lk.php">Личный кабинет</a> </li>
			     <?php }
			     // если же не автоизован направляем его на 
			     // страницу входа в систему
                       else
			      {?>
			     
	                 <li class="header__item"><a class="header__link"  href="check.php">Личный кабинет</a> </li>
                 <?php }?>
                                <li class="header__item"><a class="header__link" href="https://vk.com/alexverstak">Техподдержка</a></li>
 <?php if (!empty($_SESSION['id'])) // здесь происходит следующее
                 // если пользователь авторизован направляем его в личный кабинет
			      {?>
                      <li class="header__item"><form action="" method="post">
			<button class="header__link f_exit" type="submit" name="exit" value="999">Выход </button>
				<?php 
				if (isset($_POST['exit'])&&($_POST['exit']==999)) {
					$_SESSION = array(); // или $_SESSION = array() для очистки всех данных сессии
					session_destroy();
					header('Location: index.php');
					}
				?>
			</form> </li>
			     <?php }
			     // если же не автоизован направляем его на 
			     // страницу входа в систему
                        else
			      {?>
			     
	                 <li style="display:none;" class="header__item"><a class="header__link"  href="check.php">Личный кабинет</a> </li>
                 <?php }?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main>
            <section id="hero" class="hero wow slideInDown" data-wow-duration="2s" data-wow-delay="1s">
                <div class="container hero-container">
                    <div class="container-hero">
                        <div class="hero__content">
                            <div class="hero__text">
                            		<p style="color:white; font-size:22px;">Пользователь:  
			      <?php if (!empty($_SESSION['id'])) 
			      // тут понятно и просто
			      // если авторизован выводим ФИО пользователя
			      {
			      echo $_SESSION['username'];
                    }
                    else
                    	// если же нет, то выводим как гость
                    	echo "Гость";
			      ?>
			</p>
                                <h1 class="reset-heading hero__title reset-heading wow slideInDown" data-wow-duration="2s" data-wow-delay="3s">
                                    <a class="hero__link">Ремонт компьютеров и телефонов</a>
                                </h1>
                                <p class="hero__descr descr-reset wow slideInDown" data-wow-duration="2s" data-wow-delay="4s">Заправка картриджей от 350 р</p>
                            </div>
                            <button class="btn flash-btn wow slideInLeft" aria-label="Кнопка заказа расчёта" data-wow-duration="2s" data-wow-delay="4s">Вызвать мастера</button>
                            <div class="popup">
                                <div class="popup__container">
                                    <div class="popup__wrapper">
                                        <div id="blablabla">
                                            <form class="footer__form" action="email.php" method="POST">
                                                <input required aria-label="Имя" class="footer__form-info name" type="text" name="name" placeholder="Имя*">
                                                <input required aria-label="Телефон" class="footer__form-info name"  type="phone" name="phone" placeholder="Телефон*">
                                                <input required aria-label="Электронная почта" class="footer__form-info mail" type="email" name="email"  placeholder="E-mail*">
                                                <textarea required aria-label="опишите вашу проблему" class="footer__form-message"  name="text"  placeholder="Опишите вашу проблему"></textarea>
                                                <div class="footer__blog-consent">
                                                    <button aria-label="Отправить" class="footer__send-btn" type="submit">Отправить</button>
                                                </div>
                                            </form>
                                            <button aria-label="Закрыть" class="btn-remove">Закрыть</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="about">
                <div class="container container-about">
                    <div class="about__content">
                        <div class="about__top">
                            <h2  class="title reset-heading about__title reset-heading">О нас</h2>
                        </div>
                        <ul class="about__list list-reset">
                            <li class="about__list-item">
                                <h3 class="about__heading reset-heading">Технологии</h3>
                                <ul class="about__one-list list-reset">
                                    <li class="list__item">Git</li>
                                    <li class="list__item">Figma</li>
                                    <li class="list__item">Pixel perfect</li>
                                    <li class="list__item">VS Code</li>
                                    <li class="list__item">HTML</li>
                                    <li class="list__item">CSS</li>
                                    <li class="list__item">bootstrap 4</li>
                                </ul>
                            </li>
                            <li class="about__list-item about-second">
                                <h3 class="about__heading reset-heading">Знания</h3>
                                <p class="about-second__descr">Замена чипов:
- некоторые модели картриджей требуют замены микросхем при заправке. У нас всегда в наличии чипы для популярных моделей картриджей. Цена от 200 рублей

Мелкий ремонт и перепрошивка принтеров:
- перепрошивка принтеров и МФУ осуществляется для того, чтобы не менять чип при каждой заправке. Стоимость от 900 рублей.

Ремонт и восстановление:
- в случае, когда картридж печатает с дефектами, либо плохо печатает после заправки, мы производим оперативный ремонт картриджей. Цена от 400 рублей

Продажа новых картриджей:
- также у нас вы можете заказать новые совместимые картриджи по низкой цене, сопоставимой с ценой заправки. Цена от 600 руб

Продажа б/у лазерных принтеров:
- в продаже недорогие лазерные монохромные принтеры для дома и небольшого офиса в хорошем состоянии. Цена от 2500 рублей</p>
                            </li>
                            <li class="about__list-item">
                                <h3 class="about__heading reset-heading">Умения</h3>
                                <p>Заправка картриджей тонером сегодня является лучшим способом возобновить работу оргтехники. Преимущества рециклинга - низкая стоимость, короткие сроки и простота полного восстановления исходного состояния картриджа путем заполнения качественным тонером.

Цена на заправку картриджей существенно ниже приобретения нового картриджа. У нас Вы можете получить скидку, заполнив заявку на сайте на заправку картриджей на выезде

Также предлагаем услугу "Срочная подмена картриджей". Мы привезем Вам полные картриджи в обмен на пустые. Используем экологически чистый и безопасный тонер. Срок гарантии и проверки заправленного картриджа составляет 2 недели.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </section>
            <section id="servise" class="service">
                <div class="container"> 
                    <h2 class="title service__heading site-heading reset-heading">Дополнительные услуги</h2>
                    <div class="flex"> 
<div class="service-card flex-grid">
                    <img class="service-card__img" src="img/servise/1.jpg" alt="Service 1">
                    <h3>Заправка картриджа</h3>
                    <p>от 350 рублей</p>
                    <a href="https://alex-verstak.ru/bookmap/index.html" target="blank">Посмотреть</a>
                </div>

                    <div class="service-card flex-grid">
                    <img class="service-card__img" src="img/servise/2.jfif" alt="Service 1">
                    <h3>Замена чипов</h3>
                    <p>2 000 ₽</p>
                    <a href="https://alex-verstak.ru/ya-go-scooter/index.html" target="blank">Посмотреть</a>
                </div>
    
                    <div class="service-card flex-grid">
                    <img class="service-card__img" src="img/servise/3.jpg" alt="Service 1">
                    <h3>Ремонт телефонов</h3>
                    <p>2 000</p>
                    <a href="https://munrozarasul.ru/" target="blank">Посмотреть</a>
                </div>
                 <div class="service-card flex-grid">
                    <img class="service-card__img" src="img/servise/4.png" alt="Service 1">
                    <h3>Ремонт принтеров</h3>
                    <p>2 000</p>
                    <a href="https://munrozarasul.ru/" target="blank">Посмотреть</a>
                </div>
                 <div class="service-card flex-grid">
                    <img class="service-card__img" src="img/servise/5.jpg" alt="Service 1">
                    <h3>Ремонт ноутбуков</h3>
                    <p>2 000</p>
                    <a href="https://munrozarasul.ru/" target="blank">Посмотреть</a>
                </div>
                 <div class="service-card flex-grid">
                    <img class="service-card__img" src="img/servise/6.png" alt="Service 1">
                    <h3>Ремонт игровых приставок</h3>
                    <p>2 000</p>
                    <a href="https://munrozarasul.ru/" target="blank">Посмотреть</a>
                </div>
                 <div class="service-card flex-grid">
                    <img class="service-card__img" src="img/servise/7.jpg" alt="Service 1">
                    <h3>Ремонт мониторов</h3>
                    <p>2 000</p>
                    <a href="https://munrozarasul.ru/" target="blank">Посмотреть</a>
                </div>
                    </div>
                </div>
            </section>
        </main>
        <footer id="contacts" class="footer">
            <div class="container container-footer">
                <div class="footer__nav">
                    <div class="footer__img-wrap">
                        <a class="footer__logo">
                            <img class="header__img header__logo" src="../img/logo.png" alt="Логотип" style="width:200px"></a>
                    </div>

                    <ul class="footer__list list-reset">
                        <li class="footer__list-item"><a aria-label="Перейти в телеграмм" class="footer__item"  href="">Telegram</a></li>
                    </ul>

                    <ul class="footer__contacts">
                        <li class="footer__contacts-item"><a aria-label="Вконтакте" class="footer__social-link" href="https://vk.com/id191262886" target="blank"><svg class="footer__social-icon" width="60" height="60" viewBox="0 0 60 60"  fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="footer__social-ico" d="M30 0C13.432 0 0 13.4314 0 30C0 46.5686 13.432 60 30 60C46.568 60 60 46.5686 60 30C60 13.4314 46.568 0 30 0ZM45.2176 33.2446C46.6159 34.6103 48.0951 35.8957 49.3504 37.4026C49.9065 38.0692 50.4307 38.7585 50.8297 39.5337C51.3993 40.6392 50.8849 41.8515 49.8954 41.9171L43.7494 41.9159C42.162 42.0473 40.8988 41.4071 39.8339 40.3218C38.9837 39.457 38.195 38.5332 37.3762 37.6389C37.0416 37.2718 36.6893 36.9262 36.2695 36.6543C35.4316 36.1093 34.7036 36.2762 34.2236 37.1515C33.7344 38.0421 33.6227 39.0292 33.5761 40.0205C33.5092 41.4697 33.0721 41.8484 31.618 41.9165C28.5109 42.062 25.5628 41.5906 22.8227 40.0241C20.4055 38.6425 18.5346 36.6924 16.9043 34.4845C13.7297 30.1805 11.2984 25.4566 9.11386 20.597C8.6222 19.5026 8.98189 18.917 10.1893 18.8943C12.1952 18.8557 14.2011 18.8606 16.2071 18.8925C17.0234 18.9054 17.5636 19.3725 17.8772 20.1428C18.9612 22.8098 20.2901 25.3473 21.9554 27.7007C22.3992 28.3274 22.8522 28.9522 23.4973 29.3948C24.2093 29.8834 24.7519 29.7219 25.0877 28.9271C25.3025 28.4219 25.3952 27.8817 25.4418 27.3404C25.6014 25.486 25.6205 23.6323 25.3442 21.7854C25.1724 20.6296 24.5224 19.8832 23.3702 19.6647C22.7834 19.5536 22.8694 19.3363 23.1548 19.0011C23.6501 18.4217 24.1142 18.0632 25.0416 18.0632L31.9857 18.062C33.0801 18.2768 33.3256 18.7679 33.4742 19.8703L33.4803 27.5871C33.4674 28.0137 33.6945 29.2782 34.4606 29.5574C35.0744 29.76 35.4795 29.2677 35.8465 28.8792C37.5118 27.112 38.6983 25.0263 39.7608 22.8675C40.2298 21.9155 40.6343 20.9303 41.0271 19.9433C41.3193 19.2135 41.7735 18.8544 42.5972 18.8667L49.2841 18.8747C49.4811 18.8747 49.6812 18.8765 49.8764 18.9103C51.0034 19.103 51.3121 19.5879 50.9635 20.6873C50.4147 22.4145 49.3485 23.8533 48.3063 25.2958C47.1892 26.8401 45.9977 28.3304 44.8917 29.8815C43.8752 31.2994 43.9556 32.0133 45.2176 33.2446Z"  fill="#666666" />
                                </svg>
                            </a></li>
                    </ul>

                </div>
                <!--<div class="footer__application">-->
                <!--    <h3 class="footer__title reset-heading">Вызвать мастера!</h3>-->
                <!--    <form class="footer__form" action="email.php" method="POST"> -->
                <!--        <input required aria-label="Имя" class="footer__form-info name" type="text" name="name" placeholder="Имя*">-->
                <!--        <input required aria-label="Телефон" class="footer__form-info name" type="phone" name="phone" placeholder="Телефон*">-->
                <!--        <input required aria-label="Электронная почта" class="footer__form-info mail" type="email" name="email" placeholder="E-mail*">-->
                <!--        <textarea required aria-label="Опишите вашу проблему" class="footer__form-message"  name="text" placeholder="Опишите вашу проблему"></textarea>-->
                <!--        <div class="footer__blog-consent">-->
                <!--            <div class="footer__blog-consent">-->
                <!--                <button aria-label="Отправить"  class="footer__send-btn" type="submit">Отправить заявку</button>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        </form>-->
                <!--    </div>-->
                </div>

                <div id="cookie_notification">
                    <p>На сайте происходит сбор и обработка обезличенных данных
                        о посетителях (в т.ч. файлов «cookie») с помощью
                        сервисов интернет-статистики (Яндекс Метрика и Google
                        Аналитика и других). Продолжая
                        работу с сайтом, Вы разрешаете использование
                        cookie-файлов. Вы всегда можете отключить файлы cookie в
                        настройках Вашего браузера. <a class="footer__item"
                            href="https://ya.ru"> Вы можете покинуть сайт</a>
                    </p>
                    <button class="btn-notification cookie_accept">Принять</button>
                </div>
            </footer>
</body>
</html>