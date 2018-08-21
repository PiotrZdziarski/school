@extends('layouts.app')
@section('title')
    Biblioteka - Nowości
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Nowości
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a>
                <li class="breadcrumb-item">Nowości</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-35">
                                            <h2>Biblioteka - Nowości</h2>
                                        </div>
                                        <div class="col-lg-12 mx-auto padding-30">
                                            <h6 class="paddingTop-10">SŁAWOMIR RAWICZ „DŁUGI MARSZ”</h6>
                                            „Wiosną 1941 roku autor, 26 – letni polski porucznik kawalerii, organizuje
                                            ucieczkę z obozu nr 303 na Syberii. Towarzyszy mu sześciu więźniów z różnych
                                            krajów, w tym jeden obywatel USA. Uciekinierzy przedzierają się na południe
                                            przez tajgę, wyżyny Mongolii, pustynię Gobi, Tybet, Himalaje, do
                                            ,brytyjskich Indii – ponad 6000 km. Nie maja mapy ani kompasu, jedyny ich
                                            ekwipunek to siekiera i nóż. Codziennie czyhają na nich nowe
                                            niebezpieczeństwa. Mimo wielkiej woli przeżycia, odwagi i wytrzymałości
                                            fizycznej nie wszystkim uda się osiągnąć cel.  Książka Sławomira Rawicza
                                            zrobiła zawrotna karierę, została przetłumaczona na 25 języków i obok
                                            relacji z wypraw Scotta czy Shackletona weszła so światowej klasyki książek
                                            o heroicznej walce człowieka o przetrwanie w skrajnych warunkach. Stanowiła
                                            inspirację dla wielu znanych współczesnych podróżników. Trasę ucieczki
                                            bohaterów książki przemierzało kilka ekspedycji. Mimo kontrowersji i zagadek
                                            wiążących się z książką i jej autorem Długi marsz pozostaje fascynującą
                                            opowieścią. Szczególną popularnością cieszy się w USA, gdzie od kilku lat
                                            znajduje się na listach bestsellerów.”


                                            <h6 class="paddingTop-40">ANDRZEJ SAPKOWSKI „ŻMIJA”</h6>
                                            „Afganistan – tutaj od wieków ścierały się krwawo armie kolejnych władców
                                            dążących do władzy nad światem. Tu walczyli i ginęli najeźdźcy z Macedonii,
                                            Wielkiej Brytanii i Rosji. A umierających obserwowały z ukrycia zimne oczy z
                                            czarną, pionową źrenicą. Oczy złotej żmii, która jest i której nie ma. 
                                            „Żmija” to nowy świat, to zupełnie nowa formuła literacka, zadziwiające
                                            połączenie fantasy i realistycznej powieści wojennej… Żmija jest piękna i
                                            złowroga…”


                                            <h6 class="paddingTop-40">OLGA TOKARCZUK „PROWADŹ SWÓJ PŁUG PRZEZ KOŚCI
                                                UMARŁYCH”</h6>
                                            „Nowa powieść Olgi Tokarczuk! Thriller moralny, który do ostatniej strony
                                            trzyma w napięciu. Akcja rozgrywa się w Kotlinie Kłodzkiej. Główną bohaterką
                                            jest Janina Duszejko – kiedyś inżynier mostów, dziś wiejska nauczycielka
                                            angielskiego, geografii i dozorczyni domów letniskowych. Jej pasją jest
                                            astrologia, a wielką miłością wszelkie zwierzęta. Gdy dzieje im się krzywda,
                                            Janina upomina się o szacunek dla zwierząt, przestrzega przed bezmyślnym
                                            niszczeniem przyrody, donosi nawet na policję, ale nikt się nie przejmuje
                                            kobietą, która uważa, że świat jest odbiciem tego, co zapisane w gwiazdach,
                                            a w wolnych chwilach czyta Williama Blake, którego właśnie tłumaczy jej
                                            przyjaciel. Pewnego dnia dowiaduje się o śmierci sąsiada kłusownika –
                                            mordercy saren, potem o następnej ofierze. Seria mniej lub bardziej
                                            niewytłumaczalnych zgonów rośnie, a na śniegu nie ma innych śladów jak tylko
                                            zwierzęce… Janina próbuje zbadać sprawę własnymi metodami. Ma własną teorię
                                            na temat motywu i sprawcy, ale policja ignoruje ją, traktując jak
                                            nieszkodliwą dziwaczkę. Ona jednak wie więcej niż wszyscy, bo potrafi czytać
                                            w gwiazdach, jak w otwartej księdze.”

                                            <h6 class="paddingTop-40">WILIAM WHARTON „RUBIO”</h6>
                                            <div class="paddingBottom-40">„Romans nastolatki z dojrzałym mężczyzną.
                                                Trzydziestotrzyletni Amerykanin, porzucony przez żonę i dopiero, co
                                                rozwiedziony, by odzyskać równowagę emocjonalną, udaje się do Hiszpanii.
                                                Przemierza cały kraj i w końcu na skraju półwyspu znajduje samotnię, w
                                                której ma nadzieję dojść z sobą do ładu. Z pasją remontuje zrujnowany
                                                dom na wzgórzu, w czym znajduje ukojenie. Z czasem zżywa się z
                                                hiszpańską rodziną, która nazywa go Rubio – blondyn, i traktuje jak
                                                swego. Rubio – choć wydawało mu się, że nie jest zdolny do miłości –
                                                namiętnie i z wzajemnością zakochuje się w hiszpańskiej
                                                siedemnastolatce. Gwałtowne uczucie wybucha z siłą, jakiej Rubio nie
                                                zaznał nigdy w życiu. Wydaje mu się, że w końcu poznał, co to szczęście.
                                                Ale zapomniał o jednym – jest w Hiszpanii, a nie w Ameryce. Tu sprawy
                                                nie układają się tak prosto, jak by chciał. Czy naprawdę potrafi nie
                                                tylko brać, ale i dawać szczęście?”
                                            </div>
                                        </div> <!-- END row-->
                                    </div> <!-- END container-->
                                </div>
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