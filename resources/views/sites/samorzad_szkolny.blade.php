@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Samorząd szkolny
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">Samorząd szkolny</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-15">
                                            <h2>Samorząd szkolny</h2>
                                        </div>
                                        <div class="col-lg-11 mx-auto paddingTop-10">
                                            <div class="table-responsive my-4 text-center">
                                                    <h6>Przewodniczący</h6>
                                                    Szymon Szaleniec 2D


                                                    <h6 class="paddingTop-20">Wiceprzewodniczący</h6>

                                                    Dominika Stanisławska 2A


                                                    <h6 class="paddingTop-20">Skarbnik i sekretarz</h6>

                                                    Karolina Pawlata 1D


                                                    <h6 class="paddingTop-20">Opiekunowie:</h6>

                                                    Ewelina Kapusta<br>
                                                    Monika Kleczyńska<br>
                                                    Aleksandra Wojciechowska-Gasik
                                                <div class="hover:parent no4-3" style="margin-top: 50px;">
                                                    <img class="w-100 transition-0_3 hover:zoomin" src="{{url('assets/img/school/samorzad.jpeg')}}" style="border-radius: 4px;" alt="samorzad">
                                                    <div class="card-img-overlay  transition-0_3 flex-center bg-black-0_7 hover:show">
                                                        <a href="{{url('assets/img/school/samorzad.jpeg')}}" data-fancybox="gallery1" class="iconbox bg-white ti-zoom-in text-primary"></a>
                                                    </div>
                                                </div>
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