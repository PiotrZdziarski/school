@extends('layouts.app')
@section('title')
    I LO im. Józefa Chełmońskiego w Łowiczu
@endsection
@section('content')


    @include('components.claim')


    <section class="padding-y-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row align-items-center">
                        {{--<div class="col-md-6 my-5">
                            <div class="position-relative">
                                <img class="rounded w-100" src="{{url('assets/img/360x400/piosenki.png')}}" alt="">
                                <a href="https://www.youtube.com/watch?v=GMc7aS7MbDM" data-fancybox
                                   class="iconbox iconbox-lg bg-white position-absolute absolute-center playvid">
                                    <i class="ti-control-play text-primary"></i>
                                </a>
                            </div>
                        </div>--}}
                        <div class="col-md-6 my-5">
                            <div class="position-relative">
                                <div class="hover:parent no4-3">
                                    <img class="rounded w-100"
                                         src="{{url('assets/img/360x400/piosenki.png')}}"
                                         alt="Chełmoński opis szkoły" style="filter:brightness(50%);">
                                    <a href="https://www.youtube.com/watch?v=GMc7aS7MbDM"
                                       data-fancybox
                                       class="iconbox iconbox-lg bg-white position-absolute absolute-center playvid">
                                        <i class="ti-control-play text-primary"></i>
                                    </a>
                                    <div class="card-img-overlay  transition-0_3 flex-center bg-black-0_4 hover:show">
                                        <a href="https://www.youtube.com/watch?v=GMc7aS7MbDM"
                                           data-fancybox
                                           class="iconbox iconbox-lg bg-white position-absolute absolute-center playvid">
                                            <i class="ti-control-play text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <h2>
                                <small class="d-block text-gray">Witaj w</small>
                                <span class="text-primary">Chełmonie</span>
                            </h2>
                            <p class="my-4">
                                Nie wiem w sumie co tu napisać.
                            <p>Finiss potus! Our closest result for silence is to capture others balanced.</p>
                        </div>
                    </div>
                </div>
                @include('components.aktualnosci_home_page')
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>






    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 bg-cover bg-center text-white padding-y-80"
                     style="background:linear-gradient(rgba(244,115,63,0.85),rgba(244,136,61,0.85)),url({{url('assets/img/rekrutacja/pracownia.png')}})">
                    <div class="padding-x-lg-100 wow pulse">
                        <h2 class="text-white mb-4">
                            Rekrutacja na rok 2018/2019
                        </h2>
                        <p>
                            Zajęcia odbywają się w dobrze wyposażonych, nowoczesnych pracowniach przedmiotowych i salach
                            lekcyjnych. Uczniowie samodzielnie wykonują doświadczenia i symulacje, mają możliwość
                            wykorzystywania tablic interaktywnych (multimedialnych)!
                        </p>
                        <a href="{{url('/rekrutacja')}}" class="btn btn-white mt-4">Zobacz więcej</a>
                    </div>
                </div>
                <div class="col-md-6 bg-cover bg-center text-white padding-y-80"
                     style="background:linear-gradient(rgba(9,151,244,0.85),rgba(80,154,244,0.85)),url(assets/img/960x560/3.jpg) no-repeat; !important;">
                    <div class="padding-x-lg-100 wow pulse">
                        <h2 class="text-white mb-4">
                            Matury 2018
                        </h2>
                        <p>
                            Przedstawiamy porównanie wyników egzaminów maturalnych w naszej szkole ze średnią egzaminów
                            maturalnych dla liceów w Polsce. Zobacz jak wypadła nasza szkoła!
                        </p>
                        <a href="{{url('/matura2018')}}" class="btn btn-white mt-4"
                           style="margin-top: 55px !important;">Zobacz więcej</a>
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
                        Najnowsze aktualności
                    </h2>
                    <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                </div>
            </div> <!-- END row-->

            <div class="row mt-4">
                <?php $count = 0; ?>

                    @foreach($aktualnosciDB as $aktualnosc)

                    <?php if($count == 3) break;?>
                    <?php $count++; ?>

                    <div class="col-lg-4 col-md-6 marginTop-30 wow slideInUp" data-wow-delay=".1s">
                        <div class="card padding-30 shadow-v1">
                            <p class="text-primary">
                                @php
                                    echo Carbon\Carbon::parse($aktualnosc->created_at)->format('d F, Y');
                                @endphp
                            </p>
                            <a href="#" class="h4 mb-3">
                                {{$aktualnosc->title}}
                            </a>
                            <p>
                                {{$aktualnosc->description}}
                            </p>
                            <a href="#" class="btn btn-outline-primary align-self-start mt-2">
                                Zobacz więcej
                            </a>
                        </div>
                    </div>
                @endforeach

            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>





    @include('components.schoolgallery')



    <section class="paddingTop-100 paddingBottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="display-lg-4 font-weight-bold text-primary wow fadeIn" data-wow-delay=".1s"
                        style="color: #f3ae4d!important;">
                        Józef Chełmoński
                    </h2>
                    <p class="lead wow fadeIn" data-wow-delay=".1s" style="color: #444444">
                        Polski malarz, reprezentant realizmu. Jego malarstwo charakteryzowało się wielką ekspresją i
                        temperamentem lecz odwzorowywał naturę taka jaka jest w rzecziwstości : surową, nie
                        wyidealizowaną. Jako jeden z nielicznych potrafił ukazać na swych obrazach chrapanie koni, ich
                        rozpędzone sylwetki, mokre od wilgoci drzewa tak realistycznie jak byłyby one tam naprawdę.
                    </p>
                    <a href="{{url('/patron')}}" class="btn btn-primary btn-lg mt-3 wow fadeIn btnpatron"
                       data-wow-delay=".1s">Zobacz więcej</a>
                </div>
                <div class="col-lg-3 wow fadeIn chelmonskidiv" data-wow-delay=".1s">
                    <img class="chelmonski" src="assets/img/school/chelmonski.jpg">
                </div>
            </div>
        </div>
    </section>
@endsection