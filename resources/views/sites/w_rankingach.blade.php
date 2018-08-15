@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Patron
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">Patron</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-40 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                    <div class="card shadow-v1">
                        <div class="card-body padding20lowwidth">
                                <section class="padding-y-100 border-bottom border-light" id="content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 mb-5 text-center">
                                                <h2>W rankingach</h2>
                                            </div>
                                            <div class="col-lg-10 mx-auto">
                                                <div class="table-responsive my-4">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col" class="font-weight-semiBold">Order ID</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">#00004673</th>
                                                            <td>01 Aug 2018</td>
                                                            <td>$49</td>
                                                            <td>
                                                                <a href="#" class="btn btn-link">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">#00004673</th>
                                                            <td>07 Aug 2018</td>
                                                            <td>$300</td>
                                                            <td>
                                                                <a href="#" class="btn btn-link">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">#00004673</th>
                                                            <td>16 Aug 2018</td>
                                                            <td>$34</td>
                                                            <td>
                                                                <a href="#" class="btn btn-link">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">#00004673</th>
                                                            <td>24 Aug 2018</td>
                                                            <td>$10</td>
                                                            <td>
                                                                <a href="#" class="btn btn-link">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">#00004673</th>
                                                            <td>28 Aug 2018</td>
                                                            <td>$199</td>
                                                            <td>
                                                                <a href="#" class="btn btn-link">View</a>
                                                            </td>
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