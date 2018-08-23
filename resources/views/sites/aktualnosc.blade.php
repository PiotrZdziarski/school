@extends('layouts.app')
@section('title')
    {{$aktualnosc[0]->title}}
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url({{url('/assets/img/breadcrumb-bg.jpg')}}) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                {{$aktualnosc[0]->title}}
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><a href="{{url('/aktualnosci')}}">Aktualności</a>
                <li class="breadcrumb-item">{{$aktualnosc[0]->title}}</li>
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
                                        <div class="col-12 mb-1 padding-30 padding15lowwidth">
                                            <p class="text-primary mb-1 dodgerbluenohover">
                                                @php
                                                    echo Carbon\Carbon::parse($aktualnosc[0]->created_at)->format('d F, Y');
                                                @endphp
                                            </p>
                                            <h2 class="titlelowwidth">{{$aktualnosc[0]->title}}</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidthimportant padding-30 paddingTop-5"
                                             style="margin-top: -10px;">

                                                @include('aktualnosci.'.$aktualnosc[0]->id)

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                @include('components.aktualnosci')
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>

@endsection