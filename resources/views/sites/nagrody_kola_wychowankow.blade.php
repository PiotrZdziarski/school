@extends('layouts.app')
@section('title')
    Nagrody Koła Wychowanków
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat;background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Nagrody Koła Wychowanków
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">Nagrody Koła Wychowanków</li>
            </ol>
        </div>
    </div>

    <section class="bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                    <div class="card shadow-v1">
                        <div class="card-body padding20lowwidth">
                            <section id="content">
                                <div class="col-lg-12 my-1">
                                    <h3 class="mb-2">Nagrody Koła Wychowanków</h3>
                                    <ul class="fa-ul paddingTop-5">
                                        <li><a href="{{url('/gloria_diligentiae_et_labori')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Gloria Diligentiae et Labori</a></li>
                                        <li><a href="{{url('/nagroda_prof_heleny_jastrzebskiej')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda im. prof. Heleny Jastrzębskiej (dla najlepszego polonisty)</a></li>
                                        <li><a href="{{url('/nagroda_dr_jana_wegnera')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda im. dr. Jana Wegnera (dla najlepszego historyka)</a></li>
                                        <li><a href="{{url('/nagroda_prof_jana_zbudniewka')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda im. prof. Jana Zbudniewka (dla najlepszego chemika, fizyka, oraz matematyka)</a></li>
                                        <li><a href="{{url('/nagroda_prof_eugeniusza_wachowskiego')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda im. prof. Eugeniusza Wachowskiego (dla najlepszego sportowca)</a></li>
                                        <li><a href="{{url('/nagroda_jozefa_chelmonskiego')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda im. Józefa Chełmońskiego (dla najlepszego z przedmiotów artystycznych)</a></li>
                                        <li><a href="{{url('/nagroda_boleslawy_lament')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda im. bł. Bolesławy Lament (dla najlepszego teologa)</a></li>
                                    </ul>
                                </div>

                            </section>


                            <!-- END tab-content-->
                        </div>
                    </div>
                </div>

                @include('components.aktualnosci')
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>

@endsection