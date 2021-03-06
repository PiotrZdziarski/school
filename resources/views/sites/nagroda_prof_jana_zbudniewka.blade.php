@extends('layouts.app')
@section('title')
    Nagroda Jana Zbudniewka
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Nagroda im. prof. Jana Zbudniewka
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item"><a href="{{url('/nagrody_kola_wychowankow')}}">Nagrody Koła Wychowanków</a></li>
                <li class="breadcrumb-item">Nagroda im. prof. Jana Zbudniewka</li>
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
                                                <h2>Nagroda im. prof. Jana Zbudniewka</h2>
                                            </div>
                                            <div class="col-lg-12 font-size-16 paddingTop-20">
                                                Dla najlepszego chemika, fizyka, oraz matematyka.
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
                                                            <td>Łukasz Marcin Klimkiewicz</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2017</th>
                                                            <td>Katarzyna Izabela Jagoda,
                                                                Piotr Czapnik</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2016</th>
                                                            <td>Ewelina Kamińska,
                                                                Piotr Kowalski,
                                                                Wojciech Kurek</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2015</th>
                                                            <td>Jakub Wojciech Krysicki,
                                                                Adam Muras</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2014</th>
                                                            <td>	Paweł Jarosław Barlak</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2013</th>
                                                            <td>Jakub Bartosz Fijałkowski,
                                                                Krzysztof Grzelak</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2012</th>
                                                            <td>Łukasz Zbigniew Łaziński,
                                                                Konrad Kamil Stajuda,
                                                                Tomasz Marcin Okraska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2011</th>
                                                            <td>	Maciej Małolepszy,
                                                                Rafał Karwat,
                                                                Michał Wrona</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2010</th>
                                                            <td>	Damian Zabost,
                                                                Adam Bodek,
                                                                Mateusz Talarowski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2009</th>
                                                            <td>	Marcel Kosmowski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2008</th>
                                                            <td>Kamil Paszowski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2007</th>
                                                            <td>Łukasz Groszkowski,
                                                                Maciej Tomczak</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2006</th>
                                                            <td>Agata Staniszewska,
                                                                Magdalena Dębska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2005</th>
                                                            <td>Grzegorz Kowalik</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2004</th>
                                                            <td>	Krzysztof Durka</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2003</th>
                                                            <td>Jakub Kosiorek</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2002</th>
                                                            <td>Jakub Garstka</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2001</th>
                                                            <td>nie przyznano</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2000</th>
                                                            <td>Sławomir Bolimowski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1999</th>
                                                            <td>Sebastian Domżalski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1998</th>
                                                            <td>Marcin Plichta,
                                                                Michał Zasępa</td>
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