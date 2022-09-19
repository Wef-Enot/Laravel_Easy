<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="author" content="Оксана Соболева">
    <meta name="description" content="Шаблон Easy для сайта объявлений Elite-Board.">
    <meta name="keywords" content="купить шаблон для сайта объявлений, купить шаблон доски объявлений, дизайн доски объявлений, дизайн сайта объявлений, шаблон elite-board, cms доска объявлений">
    <meta name="copyright" content="Оксана Соболева">
    <link rel="manifest" href="/pwa/manifest.json">
    <meta name="msapplication-TileColor" content="#E6E6FA">
    <meta name="msapplication-TileImage" content="/templates/easy/assets/ico/fav192.png">
    <meta name="theme-color" content="#E6E6FA">
    <script async="" src="https://mc.yandex.ru/metrika/tag.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/pwa/sw.js');
            });
        }
        var pwaReq = null;
        window.addEventListener('beforeinstallprompt', (e) => {
            pwaReq = e
        });

        function pwa() {
            if (pwaReq) {
                pwaReq.prompt();
                pwaReq.userChoice.then(function(choiceResult) {
                    pwaReq = null
                })
            }
        }
    </script>
    <link rel="shortcut icon" href="https://easy.elite-board.org/templates/easy/images/favicon.png" type="image/png">
    <title>Магазины в регионе Россия, Москва / Easy в регионе Россия, Москва</title>
    <link href="/templates/easy/css/bootstrap.min.css" rel="stylesheet">
    <link href="/templates/easy/css/style-main.css" rel="stylesheet">
    <link href="/templates/easy/css/light.css" rel="stylesheet">
    <link href="/templates/easy/css/glyphicon.css" rel="stylesheet">
    <script>
        var TPL_PATH = "/";
        var TPL_PATH_THEME = '/templates/easy/';
        var TPL_REGION_ID = 3;
        var TPL_AUTOROTATE = 2000;
        var TPL_L_00 = '[после регистрации]';
        var TPL_L_01 = 'Отменить';
        var TPL_L_02 = 'Применить';
        var TPL_L_03 = 'Вы уверены?';
        var TPL_L_04 = '[ Ваш выбор ]';
        var TPL_L_05 = '[ Выбрано ]';
        var TPL_L_06 = 'Необходимо выбрать хотя бы одно объявление';
        var TPL_L_07 = 'Показать ещё';
        var TPL_L_08 = 'Скрыть';
        paceOptions = {
            elements: true
        };
        var fields = new Array();
        var yamaps = new Array();
    </script>
    <meta property="og:title" content="Магазины в регионе Россия, Москва / Easy">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easy.elite-board.org/shops/">
    <meta property="og:description" content="Шаблон Easy для сайта объявлений Elite-Board.">
    <meta property="og:image" content="https://easy.elite-board.org/images/cat/logo.png">
    <style type="text/css">
        .imgLiquid img {
            visibility: hidden
        }
    </style>
</head>

