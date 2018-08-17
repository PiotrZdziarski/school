@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Sławni absolwenci
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item"><a href="{{url('/kolo_wychowankow')}}">Koło wychowanków</a></li>
                <li class="breadcrumb-item">Sławni absolwenci</li>
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
                                            <h2>Sławni absolwenci</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <i>„Ta łowicka Alma Mater wychowała wielu wspaniałych ludzi, wśród nich licznych kapłanów, biskupów, mądrych i dobrych wychowanków i nauczycieli.”</i>
                                            <p>
                                                <div style="position: absolute; right: 0;">
                                                    ks. bp. Józef Zawitkowski
                                                </div>
                                            </p>

                                            <h6 class="paddingTop-40">Władysław Miziołek</h6>
                                            <p>
                                                Urodził się 16 XII 1914 r. w Kompinie. Ukończył tamtejszą szkołę podstawową. Był uczniem Gimnazjum męskiego im. Ks. Józefa Poniatowskiego w latach 1928-1934. W 1940 roku ukończył Seminarium Duchowne w Warszawie i otrzymał święcenia kapłańskie. Sakrę biskupią otrzymał z rąk prymasa S. Wyszyńskiego w 1969 roku. Wiceprzewodniczący Komisji Episkopatu do Spraw Ekumenizmu. Członek Watykańskiego Sekretariatu do spraw Jedności Chrześcijan. Przewodniczący Prymasowskiego Komitetu Pomocy Osobom Pozbawionym Wolności i Ich Rodzinom. Zmarł 12 V 2000 r., pochowany na Powązkach.
                                            </p>

                                            <h6 class="paddingTop-40">Stanisław Noakowski</h6>
                                            <p>
                                                Żył w latach 1867 – 1928, uczeń Szkoły Realnej. Architekt, malarz, rysownik. W latach 1899-1918 wykładowca w Szkole Stroganowskiej w Moskwie. Od 1906 r. profesor w moskiewskiej Szkole Sztuk Pięknych, a od 1923 r. profesor na Wydziale Architektury Politechniki Warszawskiej. Autor fantazji na temat architektury polskiej, rosyjskiej, zachodnioeuropejskiej min.: „Architektura polska. Szkice kompozycyjne”, „Zamki i pałace polskie”.
                                            </p>

                                            <h6 class="paddingTop-40">Bolesława Lament</h6>
                                            <p>
                                                Urodziła się w Łowiczu 3 VII 1862 roku. Ukończyła progimnazjum żeńskie w Łowiczu, a następnie szkołę krawiectwa w Warszawie. Wróciła do rodzinnego miasta i założyła zakład krawiecki, który prowadziła 4 lata. W wieku 22 lat wstąpiła do klasztoru Zgromadzenia Maryi w Warszawie. W 1903 roku wyjechała do Mohylewa i tam pracowała wśród dzieci i młodzieży – uczyła krawiectwa, religii, języka polskiego i historii ojczystej. W 1905 roku wspólnie z dwiema siostrami utworzyła Zgromadzeni Misjonarek św. Rodziny. Głównym zadaniem zakonu była praca nad jednością chrześcijan mieszkających na Kresach. Zmarła 29 I 1946 roku, pochowana w Ratowie w diecezji płockiej. 5 VI 1991 r. została beatyfikowana przez papieża Jana Pawła II podczas mszy odprawianej w Białymstoku.
                                            </p>

                                            <h6 class="paddingTop-40">Ludwik Benoit</h6>
                                            <p>
                                                Żył w latach 1920 – 1992. Ukończył Państwowe Gimnazjum im. Ks. Józefa Poniatowskiego w 1938 roku. Aktor filmowy i teatralny. Występował na deskach teatrów Gdyni , Poznania, Łodzi, Wrocławia, Szczecina. Grał m. in. w filmach „Ewa chce spać”, „Pan Wołodyjowski”, „Mleczna droga”.
                                            </p>

                                            <h6 class="paddingTop-40">Stefan Bronisław Starzyński</h6>
                                            <p>
                                                Urodzony 19 VIII 1893 r. w Warszawie, skąd jego rodzina sprowadziła się do Łowicza i zamieszkała przy ul. Zduńskiej 34. Był uczniem Szkoły Realnej w latach 1902-1905. Razem z braćmi brał udział w strajku szkolnym w 1905 roku. Wydalony 5 III 1905, uczył się w tajnych kompletach i w Szkole Polskiej w 1906 r. przekształconej w Szkołę Handlową. W 1907 wraz z braćmi opuścił Łowicz i kontynuował naukę w warszawskim gimnazjum im. E. Konopczyńskiego. Członek Związku Strzeleckiego od 1912 roku.

                                                W czasie I wojny światowej wstąpił do Legionów Polskich. Działał w POW. W l. 1918 – 1919 oficer Sztabu Generalnego. Działacz polityczny, gospodarczy, publicysta, urzędnik Ministerstwa Skarbu. W l. 1929-1932 wiceminister skarbu. Wykładowca w Wyższej Szkole Handlowej. Od 1932 komisaryczny prezydent Warszawy. Komisarz cywilny przy dowództwie Armii Warszawa we wrześniu 1939 r. Aresztowany przez Niemców w X 1939, okoliczności i data śmierci nieznane.
                                            </p>
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