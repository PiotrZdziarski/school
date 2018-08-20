@extends('layouts.app')
@section('title')
    Rekrutacja 1B
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Rekrutacja 1B
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item">Rekrutacja 1B</li>
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
                                            <h2>Rekrutacja 1B</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">
                                            <h5 class="paddingTop-10 paddingBottom-20">Rekrutacja do klas pierwszych</h5>

                                            <div class="hover:parent no4-3" style="box-shadow: 0 10px 20px #b9bbbe;">
                                                <img class="w-100 transition-0_3 hover:zoomin" src="{{url('assets/img/rekrutacja/rekrutacja1B.png')}}" alt="Rekrutacja 1B">
                                                <div class="card-img-overlay  transition-0_3 flex-center bg-black-0_7 hover:show">
                                                    <a href="{{url('assets/img/rekrutacja/rekrutacja1B.png')}}" data-fancybox="gallery1" class="iconbox bg-white ti-zoom-in text-primary"></a>
                                                </div>
                                            </div>

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