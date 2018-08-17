@extends('layouts.app')
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Biblioteka - Filmoteka
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a>
                <li class="breadcrumb-item"><span class="opacity-08">Informacje</span>
                <li class="breadcrumb-item"><a href="{{url('/biblioteka_o_miejscu')}}">Biblioteka</a>
                <li class="breadcrumb-item">Filmoteka</li>
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
                                        <div class="col-12 mb-1 text-center paddingTop-15 paddingBottom-20">
                                            <h2>Biblioteka - Fimoteka</h2>
                                        </div>
                                        <div class="col-lg-11 mx-auto">
                                            <h3>Ekranizacje lektur szkolnych</h3>
                                            <div class="col-lg-12 paddingBottom-40 paddingTop-5">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet lipadding">
                                                    <li>CHŁOPI</li>
                                                    <li>DZIADY</li>
                                                    <li>DŻUMA</li>
                                                    <li>FERDYDURKE</li>
                                                    <li>FOLWARK ZWIERZĘCY</li>
                                                    <li>GRANICA</li>
                                                    <li>HAMLET</li>
                                                    <li>LALKA</li>
                                                    <li>LUDZIE BEZDOMNI</li>
                                                    <li>MORALNOŚĆ PANI DULSKIEJ</li>
                                                    <li>NAD NIEMNEM</li>
                                                    <li>NOCE I DNIE</li>
                                                    <li>PAN TADEUSZ</li>
                                                    <li>PANNY Z WILKA</li>
                                                    <li>POPIÓŁ I DIAMENT</li>
                                                    <li>POŻEGNANIE Z MARIĄ</li>
                                                    <li>PROCES</li>
                                                    <li>PRZEDWIOŚNIE</li>
                                                    <li>STARY CZŁOWIEK I MORZE</li>
                                                    <li>WESELE</li>
                                                    <li>WIERNA RZEKA</li>
                                                </ul>
                                            </div>

                                            <h3>Klasyka kina</h3>

                                            <p><b>1. KINO MYŚLI</b>
                                            <Br>Struktura kryształu – reż. K. Zanussi
                                                <Br> Tango – reż. Z. Rybczyński

                                            </p>

                                            <p><b>2. MORALNOŚĆ KAMERY</b>

                                                <Br>Nienormalni – reż. J. Bławut
                                                <Br>    Z punktu widzenia nocnego portiera – reż. K. Kieślowski
                                            </p>


                                            <p><b>3. OBSERWACJE CODZIENNOŚCI</b>

                                                <Br>Cześć Tereska – reż. R. Gliński
                                                <Br>    Rodzina Człowiecza – reż. W. Ślesicki
                                            </p>


                                            <p><b>4. KADRY PAMIĘCI</b>

                                                <Br> Jak być kochaną – reż. W.J. Has
                                                <Br>     Portret własny – reż. J. Skalski
                                            </p>


                                            <p><b>5. OBRAZY MAGICZNE</b>

                                                <Br> Historia kina w Popielawach – reż. J.J. Kolski
                                                <Br>    Oczy uroczone – reż. P. Szulkin
                                            </p>


                                            <p><b>6. FILMOWE PRZYPOWIEŚCI</b>

                                                <Br> Żywot Mateusza – reż. W. Leszczyński
                                                <Br>    Schody – reż. S. Schabenbeck
                                                <Br> Arka – reż. G. Jonkajtys
                                            </p>



                                            <p><b>7. SIŁA SYMBOLU</b>

                                                <Br> Popiół i diament – reż. A. Wajda
                                                <Br>     Krótka historia jednej tablicy – reż. F. Falk
                                                <Br> Chleb – reż. G. Skurski
                                            </p>



                                            <p><b>8. METAFORY PRAWDY</b>

                                                <Br> Wszystko może się przytrafić – reż. M. Łoziński
                                                <Br>     Szczurołap – reż. A. Czarnecki
                                                <Br>  Siedem kobiet w różnym wieku – reż. K. Kieślowski
                                            </p>



                                            <p><b>9. MÓWIĆ NIE WPROST</b>

                                                <Br>  Rejs – reż. M. Piwowski
                                                <Br>      Urząd – reż. K. Kieślowski
                                            </p>


                                            <p><b>10. BEZ KOMENTARZA?</b>

                                                <Br> Defilada – reż. A. Fidyk
                                                <Br>      Egzamin dojrzałości – reż. M. Łoziński
                                            </p>


                                            <p><b>11. ROZDROŻA HISTORII</b>

                                                <Br>  Człowiek z marmuru – reż. A. Wajda
                                                <Br>     Dokąd – reż. P. Kędzierski
                                            </p>


                                            <p><b>12. ZAPISY PRZESZŁOŚCI</b>

                                                <Br> Usłyszcie mój krzyk – reż. M. Drygas
                                                <Br>       Fotoamator – reż. D. Jabłoński
                                            </p>


                                            <p><b>13. WOKÓŁ NARODOWYCH STEREOTYPÓW</b>

                                                <Br>   Eroica – reż. A. Munk
                                                <Br>      Ostry film zaangażowany – reż. J. Antonisz
                                            </p>


                                            <p><b>14. GORZKI ŚMIECH</b>

                                                <Br>   Zezowate szczęście – reż. A. Munk
                                                <Br>       Fotel – reż. D. Szczechura
                                            </p>


                                            <p><b>15. W KRZYWYM ZWIERCIADLE</b>

                                                <Br>  Hydrozagadka – reż. A. Kondratiuk
                                                <Br>      Polska kronika non-camerowa nr.-1 – reż. J. Antonisz
                                            </p>


                                            <p><b>16. WSPÓŁCZESNE LĘKI</b>

                                                <Br>  Dług – reż. K. Krauze
                                                <Br>      Nasza ulica – reż. M. Latałło
                                            </p>


                                            <p><b>17. PORTRETY ZBIOROWOŚCI</b>

                                                <Br>   Sól ziemi czarnej – reż. K. Kutz
                                                <Br>      Jestem zły – reż. G. Pacek
                                            </p>


                                            <p><b>18. MALI BOHATEROWIE</b>

                                                <Br>  Abel, twój brat – reż. J. Nasfeter
                                                <Br>      Męska Sprawa – S. Fabicki
                                            </p>


                                            <p><b>19. MIĘDZY FIKCJĄ A RZECZYWISTOŚCIĄ</b>

                                                <Br>   Ucieczka z kina „Wolność” – reż. W. Marczewski
                                                <Br>      Exit – reż. G. Koncewicz
                                            </p>


                                            <p><b>20. POEZJA I PROZA KINA</b>

                                                <Br>    Aria dla atlety – reż. F. Bojan
                                                <Br>        Dziewczyny do wzięcia – reż. J. Kondratiuk
                                            </p>


                                            <p><b>21. KINO O KINIE</b>

                                                <Br>  Amator – reż. K. Kieślowski
                                                <Br>       Ćwiczenia warsztatowe – reż. M. Łoziński
                                            </p>


                                            <p> <b>22.GRY FILMOWE</b>

                                            <Br>   Deja vu – reż. J. Machulski
                                            <Br>   Wyjście na jaw robotników kina z fabryki snów – reż. M. Dudziewicz.
                                           </p>


                                            <p><b>23. MALARSKIE INSPIRACJE</b>

                                                <Br>    Brzezina – reż. A. Wajda
                                                <Br>      Łagodna – reż. P. Dumała
                                            </p>


                                            <p><b>24. NOWA ESTETYKA</b>

                                                <Br>   Gry uliczne – reż. K. Krauze
                                                <Br>      Strojenie instrumentów – reż. J. Kucia
                                            </p>


                                            <p><b>25. ESEJ FILMOWY</b>

                                                <Br>  Iluminacja – reż. K. Zanussi
                                                <Br>       Prekursor – reż. G. Królikiewicz
                                            </p>


                                            <p><b>26. KIM JESTEM?</b>

                                                <Br>   Zmruż oczy – reż. A. Jakimowski
                                                <Br>       Gadające głowy – reż. K. Kieślowski
                                            </p>

                                            <h3 class="paddingTop-40">Z cyklu gazeta wyborcza poleca</h3>

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet lipadding">
                                                    <li>Amadeusz – reż. M. Forman</li>
                                                    <li>Casablanca – reż. M. Curtiz</li>
                                                    <li>Deszczowa piosenka – reż. S. Donen, G. Kelly</li>
                                                    <li>Doktor Żywago – reż.D. Lean</li>
                                                    <li>Imię róży – reż. Annaud</li>
                                                    <li>Lot nad kukułczym gniazdem – reż. M. Forman</li>
                                                    <li>Powiększenie – reż. M. Antonioni</li>
                                                    <li>Przeminęło z wiatrem – prod. i realizacja D.O. Selznick, V. Fleming</li>
                                                    <li>Rio Bravo – reż. H. Hawks</li>
                                                    <li>Ziemia obiecana – reż. A. Wajda</li>
                                                </ul>
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