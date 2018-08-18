@extends('layouts.app')
@section('title')
    Nagroda dla najlepszego lingwisty
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Nagroda dla najlepszego lingwisty
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item"><a href="{{url('/nagrody_rady_pedagogicznej')}}">Nagrody Rady Pedagogicznej</a></li>
                <li class="breadcrumb-item">Nagroda dla najlepszego lingwisty</li>
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
                                                <h2>Nagroda dla najlepszego lingwisty</h2>
                                            </div>
                                            <div class="col-lg-11 mx-auto paddingTop-10">
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
                                                            <td>MIŁOSZ TARANOWICZ</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2016</th>
                                                            <td>ISABELL ADASIAK,
                                                                BENIAMIN MALIŃSKI</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2014</th>
                                                            <td>KACPER GABRIEL ZAWADZKI</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2013</th>
                                                            <td>HALSZKA ALICJA KALIŃSKA,
                                                                PAULINA URBANEK,
                                                                MONIKA JAKUBIK</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2012</th>
                                                            <td>MICHAŁ KOSTRZEWA,
                                                                ŁUKASZ ŁAZIŃSKI</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2011</th>
                                                            <td>DOMINIKA BRZEZIŃSKA</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2010</th>
                                                            <td>KATARZYNA ŻEMŁO,
                                                                EDYTA WOLNY</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2009</th>
                                                            <td>KATARZYNA DĘBSKA</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2008</th>
                                                            <td>ANNA PUDŁOWSKA</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2007</th>
                                                            <td>ILONA BRYK</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2006</th>
                                                            <td>ŻANETA CHARUSTA,
                                                                MALWINA ZAGAWA</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2005</th>
                                                            <td>ANNA IGNACZAK,
                                                                PATRYCJA PIETRZAK</td>
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