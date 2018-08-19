<nav class="ec-nav sticky-top bg-white mainnav">
    <div class="container">
        <div class="navbar p-0 navbar-expand-lg">
            <div class="navbar-brand">
                <a class="logo-default" href="{{url('/')}}"><img class="mainlogo" alt="logochelmonski"
                                                                 style="width: 80px; height: 80px;"
                                                                 src="assets/img/logo.png"><img class="mainILO"
                                                                                                alt="ILO"
                                                                                                style="height: 50px; margin-left: 10px;"
                                                                                                src="assets/img/ILO.png"></a>
            </div>
            <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible"
                  data-toggle="collapse">
        <div class="hamburger hamburger--spin js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </span>
            <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
                <ul class="nav navbar-nav ec-nav__navbar ml-auto">
                    <li class="nav-item nav-item__has-dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Szkoła</a>
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li><a class="nav-link__list" href="{{url('/patron')}}">Patron</a></li>
                                <li><a class="nav-link__list" href="{{url('/dyrektorzy')}}">Dyrektorzy</a></li>
                                <li><a class="nav-link__list" href="{{url('/w_rankingach')}}">W rankingach</a></li>

                                <li class="nav-item__has-dropdown">
                                    <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Medale i
                                        nagrody </a>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li><a class="nav-link__list" href="{{url('/nagrody_kola_wychowankow')}}">
                                                    Koła Wychowanków </a></li>
                                            <li><a class="nav-link__list" href="{{url('/nagrody_rady_pedagogicznej')}}">
                                                    Rady pedagogicznej</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li><a class="nav-link__list" href="{{url('/rada_pedagogiczna')}}">Rada pedagogiczna</a>
                                </li>
                                <li><a class="nav-link__list" href="{{url('/samorzad_szkolny')}}">Samorząd szkolny</a>
                                </li>
                                <li><a class="nav-link__list" href="{{url('/statut_szkoly')}}">Statut Szkoły</a></li>
                                <li><a class="nav-link__list" href="{{url('/misja_szkoly')}}">Misja szkoły</a></li>

                                <li class="nav-item__has-dropdown">
                                    <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Koło
                                        wychowanków </a>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li><a class="nav-link__list" href="{{url('/kolo_wychowankow')}}">Opis</a>
                                            </li>
                                            <li><a class="nav-link__list"
                                                   href="{{url('/kolo_wychowankow_slawni_absolwenci')}}"> Sławni
                                                    absolwenci</a></li>
                                            <li><a class="nav-link__list" href="{{url('/kolo_wychowankow_historia')}}">
                                                    Historia od 1939r.</a></li>
                                            <li><a class="nav-link__list" href="page-signup.html"> Zjazd kol. od 1939
                                                    r.</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item__has-dropdown">
                                    <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Klub
                                        historyczny AK </a>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li><a class="nav-link__list" href="page-login.html">---</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Informacje</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item__has-dropdown">
                                <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown">
                                    Biblioteka </a>
                                <div class="dropdown-menu">
                                    <ul class="list-unstyled">
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_o_miejscu')}}">O miejscu</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_godziny_otwarcia')}}">Godziny otwarcia</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_regulamin')}}">Regulamin</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_lektury_obowiazkowe')}}">Lektury Obowiązkowe</a>
                                        </li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_gazety_i_czasopisma')}}">Czasompisma w
                                                bibliotece</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_filmoteka')}}">Fimoteka</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_nowosci')}}">Nowości w bibliotece
                                                szkolnej</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_online')}}">Biblioteki On-Line</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_w_lowiczu')}}">Biblioteki w Łowiczu</a>
                                        </li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_bookcrossing')}}">Bookcrossing</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_informacja_medialna')}}">Regulamin centrum
                                                informacji medialnej</a></li>
                                        <li><a class="nav-link__list" href="{{url('/biblioteka_ciekawe_strony_internetowe')}}">Ciekawe strony
                                                internetowe</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{url('/swieta_dni_wolne')}}" class="nav-link__list">Święta i dni wolne</a></li>
                            <li><a href="{{url('/zebrania_z_rodzicami')}}" class="nav-link__list">Zebrania z rodzicami</a>
                            </li>
                            <li><a href="{{url('/wydawanie_duplikatow')}}" class="nav-link__list">Wydawanie
                                    duplikatów</a></li>
                            <li><a href="{{url('/procent')}}" class="nav-link__list">1%</a></li>
                            <li><a href="https://www.facebook.com/lo1lowicz/" target="_blank" class="nav-link__list">Facebook</a></li>
                            <li><a href="{{url('/zajecia_dodatkowe')}}" class="nav-link__list">Zajęcia dodatkowe</a></li>
                            <li><a href="{{url('/RODO')}}" class="nav-link__list">RODO</a></li>
                            <li><a href="https://synergia.librus.pl/" target="_blank" class="nav-link__list">Dziennik elektroniczny</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Osiągnięcia</a>
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">

                                <li class="nav-item__has-dropdown">
                                    <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown">
                                        Stypendyści </a>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li><a class="nav-link__list" href="{{url('/stypendysci_prezesa_rady_ministrow')}}"> Prezesa Rady
                                                    Ministrów </a></li>
                                            <li><a class="nav-link__list" href={{url('/stypendysci_zarzadu_starostwa_powiatowego')}}> Zarządy
                                                    Starostwa Powiatowego w Łowiczu</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item__has-dropdown">
                                    <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown">
                                        Osiągnięcia w olimpiadach i konkursach </a>
                                    <div class="dropdown-menu">
                                        <ul class="list-unstyled">
                                            <li><a class="nav-link__list" href="page-events.html"> Artystyczne</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Biologia</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Chemia</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Edukacja dla
                                                    bezpieczeństwa</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Filozofia</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Fizyka i
                                                    astronomia</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Geografia</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Historia</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Informatyka</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Język angielski</a>
                                            </li>
                                            <li><a class="nav-link__list" href="page-events.html"> Język francuski</a>
                                            </li>
                                            <li><a class="nav-link__list" href="page-events.html"> Język niemiecki</a>
                                            </li>
                                            <li><a class="nav-link__list" href="page-events.html"> Język polski</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Język rosyjski</a>
                                            </li>
                                            <li><a class="nav-link__list" href="page-events.html"> Matematyka</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Przedsiębiorczość</a>
                                            </li>
                                            <li><a class="nav-link__list" href="page-events.html"> Religia</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Sportowe</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Wiedza o
                                                    społeczeństwie</a></li>
                                            <li><a class="nav-link__list" href="page-events.html"> Inne</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Matura </a>
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li><a class="nav-link__list" href="blog-single.html"> Matura 2016</a></li>
                                <li><a class="nav-link__list" href="blog-single.html"> Matura 2017</a></li>
                                <li><a class="nav-link__list" href="blog-single.html"> Matura 2018</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item nav-item__has-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Rekrutacja </a>
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li><a class="nav-link__list" href="shop.html"> Rekrutacja </a></li>
                                <li><a class="nav-link__list" href="shop.html"> Klasa IA </a></li>
                                <li><a class="nav-link__list" href="shop.html"> Klasa IB </a></li>
                                <li><a class="nav-link__list" href="shop.html"> Klasa IC </a></li>
                                <li><a class="nav-link__list" href="shop.html"> Klasa ID </a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item nav-item__has-megamenu">
                        <a class="nav-link " href="#" data-toggle="dropdown">Aktualności</a>
                    </li>
                    <li class="nav-item nav-item__has-megamenu">
                        <a class="nav-link" href="#" data-toggle="dropdown">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- END container-->
</nav> <!-- END ec-nav -->