<body>

    <div id="header" class="header b-f">

        <div class="header-top">
            <div class="container text-right visible-xs">
                <a class="mob-shop bl-inl al-mid" href="/shops/"></a><a class="btn-user bl-inl al-mid c-20" href="/users/login/">Личный кабинет</a>
            </div>
        </div>

        <div class="header-bottom b-f">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-md-4">
                        <a href="/" class="logo-title c-20">
                            <span class="logo-icon"><img alt="Оксана Соболева" src="/images/cat/logo.png"></span>
                            <span class="logo-text al-mid s22 f-b">Easy</span></a>
                    </div>

                    <div class="header-menu col-xs-8 col-md-8 text-right">
                        <a class="btn-shop bl-inl al-mid c-20 hidden-xsm" href="/shops/">Магазины</a>
                        <a class="btn-notepad bl-inl al-mid c-20" title="Избранных объявлений: 0" href="/notepad/"><span class="n_count">0</span></a>
                        <a class="btn-user hidden-xs bl-inl al-mid c-20 br3" href="/users/login/">Личный кабинет</a>
                        <a class="btn btn-primary btn-add" href="/add/">Подать объявление</a>
                        <a href="#" class="theme-type th-d bl-inl al-mid br100" data-id="dark" data-toggle="tooltip" data-placement="bottom" title="Тёмная тема"></a>
                    </div>
                </div>

                <div class="header-panelbg bl-tb br3">

                    <div class="col-header-region bl-cell al-mid b-f br3">
                        <a href="#selectRegion" data-toggle="modal" class="selectRegion bl-bl c-20 ch-20">
                            <span class="hidden-xsm">Москва</span></a>
                    </div>
                    <div class="col-header-seach bl-cell al-mid">
                        <form class="header-seach bl-bl b-f br3" name="top_seach" method="GET" action="/search/">
                            <div class="bl-tb al-top">
                                <div class="pos-rel locationicon bl-cell al-top hidden-xsm"><input type="text" id="autocomplete-ajax" value="Москва" class="form-control locinput input-rel searchtag-input s13" placeholder="Ваш город..." autocomplete="off"><input name="add_region" value="3" type="hidden" id="ajax_region_id"><input type="hidden" name="add_cat" value="0"></div>
                                <div class="pos-rel inputtext bl-cell al-top"><input type="text" name="text" id="autocomplete-text" class="form-control s13" placeholder="Что вы ищете?" value="" autocomplete="off"></div>
                                <div class="pos-rel bl-cell al-top text-right"><button class="btn"></button></div>
                            </div>
                        </form>
                    </div>

                    <div class="col-header-cat bl-cell al-mid b-f br3">
                        <div class="navigation-menu dropdown bl-bl">
                            <div data-toggle="dropdown" class="btn-nav point sp-now">Категории</div>
                            <div class="dropdown-menu lihover">
                                <ul>
                                    <li>
                                        <a href="/Avtotransport/" class="sp-now">
                                            <img src="/images/cat/avto-cat.png" alt="Автотранспорт">Автотранспорт</a>
                                    </li>
                                    <li>
                                        <a href="/Nedvizhimost/" class="sp-now">
                                            <img src="/images/cat/nedv-cat.png" alt="Недвижимость">Недвижимость</a>
                                    </li>
                                    <li>
                                        <a href="/Rabota/" class="sp-now">
                                            <img src="/images/cat/obr-cat.png" alt="Работа">Работа</a>
                                    </li>
                                    <li>
                                        <a href="/Lichnye-veshi/" class="sp-now">
                                            <img src="/images/cat/od-cat.png" alt="Личные вещи">Личные вещи</a>
                                    </li>
                                    <li>
                                        <a href="/Mebel-interer/" class="sp-now">
                                            <img src="/images/cat/meb-cat.png" alt="Мебель, интерьер">Мебель, интерьер</a>
                                    </li>
                                    <li>
                                        <a href="/Znakomstva/" class="sp-now">
                                            <img src="/images/cat/snak-cat.png" alt="Знакомства">Знакомства</a>
                                    </li>
                                    <li>
                                        <a href="/Tovary/" class="sp-now">
                                            <img src="/images/cat/tovar-cat.png" alt="Товары">Товары</a>
                                    </li>
                                    <li>
                                        <a href="/Zhivotnye/" class="sp-now">
                                            <img src="/images/cat/anim-cat.png" alt="Животные">Животные</a>
                                    </li>
                                    <li>
                                        <a href="/Muzyka-iskusstvo/" class="sp-now">
                                            <img src="/images/cat/music-cat.png" alt="Музыка, искусство">Музыка, искусство</a>
                                    </li>
                                    <li>
                                        <a href="/Bytovaya-tehnika/" class="sp-now">
                                            <img src="/images/cat/el-cat.png" alt="Бытовая техника">Бытовая техника</a>
                                    </li>
                                    <li>
                                        <a href="/Biznes/" class="sp-now">
                                            <img src="/images/cat/bis-cat.png" alt="Бизнес">Бизнес</a>
                                    </li>
                                    <li>
                                        <a href="/Uslugi/" class="sp-now">
                                            <img src="/images/cat/ycl-cat.png" alt="Услуги">Услуги</a>
                                    </li>
                                    <li>
                                        <a href="/Telefony/" class="sp-now">
                                            <img src="/images/cat/tel-cat.png" alt="Телефоны">Телефоны</a>
                                    </li>
                                    <li>
                                        <a href="/Stroi-materialy/" class="sp-now">
                                            <img src="/images/cat/mat-cat.png" alt="Строй материалы">Строй материалы</a>
                                    </li>
                                    <li>
                                        <a href="/Orgtehnika/" class="sp-now">
                                            <img src="/images/cat/org-cat.png" alt="Оргтехника">Оргтехника</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /header -->

    @yield('main_content')
    
    <div id="footer">
        <div class="container">
            <div class="footer">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <ul class="footer-link">
                            <li class="footer-tit text-up">Статистика</li>
                            <li><span class="glyphicon glyphicon-list-alt c-a"></span> 25 объявлений</li>
                            <li><span class="glyphicon glyphicon-th-large c-a"></span> 108 рубрик</li>
                            <li><span class="glyphicon glyphicon-globe c-a"></span> 96 регионов</li>
                            <li><span class="glyphicon glyphicon-shopping-cart c-a"></span> 7 магазинов</li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <ul class="footer-link">
                            <li class="footer-tit text-up">Информация</li>
                            <li><a href="/help/" title="" class="c-4">Помощь</a></li>
                            <li><a href="/pravila/" title="" class="c-4">Правила сайта</a></li>
                            <li><a href="/reklama-na-saite/" title="" class="c-4">Реклама на сайте</a></li>
                            <li><a href="/uslugi_saita/" title="" class="c-4">Платные услуги</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <ul class="footer-link resp-line">
                            <li class="footer-tit text-up">Пользователю</li>
                            <li><a href="/users/register/" title="" class="c-4">Регистрация</a></li>
                            <li><a href="/mail/" title="" class="c-4">Контакты</a></li>
                            <li><a href="/articles/" title="" class="c-4">Статьи</a></li>
                            <li><a href="#" onclick="pwa(); return false;" class="c-4" data-toggle="tooltip" data-placement="top" title="Установить мобильное приложение">Установить приложение</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <ul class="resp-line">
                            <li class="footer-social">
                                <p class="footer-tit text-up">Мы в соцсетях</p>
                                <a href="/" data-toggle="tooltip" data-placement="top" title="vkontakte" class="s-vk"><img alt="Оксана Соболева" src="/templates/easy/images/svk.png"></a>
                                <a href="/" data-toggle="tooltip" data-placement="top" title="odnoklassniki" class="s-od"><img alt="Оксана Соболева" src="/templates/easy/images/sod.png"></a>
                                <a href="/" data-toggle="tooltip" data-placement="top" title="twitter" class="s-tw"><img alt="Оксана Соболева" src="/templates/easy/images/stw.png"></a>
                            </li>
                            <li class="footer-instr">
                                <div class="btn-group btn-group-xs">
                                    <a role="button" class="btn btn-default" href="/rss.xml">Rss</a>
                                    <a role="button" class="btn btn-default" href="/sitemap.xml">Map</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer-copyright c-7 s13 text-center">© 2022 easy.elite-board.org – доска бесплатных объявлений</div>
                <div class="c-20 text-center"><br>© Автор шаблона Оксана Соболева <a href="https://elite-board.org" title="" target="_blank">Шаблоны для доски объявлений</a></div>

            </div>
        </div>
    </div>

    <script>
        var parent_region = 1;
        var back_region = 0;
        var current_region = TPL_REGION_ID;
    </script>
    <div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-region">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title text-center s18" id="exampleModalLabel">Выбор региона</h4>
                    <div class="loc-current c-5">Текущий регион: Москва</div>
                    <div class="bl-regionlist br3">
                        <div class="region_current"><a href="#" id="region_select_current"><span id="region_select_current_name">Россия</span></a></div>

                        <div class="RegionFilter pos-rel"><input type="text" id="region-modal-filter" value="" class="form-control" placeholder="Фильтр по названию..." autocomplete="off"><a id="region-modal-clear" class="pos-abs bl-bl s16 point c-a text-center">×</a></div>

                        <ul id="regionlist"></ul>
                    </div>
                    <div id="region_loader_img" style="display:none;">
                        <div>Пожалуйста, подождите...</div>
                    </div>
                    <div class="region_control"><a href="#" id="region_select_back" class="btn btn-default btn-xs">Назад</a>
                        <a href="#" id="region_select_all" class="btn btn-default btn-xs pull-right">Все регионы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/templates/easy/js/jquery/3.2.1/jquery.min.js"></script>
    <script src="/templates/easy/js/jquery.cookie.js"></script>

    <script src="/templates/easy/js/lightslider.min.js"></script>
    <link href="/templates/easy/css/lightslider.min.css" rel="stylesheet">
    <script>
        $(document).ready(function() {
            $(".specials-offer-slider").lightSlider({
                item: 1,
                slideMargin: 0,
                loop: !0,
                pager: !1,
                pauseOnHover: !0,
                auto: !0,
                pause: 4E3,
            });
        });
    </script>

    <script src="/templates/easy/js/script.min.js"></script>
    <link rel="stylesheet" href="/templates/easy/css/jquery-ui.css">

    <script>
        $(document).ready(function() {
            $(".imgLiquidFill").imgLiquid();
        });
    </script>
    <script src="/templates/easy/js/imgLiquid-min.js"></script>
    <script src="/templates/easy/js/script.js"></script>
    <script src="/js/jquery.ui.touch-punch.min.js"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(37219930, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script> <noscript>
        <div><img src="https://mc.yandex.ru/watch/37219930" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript> <!-- /Yandex.Metrika counter -->
    <!-- Дизайн сайта: Оксана Соболева -->
    <script>
        var _csrf = document.cookie.split("_csrf=");
        if (_csrf[1] !== undefined) {
            _csrf = _csrf[1].split(";");
            _csrf = _csrf[0]
            $("form[method=post]").each(function() {
                $("<input>").attr("type", "hidden").attr("name", "_csrf").attr("value", _csrf).appendTo($(this));
            });
        }
    </script>
    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
</body>

</html>