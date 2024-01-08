//=======================Код меню для мобильного устроиства===================================
let burger = document.querySelector('.burger');
let menu = document.querySelector('.header__nav');
let menuLinks = menu.querySelectorAll('.header__link');


burger.addEventListener('click',
  function () {

    burger.classList.toggle('burger--active');

    menu.classList.toggle('header__nav--active');

    document.body.classList.toggle('stop-scroll');
  })

menuLinks.forEach(function (el) {
  el.addEventListener('click', function () {

    burger.classList.remove('burger--active');
    menu.classList.remove('header__nav--active');
    document.body.classList.remove('stop-scroll');
  })
})


//=======================Уведомление о сборе данных на сайте===================================

function checkCookies(){
  let cookieDate = localStorage.getItem('cookieDate');
  let cookieNotification = document.getElementById('cookie_notification');
  let cookieBtn = cookieNotification.querySelector('.cookie_accept');

  // Если записи про кукисы нет или она просрочена на 1 день, то показываем информацию про кукисы
  if( !cookieDate || (+cookieDate + 86400000) < Date.now() ){
      cookieNotification.classList.add('show');
  }

  // При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
  cookieBtn.addEventListener('click', function(){
      localStorage.setItem( 'cookieDate', Date.now() );
      cookieNotification.classList.remove('show');
  })
}
checkCookies();


new WOW().init();

//=======================Код всплывания формы по кнопке===================================
const button = document.querySelector('.btn');
const form = document.querySelector('#blablabla');
const popup = document.querySelector('.popup');
const buttonRemove = document.querySelector('.btn-remove');

button.addEventListener('click', () => {
  form.classList.add('open');
  popup.classList.add('popup_open');
});

  buttonRemove.addEventListener('click', () => {
  form.classList.remove('open');
  popup.classList. remove('popup_open');
});
//=======================Код связки формы с БД===================================
$(function () {
    $('.footer__send-btn').on('click', function () {
        let data = {
            'name': $('[name="name"]').val(),
            'phone': $('[name="phone"]').val(),
            'email': $('[name="email"]').val(),
            'text': $('[name="text"]').val()
        };
        $.post('api.php', data, function (response) {
        	form.classList.remove('open');
            popup.classList. remove('popup_open');
            if (response == 1) {
                $('[name="name"]').val('');
                $('[name="phone"]').val('');
                $('[name="email"]').val('');
                $('[name="text"]').val('');
                alert('Ваша заявка принята!\nМы с вами свяжемся');
            } else {
                alert('Что-то пошло не так :(\nПовторите попытку позже')
            }
        })
        return false;
    });
});