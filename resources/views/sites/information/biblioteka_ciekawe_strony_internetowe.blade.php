@extends('layouts.app')
@section('title')
    Ciekawe strony internetowe
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Ciekawe strony internetowe
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a>
                <li class="breadcrumb-item">Ciekawe strony internetowe</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-30 paddingBottom-20">
                                            <h2>Biblioteka - Ciekawe strony internetowe</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-40 paddingTop-5">
                                            <h6 class="paddingTop-10">Lektury online</h6>
                                            www.wolnelektury.pl
                                            <br>www.czytamysluchajac.pl
                                            <br>www.staropolska.pl
                                            <br>www.literat.ug.edu.pl

                                            <h6 class="paddingTop-40">Słowniki</h6>
                                            www.sjp.pwn.pl – SŁOWNIK JĘZYKA POLSKIEGO
                                            <Br>www.swo.pwn.pl – SŁOWNIK WYRAZÓW OBCYCH
                                            <Br>www.so.pwn.pl – SŁOWNIK ORTOGRAFICZNY
                                            <Br>www.synonimy.info – SŁOWNIK SYNONIMÓW
                                            <Br>www.edupedia.pl – SŁOWNIK FRAZEOLOGICZNY
                                            <Br>www.slovari.ru – SŁOWNIKI JĘZYKA ROSYJSKIEGO


                                            <h6 class="paddingTop-40">Film</h6>
                                            www.culture.pl
                                            <br>www.fototeka.fn.org.pl
                                            <br>www.filmpolski.pl


                                            <h6 class="paddingTop-40">Malarstwo</h6>
                                            www.artyzm.com/galeria.php


                                            <h6 class="paddingTop-40">Muzyka</h6>
                                            www.hebeduet.pl


                                            <h6 class="paddingTop-40">Czasopisma</h6>
                                            www.edupress.pl
                                            <Br>www.bptorun.edu.pl/index.php?art_id=44
                                            <Br>www.bg.ap.siedlce.pl/e_zrodla
                                            <Br>www.bg.us.edu.pl/bazy/czasopisma
                                            <Br>www.rzeczpospolita.pl
                                            <Br>www.polityka.onet.pl
                                            <Br>www.wprost.pl
                                            <Br>www.gazeta.pl
                                        </div> <!-- END row-->
                                    </div> <!-- END container-->
                                </div>
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