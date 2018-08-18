@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Bookcrossing
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a>
                <li class="breadcrumb-item">Bookcrossing</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-15 paddingBottom-20">
                                            <h2>Biblioteka - Bookcrossing</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5">
                                            <p>Bookcrossing polega na celowym pozostawieniu książki na tzw. „półkach”,
                                                aby ktoś inny mógł ją przeczytać i przekazać dalej. Nazywa się to
                                                „uwalnianiem książek”.</p>

                                            <p>Idea narodziła się w roku 2001 w Stanach Zjednoczonych i swoim zasięgiem
                                                objęła cały świat. W tej chwili na świecie krąży około 650 tysięcy
                                                uwolnionych książek. Do całego ruchu należy ponad 150 tysięcy
                                                czytelników na całym świecie. Cele akcji są proste: chodzi o
                                                podniesienie poziomu czytelnictwa, o przekonanie innych, że dzielenie
                                                się jest lepsze od posiadania, o znalezienie przyjaciół i znajomych
                                                myślących podobnie.
                                                Biblioteka I Liceum Ogólnokształcącego w Łowiczu od lutego tego roku
                                                daje swoim użytkownikom możliwość takiej wymiany. Mamy wyznaczone
                                                specjalne miejsce, w którym można przeczytaną książkę wymienić na inną
                                                (jedna za jedną). Jeżeli przeczytałeś ciekawą książkę i nie jest ci już
                                                potrzebna – daj szansę przeczytać ją komuś innemu. Przynieś ją do nas i
                                                w zamian weź inną.</p>

                                            <p>Zapraszamy.</p>
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