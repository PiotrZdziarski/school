@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Nagroda im. dr. Jana Wegnera
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item"><a href="{{url('/nagrody_kola_wychowankow')}}">Nagrody Koła Wychowanków</a></li>
                <li class="breadcrumb-item">Nagroda im. dr. Jana Wegnera</li>
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
                                            <div class="col-12 mb-1 text-center">
                                                <h2>Nagroda im. dr. Jana Wegnera</h2>
                                            </div>
                                            <div class="col-lg-12 font-size-16 paddingTop-20">
                                                Dla najlepszego historyka.
                                            </div>
                                            <div class="col-lg-11 mx-auto paddingTop-20">
                                                <div class="table-responsive my-4">
                                                    <table class="table table-bordered" style="font-family: Arial,sans-serif;">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col" class="font-weight-semiBold"><b>Rok</b></th>
                                                            <th scope="col"><b>Imię i nazwisko<b></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2017</th>
                                                            <td>Paweł Pieniążek</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2009</th>
                                                            <td>Marlena Golan,
                                                                Joanna Truchel</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2009</th>
                                                            <td>Katarzyna Niebudek</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2008</th>
                                                            <td>Ariel Lisowski,
                                                                Maciej Wysocki</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2007</th>
                                                            <td>Michał Blus,
                                                                Krzysztof Szachogłuchowicz,
                                                                Daniel Plichta</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2006</th>
                                                            <td>Michał Stobnicki</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2005</th>
                                                            <td>Piotr Blus,
                                                                Tomasz Banaszkiewicz,
                                                                Tomasz Brzózka</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2004</th>
                                                            <td>Dominik Olejnik</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2003</th>
                                                            <td>Adam Studziński,
                                                                Marta Byzdra,
                                                                Robert Błaszczyk,
                                                                Katarzyna Majtczak</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2002</th>
                                                            <td>Arkadiusz Szczepaniak,
                                                                Marcin Marzec</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2001</th>
                                                            <td>Karolina Albrychiewicz,
                                                                Anna Żaczek</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2000</th>
                                                            <td>Piotr Wilkoszewski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1999</th>
                                                            <td>	nie przyznano</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1998</th>
                                                            <td>	Bogumił Kłos,
                                                                Katarzyna Wróbel</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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