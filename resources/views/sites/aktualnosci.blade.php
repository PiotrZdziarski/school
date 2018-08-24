@extends('layouts.app')
@section('title')
    Aktualności
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Aktualności
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item">Aktualności</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-40 bg-light paddingBottom-200">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                    <div class="card-body" style="padding: 0;">
                        <section id="content">
                            <?php $count = 0; ?>
                            @foreach($aktualnosciDB as $aktualnosc)
                                <?php
                                $count++;
                                ?>
                                <div id="news{{$count}}" class="<?php if($count > 20): ?> displaynoneimportant <?php endif ?> marginBottom-40 padding10lowwidth wow slideInUp newscontainer">
                                    <div class="col-md-3 px-md-0 hover:parent width55telefon imagecontainer">

                                        <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                                            <div id="output" @if($aktualnosc->image != '')
                                            style='background-image: url("assets/img/aktualnosci/{{$aktualnosc->image}}")'
                                                 @endif
                                                 class="outputnews"></div>
                                        </div>
                                        <div class="card-img-overlay  transition-0_3 flex-center bg-black-0_2 hover:show"
                                             style="cursor: pointer;">
                                            <a href="https://www.youtube.com/watch?v=GMc7aS7MbDM"
                                               data-fancybox
                                               class="bg-white position-absolute absolute-center playvid">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-9 px-md-0 nopaddinglowwidth">
                                        <div class="card paddingLeft-20 padding10lowwidth height-100p">
                                            <a href='{{url("/aktualnosc_$aktualnosc->id")}}'
                                               class="h4 mb-3 titlenews">
                                                {{$aktualnosc->title}}
                                            </a>
                                            <p class="mb-0 descritptionnews">
                                                {{$aktualnosc->description}}
                                            </p>
                                            <span class="datenews" style="color: #58b2ff">
                                                @php
                                                    echo Carbon\Carbon::parse($aktualnosc->created_at)->format('d F, Y');
                                                @endphp
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <button id="show_more_btn" onclick="show_more(event)" data-newscount="@php echo $count; @endphp"
                                    class="btn_show_more mx-auto d-block wow slideInUp">Zobacz więcej</button>
                        </section>
                    </div>
                </div>
                @include('components.kontaktsidebar')

            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>

    <script>
        function show_more(e) {
            var news_count = e.target.getAttribute('data-newscount');
            news_count = parseInt(news_count);
            var visible_count = 0;

            for(var i = 1; i <= news_count; i++) {
                if(!document.getElementById('news' + i).classList.contains('displaynoneimportant')) {
                    visible_count++;
                }
            }

            const goal = visible_count + 20;
            for(var i = visible_count; i <= goal; i++) {
                if(i <= news_count) {
                    document.getElementById('news' + i).classList.remove('displaynoneimportant');
                }
                if(i >= news_count) {
                    document.getElementById('show_more_btn').classList.add('displaynoneimportant');
                }
            }
        }
    </script>
@endsection