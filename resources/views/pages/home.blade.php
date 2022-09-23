@extends('layouts/'.$template)

@section('main_content')



<div id="main">
    <div class="container">


        <div class="bl-tb container-tb">
            <div class="bl-cell al-top bl-center">


                <div class="text-center">
                    <h1 class="ind-h1 s24">Доска Объявлений</h1>
                    <p class="s17 c-4">Предложения от частных лиц и организаций
                        в Москве
                        </p>
                </div>

                <div class="categories bltree-ind">
                    <ul class="row tree4 wrapper-scroll-tree4">
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/avto-cat.png" alt="Автотранспорт"></span> <span class="name-cat b-f pos-rel">Автотранспорт</span>
                                <span class="count-tree c-7 s13 b-f"> 9</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Nedvizhimost/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/nedv-cat.png" alt="Недвижимость"></span> <span class="name-cat b-f pos-rel">Недвижимость</span>
                                <span class="count-tree c-7 s13 b-f"> 2</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Rabota/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/obr-cat.png" alt="Работа"></span> <span class="name-cat b-f pos-rel">Работа</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Lichnye-veshi/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/od-cat.png" alt="Личные вещи"></span> <span class="name-cat b-f pos-rel">Личные вещи</span>
                                <span class="count-tree c-7 s13 b-f"> 2</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Mebel-interer/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/meb-cat.png" alt="Мебель, интерьер"></span> <span class="name-cat b-f pos-rel">Мебель, интерьер</span>
                                <span class="count-tree c-7 s13 b-f"> 1</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Znakomstva/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/snak-cat.png" alt="Знакомства"></span> <span class="name-cat b-f pos-rel">Знакомства</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Tovary/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/tovar-cat.png" alt="Товары"></span> <span class="name-cat b-f pos-rel">Товары</span>
                                <span class="count-tree c-7 s13 b-f"> 1</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Zhivotnye/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/anim-cat.png" alt="Животные"></span> <span class="name-cat b-f pos-rel">Животные</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Muzyka-iskusstvo/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/music-cat.png" alt="Музыка, искусство"></span> <span class="name-cat b-f pos-rel">Музыка, искусство</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Bytovaya-tehnika/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/el-cat.png" alt="Бытовая техника"></span> <span class="name-cat b-f pos-rel">Бытовая техника</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Biznes/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/bis-cat.png" alt="Бизнес"></span> <span class="name-cat b-f pos-rel">Бизнес</span>
                                <span class="count-tree c-7 s13 b-f"> 1</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Uslugi/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/ycl-cat.png" alt="Услуги"></span> <span class="name-cat b-f pos-rel">Услуги</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Telefony/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/tel-cat.png" alt="Телефоны"></span> <span class="name-cat b-f pos-rel">Телефоны</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Stroi-materialy/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/mat-cat.png" alt="Строй материалы"></span> <span class="name-cat b-f pos-rel">Строй материалы</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                        <li class="categories-item col-xs-6 col-sm-4 col-md-4"><a href="https://easy.elite-board.org/Russia/Moscow/Orgtehnika/" class="bl-bl b-f br3 pos-rel sp-now s15">
                                <span class="img-circ"><img src="/images/cat/org-cat.png" alt="Оргтехника"></span> <span class="name-cat b-f pos-rel">Оргтехника</span>
                                <span class="count-tree c-7 s13 b-f"> 0</span></a>
                        </li>
                    </ul>
                </div>

                <div class="list-block-ind row">

                    <div class="title-name s19 col-sm-12">VIP-объявления</div>

                    <div class="wrapper-scroll">
                        <div class="wrapper-scroll-bl">

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Haval Jolion 2021" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Haval Jolion 2021" src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 4</span>
                                        <a href="/shops/6-avilon-ford-volgogradskij.html" data-toggle="tooltip" data-placement="top" title="АВИЛОН Ford Волгоградский" class="magazin-b">АВИЛОН Ford Волгоградский</a>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Haval Jolion 2021" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">Haval Jolion 2021</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>1 899 000</span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="BRP Can-Am Spyder Roadster" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="BRP Can-Am Spyder Roadster" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="BRP Can-Am Spyder Roadster" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">BRP Can-Am Spyder Roadster</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span> 870 000</span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Бизнес под ключ/франшиза студии маникюра NailMaker" href="https://easy.elite-board.org/Russia/Moscow/Biznes/sale_and_buying/21-biznes-pod-kljuch-franshiza-studii-manikjura-nailmaker.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Бизнес под ключ/франшиза студии маникюра NailMaker" src="/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="21" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Бизнес под ключ/франшиза студии маникюра NailMaker" href="https://easy.elite-board.org/Russia/Moscow/Biznes/sale_and_buying/21-biznes-pod-kljuch-franshiza-studii-manikjura-nailmaker.html">Бизнес под ключ/франшиза студии маникюра NailMaker</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span> 120 000</span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="BRP Ski-Doo Summit 850" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="BRP Ski-Doo Summit 850" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">BRP Ski-Doo Summit 850</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>1 250 000</span></div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




                <div id="list_message_block" class="list-block-ind row">

                    <div class="title-name s19 col-sm-12">Свежие объявления <a class="a-all s14 c-5 f-l" href="/allmess/">Все объявления</a></div>
                    <div class="wrapper-scroll">
                        <div class="wrapper-scroll-bl">



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_30" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Диски колесные алюминиевые R17-20" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-diski-kolesnye-aljuminievye-r17-20.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Диски колесные алюминиевые R17-20" src="/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="30" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span><a href="/shops/7-zapchasti-all.html" data-toggle="tooltip" data-placement="top" title="Запчасти ALL" class="magazin-b">Запчасти ALL</a>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Диски колесные алюминиевые R17-20" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-diski-kolesnye-aljuminievye-r17-20.html">Диски колесные алюминиевые R17-20</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>39 000</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_29" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Haval Jolion 2021" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Haval Jolion 2021" src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 4</span><a href="/shops/6-avilon-ford-volgogradskij.html" data-toggle="tooltip" data-placement="top" title="АВИЛОН Ford Волгоградский" class="magazin-b">АВИЛОН Ford Волгоградский</a>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Haval Jolion 2021" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">Haval Jolion 2021</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>1 899 000</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_27" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Федеральная сеть станций послегарантийного обслуживания." href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/autoservis/27-federalnaja-set-stancij-poslegarantijnogo-obsluzhivanija.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Федеральная сеть станций послегарантийного обслуживания." src="/uploads/usr/0/ts_a67109ece16f54ef95c43485e219f6d5_35_2.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="27" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 2</span><a href="/shops/5-avtoservis-fit-service.html" data-toggle="tooltip" data-placement="top" title="Автосервис FIT SERVICE" class="magazin-b">Автосервис FIT SERVICE</a>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Федеральная сеть станций послегарантийного обслуживания." href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/autoservis/27-federalnaja-set-stancij-poslegarantijnogo-obsluzhivanija.html">Федеральная сеть станций послегарантийного обслуживания.</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15">не указана</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_4" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_2218d7c80632656c7fec8d0f8ffa6431_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Комбинезон с шортами из шифона" href="https://easy.elite-board.org/Russia/Moscow/Lichnye-veshi/women/4-kombinezon-s-shortami-iz-shifona.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Комбинезон с шортами из шифона" src="/uploads/usr/0/ts_2218d7c80632656c7fec8d0f8ffa6431_35_2.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="4" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 2</span><a href="/shops/1-dzhinsy-iz-ameriki.html" data-toggle="tooltip" data-placement="top" title="Джинсы из Америки" class="magazin-b">Джинсы из Америки</a>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Комбинезон с шортами из шифона" href="https://easy.elite-board.org/Russia/Moscow/Lichnye-veshi/women/4-kombinezon-s-shortami-iz-shifona.html">Комбинезон с шортами из шифона</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>1 200</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_46" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_50099e885751753071a571bb8fd71ec5_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Джинсы светлые Турция" href="https://easy.elite-board.org/Russia/Moscow/Lichnye-veshi/women/46-dzhinsy-svetlye-turcija.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Джинсы светлые Турция" src="/uploads/usr/0/ts_50099e885751753071a571bb8fd71ec5_35_1.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="46" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span><a href="/shops/1-dzhinsy-iz-ameriki.html" data-toggle="tooltip" data-placement="top" title="Джинсы из Америки" class="magazin-b">Джинсы из Америки</a>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Джинсы светлые Турция" href="https://easy.elite-board.org/Russia/Moscow/Lichnye-veshi/women/46-dzhinsy-svetlye-turcija.html">Джинсы светлые Турция</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>1 500</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_1" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Продам 1-к квартиру, 41 м², 9/24 эт." href="https://easy.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Продам 1-к квартиру, 41 м², 9/24 эт." src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="1" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 2</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Продам 1-к квартиру, 41 м², 9/24 эт." href="https://easy.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html">Продам 1-к квартиру, 41 м², 9/24 эт.</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>3 000 000</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_2" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Продаю CFMoto CF500" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/2-prodaju-cfmoto-cf500.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Продаю CFMoto CF500" src="/uploads/usr/0/ts_1cc22796605e80d277a5794b8e4ae1b7_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="2" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Продаю CFMoto CF500" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/2-prodaju-cfmoto-cf500.html">Продаю CFMoto CF500</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span> 205 000</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_11" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="BRP Ski-Doo Summit 850" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="BRP Ski-Doo Summit 850" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">BRP Ski-Doo Summit 850</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span>1 250 000</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_13" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_381cba623b965965a50257243bf7e3e5_35_0.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="Продаю Honda CBR 1000 RR/RA Fireblade" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/13-prodaju-honda-cbr-1000-rr-ra-fireblade.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="Продаю Honda CBR 1000 RR/RA Fireblade" src="/uploads/usr/0/ts_381cba623b965965a50257243bf7e3e5_35_0.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="13" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 2</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="Продаю Honda CBR 1000 RR/RA Fireblade" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/13-prodaju-honda-cbr-1000-rr-ra-fireblade.html">Продаю Honda CBR 1000 RR/RA Fireblade</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15">не указана</span></div>

                                    </div>
                                </div>
                            </div>



                            <div class="list_message_block col-xs-6 col-sm-4 col-md-3">
                                <div id="message_17" class="b-f br3">

                                    <div class="message_block_imag br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">

                                        <a title="BRP Can-Am Spyder Roadster" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html" style="display: block; width: 100%; height: 100%;">
                                            <img alt="BRP Can-Am Spyder Roadster" src="/uploads/usr/0/ts_7ff343613e105334ddecc6fb5e0dfb9a_35_3.webp" style="display: none;">
                                        </a>

                                        <span class="notepad-fav"><span class="notepad ic-star" data-id="17" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>
                                        <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span>
                                    </div>

                                    <div class="message_block_tit pos-rel">
                                        <h3><a class="c-20 s14" title="BRP Can-Am Spyder Roadster" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/17-brp-can-am-spyder-roadster.html">BRP Can-Am Spyder Roadster</a></h3>

                                        <div class="sp-now"><span class="reg_cat s13 c-7 f-l">Москва</span></div>
                                        <div class="sp-now"><span class="s15"><span class="currency">₽</span> 870 000</span></div>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="articles-ind list-block-ind row">
                    <div class="title-name s19 col-md-12">Последние статьи <a class="a-all s14 c-7 f-l" href="/articles/">Все статьи</a></div>

                    <div class="list-art-item col-xs-12 col-sm-12 col-md-6">
                        <div class="list-art-bl br3">
                            <a title="" class="list-art f-m bl-bl s15" href="/articles/Nauka-i-tehnika/Izobreteniya-kotorye-oblegchayut-zhizn">
                                Изобретения которые облегчают жизнь</a>
                            <div class="list-art-cont">Ежедневно ученые изобретают десятки вещей, которые должны облегчать нам жизнь. Большинство из них бессмысленны. Но изобретения которые мы для вас подготовили,... <span>10.02.2022</span></div>
                        </div>
                    </div>
                    <div class="list-art-item col-xs-12 col-sm-12 col-md-6">
                        <div class="list-art-bl br3">
                            <a title="" class="list-art f-m bl-bl s15" href="/articles/Finansy-i-investicii/Bitrubl">
                                Битрубль. Какой надеется быть первая...</a>
                            <div class="list-art-cont">Первая российская криптовалюта надеется стать самой настоящей! Основанной на технологии блокчейн. И законной! Т. е. соответствовать всем законам Российской... <span>02.02.2022</span></div>
                        </div>
                    </div>
                    <div class="list-art-item col-xs-12 col-sm-12 col-md-6">
                        <div class="list-art-bl br3">
                            <a title="" class="list-art f-m bl-bl s15" href="/articles/Zdorove/Glavnye-principy-zdorovogo-obraza-zhizni">
                                Главные принципы здорового образа жизни</a>
                            <div class="list-art-cont">Любой человек, смотря в зеркало, находил недостатки в своей фигуре. В большинстве случаев, эти недостатки связаны с появлением жировых отложений на животе и... <span>25.01.2022</span></div>
                        </div>
                    </div>
                    <div class="list-art-item col-xs-12 col-sm-12 col-md-6">
                        <div class="list-art-bl br3">
                            <a title="" class="list-art f-m bl-bl s15" href="/articles/Puteshestviya/Pochemu-Turciya-tak-populyarna-u-turistov">
                                Почему Турция так популярна у туристов</a>
                            <div class="list-art-cont">Уже более десяти лет самой популярной летней страной для пляжного отдыха россиян, белорусов и украинцев является Турция. Теплое море и мягкий климат,... <span>10.01.2022</span></div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

@endsection