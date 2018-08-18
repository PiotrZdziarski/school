@extends('layouts.app')
@section('title')
    Koło Wychowanków - Historia
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6"
         style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft">
                Koło Wychowanków - Historia
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft"
                data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item"><a href="{{url('/kolo_wychowankow')}}">Koło wychowanków</a></li>
                <li class="breadcrumb-item">Koło Wychowanków - historia</li>
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
                                            <h2>Koło Wychowanków - Historia od 1939 r.</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <p>
                                                Przedstawione organizacje byłych wychowanków i wychowanek szkół średnich
                                                łowickich do roku 1939 dobitnie świadczyły o istnieniu wśród nich żywej
                                                więzi koleżeńskiej. Odczuwano potrzebę jej utrzymywania. We
                                                wspomnieniach chętnie wracano do miejsc swoich młodzieńczych przeżyć,
                                                często bardzo dramatycznych.
                                            </p>

                                            <h6 class="paddingTop-40">Akademickie Koło Łowiczan</h6>
                                            <p>Po odzyskaniu niepodległości w 1918 roku, w Łowiczu funkcjonowały dwie
                                                szkoły średnie ogólnokształcące /męska i żeńska/. Znaczna część
                                                maturzystów i maturzystek kierowała się wówczas na studia do Warszawy.
                                                Powstało tam – na wzór innych – w 1921 roku Akademickie Koło Łowiczan.
                                                Wpisane zostało ono na listę
                                                stowarzyszeń studenckich Politechniki Warszawskiej. Należeli do niego
                                                nie tylko studenci Politechniki, ale również wszystkich ówczesnych
                                                uczelni stołecznych. Celem Akademickiego Koła Łowiczan było utrzymanie
                                                kontaktów wzajemnych i gromadzenie środków pieniężnych na udzielanie
                                                pomocy potrzebującym
                                                studentom. Opiekunem Koła był prof. Antoni Xiężopolski, wychowanek
                                                Łowickiej Szkoły Realnej. Jedyną formą łączności z dawnym środowiskiem
                                                były corocznie organizowane bale akademickie organizowane tradycyjnie w
                                                dniu 1 lutego w Łowiczu. Cieszyły się one zawsze bardzo dużym
                                                powodzeniem.

                                                Pracę kulturalną na rzecz środowiska łowickiego podjęto dopiero po 1930
                                                roku. Szczególne zaangażowanie w tym kierunku wykazali: Tadeusz
                                                Gumiński, Zygmunt Pągowski i Jan Wegner. Po przeszło dziesięcioletniej
                                                działalności Akademickie Koło Łowiczan w 1932 roku przestało istnieć.
                                                Ówczesne władze szczebla centralnego, mając trudności polityczne z
                                                opozycyjnie nastawioną młodzieżą akademicką, zabroniły działalności
                                                kołom prowincjonalnym skupiającym młodzież z kilku uczelni.
                                            </p>

                                            <h6 class="paddingTop-40">Koło b. Wychowańców Szkoły Realnej w Łowiczu</h6>
                                            <p>
                                                W warunkach odrodzonej państwowości polskiej odżyła zrodzona w niewoli
                                                idea utworzenia Koła b. Wychowańców Szkoły Realnej w Łowiczu. Wyraźne
                                                kształty przybrała ona na Zjeździe Koleżeńskim zorganizowanym w dniach 4
                                                i 5 czerwca 1922 roku. W punkcie 1. Uchwały Zjazdu przyjęto:
                                                Zorganizować Koło b. Wychowańców łowickiej szkoły realnej o szerokich
                                                celach społecznych i towarzyskich. Siedzibą Koła stała się Warszawa,
                                                gdzie mieszkała większość członków założycieli. Postawiono sobie
                                                szerokie pole działania. Priorytetem działalności było jednak
                                                podtrzymanie więzi koleżeńskiej i samopomoc, a także utrzymanie związku
                                                z Państwowym Gimnazjum Męskim im. Ks. Józefa Poniatowskiego w Łowiczu,
                                                będącego naturalnym przedłużeniem tradycji dawnej szkoły średniej.
                                                Pierwszym prezesem Koła został profesor Politechniki Warszawskiej
                                                Mieczysław Bronikowski. Obdarzony został godnością Prezesa Honorowego.

                                                Członkowie Koła b. Wychowańców Łowickiej Szkoły Realnej spotykali się na
                                                comiesięcznych zebraniach. Odbywały się one w pierwszy poniedziałek po
                                                piętnastym każdego miesiąca w Warszawie w lokalu Stowarzyszenia
                                                Techników przy ulicy Czackiego 3/5 o godzinie 19.00. Posiedzenia Zarządu
                                                organizowano w pierwszy poniedziałek po pierwszym każdego miesiąca w
                                                mieszkaniu adwokata Lucjana Parzyńskiego przy ulicy Jerozolimskiej 15.
                                                Spotykano się o godzinie osiemnaste
                                            </p>
                                            <br>
                                            Skład Zarządu przedstawiał się następująco:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>Mieczysław Bronikowski – prezes (zam. Lwowska 12 m. 5)</li>
                                                    <li>Czesław Rybiński – wiceprezes (zam. Piękna 52 m. 4)</li>
                                                    <li>Wacław Gaładyk – gospodarzowy (zam. Marszałkowska 72a m. 11)
                                                    </li>
                                                    <li>Stanisław Żarski – gospodarzowy (zam. Ogrodowa 32 m. 8)</li>
                                                    <li>Józef Sokołowski – sekretarz (zam. Koszykowa 30 m. 8)</li>
                                                    <li>Mieczysław Wielowieyski – skarbnik (zam. Bagatela 8 m. 1)</li>
                                                </ul>
                                            </div>

                                            <p>
                                                Poszerzył się także zakres działalności Koła. Przyjęto na siebie między
                                                innymi: zasilanie funduszu Towarzystwa Opieki Pozaszkolnej, opieka nad
                                                Gimnazjum im. Ks. Józefa Poniatowskiego (dawna Szkoła Realna w Łowiczu)
                                                w postaci substydiowania warsztatów, biblioteki, orkiestry itp., pomoc w
                                                opłacaniu czesnego studentów wyższych uczelni, b. wychowańców
                                                wspomnianego gimnazjum.
                                                <br>
                                                W 1924 roku zebrania koleżeńskie odbywały się w lokalu Lutni w gmachu
                                                Filharmonii (wejście od ulicy Sienkiewicza 8) w pierwszą sobotę po
                                                piętnastym każdego miesiąca o godzinie dwudziestej. Odbywały się również
                                                spotkania towarzyskie wraz z rodzinami i innymi zapraszanymi gośćmi.
                                                <br>
                                                Działalność wydawnicza była nader skromna. Oprócz jednostronicowych
                                                informacji z działalności Koła, wydano jedynie Kalendarzyk Koła b.
                                                Wychowańców Szkoły Realnej na rok 1923. Stanowi on dziś cenne źródło
                                                historyczne. Zawiera między innymi ponad czterysta nazwisk uczniów
                                                szkoły.
                                                <br>
                                                Przed III Zjazdem (z dnia 19 czerwca 1927 roku) odbyło się w Warszawie w
                                                dniu 21 maja 1927 roku V doroczne Walne Zebranie Koła Wychowańców b.
                                                Szkoły Realnej w Łowiczu.
                                            </p>

                                            <br>
                                            Wybrano Zarząd w składzie:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>Prezes – Mieczysław Bronikowski, prof. Politechniki
                                                        Warszawskiej
                                                    </li>
                                                    <li>Wiceprezes – Czesław Rybiński, generał</li>
                                                    <li>Sekretarz – Aleksander Janczewski, dyrektor</li>
                                                    <li>Sekretarz – Michał Grundwald</li>
                                                    <li>Skarbnik – Stanisław Arczyński, inżynier</li>
                                                    <li>Członek Zarządu – Stanisław Żarski, dyrektor</li>
                                                    <li>Członek Zarządu – Zygmunt Przyrembel, inżynier</li>
                                                    <li>Członek Zarządu – Wacław Gaładyk, inżynier</li>
                                                    <li>Zastępca Członka Zarządu – Edmund Strzałkowski, inżynier</li>
                                                    <li>Zastępca Członka Zarządu – Aleksander Gałajewski</li>
                                                    <li>Zastępca Członka Zarządu – Józef Sokołowski</li>
                                                </ul>
                                            </div>

                                            <br>
                                            Komisję Rewizyjną stanowili:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>Antoni Markowski</li>
                                                    <li>Zygmunt Łapiński</li>
                                                    <li>Stefan Kolaszyński</li>
                                                </ul>
                                            </div>

                                            <p>
                                                W 1932 roku wobec likwidacji Akademickiego Koła Łowiczan, zmniejszania
                                                się liczby członków na skutek ubytków naturalnych, dokonano zmiany
                                                statutu. Stowarzyszenie przyjęło nazwę Koło byłych wychowańców i
                                                wychowanek Średnich Szkół Łowickich (dawniej Koło byłych Wychowańców
                                                Łowickiej Szkoły Realnej). Jego siedzibą pozostała nadal Warszawa. Koło
                                                posiadało własną pieczęć. Odtąd jego członkami mogli być także
                                                przedstawiciele młodszego pokolenia wychowanego już w niepodległej
                                                Polsce. Celem Koła było zbliżenie pomiędzy sobą byłych wychowańców oraz
                                                byłych wychowanek Szkół Łowickich zarówno pod względem życia
                                                towarzyskiego, jak też i samopomocy materialnej. Koło posiadało
                                                osobowość prawną. Mogło nabywać nieruchomości, zawierać wszelkie umowy i
                                                zaciągać zobowiązania.
                                            </p>

                                            <br>
                                            Dla osiągnięcia tych celów Koło mogło:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>posiadać własny lokal, bibliotekę i czytelnię;</li>
                                                    <li>wyłaniać z grona swych członków komisję w celu rozpatrywania
                                                        spraw związanych z działalnością Koła
                                                    </li>
                                                    <li>gromadzić dane statystyczne związane z działalnością Koła</li>
                                                    <li>wydawać książki i broszury</li>
                                                    <li>utrzymywać stosunki ze stowarzyszeniami mającymi wspólne cele,
                                                        zapraszać specjalistów różnych dziedzin na odczyty i zebrania
                                                        dyskusyjne
                                                    </li>
                                                    <li>zorganizować kasę wzajemnej pomocy dla swych członków i ich
                                                        rodzin
                                                    </li>
                                                    <li>udzielać doraźnej pomocy materialnej swym członkom i ich
                                                        rodzinom
                                                    </li>
                                                    <li>organizować zjazdy, zebrania towarzyskie i wycieczki dla swych
                                                        członków i ich rodzin, rozwijać życie kulturalne i towarzyskie
                                                        wśród swych członków
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Członkowie Koła dzielili się na rzeczywistych i honorowych. Rzeczywistym
                                                członkiem Koła mógł być każdy wychowaniec lub wychowanka Szkół
                                                Łowickich, którzy zostali przyjęci przez Zarząd. Członków honorowych
                                                Koła wybierało Walne Zgromadzenie na wniosek Zarządu za wybitną
                                                działalność dla Koła. Nie mieli oni obowiązku płacenia składek.</p>

                                            <br>
                                            Członek rzeczywisty Koła miał prawo do:

                                            <div class="col-lg-12 paddingBottom-20">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>brania udziału w Walnych zgromadzeniach</li>
                                                    <li>stawiania wniosków i głosowania</li>
                                                    <li>wybierania i wybieralności</li>
                                                    <li>korzystania z pomocy Koła</li>
                                                </ul>
                                            </div>

                                            <br>
                                            Członkowie Koła mieli obowiązki:

                                            <div class="col-lg-12 paddingBottom-20">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>płacić regularnie składki</li>
                                                    <li>przestrzegać przepisów Statutu</li>
                                                    <li>wykonywać uchwały Walnych Zgromadzeń</li>
                                                    <li>wypełniać sumiennie funkcje powierzone im przez Koło</li>
                                                    <li>przyczyniać się w miarę możliwości do rozwoju i znaczenia Koła
                                                    </li>
                                                </ul>
                                            </div>

                                            <br>
                                            Członkowie Koła mieli obowiązki:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>jednorazowe wpisowe przy przyjęciu członka do Koła (w 1932 roku
                                                        wynosiło ono 5 zł)
                                                    </li>
                                                    <li>składki członków (10 zł rocznie)</li>
                                                    <li>opłaty nadzwyczajne, uchwalane i przeznaczane na cele wskazane
                                                        przez Walne Zgromadzenie
                                                    </li>
                                                    <li>ofiary i zapisy w gotówce, nieruchomościach, przedmiotach itp.
                                                    </li>
                                                    <li>dochody z ewentualnych przedsięwzięć urządzanych przez Koło</li>
                                                </ul>
                                            </div>

                                            <p>
                                                Zasady przechowywania tych funduszy określało Walne Zgromadzenie. Mogło
                                                ono też przeznaczyć ich część na kapitał rezerwowy oraz na inne cele.
                                            </p>
                                            <p>
                                                Najwyższą władzą było Walne Zgromadzenie członków Koła. Zarząd Koła
                                                zajmował się bieżącymi sprawami. Nad prawidłowością wydatków czuwała
                                                Komisja Rewizyjna. Składała się ona z trzech członków nie należących do
                                                składu Zarządu i wybieranych przez Walne Zgromadzenie. Zarząd Koła
                                                składał się z 7 członków i 3 zastępców, wybieranych spośród
                                                rzeczywistych członków na przeciąg trzech lat. Członkowie Zarządu
                                                wybierali corocznie ze swego grona prezesa, wiceprezesa, sekretarza i
                                                jego zastępcę oraz skarbnika. Spotykali się w miarę potrzeb, lecz nie
                                                mniej niż sześć razy do roku. Zarząd reprezentował Koło na wszystkich
                                                imprezach zewnętrznych, zarządzał wszelkimi sprawami i majątkiem
                                            </p>

                                            <br>
                                            Członkami założycielami stowarzyszenia byli:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>Czesław Rybiński, generał</li>
                                                    <li>Mieczysław Bronikowski, profesor Politechniki Warszawskiej</li>
                                                    <li>Lucjan Parzyńsk, adwokat</li>
                                                    <li>Władysław Łopieński</li>
                                                </ul>
                                            </div>

                                            <p>
                                                Ostatnią informacją o działalności Koła, w okresie międzywojennym, jest
                                                sprawozdanie z Walnego Zgromadzenia Koła, które odbyło się 19 czerwca
                                                1937 roku w Warszawie w lokalu Lutni. Oprócz bieżących spraw tyczących
                                                się działalności statutowej, przeprowadzono wybory do Zarządu.
                                            </p>

                                            <br>
                                            Po wyborach skład Zarządu przedstawiał się następująco:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>prof. Mieczysław Bronikowski – prezes</li>
                                                    <li>dr inż. Zygmunt Przyrembel – wiceprezes</li>
                                                    <li>Antoni Markowski – wiceprezes</li>
                                                    <li>inż. Michał Grundwald – sekretarz</li>
                                                    <li>Leon Koss – skarbnik</li>
                                                </ul>
                                            </div>

                                            <p>
                                                Członkami Zarządu zostali: inż. Wacław Gaładyk, inż. Stanisław
                                                Arczyński, inż. Stefan Ołdakowski, ich zastępcami: inż. Edmund
                                                Strzałkowski, Alicja Bublewska i mec. Zygmunt Modzelewski.
                                                <Br>
                                                Przedstawiono i jednogłośnie przyjęto wniosek o nie przyjmowaniu w
                                                poczet członków Koła Żydów i osób pochodzenia żydowskiego.
                                                <Br>
                                                Bardzo istotnym wydarzeniem było powstanie Oddziału Łowickiego Koła b.
                                                Wychowanków i Wychowanek Średnich Szkół Łowickich. Brak bliższych
                                                informacji co do daty jego powstania.
                                                <Br>
                                                Dnia 10 września 1936 roku odbyło się w świetlicy Pocztowego
                                                Przysposobienia Wojskowego w Łowiczu Nadzwyczajne Walne Zgromadzenie
                                                Oddziału. Na przewodniczącego Zebrania wybrano Franciszka Balcera.
                                                Omówiono między innymi program prac Oddziału, jego historię i
                                                przeprowadzono uzupełniające wybory do Zarządu.
                                            </p>

                                            <br>
                                            Skład Zarządu przedstawiał się następująco:

                                            <div class="col-lg-12 paddingBottom-40">
                                                <ul class="list-unstyled list-style-icon list-icon-bullet">
                                                    <br>
                                                    <li>mgr Janina Bączkowska – prezes</li>
                                                    <li>mgr Barbara Szmidtówna – I wiceprezes</li>
                                                    <li>Janina Ostrowska – II wiceprezes</li>
                                                    <li>Ludwika Hartwiżanka – skarbnik</li>
                                                    <li>Franciszek Balcer – członek</li>
                                                    <li>Eugenia Szeremeti – członek</li>
                                                    <li>Irena Adamczykowa – członek</li>
                                                    <li>Eugeniusz Kolaszyński – zastępca członka</li>
                                                    <li>S. Tomaszkiewicz – zastępca członka</li>
                                                </ul>
                                            </div>

                                            <p>
                                                Poczynania Zarządu Oddziału bardzo pozytywnie ocenił prof. Mieczysław
                                                Bronikowski. Dalszą działalność Koła i Jego Oddziału uniemożliwił wybuch
                                                wojny w 1939 roku. roku.
                                            </p>

                                            <p>
                                                Wychowankowie Łowickiej Szkoły Realnej, którzy uczęszczali do niej po
                                                strajku szkolnym 1905 roku nie byli przyjmowani na członków wymienionych
                                                organizacji, chociaż po pewnym czasie społeczeństwo polskie odstąpiło od
                                                bojkotu szkoły rosyjskiej. W tej sytuacji zmuszeni oni byli do odbycia w
                                                Łowiczu własnego Zjazdu w dniu 29 czerwca 1924 roku. Natomiast
                                                uczestnicy strajku szkolnego w 1905 roku, zgromadzili się na Zjeździe
                                                Koleżeńskim w 25 rocznicę jego wybuchu to jest w 1930 roku.
                                            </p>

                                            <h6 class="paddingTop-40">Koło Wychowanek Żeńskiej Szkoły Łowickiej</h6>
                                            <p>
                                                W dniu 8 czerwca 1924 roku zostało zawiązane Koło Wychowanek Żeńskiej
                                                Szkoły Łowickiej. Miało ono na celu podtrzymanie więzów koleżeńskich,
                                                organizowanie współżycia koleżeńskiego i gromadzenie środków finansowych
                                                na budowę bursy im. Bronisławy Bronikowskiej dla uczennic wymienionej
                                                szkoły. Przewodniczącą Koła była Irena Jędrzejewska. Pierwsze zebranie
                                                odbyło się w niedzielę 15 czerwca o godzinie jedenastej. Brak jest
                                                bliższych szczegółów o działalności tego Koła.
                                            </p>

                                            <h6 class="paddingTop-40">Koło b. Wychowanków Państwowego Seminarium
                                                Nauczycielskiego</h6>
                                            <p>
                                                Również przy Państwowym Seminarium Nauczycielskim w Łowiczu istniało od
                                                1923 roku Koło Maturzystów, zwane inaczej Kołem Byłych Wychowanków.
                                                Celem działalności tego Koła, jak i poprzednio omówionych, było przede
                                                wszystkim utrzymywanie kontaktu ze szkołą, z nauczycielami i młodszymi
                                                kolegami oraz, ze względu na specyfikę szkoły, wzajemne dzielenie się
                                                doświadczeniami i przeżyciami ze swojej pracy zawodowej. Dla realizacji
                                                swych celów, Koło organizowało co pięć lat Zjazdy Koleżeńskie, na
                                                których oprócz wzajemnych spotkań i miłych wspomnień, zebrani
                                                wysłuchiwali także naukowych referatów, wygłaszanych przez
                                                znakomitości szczególnie z nauk pedagogicznych. Na zjazdach podejmowano
                                                wszelkiego rodzaju uchwały. Do wykonania ich powoływano zarząd, który
                                                miał także na celu zorganizowanie następnego zjazdu. W miarę potrzeb
                                                organizowano zebrania. Zarząd spełniał również funkcję reprezentacyjną.
                                                Długoletnim prezesem Koła Byłych Wychowanków Państwowego Seminarium
                                                Nauczycielskiego w Łowiczu był Stefan Tomaszewski.
                                            </p>

                                            <p>
                                                Stosunek Koła do swej macierzystej uczelni był bardzo serdeczny. Nici
                                                wdzięczności i przyjaźni łączyły absolwentów seminarium z jego
                                                dyrektorami i nauczycielami. Dzięki temu, Koło przez swych
                                                przedstawicieli, brało czynny udział we wszystkich ważniejszych
                                                uroczystościach szkolnych.
                                            </p>

                                            <p>
                                                Członkowie Koła pomogli przy organizacji uroczystości z okazji
                                                piętnastolecia upaństwowienia seminarium. Z tej okazji w listopadzie
                                                1934 roku odbył się nadzwyczajny zjazd absolwentów. Koło Maturzystów
                                                było także jednym z fundatorów tablicy pamiątkowej ku czci poległych
                                                uczniów w 1920 roku. Przychodzono także z pomocą materialną niezamożnym,
                                                ale zdolnym uczniom. W tym celu założono specjalny fundusz stypendialny.
                                            </p>
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