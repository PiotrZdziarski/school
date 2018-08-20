@extends('layouts.app')
@section('title')
    Osiągnięcia
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Inne</li>
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
                                            <h2>Osiągniecia w olimpiadach i konkursach</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">

                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2012/2013</h4>


                                            <h6 class="paddingBottom-10">Nagroda Główna w kampanii „Drugie Życie”</h6>
                                            <p>Czek w wysokości 1000 zł na cel charytatywny</p>
                                            <p>oraz podziękowania otrzymali:</p>
                                            <p>Łukasz Wójcik – 3b</p>
                                            <p>Jarosław Golis – 3c</p>
                                            <p>Patrycja Klimczak – 2d</p>
                                            <p>Agnieszka Żabka – 2c</p>
                                            <p>Rafał Wójcik – 2e</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny 2010/2011</h4>


                                            <h6 class="paddingBottom-10">III edycja Konkursu „Drugie Życie Elektrośmieci”</h6>
                                            <p>w II etapie – II miejsce</p>
                                            <p>w Polsce – III miejsce, nagroda Grand Prix</p>
                                            <p>w kategorii szkoła ponadgimnazjalna – drużyna z klasy 1c –</p>
                                            <p>„Chełmofony do ochrony”</p>
                                            <p>Aneta Zabost</p>
                                            <p>Aneta Kostrzewa</p>
                                            <p>Agnieszka Dobrzycka</p>
                                            <p>Szymon Kubiak</p>
                                            <p>Joanna Frątczak</p>
                                            <p>Paulina Majer</p>
                                            <p>Jarosław Golis</p>
                                            <p>Kamila Różycka</p>
                                            <p>Kinga Kosiorek</p>
                                            <p>Adrian Szwarocki</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30"> Rok szkolny 2009/2010</h4>


                                            <h6 class="paddingBottom-10">XXI Ogólnopolski Konkurs Wiedzy o Filmie</h6>
                                            <p>w eliminacjach wojewódzkich:</p>
                                            <p>Michał Bejda, Filip Kłos  – 2e – IV miejsce</p>
                                            <p>Ewa Nowicka, Wojciech Jarota – 2e – V miejsce</p>
                                            <p>Konkurs Wiedzy o Filmie „Nienazwany Kadr”</p>
                                            <p>Ewa Nowicka – 2e – I miejsce</p>
                                            <p>Filip Kłos – 2e – II miejsce</p>
                                            <p>Wojciech Jarota – 2e – III miejsce</p>


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