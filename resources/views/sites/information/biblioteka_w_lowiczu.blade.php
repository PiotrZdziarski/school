@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - W <span style="font-family: Arial,sans-serif;">Ł</span>owiczu
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a>
                <li class="breadcrumb-item">W <span style="font-family: Arial,sans-serif;">Ł</span>owiczu</li>
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
                                            <h2>Biblioteka - Biblioteki w <span
                                                        style="font-family: Arial,sans-serif;">Ł</span>owiczu</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5">
                                            Jeżeli z jakiegoś powodu nie udało ci się wypożyczyć książki w szkolnej
                                            bibliotece – nie rezygnuj! Zawsze możesz odwiedzić inną bibliotekę w
                                            naszym mieście. Pamiętaj, że czytanie wciąż jest kluczem do wiedzy.

                                            <p>
                                            <h6 class="paddingTop-40" style="margin-bottom: -10px;">Biblioteka
                                                Pedagogiczna w Skierniewicach Filia w Łowiczu</h6>
                                            <br>Al. Sienkiewicza 42, 99-400 Łowicz,
                                            <br>tel. 046 837-61-29
                                            <br>e-mail: bibliotekalowicz@o2.pl

                                            <br><br>Godziny pracy Biblioteki:
                                            <br>poniedziałek – piątek 9.00 – 17.00
                                            <br>sobota 9.00 – 14.00
                                            </p>

                                            <p>
                                            <h6 class="paddingTop-40" style="margin-bottom: -10px;">Powiatowa Biblioteka
                                                Publiczna w Łowiczu</h6>
                                            <br>Łowicz , Stary Rynek 5/7
                                            <br>Telefon: (046) 837 96 67
                                            <br>Fax: (046) 837 96 67

                                            <br><br>Godziny pracy Biblioteki:
                                            <br>poniedziałek – piątek 9.00 – 17.00
                                            </p>

                                            <p>
                                            <h6 class="paddingTop-40" style="margin-bottom: -10px;">Miejska Biblioteka
                                                im. A.K. Cebrowskiego</h6>
                                            <Br>Łowicz, ul. Bratkowice 3a
                                            <Br>Telefon: 0-46 837-76-03
                                            <Br>Faks: 0-46 837-76-03
                                            </p>

                                            <p>
                                            <h6 class="paddingTop-40" style="margin-bottom: -10px;">Miejska Biblioteka
                                                im. A.K. Cebrowskiego Filia nr 2</h6>
                                            <br></br>Łowicz, Podrzeczna 20
                                            <br>Tel: (+46) 837-35-41
                                            <br>
                                            <br>Godziny otwarcia:
                                            <br>- poniedziałek: 12.00 – 16.00
                                            <br>– wtorek – środa: 11.00 – 17.00
                                            <br>– czwartek – piątek: 9.00 – 16.00
                                            </p>

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