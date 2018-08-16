@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat;background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Nagrody Rady Pedagogicznej
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">Nagrody Rady Pedagogicznej</li>
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
                                    <h3 class="mb-2">Nagrody Rady Pedagogicznej</h3>
                                    <ul class="fa-ul paddingTop-5">
                                        <li><a href="{{url('/najlepszy_filozof')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda dla najlepszego filozofa</a></li>
                                        <li><a href="{{url('/najlepszy_przyrodnik')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda dla najlepszego przyrodnika</a></li>
                                        <li><a href="{{url('/najlepszy_filolog')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda dla najlepszego filologa</a></li>
                                        <li><a href="{{url('/najlepszy_geograf')}}"><span class="fa-li"><i class="ti-angle-right  colordodgerblue"></i></span>Nagroda dla najlepszego geografa</a></li>
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