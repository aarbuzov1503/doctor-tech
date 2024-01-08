$(function () {
    $('.footer__send-btn').on('click', function () {
        let data = {
            'name': $('[name="name"]').val(),
            'phone': $('[name="phone"]').val(),
            'email': $('[name="email"]').val(),
            'text': $('[name="text"]').val()
        };
        $.post('api.php', data, function (response) {
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