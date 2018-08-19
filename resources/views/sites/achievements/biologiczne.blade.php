@extends('layouts.app')
@section('title')
    Osiągnięcia biologiczne
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia biologiczne
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Biologia</li>
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
                                            <h2>Osiągniecia w olimpiadach i konkursach biologicznych</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2016/2017</h4>
                                            <h6 class="paddingBottom-10">XXXII Olimpiada Wiedzy Ekologicznej
                                                udział w etapie wojewódzkim:</h6>
                                            <p>Paulina Sieczkowska – 2a</p>

                                            <h6 class="paddingBottom-10 paddingTop-40">Wojewódzka Olimpiada Wiedzy
                                                HIV/AIDS
                                                udział w etapie wojewódzkim:</h6>
                                            <p>Wiktoria Kowalczyk –3a</p>
                                            <p>Klaudia Niedźwiedź – 3c</p>

                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2015/2016</h4>


                                            <h6 class="paddingBottom-10">XLV Olimpiada Biologiczna
                                                udział w zawodach okręgowych II stopnia</h6>
                                            <p>Anna Markowska – 3b</p>

                                            <h6 class="paddingTop-40 paddingBottom-10">Wojewódzka Olimpiada Wiedzy
                                                HIV/AIDS</h6>
                                            <p> Anna Markowska – 3b – laureatka etapu wojewódzkiego II miejsce</p>
                                            <p>udział w etapie wojewódzkim:</p>
                                            <p>Malwina Rosłonek – 3d</p>
                                            <p>Katarzyna Znajdek – 3d</p>


                                            <h6 class="paddingTop-40 paddingBottom-10">Wojewódzki Konkurs Wiedzy
                                                HIV/AIDS –
                                                „Włączmy się do wspólnego działania – razem przeciw AIDS”
                                                udział w finale wojewódzkim:</h6>
                                            <p>Klaudia Niedźwiedź – 2c</p>
                                            <p>Anna Markowska – 3b</p>
                                            <p>Agata Szczepaniak – 2a</p>


                                            <h6 class="paddingTop-40 paddingBottom-10">Powiatowy Konkurs na Projekt
                                                Torby
                                                Ekologicznej</h6>
                                            <p>Michał Rutkowski – 2c – wyróżnienie – list gratulacyjny</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30"> Rok szkolny
                                                2014/2015</h4>


                                            <h6 class="paddingBottom-10">XLIV Olimpiada Biologiczna
                                                Udział w zawodach okręgowych II stopnia:</h6>
                                            <p> Adam Muras – 3c</p>

                                            <h6 class="paddingTop-40 paddingBottom-10">XXX Olimpiada Wiedzy Ekologicznej
                                                finaliści zawodów wojewódzkich:</h6>
                                            <p>Mateusz Tonderski – 3c</p>
                                            <p> Anna Markowska – 2b</p>

                                            <h6 class="paddingTop-40 paddingBottom-10">Konkurs Ekologiczny
                                                „Eko-młodzież” –
                                                II edycja
                                                udział w finale:</h6>
                                            <p>Malwina Rosłonek – 2d</p>
                                            <p>Justyna Wójcik – 2d</p>
                                            <p>Katarzyna Znajdek – 2d</p>
                                            <p>Adam Muras – 3c</p>
                                            <p>Mateusz Tonderski – 3c</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2013/2014</h4>


                                            <h6 class="paddingBottom-10">XLIII Olimpiada Biologiczna
                                                Udział w zawodach okręgowych II stopnia:</h6>
                                            <p>Adam Muras – 2c</p>
                                            <p>Dominik Burzyński – 3c – wyróżnienie za pracę badawczą</p>


                                            <h6 class="paddingTop-40 paddingBottom-10">XVIII edycja Konkursu
                                                Edukacyjno-ekologicznego im. Jana Bernata „Zwierzęta latające
                                                Bolimowskiego
                                                Parku Krajobrazowego i okolic”</h6>
                                            <p>Aleksandra Charążka – 1a – III miejsce</p>
                                            <p>Weronika Grzegory – 1a – wyróżnienie</p>


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