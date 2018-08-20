@extends('layouts.app')
@section('title')
    Osiągnięcia z przedsiębiorczości
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia z przedsiębiorczości
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Przedsiębiorczość</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-40 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                    <div class="card shadow -v1">
                        <div class="card-body" style="padding: 0;">
                            <section class="border-bottom border-light" id="content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 mb-1 text-center paddingTop-35">
                                            <h2>Osiągniecia w olimpiadach i konkursach z przedsiębiorczości</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2016/2017</h4>
                                            <h6 class="paddingBottom-10">XII edycja Olimpiady Przedsiębiorczości</h6>
                                            <p>udział w etapie okręgowym:</p>
                                            <p>Natalia Siejka – 3b</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny
                                                2015/2016</h4>
                                            <h6 class="paddingBottom-10">XI edycja Olimpiady Przedsiębiorczości</h6>
                                            <p>udział w etapie okręgowym:</p>
                                            <p>Katarzyna Pryk – 3b</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny
                                                2014/2015</h4>


                                            <h6 class="paddingBottom-10">X edycja Olimpiady Przedsiębiorczości</h6>
                                            <p>udział w etapie okręgowym:</p>
                                            <p>Joanna Rudnicka – 3d</p>
                                            <p>Mateusz Stasiak – 3d</p>
                                            <p>Katarzyna Pryk – 2b</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny
                                                2013/2014</h4>


                                            <h6 class="paddingBottom-10">IX edycja Olimpiady Przedsiębiorczości</h6>
                                            <p>udział w etapie okręgowym:</p>
                                            <p>Przemysław Błaszczyk – 3b</p>
                                            <p>Piotr Pietrzak – 3b</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">„Fair Play Bank” – gra
                                                ekonomiczna Spółdzielczej Grupy Bankowej</h6>
                                            <p>nagrodzeni:</p>
                                            <p>Przemysław Błaszczyk – 3b</p>
                                            <p>Bartłomiej Więcek – 3b</p>
                                            <p>Jakub Zagórowicz – 3b</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">II Łódzki Konkurs Wiedzy o
                                                Podatkach</h6>
                                            <p>Weronika Haczykowska – 3e – laureatka etapu wojewódzkiego</p>
                                            <p>udział w finale</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny
                                                2012/2013</h4>


                                            <h6 class="paddingBottom-10">VIII Olimpiady Przedsiębiorczości</h6>
                                            <p>Joanna Wilczyńska – 3b – finalistka etapu okręgowego</p>
                                            <p>Piotr Pietrzak – 2b – udział w etapie okręgowym</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">I Łódzki Konkurs Wiedzy o
                                                Podatkach</h6>
                                            <p>Finaliści II etapu:</p>
                                            <p>Karolina Czapnik – 2b</p>
                                            <p>Anna Kaba – 2b</p>
                                            <p>Przemysław Błaszczyk – 2b</p>
                                            <p>Laureatka II etapu:</p>
                                            <p>Weronika Haczykowska – 2e – V miejsce</p>
                                            <p>– udział w etapie ogólnopolskim</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny
                                                2011/2012</h4>


                                            <h6 class="paddingBottom-10">VII edycja Olimpiady Przedsiębiorczości</h6>
                                            <p>Brian Malangiewicz – 1b – finalista etapu okręgowego</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny
                                                2010/2011</h4>
                                            <h6 class="paddingBottom-10">VI edycja Olimpiady Przedsiębiorczości</h6>
                                            <p>Michał Wrona – 3a – finalista etapu okręgowego</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny
                                                2009/2010</h4>


                                            <h6 class="paddingBottom-10">XXIII Olimpiada Wiedzy Ekonomicznej</h6>
                                            <p>Mateusz Talarowski – 3b – udział w etapie okręgowym II stopnia</p>

                                        </div> <!-- END row-->
                                    </div>
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