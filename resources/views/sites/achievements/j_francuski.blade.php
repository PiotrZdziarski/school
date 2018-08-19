@extends('layouts.app')
@section('title')
    Osiągnięcia z języka francuskiego
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Osiągnięcia z języka francuskiego
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Osiągnięcia</span>
                <li class="breadcrumb-item">Język francuski</li>
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
                                            <h2>Osiągniecia w olimpiadach i konkursach z języka francuskiego</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2015/2016</h4>


                                            <h6 class="paddingBottom-10">14 Łódzki Festiwal Piosenki Francuskiej</h6>
                                            <p>Marcelina Olak – śpiew</p>
                                            <p>Anna Markowska i Monika Chudzyńska – akompaniament – II miejsce</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2014/2015</h4>


                                            <h6 class="paddingBottom-10">XIII Przegląd Piosenki Francuskiej</h6>
                                            <p>W koncercie finałowym udział wzięły:</p>
                                            <p>Katarzyna Kubica – 3e, Aleksandra Gala – 3c,</p>
                                            <p>Małgorzata Karczewska – 1d, Katarzyna Jagoda – 1b,</p>
                                            <p>Paulina Stasiak – 1a</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2013/2014</h4>


                                            <h6 class="paddingBottom-10">XII Przegląd Piosenki Francuskiej</h6>
                                            <p>Aleksandra Gala – 2c – finalistka</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">Konkurs Fotograficzny „Francuski
                                                Łowicz”</h6>
                                            <p>Aleksandra Rożniata – 1b – III miejsce</p>
                                            <p>Łucja Krystecka – 1d – wyróżnienie</p>
                                            <p>Jagoda Sołtyszewska – 1e – wyróżnienie</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2012/2013</h4>


                                            <h6 class="paddingBottom-10">XI Przegląd Piosenki Francuskojęzycznej</h6>
                                            <p>Agata Bieniek – 3c – laureatka I miejsce</p>


                                            <h6 class="paddingBottom-10 paddingTop-40">Konkurs Wiedzy o Francji</h6>
                                            <p>Julia Stępniewska – 1e – I miejsce</p>
                                            <p>Piotr Pietrzak – 2b – wyróżnienie</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2011/2012</h4>


                                            <h6 class="paddingBottom-10">XXXV Olimpiada Języka Francuskiego</h6>
                                            <p>Łukasz Łaziński – 3c – finalista etapu okręgowego</p>


                                            <h4 class="paddingTop-40 text-center paddingBottom-30">Rok szkolny
                                                2009/2010</h4>


                                            <h6 class="paddingBottom-10">XXXIII Olimpiada Języka Francuskiego</h6>
                                            <p>Grzegorz Waligórski – 3e – udział w etapie
                                                okręgowym</p>


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