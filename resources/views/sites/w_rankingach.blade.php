@extends('layouts.app')
@section('title')
    W rankingach
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat;background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                W rankingach
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">W rankingach</li>
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
                                            <div class="col-12 mb-1 text-center paddingTop-30">
                                                <h2>W rankingach</h2>
                                            </div>
                                            <div class="col-lg-12 font-size-16 paddingTop-20">
                                                Od 2011 roku ranking szkół ponadgimnazjalnych uległ diametralnej zmianie – NASZA SZKOŁA ZNAJDUJE SIĘ W GRONIE NAJLEPSZYCH SZKÓŁ! Kapituła rankingu przyznała nam tytuł srebrnej szkoły!!!
                                            </div>
                                            <div class="col-lg-11 mx-auto paddingTop-20">
                                                <div class="table-responsive my-4">
                                                    <table class="table table-bordered" style="font-family: Arial,sans-serif;">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col" class="font-weight-semiBold">Rok</th>
                                                            <th scope="col">Miejsce w Polsce</th>
                                                            <th scope="col">Miejsce w województwie łódzkim</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2017</th>
                                                            <td>192</td>
                                                            <td>18</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2016</th>
                                                            <td>271</td>
                                                            <td>24</td>
                                                        </tr><tr>
                                                            <th scope="row" class="font-weight-semiBold">2015</th>
                                                            <td>220</td>
                                                            <td>19</td>
                                                        </tr><tr>
                                                            <th scope="row" class="font-weight-semiBold">2014</th>
                                                            <td>168</td>
                                                            <td>17</td>
                                                        </tr><tr>
                                                            <th scope="row" class="font-weight-semiBold">2013</th>
                                                            <td>246</td>
                                                            <td>21</td>
                                                        </tr><tr>
                                                            <th scope="row" class="font-weight-semiBold">2012</th>
                                                            <td>245</td>
                                                            <td>21</td>
                                                        </tr><tr>
                                                            <th scope="row" class="font-weight-semiBold">2011</th>
                                                            <td>202</td>
                                                            <td>17</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 font-size-16 paddingTop-20">
                                                Nasze liceum od lat znajduje się wśród najlepszych szkół w Polsce. Do roku 2010 w rankingu „Perspektyw” i „Rzeczpospolitej” szkoła zajmowała następujące miejsca:
                                            </div>
                                            <div class="col-lg-11 mx-auto paddingTop-20">
                                                <div class="table-responsive my-4">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col" class="font-weight-semiBold">Rok</th>
                                                            <th scope="col">Miejsce</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2010</th>
                                                            <td>61</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2008</th>
                                                            <td>36</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2007</th>
                                                            <td>38</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2006</th>
                                                            <td>35</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2005</th>
                                                            <td>6</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2004</th>
                                                            <td>17</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2003</th>
                                                            <td>48</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2002</th>
                                                            <td>45</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2001</th>
                                                            <td>118</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">2000</th>
                                                            <td>45</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-semiBold">1999</th>
                                                            <td>73</td>
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