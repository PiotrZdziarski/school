@extends('layouts.app')
@section('title')
    Inauguracja Klubu Historycznego AK
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Inauguracja Klubu Historycznego AK
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item"><a href="{{url('/klub_historyczny_ak')}}">Klub Historyczny AK</a></li>
                <li class="breadcrumb-item">Inauguracja Klubu Historycznego AK</li>
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
                                            <h2>Inauguracja Klubu Historycznego AK</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">
                                            <h5 class="paddingTop-30 paddingBottom-10">Inauguracja klubu</h5>

                                            <p>23 marca 2010 r. w I Liceum Ogólnokształcącym im. J. Chełmońskiego
                                            w Łowiczu odbyło się spotkanie poświęcone inauguracji Klubu Historycznego
                                            im. Armii Krajowej przy I LO oraz upamiętnienia rocznicy Zbrodni Katyńskiej. Po otwarciu uroczystości przez Dyrektora szkoły panią Elżbietę Skoneczną
                                            i powitaniu zaproszonych gości wystąpili uczniowie klasy 1e pod kierunkiem wychowawcy pani Joanny Skonecznej – Sałudy z montażem słowno muzycznym pt. „Katyń 1940. Pamiętamy”. Przedstawiciele klubu historycznego złożyli kwiaty pod dębami katyńskimi znajdującymi się na terenie szkoły oraz pod tablicami upamiętniającymi zbrodnię katyńską w Kościele o. Pijarów
                                                i żołnierzy Armii Krajowej w Katedrze łowickiej pod wezwaniem Najświętszej Marii Panny.</p>
                                            <p>Uroczystość uświetnili swoimi wystąpieniami pani prof. dr hab. Maria Blomberg z Instytutu Archeologii UŁ, która omówiła dzisiejszy stan badań nad zbrodnią katyńską, Burmistrz Miasta Łowicza pan Krzysztof Jan Kaliński, wcześniej nauczyciel tej szkoły, który krótko przybliżył życie mieszkańców Łowicza w pierwszych dniach II wojny światowej oraz Prezes Światowego Związku Żołnierzy AK obwodu Łowicz pan Tadeusz Modrak, dzięki któremu uczniowie mogli zapoznać się ze strukturami i działalnością AK w Łowiczu
                                            i okolicach. Następnie wiceprezes Okręgu Łódzkiego Światowego Związku Żołnierzy AK pan Henryk Wojda odczytał list kpt. Zbysława Raczkiewicza Prezesa ŚZŻAK, który dzielił się swoimi spostrzeżeniami na temat zasadności powstania takiego klubu historycznego, natomiast pan Marek Drużka Dyrektor Oddziału IPN, przybliżył działalność podobnych klubów na terenie woj. łódzkiego.</p>
                                            <p>  Na zakończenie spotkania pani prof. Maria Blomberg oraz pan Tadeusz Modrak wręczyli członkom Klubu Historycznego im. AK pamiątkowe guziki katyńskie, repliki guzików z oficerskich mundurów zamordowanych Polaków. Guziki to znaki pamięci, które – jak pisał poeta – „są aby świadczyć”.</p>


                                            <h5 class="paddingTop-40">Zbigniew Herbert
                                                „Guziki”</h5>
                                            <h6>[ Pamięci kapitana
                                                Edwarda Herberta ]</h6>

                                            <i><br>Tylko guziki nieugięte
                                            <br>przetrwały śmierć świadkowie zbrodni
                                            <br>z głębin wychodzą na powierzchnię
                                            <br>jedyny pomnik na ich grobie
                                            <br>są aby świadczyć Bóg policzy
                                            <br>i ulituje się nad nimi
                                            <br>lecz jak zmartwychwstać mają ciałem
                                            <br>kiedy są lepką cząstką ziemi
                                            <br>przeleciał ptak przepływa obłok
                                            <br>upada liść kiełkuje ślaz
                                            <br>i cisza jest na wysokościach
                                            <br>i dymi mgłą katyński las
                                            <br>tylko guziki nieugięte
                                            <br>potężny głos zamilkłych chórów
                                            <br>tylko guziki nieugięte
                                            <br>guziki z płaszczy i mundurów</i>
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