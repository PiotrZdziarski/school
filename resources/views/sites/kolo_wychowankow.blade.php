@extends('layouts.app')
@section('title')
    Koło Wychowanków
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Koło Wychowanków
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">Koło Wychowanków</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-40 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                    <div class="card shadow-v1">
                        <div class="card-body" style="padding: 0;">
                            <section class="border-bottom border-light" id="content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 mb-1 text-center paddingTop-15 paddingBottom-20">
                                            <h2>Koło Wychowanków</h2>
                                        </div>
                                        <div class="col-lg-12 padding-25">
                                            <p>
                                            Szkoła to nie tylko uczniowie, nauczyciele i personel administracyjno – obsługowy, ale również rodzice i wychowankowie, z którymi mamy kontakt niemal codzienny. Bez rodziców niewiele można byłoby zrobić. Oni to wielokrotnie, społecznie pomagają szkole.
                                            </p><br>
                                            <p>
                                                Szkole pomagają społecznie również wychowankowie zrzeszeni w Kole Wychowanków i Wychowanek Szkół Średnich Ogólnokształcących – stowarzyszeniu, które działa od 1914 roku. Dzięki Nim wydana została w 2000 roku Monografia Szkoły i Koła. Corocznie, w grudniu wydawany jest Biuletyn zawierający informacje o szkole i działalności Koła za poprzedni rok. Ukazały się 24 tego typu pozycje. Wydawnictwo to nieodpłatnie wysyłane jest do wszystkich członków Koła.
                                            </p>
                                            <div class="col-lg-12">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <li><a class="colordodgerblue" href="{{url('assets/rar/2005.rar')}}">Biuletyn Informacyjny XXVI (2005)</a></li>
                                                    <li><a class="colordodgerblue" href="{{url('assets/rar/2004.rar')}}">Biuletyn Informacyjny XXV (2004)</a></li>
                                                    <li><a class="colordodgerblue" href="{{url('assets/rar/2003.rar')}}">Biuletyn Informacyjny XXIV (2003)</a></li>
                                                    <li><a class="colordodgerblue" href="{{url('assets/rar/2002.rar')}}">Biuletyn Informacyjny XXIII (2002)</a></li>
                                                    <li><a class="colordodgerblue" href="{{url('assets/rar/2001.rar')}}">Biuletyn Informacyjny XXII (2001)</a></li>
                                                </ul>
                                            </div>
                                            <p><br>
                                                Co roku, na zakończenie nauki w klasie trzeciej Rada Pedagogiczna przyznaje medal Gloria
                                                Diligentiae et Labori dla Prymusa Szkoły. Przyznawane są też nagrody
                                                ufundowane Przez Koło Wychowanków:
                                            </p>
                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <li>im. prof. Heleny Jastrzębskiej dla najlepszego humanisty</li>
                                                    <li>m. dr. Jana Wegnera dla najlepszego historyka</li>
                                                    <li>im. prof. Jana Zbudniewka dla absolwenta osiągającego najlepsze wyniki z przedmiotów matematyczno – fizycznych</li>
                                                    <li>im. prof. Eugeniusza Wachowskiego dla najlepszego sportowca szkoły</li>
                                                    <li>im. Józefa Chełmońskiego dla absolwenta osiągającego sukcesy w przedmiotach artystycznych</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> <!-- END row-->
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