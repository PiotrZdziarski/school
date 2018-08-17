@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - O miejscu
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span></li>
                <li class="breadcrumb-item"><span class="opacity-08">Biblioteka</span></li>
                <li class="breadcrumb-item">O miejscu</li>
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
                                            <h2>Biblioteka - O miejscu</h2>
                                        </div>
                                        <div class="col-lg-12 font-size-16 paddingTop-20 padding-25 padding20lowwidth">
                                            <p>
                                                <i>"Biblioteka jest instytucją, która samym swoim istnieniem świadczy o
                                                    rozwoju kultury. Jest ona bowiem skarbnicą piśmiennictwa, przez
                                                    które człowiek wyraża swój zamysł twórczy, inteligencję, znajomość
                                                    świata i ludzi, a także umiejętność panowania nad sobą, osobistego
                                                    poświęcenia, solidarności i pracy dla rozwoju dobra wspólnego."</i>
                                            <div style="position: absolute; right: 20px;">
                                                Jan Paweł II
                                            </div>
                                            </p>
                                            <p class='paddingTop-50'>
                                                Biblioteka jest ważnym centrum informacji szkoły. Staramy się aby była
                                                przyjazna dla uczniów, nauczycieli, studentów – absolwentów naszej
                                                szkoły i wszystkich osób, które chcą ze zbiorów korzystać na miejscu w
                                                czytelni.
                                            </p>

                                            <br>
                                            Nauczyciele – bibliotekarze:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>Aleksandra Wojciechowska-Gasik</li>
                                                    <li>Joanna Skoneczna-Sałuda</li>
                                                    <li>Anna Marzec</li>
                                                    <li>Ewelina Kapusta</li>
                                                </ul>
                                            </div>

                                            <p>
                                                Jesteśmy biblioteką szkolną z wieloletnią tradycją, ale nowoczesną i
                                                stopniowo dążymy do tego, aby być w pełni skomputeryzowaną. Księgozbiór
                                                biblioteki I Liceum Ogólnokształcącego im. Józefa Chełmońskiego w
                                                Łowiczu liczy około 20 tys. książek. W swoich zbiorach posiadamy płyty
                                                CD, kasety magnetofonowe, wideokasety, programy multimedialne i nasze
                                                „białe kruki”, czyli książki wydane do 1945 roku. Zbiory biblioteczne
                                                gromadzone są zgodnie z potrzebami uczniów i nauczycieli. Ostatnio nasz
                                                księgozbiór został wzbogacony o kilkanaście lektur szkolnych i kilka
                                                nowości.
                                                <br>
                                                Nasza pracownia multimedialna wyposażona jest w cztery stanowiska
                                                komputerowe z dostępem do Internetu, których korzystać mogą wszyscy
                                                odwiedzający bibliotekę. Uczniowie na miejscu mają również możliwość
                                                drukowania niezbędnych materiałów informacyjnych. Centrum Informacji
                                                Multimedialnej stanowi całość wraz z czytelnią, w której znajdują się
                                                wydzielone stanowiska do pracy indywidualnej.
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