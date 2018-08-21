@extends('layouts.app')
@section('title')
    Rekrutacja
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Rekrutacja
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item">Rekrutacja</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-35">
                                            <h2>Rekrutacja</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto paddingBottom-40 padding20lowwidth padding-30 paddingTop-5"
                                             style="margin-top: -5px;">
                                            <h5 class=" paddingTop-20">Rekrutacja do klas pierwszych</h5>

                                            <div class="hover:parent w-75 no4-3 mx-auto my-4" style="box-shadow: 0 7.5px 15px #e9e9e9;">
                                                <img class="w-100 transition-0_3 hover:zoomin"
                                                     src="{{url('assets/img/rekrutacja/harmonogram-rekrutacji.png')}}"
                                                     alt="Harmonogram rekrutacji Chełmoński">
                                                <div class="card-img-overlay  transition-0_3 flex-center bg-black-0_7 hover:show">
                                                    <a href="{{url('assets/img/rekrutacja/harmonogram-rekrutacji.png')}}"
                                                       data-fancybox="gallery1"
                                                       class="iconbox bg-white ti-zoom-in text-primary"></a>
                                                </div>
                                            </div>

                                            <div class="hover:parent no4-3" style="margin-top:50px;">
                                                <img class="rounded w-100"
                                                     src="{{url('assets/img/rekrutacja/szkola.png')}}"
                                                     alt="Chełmoński opis szkoły">
                                                <div class="card-img-overlay  transition-0_3 flex-center bg-black-0_7 hover:show">
                                                    <a href="https://www.youtube.com/watch?time_continue=228&v=RoNOC7bkXgs"
                                                       data-fancybox
                                                       class="iconbox iconbox-lg bg-white position-absolute absolute-center playvid">
                                                        <i class="ti-control-play text-primary"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <h6 class="paddingTop-80">W roku szkolnym 2018/2019 planujemy otwarcie klas
                                                z następującymi przedmiotami realizowanymi w zakresie rozszerzonym:</h6>
                                            <div class="flexbox padding-20"
                                                 style="margin-top: 40px; box-shadow: 0 5px 10px #d9d9d9;">
                                                <div class="col-lg-6 float-left firstrow"
                                                     style="display: flex;justify-content: center; align-items: center;">
                                                    <a href="#"
                                                       class="colordodgerblue colordodgerbluehover font-size-32 font-weight-semiBold">Klasa
                                                        IA</a>
                                                </div>
                                                <div class="col-lg-6 float-left secondrow">
                                                    <p>w klasie I matematyka *</p>
                                                    od kl. II do wyboru 2 kolejne rozszerzenia:
                                                    <br>– biologia, chemia
                                                    <br>– fizyka, chemia
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>


                                            <div class="flexbox padding-20"
                                                 style="margin-top: 40px; box-shadow: 0 5px 10px #d9d9d9;">
                                                <div class="col-lg-6 float-left firstrow"
                                                     style="display: flex;justify-content: center; align-items: center;">
                                                    <a href="#"
                                                       class="colordodgerblue colordodgerbluehover font-size-32 font-weight-semiBold">Klasa
                                                        IB</a>
                                                </div>
                                                <div class="col-lg-6 float-left secondrow">
                                                    <p>w klasie I matematyka *</p>
                                                    od klasy II do wyboru 2 kolejne rozszerzenia:
                                                    <br>– fizyka, informatyka lub język
                                                    <br>– geografia, język lub WOS
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>


                                            <div class="flexbox padding-20"
                                                 style="margin-top: 40px; box-shadow: 0 5px 10px #d9d9d9;">
                                                <div class="col-lg-6 float-left firstrow"
                                                     style="display: flex;justify-content: center; align-items: center;">
                                                    <a href="#"
                                                       class="colordodgerblue colordodgerbluehover font-size-32 font-weight-semiBold">Klasa
                                                        IC</a>
                                                </div>
                                                <div class="col-lg-6 float-left secondrow">
                                                    <p>w klasie I język angielski *</p>
                                                    od klasy II do wyboru 2 kolejne rozszerzenia:
                                                    <br>– biologia, chemia
                                                    <br>– geografia, WOS lub drugi język
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>


                                            <div class="flexbox padding-20"
                                                 style="margin-top: 40px; box-shadow: 0 5px 10px #d9d9d9;">
                                                <div class="col-lg-6 float-left firstrow"
                                                     style="display: flex;justify-content: center; align-items: center;">
                                                    <a href="#"
                                                       class="colordodgerblue colordodgerbluehover font-size-32 font-weight-semiBold">Klasa
                                                        ID</a>
                                                </div>
                                                <div class="col-lg-6 float-left secondrow">
                                                    <p>w klasie I język polski *</p>
                                                    od klasy II do wyboru 2 kolejne rozszerzenia:
                                                    <br>– historia, WOS
                                                    <br>– historia, filozofia lub język obcy
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="paddingTop-30" style="font-weight: 500;">* w przypadku dużej
                                                liczby chętnych do danej klasy możliwe jest otwarcie drugiej takiej
                                                samej klasy.
                                            </div>

                                            <div class="col-lg-12 mx-auto paddingTop-40">
                                                <div class="table-responsive my-4">
                                                    <table class="table table-bordered"
                                                           style="font-family: Arial,sans-serif; width: 200% !important; overflow-x: scroll;">
                                                        <thead>
                                                        <tr>
                                                            <th style="width: 10%;" scope="col"
                                                                class="font-weight-bold">Klasa
                                                            </th>
                                                            <th style="width: 35%;" scope="col">Przedmioty z
                                                                rozszerzonym **

                                                                <br>programem nauczania
                                                            </th>
                                                            <th style="width: 20%;" scope="col"> Języki obce***</th>
                                                            <th style="width: 35%;" scope="col">Przedmioty uwzględniane
                                                                w procesie rekrutacji
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row" class="font-weight-bold text-center">IA</th>
                                                            <td> W klasie I matematyka
                                                                <br>od kl. II do wyboru 2 kolejne rozszerzenia:
                                                                <br>– biologia, chemia
                                                                <br>– fizyka, chemia
                                                            </td>
                                                            <td>do wyboru***</td>
                                                            <td>język polski
                                                                <br>matematyka
                                                                <Br>biologia
                                                                <br>chemia
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-bold text-center">IB</th>
                                                            <td> w klasie I matematyka
                                                                <br>od klasy II do wyboru 2 kolejne rozszerzenia:
                                                                <br>– fizyka, informatyka lub język
                                                                <br>– geografia, język lub WOS
                                                            </td>
                                                            <td>do wyboru***</td>
                                                            <td>język polski
                                                                <br>matematyka
                                                                <br>fizyka
                                                                <br>geografia
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-bold text-center">IC</th>
                                                            <td> w klasie I język angielski
                                                                <br>od klasy II do wyboru 2 kolejne rozszerzenia:
                                                                <br>– biologia, chemia
                                                                <br>– geografia, WOS lub drugi język
                                                            </td>
                                                            <td>do wyboru***</td>
                                                            <td>
                                                                język polski
                                                                <br>matematyka
                                                                <br>biologia
                                                                <br>chemia
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="font-weight-bold text-center">ID</th>
                                                            <td> w klasie I język polski
                                                                <br>od klasy II do wyboru 2 kolejne rozszerzenia:
                                                                <br>– historia, WOS
                                                                <br>– historia, filozofia lub język obcy
                                                            </td>
                                                            <td>do wyboru***</td>
                                                            <td>
                                                                język polski
                                                                <br>matematyka
                                                                <br>historia
                                                                <br>WOS
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <p style="font-weight: 500;">**przedmioty rozszerzone powstaną jeżeli zgłosi się liczba uczniów, która zostanie zatwierdzona przez Organ Prowadzący.</p>
                                            <p style="font-weight: 500;">***języki obce: uczeń wybiera jeden język obcy kontynuowany – nauczany w gimnazjum, drugi do wyboru: angielski, niemiecki, rosyjski lub francuski – nauczane w grupach o podobnym poziomie zaawansowania. Grupa powstanie jeżeli zgłosi się liczba uczniów zatwierdzona przez Organ Prowadzący.</p>



                                            <h3 class="paddingTop-60 paddingBottom-10">Języki obce</h3>
                                            <p>Możemy się pochwalić, że nasza szkoła umożliwia nauczanie czterech języków obcych!</p>

                                            <p>Wyboru języka dokonuje się już na etapie rekrutacji, uczeń wybiera jeden język kontynuowany – nauczany w gimnazjum oraz drugi język do wyboru: angielski, niemiecki, rosyjski lub francuski – nauczane w oddziałowych lub międzyoddziałowych grupach o podobnym poziomie zaawansowania.</p>

                                            <p>Grupa powstanie, jeżeli zgłosi się liczba uczniów i zostanie zatwierdzona przez Organ Prowadzący.</p>

                                            <h3 class="paddingTop-40 paddingBottom-10">Warunki nauczania</h3>
                                            <p>Zajęcia odbywają się w dobrze wyposażonych, nowoczesnych pracowniach przedmiotowych i salach lekcyjnych. Uczniowie samodzielnie wykonują doświadczenia i symulacje, mają możliwość wykorzystywania tablic interaktywnych (multimedialnych) – jest to niewątpliwy atut szkoły!</p>

                                            <p>Baza pomocy dydaktycznych jest nieustannie wzbogacana.</p>

                                            <p>Szkoła dysponuje własną salą gimnastyczną, boiskiem, kortem tenisowym; umożliwia naukę pływania a także jazdy na łyżwach i nartach (w sezonie zimowym).</p>

                                            <p>W szkole funkcjonuje świetnie zaopatrzona w lektury szkolne (i nie tylko!) biblioteka szkolna i centrum multimedialne.</p>

                                            <h3 class="paddingTop-40 paddingBottom-10">Współpraca z uczelniami wyższymi</h3>
                                            <p>Nasza szkoła nawiązuje i kontynuuje współpracę z uczelniami wyższymi i dlatego nasi uczniowie mają możliwość uczestniczenia w ciekawych wykładach, warsztatach, laboratoriach, projektach edukacyjnych.</p>

                                            <p>Otrzymujemy także listy gratulacyjne z uczelni wyższych, które podkreślają, iż nasi absolwenci są świetnymi studentami!</p>

                                            <h3 class="paddingTop-40 paddingBottom-10">Zajęcia uzupełniające</h3>
                                            <p>Od klasy drugiej, w zależności od wybranych rozszerzeń proponujemy szeroki wybór zajęć rozwijających zainteresowania i pasje: język angielski w biznesie, język angielski w medycynie, anatomia i fizjologia, świat mediów, informatyka w dziennikarstwie, grafika komputerowa, atelier – między sztukami, fizyka doświadczalna, kultura języka polskiego, dzieło filmowe jako tekst kultury, sportowe gry zespołowe, aerobic.</p>

                                            <h3 class="paddingTop-40 paddingBottom-10">Działania podejmowane z inicjatywy uczniów</h3>
                                            <p>W szkole działa: Klub Historyczny im. Armii Krajowej, Szkolne Koło PCK, Szkolny Dyskusyjny Klub Filmowy, chór szkolny, koło teatralne, fizyczne, chemiczne, informatyczne.</p>

                                            <p>Jesteśmy otwarci na wszelkie pomysły młodzieży!</p>

                                        </div> <!-- END row-->
                                    </div>
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