<!doctype html>
<?php
include_once 'resources/includs/notification/notification.html';
include_once 'resources/includs/spinner/spiner.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="resources/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/assets/css/material-kit.css">
        <link rel="stylesheet" href="resources/css/ionicons.css">
        <link rel="stylesheet" href="resources/css/geralStyle.css">
        <link rel="stylesheet" href="resources/css/myIcon/styles.css">
        <link rel="stylesheet" href="resources/css/indexStyle.css">

        <link rel="stylesheet" href="resources/includs/notification/css/notify.css">
        <link rel="stylesheet" href="resources/includs/spinner/css/spinner.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 content-slider">
                    <div class="slid-show">

                        <div class="content-slider">
                            <section style="background-image: url('resources/img/008.jpg');"></section>
                            <section style="background-image: url('resources/img/008.jpg');"></section>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content-header">

                        <span>serviço</span>
                        <span>senha</span>
                        <span>Balcão</span>
                    </div>
                    <div id="lista_chamada" class="senha-factor">

<!--                        <div class="factor" id="">
                            <section class="color-1 is-active" >
                                <span>A</span>
                                <span>600</span>
                                <span>1</span>
                            </section>
                        </div>-->

                    </div>
                    <div class="col-md-12">
                        <iframe src = "https://feed.mikle.com/widget/v2/64185/" height = "202px" width = "100%" class = "fw-iframe" scrolling = "no" frameborder = "0" ></iframe>
                    </div>
                </div>
            </div>
        </div>


        <div class="clock-content">
            <div id="clock">
                <p class="date clock-item">{{ date }}</p>
                <p class="time">{{ time }}</p>

            </div>
        </div>

    </body>

    <script src="resources/js/jQuery.js"></script>
    <script src="resources/assets/js/bootstrap.min.js"></script>
    <script src="resources/js/animationScript.js"></script>
    <script src="resources/js/vue.min.js"></script>
    <script src="resources/js/cycle.js"></script>
    <script  src="resources/js/indexScript.js"></script>

    <script src="resources/includs/notification/js/notify.js"></script>
    <script src="resources/includs/spinner/js/spinner.js"></script>

    <script src="resources/script/geral.js"></script>
    <script src="resources/script/tela.js"></script>

    <script>

var clock = new Vue({
    el: '#clock',
    data: {
        time: '',
        date: ''
    }
});

var week = ['DOMINGO', 'SEGUNDA', 'TERÇA', 'QUARTA', 'QUINTA', 'SEXTA', 'SÁBADO'];
var timerID = setInterval(updateTime, 1000);
updateTime();
function updateTime() {
    var cd = new Date();
    clock.time = zeroPadding(cd.getHours(), 2) + ':' + zeroPadding(cd.getMinutes(), 2) + ':' + zeroPadding(cd.getSeconds(), 2);
    //clock.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth()+1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
    clock.date = +zeroPadding(cd.getDate(), 2) + '-' + zeroPadding(cd.getMonth() + 1, 2) + '-' + zeroPadding(cd.getFullYear(), 4) + ' ' + week[cd.getDay()];

}
;

function zeroPadding(num, digit) {
    var zero = '';
    for (var i = 0; i < digit; i++) {
        zero += '0';
    }
    return (zero + num).slice(-digit);
}

    </script>
</html>