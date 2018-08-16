@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Gloria Diligentiae et Labori
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item"><a href="{{url('/nagrody_kola_wychowankow')}}">Nagrody Koła Wychowanków</a></li>
                <li class="breadcrumb-item">Gloria Diligentiae et Labori</li>
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
                                                <h2>Nagroda Gloria Diligentiae et Labori</h2>
                                            </div>
                                            <div class="col-lg-12 font-size-16 paddingTop-20">
                                                Nagroda Gloria Diligentiae et Labori dla prymusa szkoły.
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
                                                            <td>Natalia Prucnal</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2017</th>
                                                            <td>Katarzyna Izabela Jagoda</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2016</th>
                                                            <td>Piotr Kowalski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2015</th>
                                                            <td>Agata Anna Trębska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2014</th>
                                                            <td>Julia Paulina Golis</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2013</th>
                                                            <td>Joanna Zofia Wilczyńska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2012</th>
                                                            <td>Marta Wiktoria Nowak</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2011</th>
                                                            <td>Dominika Brzezińska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2010</th>
                                                            <td>Edyta Wolny</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2009</th>
                                                            <td>Katarzyna Dębska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2008</th>
                                                            <td>Maciej Wysocki</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2007</th>
                                                            <td>Katarzyna Dudzińska,
                                                                Beata Charążka</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2006</th>
                                                            <td>Michał Stobnicki,
                                                                Magdalena Dębska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2005</th>
                                                            <td>Paweł Wojciechowski</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2004</th>
                                                            <td>Natalia Młoczkowska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2003</th>
                                                            <td>Diana Zajączkowska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2002</th>
                                                            <td>Arkadiusz Szczepanik</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2001</th>
                                                            <td>Izabela Majer,
                                                                Karolina Albrychiewicz</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2000</th>
                                                            <td>Monika Grzelczyk</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1999</th>
                                                            <td>Małgorzata Gajda,
                                                                Anna Waszczuk</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1998</th>
                                                            <td>Anna Wojda</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1997</th>
                                                            <td>Ewa Grabowska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1996</th>
                                                            <td>Magdalena Ciurzyńska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1995</th>
                                                            <td>Grzegorz Cioch</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1994</th>
                                                            <td>Agnieszka Siejka</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1993</th>
                                                            <td>Magdalena Szymczak</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1992</th>
                                                            <td>Żaneta Wojda</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1991</th>
                                                            <td>Michał Ciurzyński</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1990</th>
                                                            <td>Tomasz Grudziel</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1989</th>
                                                            <td>nie przyznano</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1988</th>
                                                            <td>Anna Foks</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1987</th>
                                                            <td>Anna Łazińska,
                                                                Marzena Maciągowska</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1986</th>
                                                            <td>Anna Mączyńska</td>
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