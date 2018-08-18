@extends('layouts.app')
@section('title')
    Biblioteka - godziny otwarcia
@endsection
@section('content')

    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Godziny otwarcia
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span></li>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a></li>
                <li class="breadcrumb-item">Godziny otwarcia</li>
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
                                            <h2>Biblioteka - Godziny otwarcia</h2>
                                        </div>
                                        <div class="col-lg-12 font-size-16 paddingTop-20 padding-25 padding20lowwidth">
                                            <div class="table-responsive my-2">
                                                <table class="table table-bordered text-center" style="font-family: Arial,sans-serif; overflow-x: scroll">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" class="font-weight-bold">Nr lekcji</th>
                                                        <th scope="col">Poniedziałek<br>9.00-14.25</th>
                                                        <th scope="col">Wtorek<br>8.00-15.00</th>
                                                        <th scope="col">Środa<br>8.55-13.30</th>
                                                        <th scope="col">Czwartek<br>8.00-14.25</th>
                                                        <th scope="col">Piątek<br>8.00-14.25</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row" class="font-weight-bold">1</th>
                                                        <td>Lekcja</td>
                                                        <td>Otwarta</td>
                                                        <td>---</td>
                                                        <td>Lekcja</td>
                                                        <td>Lekcja</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="font-weight-bold">2</th>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                    </tr><tr>
                                                        <th scope="row" class="font-weight-bold">3</th>
                                                        <td>Lekcja</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                    </tr><tr>
                                                        <th scope="row" class="font-weight-bold">4</th>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                    </tr><tr>
                                                        <th scope="row" class="font-weight-bold">5</th>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Lekcja</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                    </tr><tr>
                                                        <th scope="row" class="font-weight-bold">6</th>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                    </tr><tr>
                                                        <th scope="row" class="font-weight-bold">7</th>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                        <td>Lekcja</td>
                                                        <td>Otwarta</td>
                                                        <td>Otwarta</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="font-weight-bold">8</th>
                                                        <td>Otwarta</td>
                                                        <td>Do 15.00</td>
                                                        <td>---</td>
                                                        <td>---</td>
                                                        <td>---</td>
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