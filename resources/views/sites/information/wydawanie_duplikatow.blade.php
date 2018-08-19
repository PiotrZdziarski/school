@extends('layouts.app')
@section('title')
    Wydawanie dupliaktów
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Wydawanie duplikatów
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item">Wydawanie duplikatów</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-25 paddingBottom-20">
                                            <h2>Wydawanie duplikatów</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5">

                                            <h6>Wydawanie duplikatów świadectw</h6>
                                            <br>
                                            <p>W przypadku utraty (zagubienia, zniszczenia, kradzieży):</p>

                                            <div class="col-lg-12 paddingBottom-10" style="margin-top: -30px;">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>świadectwa dojrzałości wydanego przez szkołę do 2005 r.</li>
                                                    <li>świadectwa ukończenia szkoły lub świadectwa promocyjnego</li>
                                                </ul>
                                            </div>
                                            <p>I Liceum Ogólnokształcące im. Józefa Chełmońskiego w Łowiczu może wydać duplikat powyższych dokumentów. Aby otrzymać duplikat, należy złożyć wypełniony wniosek o wydanie duplikatu świadectwa <a class="colordodgerblue" href="{{url('assets/doc/Zał-nr-1.doc')}}">(zał. nr 1)</a> oraz dokonać wpłaty 26 zł. na konto: 60 9288 0001 0010 0120 2000 0010 Bank Spółdzielczy Ziemi Łowickiej w Łowiczu oraz dołączyć do składanego wniosku kserokopię potwierdzenia wpłaty.</p>
                                            <p>Czas oczekiwania na wydanie duplikatu – od 7 do 14 dni (od daty wpłynięcia do I LO w Łowiczu wniosku wraz z kopią dowodu wpłaty).</p>

                                            <h6>Wydawanie duplikatów legitymacji szkolnych.</h6>
                                            <p>W przypadku utraty (zagubienia, zniszczenia, kradzieży) legitymacji szkolnej I Liceum Ogólnokształcące im. Józefa Chełmońskiego w Łowiczu może wydać duplikat legitymacji szkolnej. Aby otrzymać duplikat, należy złożyć wypełniony wniosek o wydanie duplikatu legitymacji <a class="colordodgerblue" href="{{url('assets/pdf/legitimacja.pdf')}}">(zał. nr 2)</a> wraz z 1 zdjęciem, dokonać wpłaty 9 zł. na konto: 60 9288 0001 0010 0120 2000 0010 oraz dołączyć do składanego wniosku kserokopię potwierdzenia wpłaty.</p>
                                            <p>Czas oczekiwania na wydanie legitymacji szkolnej – od 1 do 7 dni (od daty wpłynięcia do I LO w Łowiczu wniosku wraz z kopią dowodu wpłaty).</p>

                                            <h5>Uwaga!</h5>

                                            <p>Wniosek o wystawienie duplikatu legitymacji szkolnej składa i duplikat odbiera osoba, na którą dokument jest wystawiony.</p>

                                            <p>Podstawa prawna wydawania duplikatów:</p>

                                            <p>Rozporządzenie Ministra Edukacji Narodowej z dnia 28 maja 2010 r. w sprawie świadectw, dyplomów państwowych i innych druków szkolnych (Dz.U. Nr 97, poz. 624)</p>

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