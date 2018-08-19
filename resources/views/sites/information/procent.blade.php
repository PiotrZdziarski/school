@extends('layouts.app')
@section('title')
    1%
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                1%
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item">1%</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-25 paddingBottom-20">
                                            <h2>1%</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5">

                                            Osoby, które chcą żeby pieniądze z ich 1% podatku wsparły działania naszej placówki muszą podczas wypełniania rocznego rozliczenia PIT:
                                            <div class="col-lg-12 paddingBottom-10 paddingTop-20" style="margin-top: -30px;">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>NUMER KRS – 0000270261</li>
                                                    <li>CEL SZCZEGÓŁOWY – LICEUM CHEŁMOŃSKIEGO W ŁOWICZU 6659</li>
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