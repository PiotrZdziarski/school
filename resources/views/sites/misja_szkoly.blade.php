@extends('layouts.app')
@section('title')
    Misja szkoły
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Misja szkoły
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">Misja szkoły</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-40 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                        <div class="card-body" style="padding: 0;">
                            <section class="border-bottom border-light" id="content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 mb-1 text-center paddingTop-15">
                                            <h2>Misja szkoły</h2>
                                        </div>
                                        <div class="col-lg-12 padding20lowwidth padding-30 mx-auto paddingTop-10 paddingBottom-40">I Liceum
                                            Ogólnokształcące im. Józefa Chełmońskiego w Łowiczu jest Szkołą, która w
                                            pełni wykorzystuje potencjał intelektualny uczniów w procesie edukacyjnym.
                                            Przygotowuje uczniów do kontynuowania nauki na najlepszych uczelniach w
                                            Polsce i za granicą oraz kształci przyszłe elity. Jednocześnie dba o rozwój
                                            kompetencji społecznych, etycznych i moralnych młodego człowieka. Wspiera
                                            rodziców w wychowaniu człowieka, który jest wrażliwy na uczucia i potrzeby
                                            drugiej osoby; jest odpowiedzialny za siebie i innych; umie radzić sobie z
                                            trudnościami życia codziennego i sytuacjami stresowymi; nie ucieka przed
                                            trudnościami, ale przezwycięża je; dostosowuje się do zmieniającej
                                            rzeczywistości; umie pracować w zespole; dba o swoją indywidualność,
                                            odrębność i niezależność, a jednocześnie ma poczucie przynależności do
                                            zbiorowości jaką jest jego rodzina, środowisko lokalne, Ojczyzna.
                                        </div>
                                    </div> <!-- END row-->
                                </div> <!-- END container-->
                            </section> <!-- END section-->
                            <!-- END tab-content-->
                        </div>
                </div>

                @include('components.aktualnosci')
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>

@endsection