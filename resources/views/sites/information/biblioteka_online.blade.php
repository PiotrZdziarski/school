@extends('layouts.app')
@section('title')
    Biblioteki online
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Online
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a>
                <li class="breadcrumb-item">Online</li>
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
                                            <h2>Biblioteka - Biblioteki Online</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto">
                                            <div class="col-lg-12 paddingBottom-40 paddingTop-5">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet lipadding">
                                                    <li><a class="colordodgerblue" href="https://europeana.eu">europeana.eu</a></li>
                                                    <li><a class="colordodgerblue" href="http://www.theeuropeanlibrary.org">theeuropeanlibrary.org</a></li>
                                                    <li><a class="colordodgerblue" href="https://wdl.org">wdl.org</a></li>
                                                    <li><a class="colordodgerblue" href="https://fbc.pionier.net.pl">fbc.pionier.net.pl</a></li>
                                                </ul>
                                            </div>
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