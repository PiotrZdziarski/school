@extends('layouts.app')
@section('title')
    Nagroda Eugeniusza Wachowskiego
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Nagroda im. prof. Eugeniusza Wachowskiego
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item"><a href="{{url('/nagrody_kola_wychowankow')}}">Nagrody Koła Wychowanków</a></li>
                <li class="breadcrumb-item">Nagroda im. prof. Eugeniusza Wachowskiego</li>
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
                                                <h2>Nagroda im. prof. Eugeniusza Wachowskiego</h2>
                                            </div>
                                            <div class="col-lg-12 font-size-16 paddingTop-20">
                                                Dla najlepszego sportowca.
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
                                                            <th scope="row" class="font-weight-semiBold">2018</th>
                                                            <td>Wioleta Krystyna Siekiera,
                                                                Franciszek Jeremi Kaliński</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2017</th>
                                                            <td>	Katarzyna Rześna,
                                                                Wojciech Chondzyński,
                                                                Jakub Szkup</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2016</th>
                                                            <td>Sylwia Brzezińska,
                                                                Bartłomiej Grzegory</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2015</th>
                                                            <td>	Agata Anna Trębska,
                                                                Iwona Olewicz,
                                                                Dawid Jakub Pawlak,
                                                                Cezary Paweł Zimny</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2014</th>
                                                            <td>Aleksandra Wiktoria Rybus,
                                                                Daniel Wasiak</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2013</th>
                                                            <td>Halszka Alicja Kalińska,
                                                                Emilia Wosik,
                                                                Piotr Podsędek</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2012</th>
                                                            <td>Karolina Maciejewska,
                                                                Milena Mitek</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2011</th>
                                                            <td>Wylwia Dudzińska,
                                                                Damian Bąba</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2009</th>
                                                            <td>Weronika Stajuda, Katarzyna Żelazkiewicz,
                                                                Grzegorz Waligórski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2009</th>
                                                            <td>Katarzyna Niebudek,
                                                                Daniel Charucki</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2008</th>
                                                            <td>Marta Kaźmierczak,
                                                                Michał Sobieszek</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2007</th>
                                                            <td>Ewa Kepka,
                                                                Bolesław Mostoski,
                                                                Łukasz Łebski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2006</th>
                                                            <td>Edyta Antosik,
                                                                Dorota Matuszczak,
                                                                Marcin Kotarski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2005</th>
                                                            <td>Dorota Nawrocka,
                                                                Marcin Pieklak</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2004</th>
                                                            <td>Katarzyna Gładka,
                                                                Beata Klimaszewska,
                                                                Szymon Wójcik</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2003</th>
                                                            <td>Karolina Fafińska,
                                                                Patryk Kotarski</td>
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