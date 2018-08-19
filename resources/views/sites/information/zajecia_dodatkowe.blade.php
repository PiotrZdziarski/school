@extends('layouts.app')
@section('title')
    Zajęcia dodatkowe
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Zajęcia dodatkowe
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item">Zajęcia dodatkowe</li>
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
                                            <h2>Zajęcia dodatkowe</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto text-center paddingBottom-40 padding20lowwidth padding-30 paddingTop-5" style="margin-top: -5px;">
                                            <div class="col-lg-11 mx-auto" style="display: flex; justify-content: center; align-items: center; margin-bottom: 40px; margin-top: 20px;">
                                                <a href="{{url('assets/pdf/zajecia_dodatkowe.pdf')}}" class="statutbtn">Harmonogram zajęć dodatkowych</a>
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