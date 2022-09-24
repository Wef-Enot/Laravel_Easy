@extends('layouts/'.$template)

@section('main_content')
<div id="main"><div class="container">  
  
   
    <div class="bl-tb container-tb">
    <div class="bl-cell al-top bl-center">
       
      
      
    <h1></h1>  
      
    <p style="margin-bottom: 15px;">Актуальная база объявлений о продаже новых и подержанных машин</p>
    <ul class="row tree1">
    <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/" class="pos-rel b-f">
    Продажа авто</a><span class="count-tree1 b-f pos-abs c-a s13">7</span></div></li>
    <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/buy/" class="pos-rel b-f">
    Покупка авто</a><span class="count-tree1 b-f pos-abs c-a s13">0</span></div></li>
    <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/autoservis/" class="pos-rel b-f">
    Автосервис и услуги</a><span class="count-tree1 b-f pos-abs c-a s13">1</span></div></li>
    <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/autozap/" class="pos-rel b-f">
    Автозапчасти и принадлежности</a><span class="count-tree1 b-f pos-abs c-a s13">1</span></div></li>
    <li class="col-xs-6 col-sm-6 col-md-4 colp"><div class="tree-l sp-now pos-rel"><a href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/Avtosalony/" class="pos-rel b-f">
    Автосалоны</a><span class="count-tree1 b-f pos-abs c-a s13">0</span></div></li>
    </ul>
    
    
     
    <div id="search_form_cat" class="block_search pos-rel">
    <div class="btn btn-default colsearch visible-xs" data-toggle="collapse" data-target="#colsearch">Все параметры</div>
    <div id="colsearch" class="collapse in"><form id="block_search" name="block_search" method="GET" action="/search/">
    <input type="hidden" name="add_cat" class="add_cat" value="1"><input type="hidden" name="add_region" class="add_region" value="3"><input type="hidden" name="map" class="add_map" value="">
    <div class="block_search_ajax"><div class="row search_fields bl-table yamm">
    <div class="col-xs-12 col-sm-6 col-md-4 colp2"><div class="dropdown yamm-fw radio-value">
    <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control"><div class="sp-now-w">Сортировать по полю <span class="selected-radio"></span></div></div>
    <div class="dropdown-menu">
    <div class="btn-group">
    <div class="btn btn-default cl-radio" role="button"><input id="sort_by1" name="sort_by" type="radio" value="date_add"><label for="sort_by1">Дата</label></div>
    <div class="btn btn-default cl-radio" role="button">
    <input class="form-check" id="f_271" name="sort_by" type="radio" value="f_27"><label for="f_271">Цена</label>
    </div></div>
    <div class="sort-desc"><div class="bl-inl al-top cl-check"><input class="form-check" id="desc1" name="desc" type="checkbox" value="yes"><label for="desc1">В обратном порядке</label></div></div>
    </div>
    </div></div>  
    
    <div class="col-xs-12 col-sm-6 col-md-4 colp2"><div class="dropdown yamm-fw checkbox-value">
    <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control"><div class="sp-now-w">Должно присутствовать <span class="selected-checkbox"></span></div></div>
    <div class="dropdown-menu">          
    <div class="bl-inl al-top cl-check">
    <input id="must[34]1" name="must[34]" type="checkbox" value="ON"><label for="must[34]1">Метка на карте</label>
    </div><br><div class="bl-inl al-top cl-check">
    <input id="must[35]1" name="must[35]" type="checkbox" value="ON"><label for="must[35]1">Фото</label>
    </div><br><div class="bl-inl al-top cl-check">
    <input id="must[36]1" name="must[36]" type="checkbox" value="ON"><label for="must[36]1">Прайс-Лист</label>
    </div><br><div class="bl-inl al-top cl-check">
    <input id="must[37]1" name="must[37]" type="checkbox" value="ON"><label for="must[37]1">Видео с YouTube</label>
    </div><br></div>
    </div></div>          
      
    
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">
    
      
      
                      
    <select size="1" name="f_4" id="bs_4" class="form-control">
    <option value="">Год выпуска</option>
    <option value="330">2022</option><option value="329">2021</option><option value="328">2020</option><option value="327">2019</option><option value="326">2018</option><option value="153">2017</option><option value="154">2016</option><option value="155">2015</option><option value="156">2014</option><option value="157">2013</option><option value="158">2012</option><option value="159">2011</option><option value="160">2010</option><option value="161">2009</option><option value="162">2008</option><option value="163">2007</option><option value="164">2006</option><option value="165">2005</option></select>
      
      
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">
    
      
      
                      
    <select size="1" name="f_6" id="bs_6" class="form-control">
    <option value="">Тип двигателя</option>
    <option value="173">Бензин</option><option value="174">Дизель</option><option value="175">Гибрид</option><option value="176">Электро</option></select>
      
      
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">
    
      
      
                      
    
      
    <div class="dropdown yamm-fw checkbox-value">
    <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control"><div class="sp-now-w">Опции <span class="selected-checkbox"></span></div></div>
    <div class="dropdown-menu"> 
    <div class="bl-inl al-top cl-check">
    <input class="form-check" id="f_91186f_9" name="f_9[186]" type="checkbox" value="186"><label for="f_91186f_9" class="field_label">ABS</label>
    </div><br><div class="bl-inl al-top cl-check">
    <input class="form-check" id="f_91187f_9" name="f_9[187]" type="checkbox" value="187"><label for="f_91187f_9" class="field_label">Круиз-контроль</label>
    </div><br><div class="bl-inl al-top cl-check">
    <input class="form-check" id="f_91188f_9" name="f_9[188]" type="checkbox" value="188"><label for="f_91188f_9" class="field_label">Подогрев передних сидений</label>
    </div><br><div class="bl-inl al-top cl-check">
    <input class="form-check" id="f_91189f_9" name="f_9[189]" type="checkbox" value="189"><label for="f_91189f_9" class="field_label">Усилитель руля</label>
    </div><br><div class="bl-inl al-top cl-check">
    <input class="form-check" id="f_91190f_9" name="f_9[190]" type="checkbox" value="190"><label for="f_91190f_9" class="field_label">Люк</label>
    </div><br></div></div>  
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 colp2">
    
      
      
    <div class="dropdown yamm-fw">
    <div data-toggle="dropdown" class="dropdown-toggle sp-now point form-control icar"><div class="sp-now-w">Цена</div></div>  
      
    <div class="dropdown-menu">
    <div class="slider-inputs">
    <div class="slider-cont" data-id="f_27" data-min="37050" data-max="9660000">
     
    <div class="input-range">
    <span class="bl-inl rateloc s13 c-5">От</span><input class="from form-control bl-inl al-top" type="text" name="f_27[from]">
    <span class="bl-inl rateloc s13 c-5">До</span><input class="to form-control bl-inl al-top" type="text" name="f_27[to]">
    </div><input type="hidden" class="rate_value" name="f_27[rate]" value="1">
    
    <div class="rates-range btn-group"><div class="rate btn s13 btn-default active" data-rate="1" data-id="1">руб.</div>
    <div class="rate btn s13 btn-default" data-rate="63.69" data-id="2">usd</div>
    <div class="rate btn s13 btn-default" data-rate="68.78" data-id="3">eur</div>
    </div> 
    </div></div>
    </div>  
    </div>                  
    
      
      
    </div>
    
    
    
    </div></div><div class="text-right search-ajax-btn"><span class="linkreset bl-inl al-top pull-left c-7 point a-hov" style="display:none">Сбросить <span class="resetclose s22 pos-rel">×</span></span>
    <a href="#" class="gotomap btn btn-default def2 btn-block" title="Объявления на карте">Объявления на карте</a><input type="submit" class="btn btn-primary btn-block" value="Показать"></div>
    </form></div></div>
    <div class="filter-panel bl-tb">  
    
    <div class="filter-mes btn-group">
    <a class="btn btn-default active-btn disabled" role="button" href="?filter[shop]=all" rel="nofollow">Все <span class="c-7 s13">(9)</span></a>
    <a class="btn btn-default" role="button" href="?filter[shop]=only" rel="nofollow">От магазинов <span class="c-7 s13">(3)</span></a>
    <a class="btn btn-default" role="button" href="?filter[shop]=none" rel="nofollow">Частные <span class="c-7 s13">(6)</span></a>
    </div>  
      
    <div class="filter-sort pull-right" id="listsort_cont"><select id="listsort" class="selectpicker select_redirect form-control" data-style="btn-select" data-width="auto">
    <option value="">Сортировать</option>
    <option value="?filter[sort]=date_asc">Старые</option>
    <option selected="" value="?filter[sort]=date_desc">Новые</option>
    <option value="?filter[sort]=price_asc">Дешевле</option>
    <option value="?filter[sort]=price_desc">Дороже</option>
    </select></div>  
      
    <form class="changelist btn-group pull-right" name="changelist" action="" method="POST">
    <button class="btn btn-default spiskom disabled" type="submit" name="changelist" value="spiskom" data-toggle="tooltip" data-placement="top" title="Выводить списком с фото"></button>
    <button class="btn btn-default blokami " type="submit" name="changelist" value="blokami" data-toggle="tooltip" data-placement="top" title="Показать с большими фото"></button>
    <input type="hidden" name="_csrf" value="0595a7242c390d61850a6dc3726cd75d1664004467"></form><div class="current-list pos-rel bl-tb">
    <div class="dropdown-toggle bl-inl al-top c-7 br3 point" data-toggle="dropdown"><a href="#" class="current"><span>Валюта</span></a> руб.</div>
    <ul class="dropdown-menu">
    <li class="dropdown-item"><a href="?filter[currency]=" rel="nofollow">валюта пользователя</a></li><li class="active dropdown-item">
    <a href="?filter[currency]=1" rel="nofollow"><span class="currency">₽</span>руб.</a>
    </li><li class="dropdown-item">
    <a href="?filter[currency]=2" rel="nofollow"><span class="currency">$</span>usd</a>
    </li><li class="dropdown-item">
    <a href="?filter[currency]=3" rel="nofollow"><span class="currency">€</span>eur</a>
    </li></ul></div>
    </div>
    
    
    
    
    <div class="offerlist">
     
    @foreach($boards as $board)
        @if ($board->status_pub == 1)
            <div class="cl-line pos-rel"></div>
            <div id="message_30" class="offer bl-tb">
                
            <div class="offer-photo bl-cell al-top pos-rel">
            <div class="ov-h br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <a title="Диски колесные алюминиевые R17-20" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-diski-kolesnye-aljuminievye-r17-20.html" style="display: block; width: 100%; height: 100%;">
            <img alt="Диски колесные алюминиевые R17-20" src="/uploads/usr/0/ts_f3885b82302507da428b878abd73281c_35_3.webp" style="display: none;">
            </a></div>
            <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span></div>  
            
            <div class="offer-title bl-cell al-top pos-rel">
            <h3><a class="f-m a-hov" title="Диски колесные алюминиевые R17-20" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/autozap/30-diski-kolesnye-aljuminievye-r17-20.html">{{$board->title}}</a></h3>
            <div class="offer-location s13 f-l c-7">Автозапчасти и принадлежности<br> Москва 
            <div class="offer-date"></div></div>
            <div class="magazin-l"><a class="btn btn-default s13" href="/shops/7-zapchasti-all.html" title="Запчасти ALL">Запчасти ALL</a></div>  
            </div>
            
            <div class="offer-price bl-cell al-top pos-rel text-right">
            <div class="price bl-inl al-top s16 f-m">
            <span class="currency">₽</span>{{$board->price}}</div>
            <div class="offer-actions pos-abs">
            <span class="notepad ic-star" data-id="30" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span>
            </div></div>
            
            </div><!--/bl-tb offer-->
        @endif
    @endforeach
    
    
      
      
    </div><!--/offerlist-->
    <div class="pagination-bar bl-tb">
    
                
    <ul class="pagination pull-left"><li><a href="/Russia/Moscow/Avtotransport/page1.html">1</a></li>
    <li><a href="/Russia/Moscow/Avtotransport/page2.html">2</a></li>
    </ul>
      
    <div class="pagination-btn pull-right">
    <span class="btn btn-default disabled s13">Предыдущая</span><a class="btn btn-default s13" href="page2.html" title="">Следующая</a>      
    </div>  
      
    </div>
    <div class="c-7 s13 f-l page-pokaz text-right">Показано: 7 из 9 объявлений
    </div>
    <div class="promo-subscribe bl-tb hidden-xs"><div class="promo-subscribe-text pull-left">Получайте новые объявления<br>из категории Автотранспорт</div>
    <a class="btn btn-primary s13 pull-right" href="/users/subscribe/">Подписаться</a></div>  
    
    </div>
                    
    <div class="bl-cell al-top bl-right">
    <div class="sidebar_right pos-rel">    
    <div class="block-specials lateral-specials b-f br3">
      
    <div class="block-v pos-rel s15 f-m">VIP-объявления</div>
      
    <div class="bl-specials-offer-slider"><div class="specials-container ov-h"><div class="lSSlideOuter "><div class="lSSlideWrapper usingCss" style="transition-duration: 400ms; transition-timing-function: ease;"><ul class="specials-offer-slider lightSlider lsGrab lSSlide" style="width: 1416px; transform: translate3d(-944px, 0px, 0px); height: 216.4px; padding-bottom: 0%;"><li class="specials-offer pos-rel clone left" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>BRP Ski-Doo Summit 8...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span><span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span>1 250 000</span>
    <span class="reg_cat s13 c-7 f-l">Москва</span></div>
    </li>
     
    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sale/12-prodaju-3-h-komnatnuju-kvartiru-80-kv.m.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="Продаю 3-х комнатную квартиру, 80 кв.м." src="/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>Продаю 3-х комнатную...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span><span class="notepad-fav"><span class="notepad ic-star" data-id="12" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span>3 200 000</span>
    <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span></div>
    </li> 
    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/Legkovye/29-haval-jolion-2021.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="Haval Jolion 2021" src="/uploads/usr/0/ts_d57de3451f3ea83bbe97029c7ff300f6_35_4.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>Haval Jolion 2021</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 4</span><span class="notepad-fav"><span class="notepad ic-star" data-id="29" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <a href="/shops/6-avilon-ford-volgogradskij.html" data-toggle="tooltip" data-placement="top" title="" class="magazin-b" data-original-title="АВИЛОН Ford Волгоградский">АВИЛОН Ford Волгоградский</a><div class="sp-now">
    <span class="s15"><span class="currency">₽</span>1 899 000</span>
    <span class="reg_cat s13 c-7 f-l">Москва</span></div>
    </li> 
    <li class="specials-offer pos-rel lslide" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/Moscow/Biznes/sale_and_buying/21-biznes-pod-kljuch-franshiza-studii-manikjura-nailmaker.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="Бизнес под ключ/франшиза студии маникюра NailMaker" src="/uploads/usr/0/ts_9a6a74aa12490c17a3ecb369c734b90a_35_1.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>Бизнес под ключ/фран...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span><span class="notepad-fav"><span class="notepad ic-star" data-id="21" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span> 120 000</span>
    <span class="reg_cat s13 c-7 f-l">Москва</span></div>
    </li> 
    <li class="specials-offer pos-rel lslide active" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/Moscow/Avtotransport/sale/mototeh/11-brp-ski-doo-summit-850.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="BRP Ski-Doo Summit 850" src="/uploads/usr/0/ts_c4d6de90c52e9839c404cad9a7cc107a_35_3.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>BRP Ski-Doo Summit 8...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 3</span><span class="notepad-fav"><span class="notepad ic-star" data-id="11" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span>1 250 000</span>
    <span class="reg_cat s13 c-7 f-l">Москва</span></div>
    </li><li class="specials-offer pos-rel clone right" style="width: 236px; margin-right: 0px;">
    <a title="" href="https://easy.elite-board.org/Russia/spb/Nedvizhimost/apartmen/sale/12-prodaju-3-h-komnatnuju-kvartiru-80-kv.m.html">
    <div class="br3 pos-rel imgLiquidFill imgLiquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <img alt="Продаю 3-х комнатную квартиру, 80 кв.м." src="/uploads/usr/0/ts_33dfaa8f7e8f7328ea85a1cecbfe9e08_35_1.webp" style="display: none;">
    </div>
    <div class="sp-now"><h4>Продаю 3-х комнатную...</h4></div></a>
    <span class="photo-count pos-abs br3 s13 c-f"><span class="glyphicon glyphicon-camera"></span> 1</span><span class="notepad-fav"><span class="notepad ic-star" data-id="12" data-toggle="tooltip" data-placement="top" title="Добавить в избранные"></span></span>  
    <div class="sp-now">
    <span class="s15"><span class="currency">₽</span>3 200 000</span>
    <span class="reg_cat s13 c-7 f-l">Санкт-Петербург</span></div>
    </li></ul><div class="lSAction"><a class="lSPrev"></a><a class="lSNext"></a></div></div></div></div></div>
     
    </div> 
      
    
    <div class="headerblock br3 b-f "><div class="headercontent"><p class="text-center"><a href="https://elite-board.org/dizain.html" target="_blank" title=""><img alt="" src="/images/cat/design.png"></a></p>
    </div></div></div></div>
    </div>
    </div></div>
    @endsection