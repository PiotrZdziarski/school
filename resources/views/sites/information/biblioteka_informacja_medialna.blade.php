@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Regulamin centrum informacji medialnej
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a>
                <li class="breadcrumb-item">Regulamin centrum informacji medialnej</li>
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
                                            <h2>Biblioteka - Regulamin centrum informacji medialnej</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5">
                                            <h6>w I Liceum Ogólnokształcącym im. Józefa Chełmońskiego w Łowiczu</h6>
                                            <div class="col-lg-12 paddingBottom-40 paddingTop-5">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet lipadding">
                                                    <li class="paddingTop-10">Stanowiska komputerowe służą wyłącznie do celów edukacyjnych tzn.</li>
                                                    <li class="paddingTop-10">do poszukiwań informacji w dokumentach elektronicznych, w Internecie,</li>
                                                    <li class="paddingTop-10">do wykonywania własnych prac dla potrzeb naukowych, do tworzenia dokumentów na rzecz organizacji działających na terenie szkoły.</li>
                                                    <li class="paddingTop-10">Ze stanowisk komputerowych mogą korzystać nieodpłatnie wszyscy uczniowie, rodzice uczniów, nauczyciele i inni pracownicy szkoły  w godzinach pracy biblioteki.</li>
                                                    <li class="paddingTop-10">Internet jest poszerzeniem i uzupełnieniem oferty biblioteki szkolnej, dlatego też nie wolno korzystać ze stron poświęconych agresji, przemocy, pornografii itp. pod groźbą całkowitego zakazu korzystania z komputera.</li>
                                                    <li class="paddingTop-10">Zabrania się wkładania własnych dyskietek i płyt do stacji dysków bez zgody nauczyciela-bibliotekarza.</li>
                                                    <li class="paddingTop-10">Zabronione jest wykonywanie czynności naruszających prawa autorskie twórców i dystrybutorów oprogramowania.</li>
                                                    <li class="paddingTop-10">Przy stanowisku komputerowym nie wolno spożywać posiłków i pić napojów.</li>
                                                    <li class="paddingTop-10">Rozpoczęcie i zakończenie pracy należy zgłaszać nauczycielowi-bibliotekarzowi.</li>
                                                    <li class="paddingTop-10">Wszystkie nieprawidłowości w pracy komputera należy natychmiast zgłosić nauczycielowi-bibliotekarzowi.</li>
                                                    <li class="paddingTop-10">Za mechaniczne uszkodzenia sprzętu komputerowego i oprogramowania odpowiada finansowo użytkownik. Jeśli uczeń jest niepełnoletni, wówczas odpowiedzialność ponoszą rodzice.</li>
                                                    <li class="paddingTop-10">Przy jednym stanowisku komputerowym mogą przebywać dwie osoby pracujące w ciszy i niezakłócające pracy biblioteki.</li>
                                                    <li class="paddingTop-10">Jeżeli użytkownik opuści stanowisko komputerowe na dłużej niż 10 minut bez zgłoszenia tego faktu nauczycielowi-bibliotekarzowi, zostanie ono wówczas udostępnione innemu uczniowi bez zabezpieczenia wcześniejszych danych.</li>
                                                    <li class="paddingTop-10">Istnieje możliwość rezerwowania stanowiska komputerowego na określony dzień i godzinę.</li>
                                                    <li class="paddingTop-10">Z komputera można korzystać do jednej godziny lekcyjnej, w szczególnie uzasadnionych sytuacjach nauczyciel-bibliotekarz może wydłużyć ten czas lub wprowadzić limit.</li>
                                                    <li class="paddingTop-10">Korzystanie z drukarki jest możliwe po uzyskaniu zgody przez nauczyciela bibliotekarza.</li>
                                                    <li class="paddingTop-10">W przypadku stwierdzenia naruszenia powyższych punktów regulaminu nauczyciel-bibliotekarz ma prawo przerwać pracę użytkownika i nałożyć karę w postaci czasowego lub całkowitego zakazu korzystania ze stanowiska komputerowego.</li>
                                                    <li class="paddingTop-10">W pracowni obowiązują przepisy BHP dotyczące pracy z urządzeniami elektrycznymi.</li>
                                                </ul>

                                                <h6>Niniejszy regulamin zatwierdzono uchwałą Rady Pedagogicznej z dnia 18 grudnia 2009 <roku class=""></roku></h6>
                                            </div>
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