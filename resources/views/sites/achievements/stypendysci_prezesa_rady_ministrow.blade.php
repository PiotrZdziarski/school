@extends('layouts.app')
@section('title')
    Stypendyści Prezesa Rady Ministrów
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Stypendyści Prezesa Rady Ministrów
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item"><span class="opacity-08">Stypendyści</span>
                <li class="breadcrumb-item">Stypendyści Prezesa Rady Ministrów</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-25">
                                            <h2>Stypendyści Prezesa Rady Ministrów</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 text-center padding20lowwidth padding-30 paddingTop-5" style="margin-top: -5px;">
                                            <h5 class="text-center">Za najlepsze wyniki w nauce</h5>
                                            <h6 class="paddingTop-40">Rok szkolny 2017/2018</h6>
                                            NATALIA PRUCNAL – 3c – średnia 5,50
                                            <h6 class="paddingTop-40">Rok szkolny 2016/2017</h6>
                                            NATALIA SIEJKA – 3b – średnia 5,55
                                            <h6 class="paddingTop-40">Rok szkolny 2015/2016</h6>
                                            PIOTR KOWALSKI – 3a – średnia 5,40
                                            <h6 class="paddingTop-40">Rok szkolny 2014/2015</h6>
                                            PIOTR KOWALSKI – 2a – średnia 5,27
                                            <h6 class="paddingTop-40">Rok szkolny 2013/2014</h6>
                                            AGATA TRĘBSKA – 2c – średnia 5,25
                                            <h6 class="paddingTop-40">Rok szkolny 2012/2013</h6>
                                            JAROSŁAW GOLIS – 3c – średnia 5,20
                                            <h6 class="paddingTop-40">Rok szkolny 2011/2012</h6>
                                            PAULINA TALAROWSKA – 3c – średnia 5,00
                                            <h6 class="paddingTop-40">Rok szkolny 2010/2011</h6>
                                            DOMINIKA BRZEZIŃSKA – 3d – średnia 5,20
                                            <h6 class="paddingTop-40">Rok szkolny 2009/2010</h6>
                                            EDYTA WOLNY – 3e – średnia 5,47
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