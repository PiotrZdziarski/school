@extends('layouts.app')
@section('title')
    Święta i dni wolne
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Święta i dni wolne
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item">Święta i dni wolne</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-25 paddingBottom-20">
                                            <h2>Święta i dni wolne 2017/2018</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5">

                                            <p><h6 class="float-left paddingRight-10">1 listopada 2017, środa</h6>	Wszystkich Świętych</p>
                                            <p><h6 class="float-left paddingRight-10">23 grudnia 2017 – 31 grudnia 2017</h6> Zimowa przerwa świąteczna</p>
                                            <p><h6 class="float-left paddingRight-10">1 stycznia 2018, poniedziałek</h6>	Nowy Rok</p>
                                            <p><h6 class="float-left paddingRight-10">29 stycznia 2018 – 9 lutego 2018</h6>	Ferie zimowe 2018</p>
                                            <p><h6 class="float-left paddingRight-10">29 marca 2018 – 3 kwietnia 2018</h6>	Wiosenna przerwa świąteczna</p>
                                            <p><h6 class="float-left paddingRight-10">1 maja 2018, wtorek</h6>	Święto Pracy</p>
                                            <p><h6 class="float-left paddingRight-10">2 maja 2018, środa</h6>	Dzień wolny od zajęć dydaktycznych</p>
                                            <p><h6 class="float-left paddingRight-10">3 maja 2018, czwartek</h6>	Święto Konstytucji 3 Maja</p>
                                            <p><h6 class="float-left paddingRight-10">4, 7, 8 maja 2018</h6>	Dzień wolny od zajęć dydaktycznych</p>
                                            <p><h6 class="float-left paddingRight-10">31 maja 2018, czwartek</h6>	Boże Ciało</p>
                                            <p><h6 class="float-left paddingRight-10">23 czerwca 2018 – 31 sierpnia 2018</h6>	 Ferie letnie</p>
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