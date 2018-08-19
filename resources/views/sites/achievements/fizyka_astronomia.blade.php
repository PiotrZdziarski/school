@extends('layouts.app')
@section('title')
    Osiągnięcia z fizyki i astronomii
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia z fizyki i astronomii
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Fizyka i astronomia</li>
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
                                            <h2>Osiągniecia w olimpiadach i konkursach z fizyki i astronomii</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">

                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny 2017/2018</h4>
                                            <h6 class="paddingBottom-10">XIV Konkurs Fizyczny „Fascynująca Fizyka”</h6>
                                            <p>finalistami części teoretycznej zostali:</p>
                                            <p>Łukasz Klimkiewicz – 3b</p>
                                            <p>Sylwester Wójcik – 3b</p>
                                            <p>Piotr Marszałek – 3a</p>
                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny 2016/2017</h4>
                                            <h6 class="paddingBottom-10">XIII Konkurs Fizyczny „Fascynująca Fizyka”</h6>
                                            <p>finalistami części teoretycznej zostali:</p>
                                            <p>Piotr Czapnik – 3b</p>
                                            <p>Dominik Skroński – 3b</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">V Ogólnopolski Turniej Maszyn Wodnych</h6>
                                            <p>Hubert Kępka – 1b</p>
                                            <p>Jędrzej Wojda – 1b</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">VIII Powiatowy Konkurs Astronomiczny</h6>
                                            <p>Piotr Czapnik – 3b – III miejsce</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny 2015/2016</h4>


                                            <h6 class="paddingBottom-10"> XII Konkurs Fizyczny „Fascynująca Fizyka”</h6>
                                            <p>finalistami części teoretycznej zostali:</p>
                                            <p>Wojciek Kurek– 3a</p>
                                            <p>Michał Kurczak – 3a</p>
                                            <p>Dawid Wielemborek – 3a</p>
                                            <p>Piotr Kowalski – 3a</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">17 EXPLORERS FESTIWAL Laboratorium Przygody 2015</h6>
                                            <p>Konkurs Fizyczny Politechniki Łódzkiej</p>
                                            <p>Piotr Kowalski – 3a – VI miejsce</p>
                                            <p>Nasza szkoła otrzymała III miejsce w konkursie  Najlepsza Szkoła</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">VII Powiatowy Konkurs Astronomiczny</h6>
                                            <p>Piotr Kowalski i Wojciech Kurek – 3a – I miejsce</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny 2014/2015</h4>


                                            <h6 class="paddingBottom-10">XI Konkurs Fizyczny „Fascynująca Fizyka”</h6>
                                            <p>Bartosz Panek – 3b – udział w finale</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">Polsko – Ukraiński Konkurs Fizyczny LWIĄTKO’2015</h6>
                                            <p>Wojciech Sobczak  – 3b – wyróżnienie tytuł  taona</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">Projekt Badawczy „Biomasa problemów naukowych”</h6>
                                            <p>I miejsce w województwie:</p>
                                            <p>Isabell Adasiak – 2a</p>
                                            <p>Aleksandra Charążka – 2a</p>
                                            <p>Weronika Grzegory – 2a</p>
                                            <p>Maria Ploch – 2a</p>
                                            <p>Dominik Popowski – 2a</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">VI Powiatowy Konkurs Astronomiczny</h6>
                                            <p>Piotr Kowalski – 2a  – I miejsce</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny 2013/2014</h4>


                                            <h6 class="paddingBottom-10">X Konkurs Fizyczny „Fascynująca Fizyka”</h6>
                                            <p>finaliści etapu wojewódzkiego:</p>
                                            <p>Julia Golis – 3b</p>
                                            <p>Bartłomiej Więcek – 3b</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">15 EXPLORERS FESTIWAL Laboratorium Przygody 2013</h6>
                                            <p>Konkurs Fizyczny Politechniki Łódzkiej</p>
                                            <p>Jakub Zagórowicz – 3b – I miejsce</p>
                                            <p>Paweł Barlak – 3b – II miejsce</p>
                                            <p>Karolina Czapnik – 3b – IV miejsce</p>
                                            <p>Przemysław Błaszczyk -3b – V miejsce</p>
                                            <p>Nasza szkoła otrzymała dyplom i tytuł Najlepszej Szkoły!</p>

                                            <h6 class="paddingBottom-10 paddingTop-40">Polsko – Ukraiński Konkurs Fizyczny LWIĄTKO’2014</h6>
                                        <p>Kamil Guzek  – 3b – wyróżnienie tytuł  taona</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">V Powiatowy Konkurs Astronomiczny</h6>
                                        <p>Marek Grzejszczak i Wojciech Sobczak – 2b  – I miejsce</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">II edycja Konkursu</h6>
                                        <p>„Piękne doświadczenie fascynujące wyjaśnienie – fizyka”</p>
                                        <p>Kamil Lesiak – 3a – X miejsce</p>


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