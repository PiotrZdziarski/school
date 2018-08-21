@extends('layouts.app')
@section('title')
    Klub Historyczny AK
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Klub Historyczny AK
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">Klub Historyczny AK</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-35">
                                            <h2>Klub Historyczny AK</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">
                                            <h5 class="paddingTop-20">Klub Historyczny im. Armii Krajowej</h5>

                                            przy I Liceum Ogólnokształcącym
                                            <br>im. Józefa Chełmońskiego w Łowiczu


                                            <h5 class="paddingTop-40">Skład Zarządu Klubu</h5>


                                            <h6 class="paddingTop-20">Prezes</h6>

                                            mgr Joanna Skoneczna-Sałuda
                                            <br>Nauczyciel historii w I Liceum Ogólnokształcącym im. Józefa
                                            Chełmońskiego w Łowiczu


                                            <h6 class="paddingTop-40">Wiceprezes</h6>

                                            mgr Paweł Salamondra
                                            <br>Nauczyciel historii w I Liceum Ogólnokształcącym im. Józefa
                                            Chełmońskiego w Łowiczu


                                            <h6 class="paddingTop-40">Członek Honorowy</h6>

                                            Tadeusz Modrak
                                            <br>Prezes Światowego Związku Żołnierzy Armii Krajowej Obwód Łowicz


                                            <h6 class="paddingTop-40">Sekretarz:</h6>
                                            Marlena Bejda (2010-2011)
                                            <br>Marlena Skrzypczak (2011-2012)


                                        </div> <!-- END row-->
                                    </div>
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