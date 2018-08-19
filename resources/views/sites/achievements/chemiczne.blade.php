@extends('layouts.app')
@section('title')
    Osiągnięcia chemiczne
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia chemiczne
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Chemia</li>
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
                                            <h2>Osiągniecia w olimpiadach i konkursach chemicznych</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">

                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2011/2012</h4>


                                            <h6 class="paddingBottom-10">LVIII Olimpiada Chemiczna</h6>

                                            <p>Łukasz Łaziński – 3c – finalista II etapu</p>


                                            <h6 class="paddingTop-40 paddingBottom-10">XLVIII Ogólnopolski Konkurs
                                                Chemiczny im. prof. Antoniego Swinarskiego</h6>
                                            <p>Paulina Talarowska – 3c – laureatka</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2010/2011</h4>


                                            <h6 class="paddingBottom-10">LVII Olimpiada Chemiczna
                                                finaliści etapu okręgowego:</h6>
                                            <p>Paulina Talarowska – 2c</p>
                                            <p>Łukasz Łaziński – 2c</p>
                                            <p>Maciej Małolepszy – 3c</p>


                                            <h6 class="paddingTop-40 paddingBottom-10">XLVII Ogólnopolski Konkurs
                                                Chemiczny im. prof. Antoniego Swinarskiego
                                                laureaci finału ogólnopolskiego:</h6>
                                            <p>Łukasz Łaziński – 2c</p>
                                            <p>Marcin Lisiecki – 3f</p>
                                            <p>Magdalena Gajek – 3c</p>


                                            <h4 class="paddingTop-30 text-center paddingBottom-30">Rok szkolny
                                                2009/2010</h4>


                                            <h6 class="paddingBottom-10">LVI Olimpiada Chemiczna
                                                finaliści etapu okręgowego:</h6>
                                            <p>Agnieszka Szmajdzińska – 3f</p>
                                            <p>Damian Zabost – 3f</p>


                                            <h6 class="paddingTop-40 paddingBottom-10">XLVI Ogólnopolski Konkurs
                                                Chemiczny im. prof. Antoniego Swinarskiego
                                                laureaci finału ogólnopolskiego:</h6>
                                            <p>Ewa Białkowska – 3f</p>
                                            <p>Damian Zabost – 3f</p>


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