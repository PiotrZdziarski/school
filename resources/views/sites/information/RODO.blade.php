@extends('layouts.app')
@section('title')
    RODO
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                RODO
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item">RODO</li>
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
                                            <h2>RODO</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5" style="margin-top: -5px;">
                                            <h6 class="text-center paddingBottom-30">RODO (GDPR) – Rozporządzenie o Ochronie Danych Osobowych.</h6>
                                            <p><a href="{{url('assets/pdf/ILO_informacja.pdf')}}" class="colordodgerblue">ILO INFORMACJA</a></p>
                                            <p><a href="{{url('assets/pdf/rozprzadzenie_parlamentu_europejskiego.pdf')}}" class="colordodgerblue">Rozporządzenie Parlamentu Europejskiego i Rady UE z dnia 27 kwietnia 2016r.</a></p>
                                            <p><a href="{{url('assets/pdf/wytyczne_dotyczace_ochrony_danych.pdf')}}" class="colordodgerblue">Wytyczne dotyczące inspektorów ochrony danych</a></p>
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