@extends('layouts.app')
@section('title')
    Osiągnięcia z filozofii
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia z filozofii
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Filozofia</li>
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
                                            <h2>Osiągniecia w olimpiadach i konkursach z filozofii</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">

                                            <h4 class="paddingTop-30 text-center paddingBottom-30"> Rok szkolny
                                                2016/2017</h4>


                                            <h6 class="paddingBottom-10">XXIX Olimpiada Filozoficzna</h6>
                                            <p>finalista etapu centralnego</p>
                                            <p>Paweł Pieniążek – 3d</p>
                                            <p>Rok szkolny 2015/2016</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">XXVIII Olimpiada
                                                Filozoficzna</h6>
                                            <p>udział w etapie okręgowym</p>
                                            <p>Katarzyna Śliwińska – 3e</p>
                                            <p>Małgorzata Karczewska – 2d</p>
                                            <p>Michał Krystecki – 2d</p>
                                            <p>Paweł Pieniążek – 2d</p>
                                            <p>Paulina Zwolińska – 2d</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2014/2015</h4>


                                            <h6 class="paddingBottom-10">XXVII Olimpiada Filozoficzna</h6>
                                            <p>Jagoda Kostrzewska – 3e – udział w etapie centralnym</p>
                                            <p>udział w etapie okręgowym</p>
                                            <p>Julia Stępniewska – 3e</p>
                                            <p>Daria Bródka – 3e</p>
                                            <p>Kajetan Szmidt – 3e</p>
                                            <p>Jakub Czapnik – 3e</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2013/2014</h4>


                                            <h6 class="paddingBottom-10">XXVI Olimpiada Filozoficzna</h6>
                                            <p>finaliści etapu centralnego:</p>
                                            <p>Dagmara Mitek – 3e</p>
                                            <p>Weronika Znajdek – 3e</p>
                                            <p>Rafał Wójcik – 3e</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2012/2013</h4>


                                            <h6 class="paddingBottom-10">XXV Olimpiada Filozoficzna</h6>
                                            <p>Adela Juraś – 3e – finalistka etapu centralnego</p>
                                            <p>udział w etapie okręgowym</p>
                                            <p>Rafał Wójcik – 2e</p>
                                            <p>Weronika Znajdek – 2e</p>
                                            <p>Agnieszka Fabijańska– 2e</p>
                                            <p>Dagmara Mitek – 2e</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2011/2012</h4>


                                            <h6 class="paddingBottom-10">XXIV Olimpiada Filozoficzna</h6>
                                            <p>Dawid Domański – 2e – laureat etapu centralnego</p>
                                            <p>finaliści etapu centralnego:</p>
                                            <p>Katarzyna Więcław – 3e</p>
                                            <p>Ewa Szymańska – 3e</p>
                                            <p>Jakub Kowalik – 3e</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2010/2011</h4>


                                            <h6 class="paddingBottom-10">XXIII Olimpiada Filozoficzna</h6>
                                            <p> finaliści etapu centralnego:</p>
                                            <p> Filip Kłos – 3e</p>
                                            <p> Michał Bejda – 3e</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2009/2010</h4>


                                            <h6 class="paddingBottom-10">XXII Olimpiada Filozoficzna</h6>
                                            <p>finaliści etapu centralnego:</p>
                                            <p>Monika Wollny – 3e</p>
                                            <p>Filip Kłos – 2e</p>


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