@extends('layouts.app')
@section('title')
    Kontakt
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Kontakt
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item">Kontakt</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-40 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                    <div class="card shadow-v1">
                        <div class="card-body padding20lowwidth" style="box-shadow: 0 10px 20px #eaeaea!important;">
                            <div class="col-12 mb-1 text-center">
                                <h2>Kontakt</h2>
                            </div>

                            <h4 class="paddingTop-20">Adres</h4>
                            I Liceum Ogólnokształcące im. Józefa Chełmońskiego w Łowiczu
                            <br>ul. Bonifraterska 3
                            <Br>99-400 Łowicz

                            <h4 class="paddingTop-20">Telefon</h4>
                            (46) 837 42 00

                            <h4 class="paddingTop-20">Fax</h4>
                            (46) 837 42 00

                            <h4 class="paddingTop-20">E-Mail</h4>
                            lochelmon1@op.pl

                            <!-- END tab-content-->
                        </div>
                    </div>
                </div>

                @include('components.aktualnosci')
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>

@endsection