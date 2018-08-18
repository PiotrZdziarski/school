@extends('layouts.app')
@section('title')
    Biblioteka - regulamin
@endsection
@section('content')

    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Regulamin
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span></li>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a></li>
                <li class="breadcrumb-item">Regulamin</li>
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
                                            <h2>Biblioteka - Regulamin</h2>
                                        </div>
                                        <div class="col-lg-12 font-size-16 paddingTop-20 padding-25 padding20lowwidth">
                                            <ol>
                                                <li>Z biblioteki mogą korzystać wszyscy uczniowie i pracownicy szkoły.</li>
                                                <li>W bibliotece obowiązuje cisza, zakaz wnoszenia plecaków i zakaz
                                                    spożywania posiłków.</li>
                                                <li>Czytelnik zobowiązany jest do poszanowania książek, będących
                                                    własnością szkoły. Powinien zwrócić uwagę na stan książki przed jej
                                                    wypożyczeniem a zauważone uszkodzenia bezzwłocznie zgłosić
                                                    bibliotekarzowi.</li>
                                                <li>Każdy czytelnik może wypożyczyć jednorazowo trzy książki, w tym dwie
                                                    lektury.</li>
                                                <li>Książki wypożycza się na okres trzech tygodni. Bibliotekarz może
                                                    przedłużyć termin zwrotu książek w zależności od zapotrzebowania na
                                                    nie ze strony czytelników.</li>
                                                <li>Książki i materiały potrzebne uczniom do konkursów i olimpiad
                                                    przedmiotowych można wypożyczać na warunkach ustalonych
                                                    indywidualnie z bibliotekarzem.</li>
                                                <li>Czasopisma i materiały tematyczne wypożycza się na okres jednego
                                                    tygodnia.</li>
                                                <li>Za przetrzymywanie książek, czasopism i materiałów ponad ustalony
                                                    termin, a tym samym pozbawienie innych czytelników dostępu do nich,
                                                    bibliotekarz wyznacza karę.</li>
                                                <li>Okres ferii nie będzie wliczony pod warunkiem, że od wypożyczenia
                                                    książki do czasu rozpoczęcia ferii nie minęły trzy tygodnie.</li>
                                                <li>W razie zgubienia czy zniszczenia książki czytelnik musi odkupić
                                                    taką samą książkę, w szczególnych przypadkach inną, ale po
                                                    uzgodnieniu z bibliotekarzem. Ten sam obowiązek dotyczy zagubienia
                                                    czasopisma.</li>
                                                <li>Z księgozbioru podręcznego czytelnicy korzystają na miejscu i za
                                                    pośrednictwem bibliotekarza.</li>
                                                <li>W szczególnych przypadkach można wypożyczyć książkę po lekcjach, na
                                                    jeden dzień lub na niedzielę. Niezwrócenie jej w terminie pociągnie
                                                    za sobą wyznaczenie kary.</li>
                                                <li>Uczniom, którzy nie rozliczą się z biblioteką do końca roku
                                                    szkolnego zostanie naliczona kara również za okres wakacji.</li>
                                                <li>Czytelnicy, którzy nie przestrzegają regulaminu mogą być czasowo, a
                                                    w szczególnych przypadkach na stałe, pozbawieni prawa do korzystania
                                                    z biblioteki szkolnej.</li>
                                                <li>Wszyscy czytelnicy opuszczający szkołę mają obowiązek
                                                    podstemplowania obiegówki w bibliotece.</li>
                                            </ol>
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