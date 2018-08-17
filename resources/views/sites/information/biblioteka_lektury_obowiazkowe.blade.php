@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Lektury obowiązkowe
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span></li>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a></li>
                <li class="breadcrumb-item">Lektury obowiązkowe</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-40 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                    <div class="card shadow-v1">
                        <div class="card-body" style="padding: 0;">
                            <section class="border-bottom border-light" id="content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 mb-1 text-center paddingTop-15 paddingBottom-20">
                                            <h2>Biblioteka - Lektury obowiązkowe</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <h3>Poziom podstawowy</h3>
                                            </div>
                                            <h5 class="paddingTop-20">Literatura polska</h5>
                                            <div class="col-lg-12 paddingBottom-40 paddingTop-5">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet lipadding">
                                                    <li>Bogurodzica w kontekście poezji średniowiecznej</li>
                                                    <li>Jan Kochanowski – fraszki (od 2009 r.), pieśni i treny (wybór)</li>
                                                    <li>Jan Andrzej Morsztyn – wybór wierszy</li>
                                                    <li>Daniel Naborowski – wybór wierszy</li>
                                                    <li>Wacław Potocki – wybór wierszy</li>
                                                    <li>Ignacy Krasicki – bajki (od 2009 r.), satyry (wybór), Hymn do miłości ojczyzny</li>
                                                    <li>Adam Mickiewicz – Romantyczność (od 2009 r.)</li>
                                                    <li>Adam Mickiewicz Pan Tadeusz</li>
                                                    <li>Adam Mickiewicz Dziady cz. III</li>
                                                    <li>Juliusz Słowacki Kordian: akt I, akt II, akt III sc. 5 i 6</li>
                                                    <li>Zygmunt Krasiński Nie-Boska komedia: część I, część III (scena w obozie rewolucji), część IV (scena w obozie arystokracji i scena finałowa)</li>
                                                    <li>Adam Mickiewicz – wybór wierszy</li>
                                                    <li>Juliusz Słowacki – wybór wierszy</li>
                                                    <li>Cyprian Kamil Norwid – wybór wierszy</li>
                                                    <li>Bolesław Prus Lalka</li>
                                                    <li>Eliza Orzeszkowa Nad Niemnem – fragmenty z tomu III: rozmowa Andrzejowej Korczyńskiej z synem, rozmowa Benedykta Korczyńskiego z synem</li>
                                                    <li>Eliza Orzeszkowa Gloria victis</li>
                                                    <li>Maria Konopnicka Mendel Gdański</li>
                                                    <li>Bolesław Prus Kamizelka</li>
                                                    <li>Henryk Sienkiewicz Potop, Quo vadis? (od 2009 r.)</li>
                                                    <li>Kazimierz Przerwa-Tetmajer – wybór wierszy</li>
                                                    <li>Jan Kasprowicz – wybór wierszy</li>
                                                    <li>Leopold Staff – wybór wierszy z różnych epok</li>
                                                    <li>Stanisław Wyspiański Wesele</li>
                                                    <li>Władysław Stanisław Reymont Chłopi (t. I)</li>
                                                    <li>Stefan Żeromski Ludzie bezdomni</li>
                                                    <li>Stefan Żeromski Przedwiośnie</li>
                                                    <li>Witold Gombrowicz Ferdydurke – rozdz. II, III, VI, VII, VIII, IX, X, XII, XIV</li>
                                                    <li>Zofia Nałkowska Granica</li>
                                                    <li>Tadeusz Borowski Pożegnanie z Marią (Pożegnanie z Marią, U nas, w Auschwitzu …, Proszę państwa do gazu, Bitwa pod Grunwaldem)</li>
                                                    <li>Gustaw Herling-Grudziński Inny świat</li>
                                                    <li>Bolesław Leśmian – wybór wierszy</li>
                                                    <li>Julian Tuwim – wybór wierszy</li>
                                                    <li>Maria Pawlikowska-Jasnorzewska – wybór wierszy</li>
                                                    <li>Czesław Miłosz – wybór wierszy</li>
                                                    <li>Krzysztof Kamil Baczyński – wybór wierszy</li>
                                                    <li>Tadeusz Różewicz – wybór wierszy</li>
                                                    <li>Zbigniew Herbert – wybór wierszy</li>
                                                    <li>Miron Białoszewski – wybór wierszy</li>
                                                    <li>Wisława Szymborska – wybór wierszy</li>
                                                    <li>Stanisław Barańczak – wybór wierszy</li>
                                                    <li>Jan Twardowski – wybór wierszy</li>
                                                    <li>Sławomir Mrożek Tango</li>
                                                    <li>Hanna Krall Zdążyć przed Panem Bogiem</li>
                                                </ul>

                                                <h5 class="paddingTop-20">Literatura powszechna</h5>
                                                <div class="col-lg-12 paddingBottom-40 paddingTop-5">
                                                    <ul class="list-unstyled list-style-icon list-icon-bullet lipadding">
                                                        <li>Sofokles Król Edyp</li>
                                                        <li>Horacy – wybór pieśni</li>
                                                        <li>William Szekspir Makbet</li>
                                                        <li>Molier Świętoszek</li>
                                                        <li>Jan Wolfgang Goethe Cierpienia młodego Wertera</li>
                                                        <li>Fiodor Dostojewski Zbrodnia i kara</li>
                                                        <li>Joseph Conrad Jądro ciemności</li>
                                                        <li>Albert Camus Dżuma</li>
                                                    </ul>
                                                 </div>

                                                <div class="text-center">
                                                    <h3>Poziom rozszerzony</h3>
                                                    <h6>Dodatkowo do podstawowego</h6>
                                                </div>
                                                <h5 class="paddingTop-20">Literatura polska</h5>
                                                <div class="col-lg-12 paddingBottom-40 paddingTop-5">
                                                    <ul class="list-unstyled list-style-icon list-icon-bullet lipadding">
                                                        <li>Jan Kochanowski Treny</li>
                                                        <li>Juliusz Słowacki Kordian</li>
                                                        <li>Witold Gombrowicz Trans-Atlantyk</li>
                                                        <li>Maria Kuncewiczowa Cudzoziemka</li>
                                                        <li>Stanisław Ignacy Witkiewicz Szewcy</li>
                                                        <li>Jan Paweł II Pamięć i tożsamość (od 2009 r.)</li>
                                                    </ul>
                                                </div>

                                                <h5 class="paddingTop-20">Literatura powszechna</h5>
                                                <div class="col-lg-12 paddingBottom-40 paddingTop-5">
                                                    <ul class="list-unstyled list-style-icon list-icon-bullet lipadding">
                                                        <li>Dante Boska Komedia – fragmenty Piekła</li>
                                                        <li>Jan Wolfgang Goethe Faust – część I: fragmenty sceny w pracowni (rozmyślania Fausta o sobie i swoim życiu, rozmowa z Mefistofelesem)</li>
                                                        <li>Franz Kafka Proces</li>
                                                        <li>Michaił Bułhakow Mistrz i Małgorzata</li>
                                                    </ul>
                                                </div>
                                        </div>
                                    </div> <!-- END row-->
                                </div> <!-- END container-->
                            </section> <!-- END section-->
                            <!-- END tab-content-->
                        </div>
                    </div>
                </div>

                @include('components.aktualnosci')
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>

@endsection