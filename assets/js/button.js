/*A jQuery plugin which add loading indicators into buttons*/

(function ($) {
    $.fn.buttonLoader = function (action) {
        var self = $(this);
        if (action == 'start') {
            if ($(self).attr("disabled") == "disabled") {
                e.preventDefault();
            }
            $('.has-spinner').attr("disabled", "disabled");
            $(self).attr('data-btn-text', $(self).text());
            $(self).html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span>Подключение');
            $(self).addClass('active');
        }
        if (action == 'stop') {
            $(self).html($(self).attr('data-btn-text'));
            $(self).removeClass('active');
            $('.has-spinner').removeAttr("disabled");
        }
    }
})(jQuery);

$(document).ready(function () {

    $('.has-spinner').click(function () {
        var btn = $(this);
        $(btn).buttonLoader('start');
        setTimeout(function () {
            $(btn).buttonLoader('stop');
        }, 3000);
    });
});

function btn_1() {
    let name = document.querySelector('#name_1');
    let percent = document.querySelector('#percent_1');

    bootbox.confirm({
        title: "Выбор трейдера!",
        message: "Вы уверены, что хотите выбрать данного трейдера?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Отменить'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Подтвердить'
            }
        },
        callback: function (result) {
            if (result == true) {
                document.querySelector('.trayder-name').textContent = name.textContent;
                document.querySelector('.percent').textContent = percent.textContent;
                document.querySelector('.trader').classList.remove('active_trader');
                document.querySelector('.b-trader_inner').style.background = "linear-gradient(45deg, #3783b5 0%, #25364a 100%)";
            }

            else {
                console.log('НЕ менять' + result);
            }
        }
    });


}
document.querySelector('#btn_1').onclick = btn_1;

function btn_2() {
    let name = document.querySelector('#name_2');
    let percent = document.querySelector('#percent_2');

    bootbox.confirm({
        title: "Выбор трейдера!",
        message: "Вы уверены, что хотите выбрать данного трейдера?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Отменить'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Подтвердить'
            }
        },
        callback: function (result) {
            if (result == true) {
                document.querySelector('.trayder-name').textContent = name.textContent;
                document.querySelector('.percent').textContent = percent.textContent;
                document.querySelector('.trader').classList.remove('active_trader');
                document.querySelector('.b-trader_inner').style.background = "linear-gradient(45deg, #ff0000 0%, #AA0000 100%)";
            }

            else {
                console.log('НЕ менять' + result);
            }
        }
    });
}

document.querySelector('#btn_2').onclick = btn_2;

function btn_3() {
    let name = document.querySelector('#name_3');
    let percent = document.querySelector('#percent_3');
    bootbox.confirm({
        title: "Выбор трейдера!",
        message: "Вы уверены, что хотите выбрать данного трейдера?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Отменить'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Подтвердить'
            }
        },
        callback: function (result) {
            if (result == true) {
                document.querySelector('.trayder-name').textContent = name.textContent;
                document.querySelector('.percent').textContent = percent.textContent;
                document.querySelector('.trader').classList.remove('active_trader');
                document.querySelector('.b-trader_inner').style.background = "linear-gradient(45deg, #007a18 0%, #002d02 100%)";
            }

            else {
                console.log('НЕ менять' + result);
            }
        }
    });

}
document.querySelector('#btn_3').onclick = btn_3;

function btn_4() {
    let name = document.querySelector('#name_4');
    let percent = document.querySelector('#percent_4');

    bootbox.confirm({
        title: "Выбор трейдера!",
        message: "Вы уверены, что хотите выбрать данного трейдера?",
        buttons: {
            cancel: {
                label: '<i class="fa fa-times"></i> Отменить'
            },
            confirm: {
                label: '<i class="fa fa-check"></i> Подтвердить'
            }
        },
        callback: function (result) {
            if (result == true) {
                document.querySelector('.trayder-name').textContent = name.textContent;
                document.querySelector('.percent').textContent = percent.textContent;
                document.querySelector('.trader').classList.remove('active_trader');
                document.querySelector('.b-trader_inner').style.background = "linear-gradient(45deg, #383838 0%, #000000 100%)";
            }

            else {
                console.log('НЕ менять' + result);
                document.querySelector('.trader').classList.add('active_trader');
            }
        }
    });
    document.querySelector('.trayder-name').textContent = name.textContent;
    document.querySelector('.percent').textContent = percent.textContent;
    document.querySelector('.trader').classList.remove('active_trader');
    document.querySelector('.b-trader_inner').style.background = "linear-gradient(45deg, #383838 0%, #000000 100%)";
}
document.querySelector('#btn_4').onclick = btn_4;
