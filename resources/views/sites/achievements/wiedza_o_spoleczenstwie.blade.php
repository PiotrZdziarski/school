@extends('layouts.app')
@section('title')
    Osiągnięcia z wiedzy o społeczeństwie
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia z wiedzy o społeczeństwie
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Wiedza o społeczeństwie</li>
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
                                            <h2>Osiągniecia w olimpiadach i konkursach z wiedzy o społeczeństwie</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny 2016/2017</h4>


                                            <h6 class="paddingBottom-10">LVIII Olimpiada Wiedzy o Polsce i Świecie Współczesnym</h6>
                                            <p>udział w etapie okręgowym:</p>
                                            <p>Natalia Kucińska – 3d</p>
                                            <p>Natalia Prucnal – 2c</p>
                                            <p>Krystian Kiepas – 2c</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny 2015/2016</h4>


                                            <h6 class="paddingBottom-10">LVII Olimpiada Wiedzy o Polsce i Świecie Współczesnym</h6>
                                            <p>udział w etapie okręgowym:</p>
                                            <p>Aleksandra Wasiak – 3b</p>
                                            <p>Michał Krystecki – 2d</p>
                                            <p>Paweł Pieniążek – 2d</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">Konkurs „Wszystko o EURO”</h6>
                                            <p>Natalia Kucińska – 2d  – udział w finale ogólnopolskim</p>



                                            <h6 class="paddingBottom-10 paddingTop-40">Konkurs „BEZPIECZNA POLSKA”</h6>
                                            <p>Natalia Prucnal – II miejsce w województwie</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny 2014/2015</h4>


                                            <h6 class="paddingBottom-10">Ogólnopolska Olimpiada Wiedzy o Państwie i Prawie</h6>
                                            <p>udział w etapie okręgowym:</p>
                                            <p>Katarzyna Śliwińska – 2e</p>
                                            <p>Katarzyna Pryk – 2b</p>
                                            <p>Aleksandra Wasiak – 2b</p>




                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny 2013/2014</h4>


                                            <h6 class="paddingBottom-10">LV Olimpiada Wiedzy o Polsce i Świecie Współczesnym</h6>
                                            <p>udział w etapie okręgowym:</p>
                                            <p>Piotr Pietrzak – 3b</p>
                                            <p>Rafał Wójcik – 3e</p>




                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny 2011/2012</h4>


                                            <h6 class="paddingBottom-10">LIII Olimpiada Wiedzy o Polsce i Świecie Współczesnym</h6>
                                            <p>Piotr Zientara  – 2e – finalista etapu okręgowego</p>


                                            <h4 class="paddingTop-60 text-center paddingBottom-30">Rok szkolny 2010/2011</h4>


                                            <h6 class="paddingBottom-10">LII edycja Olimpiady Wiedzy o Polsce i Świecie Współczesnym</h6>
                                            <p>Filip Kłos – 3e  – finalista etapu okręgowego</p>


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