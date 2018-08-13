@extends('layouts.app')
@section('content')


    @include('components.claim')


    <section class="padding-y-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row align-items-center">
                        <div class="col-md-6 my-5">
                            <div class="position-relative">
                                <img class="rounded w-100" src="assets/img/360x400/1.jpg" alt="">
                                <a href="https://www.youtube.com/watch?v=GMc7aS7MbDM" data-fancybox class="iconbox iconbox-lg bg-white position-absolute absolute-center playvid">
                                    <i class="ti-control-play text-primary"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <h2>
                                <small class="d-block text-gray">Witajcie w</small>
                                <span class="text-primary">Chełmonie</span>
                            </h2>
                            <p class="my-4">
                                Nie wiem w sumie co tu napisać. <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium pharetra magna.</p>
                        </div>
                    </div>
                </div>
                @include('components.aktualnosci')
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>






    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 bg-cover bg-center text-white padding-y-80" style="background:url(assets/img/960x560/1.jpg) no-repeat">
                    <div class="padding-x-lg-100 wow pulse">
                        <h2 class="text-white mb-4">
                            Rekrutacja na rok 2018/2019
                        </h2>
                        <p>
                            Zajęcia odbywają się w dobrze wyposażonych, nowoczesnych pracowniach przedmiotowych i salach lekcyjnych. Uczniowie samodzielnie wykonują doświadczenia i symulacje, mają możliwość wykorzystywania tablic interaktywnych (multimedialnych)!
                        </p>
                        <a href="#" class="btn btn-white mt-4">Zobacz więcej</a>
                    </div>
                </div>
                <div class="col-md-6 bg-cover bg-center text-white padding-y-80" style="background:linear-gradient(rgba(9,151,244,0.85),rgba(80,154,244,0.85)),url(assets/img/960x560/3.jpg) no-repeat; !important;">
                    <div class="padding-x-lg-100 wow pulse">
                        <h2 class="text-white mb-4">
                            Matury  2018
                        </h2>
                        <p>
                            Przedstawiamy porównanie wyników egzaminów maturalnych w naszej szkole ze średnią egzaminów maturalnych dla liceów w Polsce. Zobacz jak wypadła nasza szkoła!
                        </p>
                        <a href="#" class="btn btn-white mt-4" style="margin-top: 55px !important;">Zobacz więcej</a>
                    </div>
                </div>
            </div>
        </div> <!-- END container-->
    </section>





    <section class="padding-y-100 bg-light-v2">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mb-4">
                        Latest School News
                    </h2>
                    <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                </div>
            </div> <!-- END row-->

            <div class="row mt-4">

                <div class="col-lg-4 col-md-6 marginTop-30 wow slideInUp" data-wow-delay=".1s">
                    <div class="card padding-30 shadow-v1">
                        <p class="text-primary">
                            Aug 13, 2018
                        </p>
                        <a href="#" class="h4 mb-3">
                            Best Student Spots in London
                        </a>
                        <p>
                            Investig ationes demons trave sed vunt lectores legere do kurus qodk legunt saepiu claritas ekist conse tetur adipi sicing elit, sed kdo.
                        </p>
                        <a href="#" class="btn btn-outline-primary align-self-start mt-2">
                            Read More
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 marginTop-30 wow slideInUp" data-wow-delay=".2s">
                    <div class="card padding-30 shadow-v1">
                        <p class="text-primary">
                            Aug 13, 2018
                        </p>
                        <a href="#" class="h4 mb-3">
                            Believe in Yourself! Have Faith!
                        </a>
                        <p>
                            Investig ationes demons trave sed vunt lectores legere do kurus qodk legunt saepiu claritas ekist conse tetur adipi sicing elit, sed kdo.
                        </p>
                        <a href="#" class="btn btn-outline-primary align-self-start mt-2">
                            Read More
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 marginTop-30 wow slideInUp" data-wow-delay=".3s">
                    <div class="card padding-30 shadow-v1">
                        <p class="text-primary">
                            Aug 13, 2018
                        </p>
                        <a href="#" class="h4 mb-3">
                            Bringing an Online Community Together
                        </a>
                        <p>
                            Investig ationes demons trave sed vunt lectores legere do kurus qodk legunt saepiu claritas ekist conse tetur adipi sicing elit, sed kdo.
                        </p>
                        <a href="#" class="btn btn-outline-primary align-self-start mt-2">
                            Read More
                        </a>
                    </div>
                </div>


            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>





    @include('components.schoolgallery')



    <section class="paddingTop-100 paddingBottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="display-lg-4 font-weight-bold text-primary wow fadeIn" data-wow-delay=".1s" style="color: #f3ae4d!important;">
                        Józef Chełmoński
                    </h2>
                    <p class="lead wow fadeIn" data-wow-delay=".1s" style="color: #444444">
                        Polski malarz, reprezentant realizmu. Jego malarstwo charakteryzowało się wielką ekspresją i temperamentem lecz odwzorowywał naturę taka jaka jest w rzecziwstości : surową, nie wyidealizowaną. Jako jeden z nielicznych potrafił ukazać na swych obrazach chrapanie koni, ich rozpędzone sylwetki, mokre od wilgoci drzewa tak realistycznie jak byłyby one tam naprawdę.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg mt-3 wow fadeIn btnpatron" data-wow-delay=".1s">Zobacz więcej</a>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <img src="assets/img/school/chelmonski.jpg">
                </div>
            </div>
        </div>
    </section>
@endsection