@extends('layouts.app')
@section('title')
    Osiągnięcia z języka angielskiego
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia z języka angielskiego
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Język angielski</li>
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
                                            <h2>Osiągniecia w olimpiadach i konkursach z języka angielskiego</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2016/2017</h4>



                                            <h6 class="paddingBottom-10">XIV Powiatowy Konkurs Języka Angielskiego</h6>
                                            <p>Miłosz Taranowicz – 2b – I miejsce</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2015/2016</h4>


                                            <h6 class="paddingBottom-10">III edycja Ogólnopolskiego Konkursu Wiedzy o Kanadzie – Discover Canada 2016”</h6>
                                            <p>Aleksandra Jakubik – 3e – udział w finale, tytuł półfinalistki</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">XIII Powiatowy Konkurs Języka Angielskiego</h4>
                                            <p>Beniamin Maliński – 3a – I miejsce</p>
                                            <p>Katarzyna Znajdek – 3d – II miejsce</p>
                                            <p>Patrycja Sadowska – 3b –  IV miejsce</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2014/2015</h4>


                                            <h6 class="paddingBottom-10">XII Powiatowy Konkurs Języka Angielskiego</h6>
                                            <p>Beniamin Maliński – 2a – III miejsce</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2013/2014</h4>


                                            <h6 class="paddingBottom-10">III Wojewódzki Konkurs Języka Angielskiego</h6>
                                            <p>Michalina Górajek – 2e – laureatka</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">XI Powiatowy Konkurs Języka Angielskiego</h4>
                                            <p>Michalina Górajek – 2e – II miejsce</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">I Międzyszkolny Konkurs Wiedzy o Wielkiej Brytanii</h4>
                                            <p>Piotr Pietrzak – 3b – I miejsce</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">V Festiwal Piosenki Angielskiej Przedbórz 2014</h4>
                                            <p>I miejsce w kategorii zespół zajął Szlachetny Zespół Artystyczny</p>
                                            <p>w składzie: Katarzyna Kubica – 2d, Jakub Krysicki – 2b,</p>
                                            <p>Krzysztof Zając – 2b, Aleksandra Gala – 2c,</p>
                                            <p>Karolina Pacler – 2c, Dominika Lubikowska – 2c</p>
                                            <p>Agata Jagura – 1b</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2011/2012</h4>


                                            <h6 class="paddingBottom-10">Międzypowiatowy Konkurs Języka Angielskiego’2012</h6>
                                            <p>Michał Kostrzewa – 3a – laureat – II miejsce</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">IX Powiatowy Konkurs Języka Angielskiego</h4>
                                            <p>Michał Kostrzewa – 3a – II miejsce</p>
                                            <p>Gabriela Jeż – 3d – IV miejsce</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2010/2011</h4>


                                            <h6 class="paddingBottom-10">VIII Powiatowy Konkurs Języka Angielskiego</h6>
                                            <p>Michał Kostrzewa – 2a – I miejsce</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2009/2010</h4>


                                            <h6 class="paddingBottom-10">VII Powiatowy Konkurs Języka Angielskiego</h6>
                                            <p>Joanna Truchel – 3e – I miejsce</p>


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