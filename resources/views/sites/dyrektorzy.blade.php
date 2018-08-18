@extends('layouts.app')
@section('title')
    Dyrektorzy
@endsection
@section('content')


    <div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url(assets/img/breadcrumb-bg.jpg) no-repeat; background-position: 55%;">
        <div class="container">
            <h1 class="text-white wow slideInLeft" >
                Dyrektorzy
            </h1>
            <ol class="breadcrumb breadcrumb-double-angle text-white bg-transparent p-0 wow slideInLeft" data-wow-delay=".3s">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Strona główna</a></li>
                <li class="breadcrumb-item"><span class="opacity-08">Szkoła</span></li>
                <li class="breadcrumb-item">Dyrektorzy</li>
            </ol>
        </div>
    </div>

    <section class="padding-y-40 bg-light">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mt-4 nopaddinglowwidth">
                    <div class="card shadow-v1">
                        <div class="card-body padding20lowwidth">
                            <section id="content">
                                <h2 class="card-title">
                                    Dyrektorzy
                                </h2>
                                <img class="float-left paddingTop-20 paddingRight-20 paddingTop-10 portraitimage" src="{{url('assets/img/subpages/elżbietaskoneczna.jpg')}}">
                                <h4 class="my-3 paddingTop-15">
                                    Elżbieta Skoneczna
                                </h4>
                                <p>
                                    Urodziła się 4 lipca 1955 roku w Bolimowie. Absolwentka Uniwersytetu Warszawskiego, magister filologii polskiej, nauczyciel dyplomowany. Stanowisko dyrektora I Liceum Ogólnokształcącego w Łowiczu objęła
                                    1 września 2007 roku. Jest dobrym organizatorem pracy, przykłada wielką wagę do podnoszenia poziomu dydaktycznego i wychowawczego szkoły, zapewniając odpowiednie warunki do realizacji zadań w tych obszarach działalności szkoły. Inspiruje nauczycieli i włącza ich do podejmowania decyzji dotyczących szkoły, docenia ich ogromny wkład pracy w osiąganiu tak wysokiego poziomu szkoły, okazuje szacunek dla zespołu, którym kieruje. Umożliwia nauczycielom wszechstronny dostęp do doskonalenia zawodowego, zapewnia pomoc w realizacji ich zadań. Jest dobrym gospodarzem obiektów szkolnych, dzięki Niej zostały przeprowadzone w szkole liczne remonty i udogodnienia mające na celu zapewnienie bezpieczeństwa uczniom i nauczycielom oraz stworzenie lepszych warunków pracy. Dba o wyposażenie szkoły we wszelkiego rodzaju pomoce dydaktyczne, tworzy warunki do rozwijania zainteresowań i pasji uczniów. Promuje szkołę w środowisku lokalnym, m.in. stwarzając warunki do organizowania różnorodnych konkursów, umożliwiając udział nauczycieli i uczniów we wszelkich inicjatywach lokalnych. Jest świetnym nauczycielem – polonistą, prawdziwym „człowiekiem renesansu”, uczy myśleć, podkreślając ponadczasowość ludzkich uczuć, pragnień, problemów. Rozbudza miłość do literatury, uczy odbioru i interpretacji wszelkich tekstów kultury, jej uczniowie osiągają sukcesy w Olimpiadzie Języka Polskiego i Konkursach Literackich. Fascynacja teatrem i filmem zaowocowała sukcesami jej uczniów w Przeglądzie Teatrów Młodzieżowych i Konkursach Wiedzy o Filmie. W centrum uwagi Naszej Pani Dyrektor zawsze pozostaje uczeń – to on jest najważniejszym podmiotem w szkole – jego wszechstronny rozwój i wychowanie na godnego obywatela i prawego człowieka to priorytet do którego dąży wspomagana przez nauczycieli.
                                </p>

                                <div class="paddingTop-15">
                                    <img class="float-left paddingTop-20 paddingRight-20 paddingTop-10 portraitimage" src="{{url('assets/img/subpages/hzasepa.jpg')}}">
                                    <h4 class="my-3 paddingTop-5">
                                        dr Henryk Zasępa
                                    </h4>
                                    <p>
                                        Urodził się 4 marca 1952 roku w Piotrkowie Trybunalskim w rodzinie nauczycielskiej. Szkołę średnią – Technikum Mechaniczne ukończył w Skierniewicach w 1971 roku. Studia wyższe na Uniwersytecie im. Adama Mickiewicza w Poznaniu na Wydziale Matematyki, Fizyki i Chemii ukończył z wyróżnieniem w 1977 roku uzyskując tytuł magistra matematyki.
                                        1 września podjął pracę w charakterze nauczyciela matematyki i informatyki w Liceum Ogólnokształcącym im. Józefa Chełmońskiego w Łowiczu. W 1979 roku ukończył studia podyplomowe z informatyki. 16 czerwca 1989 roku mianowany został wicedyrektorem, a od 1 września 1992 roku dyrektorem liceum.

                                        W 1994 roku uzyskał drugi stopień specjalizacji zawodowej z organizacji i zarządzania oświatą. Poszerzył działalność innowacyjną w szkole, większość klas, to klasy autorskie. Za jego kadencji wprowadzone zostały egzaminy dojrzałości połączone z egzaminem wstępnym na Politechnikę Łódzką. W 1999 roku szkoła została całkowicie zwolniona z tych egzaminów.

                                        Od 1997 r. jest przewodniczącym Komisji Wojewódzkiej na terenie b. województwa skierniewickiego ds. stopni specjalizacji zawodowej z organizacji i zarządzania oświatą. W latach 1998 – 1999 był przewodniczącym Komisji Wojewódzkiej na terenie b. województwa skierniewickiego ds. stopni specjalizacji zawodowej z zakresu nauczania historii.

                                        W 1998 roku uzyskał tytuł doktora nauk humanistycznych w zakresie historii w Wyższej Szkole Pedagogicznej w Bydgoszczy.
                                    </p>
                                </div>

                                <div class="paddingTop-15">
                                    <img class="float-left paddingTop-20 paddingRight-20 paddingTop-10 portraitimage" src="{{url('assets/img/subpages/mjedrzejczak.jpg')}}">
                                    <h4 class="my-3 paddingTop-5">
                                        mgr Waldemar Jędrzejczak
                                    </h4>
                                    <p>
                                        Urodził się 22 marca 1945 roku we wsi Lipa koło Strykowa w rodzinie chłopskiej. Szkołę średnią – Korespondencyjne Liceum Ogólnokształcące w Łodzi ukończył w 1964 roku. W latach 1964 – 1969 studiował na Uniwersytecie Łódzkim na Wydziale Matematyki – Fizyki – Chemii, uzyskując tytuł magistra fizyki. Ukończył studia podyplomowe z zakresu fizyki. Na stanowisku dyrektora od 16 czerwca 1989 roku do 31 sierpnia 1992 roku.

                                        Pracował w Prezydium Wojewódzkiej Rady Narodowej w Łodzi jako praktykant, a następnie w charakterze nauczyciela w Liceum Ogólnokształcącym w Głownie i Zespole Szkół Rolniczych w Łowiczu. Pracę w Liceum Ogólnokształcącym im. Józefa Chełmońskiego rozpoczął 1 września 1986 roku. Na stanowisku dyrektora od 16 czerwca 1989 roku do 31 sierpnia 1992 roku. Za jego kadencji szkoła wprowadziła własny plan nauczania. Obecnie pracuje jako nauczyciel fizyki.
                                    </p>
                                </div>

                                <div class="paddingTop-15">
                                    <img class="float-left paddingTop-20 paddingRight-20 paddingTop-10 portraitimage" src="{{url('assets/img/subpages/jolsekniweicz.jpg')}}">
                                    <h4 class="my-3 paddingTop-5">
                                        mgr Julian Oleśkiewicz
                                    </h4>
                                    <p>
                                        Urodził się 11 lutego 1929 roku w Brzeziu woj. kieleckie. W Wodzisławiu w 1943 roku ukończył szkołę podstawową, a w 1948 roku gimnazjum ogólnokształcące. W latach 1949 – 1952 studiował na Wydziale Humanistycznym Państwowej Wyższej Szkoły Pedagogicznej w Łodzi i ukończył studia wyższe stopnia pierwszego w zakresie historii

                                        Wydział Oświaty Powiatowej Rady Narodowej w Łowiczu powierzył mu z dniem 1 marca 1964 roku pełnienie obowiązków zastępcy dyrektora Liceum Ogólnokształcącego.

                                        W 1952 roku podjął pracę we Wszechnicy Radiowej w Łodzi, skąd we wrześniu 1954 roku – decyzją Kuratorium Okręgu Szkolnego Łódzkiego – został przeniesiony do Liceum Ogólnokształcącego w Łowiczu na stanowisko nauczyciela historii. Jednocześnie od 1957 roku przez kilka lat prowadził zajęcia w Korespondencyjnym Liceum Ogólnokształcącym w Kutnie. Od 1960 roku pełnił obowiązki kierownika Uniwersytetu dla Rodziców w Łowiczu. W latach 1961 – 1962 nauczał geografii gospodarczej Polski w Państwowym Liceum Pielęgniarskim w Łowiczu. W 1963 roku powołany został na stanowisko kierownika Ogniska Metodycznego Historii. Wydział Oświaty Powiatowej Rady Narodowej w Łowiczu powierzył mu z dniem 1 marca 1964 roku pełnienie obowiązków zastępcy dyrektora Liceum Ogólnokształcącego. Dyrektorem mianowany został 1 września 1964 roku. Od 1965 roku opiekował się łowicką filią Liceum Ogólnokształcącego dla Pracujących w Zgierzu i pracował tam jako nauczyciel historii i wiedzy o Polsce.

                                        Egzamin magisterski zdał w 1978 roku, a w 1984 uzyskał drugi stopień specjalizacji zawodowej w zakresie nauczania historii.

                                        Przez dwie kadencje był radnym Miejskiej Rady Narodowej. Od 1978 roku był członkiem Komisji Wychowania, Oświaty, Kultury i Spraw Socjalnych Miejskiej Rady Narodowej. Za zasługi i osiągnięcia otrzymał następujące odznaczenia i nagrody: Złota Odznaka ZNP (1964 r.), Honorowa Odznaka Województwa Łódzkiego (1965 r.), Złoty Krzyż Zasługi (1968 r.), Nagroda III stopnia Ministra Oświaty i Wychowania (1972 r.), Medal Komisji Edukacji Narodowej (1976 r.), Złota Odznaka OHP (1982 r.), Medal 40-lecia Polski Ludowej (1984 r.), Odznaka za Zasługi dla Województwa Skierniewickiego (1987 r.).

                                        Zmarł nagle 20 maja 1989 roku w Łowiczu. Pochowany na Cmentarzu Kolegiackim.
                                    </p>
                                </div>

                                <div class="paddingTop-15">
                                    <img class="float-left paddingTop-20 paddingRight-20 paddingTop-10 portraitimage" src="{{url('assets/img/subpages/fzyto.jpg')}}">
                                    <h4 class="my-3 paddingTop-5">
                                        mgr Franciszek Żyto
                                    </h4>
                                    <p>
                                        Urodził się 23 lipca 1905 roku w Bąkowie Górnym koło Łowicza. W tej samej miejscowości ukończył Szkołę Powszechną. W okresie od 1 września 1922 roku do 20 czerwca 1923 roku był uczniem Państwowej Preparandy Nauczycielskiej w Skierniewicach, gdzie uzyskał świadectwo uprawniające do wstąpienia bez egzaminu na pierwszy kurs Państwowych Seminariów Nauczycielskich.

                                        Po odejściu ze stanowiska dyrektora Zbudniewka, od 15 lutego 1952 roku pełnił obowiązki dyrektora, był nauczycielem historii. 1 września 1958 roku otrzymał mianowanie na dyrektora.

                                        W latach 1923-1928 uczęszczał do Państwowego Seminarium Nauczycielskiego Męskiego w Łowiczu, gdzie po zdaniu egzaminu uzyskał świadectwo dojrzałości. W latach 1929-1939 pracował początkowo jako nauczyciel Publicznej Szkoły Powszechnej w Złakowie Borowym, a później jako Kierownik Publicznej Szkoły Powszechnej w Dąbkowicach Dolnych. W 1938 roku ukończył Państwowy Wyższy Kurs Nauczycielski w Warszawie. W latach 1935-1939 był słuchaczem rzeczywistym na wydziale humanistycznym i na wydziale matematycznym Wolnej Wszechnicy Polskiej w Warszawie.

                                        We wrześniu 1939 roku w walkach toczonych z hitlerowcami, jako podporucznik dowodził kompanią X Pułku Piechoty z Łowicza. W latach 1939-1945 był w niewoli niemieckiej, jako jeniec wojenny w oflagu VI B Dössel-Warburg. Po wyzwoleniu przez wojska alianckie przebywał w Polskim Obozie Wojskowym „Dössel” w Peckelsheim, skąd w sierpniu 1945 roku powrócił do Polski.

                                        Od września 1945 roku rozpoczął pracę jako nauczyciel w Liceum Pedagogicznym w Łowiczu. Był popularyzatorem kultury ludowej, prowadził m.in. Młodzieżowy Zespół Pieśni i Tańca składający się z uczniów tejże szkoły. W latach 1945-1952 studiował na Uniwersytecie Łódzkim na wydziale humanistycznym, gdzie 19 maja 1952 roku uzyskał stopień magistra filozofii w zakresie pedagogiki.

                                        Po odejściu ze stanowiska dyrektora Zbudniewka, od 15 lutego 1952 roku pełnił obowiązki dyrektora, był nauczycielem historii. 1 września 1958 roku otrzymał mianowanie na dyrektora. Jako działacz Towarzystwa Wiedzy Powszechnej wygłaszał odczyty z różnych dziedzin w wielu osadach i wsiach powiatu łowickiego, za co został odznaczony w 1960 roku srebrną odznaką honorową „Zasłużony Popularyzator Wiedzy TWP”. Za całokształt pracy w zawodzie nauczycielskim został odznaczony w 1958 roku Złotą Odznaką Związku Nauczycielstwa Polskiego. W 1956 roku otrzymał Złoty Krzyż Zasługi.

                                        W latach 1957-1959 był radnym Wojewódzkiej Rady Narodowej w Łodzi. W tym okresie podjął zamysł budowy nowego gmachu Liceum Ogólnokształcącego. Prace budowlane pod ścisłym Jego nadzorem i przy dużym zaangażowaniu osobistym trwały trzy lata (1958-1961). Był On nauczycielem z wyboru i powołania, bardzo kochał swój zawód i młodzież. Pracował z prawdziwym oddaniem i zaangażowaniem.

                                        Dyrektor Franciszek Żyto był żonaty z Józefą, z domu Czapik, nauczycielką z zawodu. Miał dwoje dzieci: córkę Halinę i syna Wiesława.

                                        Zmarł 5 sierpnia 1964 roku w Łowiczu. Pochowany na Cmentarzu Kolegiackim.
                                    </p>
                                </div>

                                <div class="paddingTop-15">
                                    <img class="float-left paddingTop-20 paddingRight-20 paddingTop-10 portraitimage" src="{{url('assets/img/subpages/janzbudniewek.jpg')}}">
                                    <h4 class="my-3 paddingTop-5">
                                        Jan Zbudniewek
                                    </h4>
                                    <p>
                                        Urodził się 6 grudnia 1898 roku w miejscowości Lnisno niedaleko Skierniewic. Dzieciństwo jego niczym nie różniło się od dzieciństwa ówczesnych dzieci wiejskich. W miarę dorastania uczęszczał do szkółki parafialnej w pobliskich Janisławicach.
                                        1 lutego 1945 roku objął stanowisko dyrektora Gimnazjum i Liceum Ogólnokształcącego w Łowiczu.

                                        W 1908 roku, zgodnie z wolą ojca, wyjechał do Łowicza, gdzie został uczniem pierwszej klasy Szkoły Realnej. Wybuch I wojny światowej w 1914 roku przerwał dalsze kształcenie. Ukończył wówczas 5 klas. W 1915 roku, w porozumieniu z ojcem zorganizował w rodzinnej wsi szkołę elementarną. Został jej pierwszym nauczycielem. Po ustabilizowaniu się sytuacji na froncie wrócił do Łowicza. 6 września 1916 roku został wpisany na listę uczniów klasy szóstej Państwowego Gimnazjum im. Ks. J. Poniatowskiego. Pieniądze na osobiste wydatki zdobywał udzielając korepetycji z matematyki. Świadectwo dojrzałości otrzymał 14 czerwca 1919 roku. W październiku tego samego roku podjął studia na wydziale filozoficznym Uniwersytetu Warszawskiego. Studiował matematykę i fizykę. W trakcie studiów brał udział w wojnie polsko-bolszewickiej w 1920 roku. Dyplom z prawem nauczania matematyki i fizyki otrzymał w 1923 roku.

                                        Pierwszą pracę w szkole średniej podjął w prywatnym gimnazjum w Milanówku, gdzie dyrektorem był Jan Wojnicz-Sianożęcki. 19 listopada 1928 roku otrzymał dyplom nauczyciela szkół średnich. Po sześciu latach pracy przeniósł się do Włocławka, gdzie uczył matematyki w żeńskim prywatnym gimnazjum. Tam poznał Marię Rudzką, którą pojął za żonę w 1931 roku. W dwa lata później przenieśli się do Kalisza. Władze oświatowe, widząc jego zaangażowanie, przeniosły go w 1935 roku do Łowicza na stanowisko pełniącego obowiązki dyrektora Państwowego Gimnazjum im. Ks. J. Poniatowskiego. W trzy lata później został mianowany dyrektorem Pierwszego Państwowego Liceum i Gimnazjum im. Ks. Józefa Poniatowskiego.

                                        Okres II wojny światowej, to okres 6-letniej pracy w tajnym nauczaniu. 1 lutego 1945 roku objął stanowisko dyrektora Gimnazjum i Liceum Ogólnokształcącego w Łowiczu. Jan Zbudniewek był często prześladowany, ponieważ nie zgadzał się z ideologią rodzącego się komunizmu. Na tym tle bardzo często dochodziło do konfliktów między dyrektorem, a młodzieżą należącą do ZMP. Uznano go za „wroga socjalizmu” i zwolniono ze stanowiska dyrektora w 1952 roku. W nowej dla siebie sytuacji podjął pracę w tym samym liceum lecz jako tylko nauczyciel matematyki. Nie angażował się w żadną pracę społeczną. W roku 1957 doszło do procesu rehabilitacyjnego, ale na poprzednio zajmowane stanowisko nie wrócił.

                                        Rok 1960 rozpoczął nowy etap w jego życiu. Rozpoczął prace związane z organizacją Liceum Medycznego w Łowiczu. Został pierwszym jego dyrektorem. W 1964 roku nadzorował prace przy budowie nowego gmachu szkoły, który oddany został do użytku 12 lutego 1968 roku. W 1970 roku odszedł na emeryturę.

                                        Za swoje wybitne osiągnięcia w pracy pedagogicznej, wychowawczej i społecznej otrzymał szereg odznaczeń państwowych i resortowych.

                                        Zmarł 23 czerwca 1981 roku. Pochowany został na Cmentarzu Kolegiackim (obecnie Katedralnym). W piątą rocznicę śmierci, staraniem jego wychowanków, wmurowana została w kościele Księży Pijarów w Łowiczu pamiątkowa tablica.
                                    </p>
                                </div>


                                <div class="paddingTop-15">
                                    <h4 class="my-3 paddingTop-5">
                                        Edward Biegański
                                    </h4>
                                    <p>
                                        Urodził się 20 lipca 1887 roku w Grodnie. Jako uczeń miejscowego gimnazjum należał do PPS i tajnego kółka samokształceniowego. W 1905 roku był współorganizatorem strajku młodzieży. Studiował na Wydziale Matematyczno – Przyrodniczym Uniwersytetu w Petersburgu, który ukończył w 1913 roku. W czasie studiów utrzymywał się z udzielanych korepetycji.

                                        Kontynuował swoją przynależność do PPS. Lata 1914-1919 spędził w Rosji pracując jako nauczyciel matematyki. W 1920 roku wstąpił w Wilnie do wojska.

                                        W roku szkolnym 1920/21 rozpoczął pracę jako nauczyciel matematyki w Gimnazjum im. Ks. J. Poniatowskiego w Łowiczu. Następnie przeniósł się do Gimnazjum im. J. Lelewela w Wilnie, gdzie od roku szkolnego 1924/25 został jego dyrektorem. Był uzdolnionym nauczycielem matematyki, człowiekiem prawym i tego samego wymagał od uczniów. To doprowadziło do tragicznego wydarzenia. Podczas krwawego zajścia na egzaminie maturalnym został ranny (do pokoju, w którym odbywała się sesja egzaminacyjna, wrzucono granat zaczepny). Po rekonwalescencji wrócił do Łowicza. 26 sierpnia 1925 roku został mianowany dyrektorem Gimnazjum im. Ks. J. Poniatowskiego. W tym czasie, po opuszczeniu gmachu przez Państwowe Seminarium Nauczycielskie, jego część południowa i zachodnia uległy gruntownej przebudowie. Dyrektor został obarczony nowymi zadaniami. Odpowiadał za prowadzone prace i ich prawidłowe wykonanie. Niektóre pomieszczenia zostały przebudowane i przystosowane do wymogów szkolnych. Pierwsze i drugie piętro przekształcono w salę gimnastyczną, jak na owe czasy bardzo nowoczesną. Dyrektor Biegański był dumny z wykonanych prac.

                                        Podobnie jak jego poprzednik, przywiązywał wagę do ubioru uczniów. Jednak z upływem czasu jego wymagania w tym względzie malały. Był surowy i wymagający zarówno w stosunku do uczniów, jak i nauczycieli, ale cieszył się ogólnym szacunkiem wśród jednych i drugich. W wyniku tych działań zmniejszyła się liczba drugorocznych. W niedługim czasie szkoła zyskała opinię jednej z najlepszych w kraju. Maturzyści łowickiego gimnazjum byli wysoko oceniani podczas egzaminów na wyższe uczelnie. Dyrektor zwracał szczególną uwagę na właściwe spędzanie wolnego czasu przez młodzież. Przywiązywał wiele wagi do zajęć sportowych czy też udziału w zajęciach chóru.

                                        Miał doświadczenie jeszcze z Grodna w dziedzinie pożarnictwa, w 1933 roku został mianowany komisarycznym prezesem Zarządu SOP, a w 1934 roku został prezesem Powiatowego Zarządu OSP, Towarzystwa Przyjaciół Związku Strzeleckiego. W 1934 roku przeniesiony został na stanowisko dyrektora Gimnazjum im. Kazimierza Wielkiego w Zduńskiej Woli, gdzie 29 stycznia 1935 roku zginął od kuli z ręki mordercy – rabusia. Pochowany został na Cmentarzu Kolegiackim w Łowiczu.

                                        Za swoją działalność odznaczony był Złotym Krzyżem Zasługi. O jego żonie i dzieciach brak bliższych informacji.
                                    </p>
                                </div>

                                <div class="paddingTop-15">
                                    <h4 class="my-3 paddingTop-5">
                                        dr Wanda Ostoja – Roguska
                                    </h4>
                                    <p>
                                        Urodziła się 26 grudnia 1885 roku w Warszawie. Jej ojciec był inżynierem kolejowym. Po ukończeniu szkoły średniej, prawdopodobnie w 1902 roku, rozpoczęła pracę jako nauczycielka w prywatnych szkołach powszechnych w miejscowościach pod – warszawskich. W latach 1906 – 1909 pracowała w szkole w Nałęczowie. Studiowała nauki przyrodnicze na Uniwersytecie w Genewie, który ukończyła w 1912 roku.

                                        Po powrocie do kraju pracowała w szkołach średnich Zawiercia i Warszawy. W 1920 roku objęła stanowisko dyrektorki Państwowego Gimnazjum Żeńskiego im. J. U. Niemcewicza w Łowiczu. Dbała o wszechstronny rozwój uczennic. Za jej rządów organizowane były często imprezy artystyczne, przepojone patriotyczną atmosferą, przedstawienia teatralne, wycieczki krajoznawcze. Obowiązkowa była umiejętność jazdy na rowerze. W tym celu zakupiono potrzebny sprzęt. Dzięki jej staraniom zorganizowana została bursa dla uczennic w specjalnie na ten cel zakupionym budynku przy ulicy Chemicznej. Bursa ta nosiła imię zasłużonej przełożonej Bronisławy Bronikowskiej. W trakcie swego czternastoletniego pobytu w Łowiczu dała się poznać jako człowiek niezwykłej pracowitości i sumienności. Swoją misję nauczycielską kontynuowała na stanowisku dyrektorki Gimnazjum i Liceum im. Klaudyny Potockiej w Pułtusku, aż do wybuchu II wojny światowej. W tym czasie zakończyła budowę nowej siedziby szkoły. Podczas okupacji uczestniczyła w tajnym nauczaniu.

                                        Po wyzwoleniu organizowała Gimnazjum i Liceum im. Reginy Żółkiewskiej w Płocku. Do 1948 roku pełniła obowiązki dyrektorki tej szkoły. Ze stanowiska tego odeszła na własne żądanie, przyjmując obowiązki nauczycielki w XX Liceum im. Elizy Orzeszkowej w Warszawie na Pradze. W roku 1957 obchodziła jubileusz 50 – lecia pracy pedagogicznej. Była autorką podręcznika dla nauczycieli i młodzieży pt. „Przyroda w domu i w szkole”.

                                        Zmarła 13 września 1964 roku w Warszawie. Pochowana została na Cmentarzu Powązkowskim. Odznaczona została Złotym Krzyżem Zasługi (dwukrotnie: w 1932 roku i po 1945 roku) i Krzyżem Kawalerskim Orderu Odrodzenia Polski.
                                    </p>
                                </div>

                                <div class="paddingTop-15">
                                    <h4 class="my-3 paddingTop-5">
                                        dr Władysław Olszewski
                                    </h4>
                                    <p>
                                        Był wybitną jednostką wśród dyrektorów. Urodził się 7 października 1872 roku w Andrykach na Żmudzi. Studiował w Petersburgu. W 1894 roku ukończył na tamtejszym Uniwersytecie Wydział Filozoficzno – Historyczny. Kontynuował naukę w Instytucie Historyczno – Pedagogicznym.

                                        Pracował jako nauczyciel szkół średnich w Rosji, następnie na terenie Galicji, m.in. w Zbarażu. W 1905 roku doktoryzował się z historii średniowiecznej Litwy na Uniwersytecie Lwowskim. Egzamin na nauczyciela historii na Uniwersytecie Jagiellońskim złożył w 1914 roku.

                                        Dyrektorem Gimnazjum im. Ks. J. Poniatowskiego w Łowiczu został w 1920 roku. Były to pierwsze lata szkoły polskiej, wiele spraw wymagało uporządkowania, zaprowadzenia nowego ładu. Przede wszystkim zadbał o dobór nauczycieli z odpowiednim przygotowaniem pedagogicznym, o których po zakończeniu pierwszej wojny światowej było niezwykle trudno. Był wybitnym dydaktykiem, wychowawcą, doskonałym mówcą. Stosował najnowsze metody pedagogiczne ucząc historii i języka łacińskiego. Rozwijał wśród młodzieży uczucia patriotyczne. Lekcje historii prowadzone były w sposób żywy i niezwykle interesujący. Uczniowie z uwagą i przyjemnością go słuchali. Należał do dobrych organizatorów, wprowadził nowy ład, porządek i dyscyplinę w szkole. Uczył młodzież okazywania szacunku ludziom starszym, szczególnie nauczycielom i wychowawcom. Dużo uwagi zwracał na zachowanie się młodzieży zarówno w obrębie szkoły, jak i poza nią. Bardzo przestrzegał, aby jej ubiór szkolny był schludny i zgodny z zaleceniami. Jego zarządzenie o noszeniu przepisowego mundurka i czapki w kolorze granatowym stanowiło nawet warunek przyjęcia do szkoły. Zwracał uwagę, gdy zauważył nie przyszyte guziki lub nie wyczyszczone obuwie.

                                        Zorganizował kino szkolne. W tych czasach była to pionierska inicjatywa na terenie Łowicza. Z jego inicjatywy powstały dwie orkiestry, dęta i mandolinistów. Doprowadził do uruchomienia przez Koło Rodzicielskie bursy dla uczniów pod tradycyjną nazwą „Bartoszków”, co w warunkach lokalowych lat dwudziestych w mieście miało wyjątkowe znaczenie. Był inicjatorem utworzenia Miejskiej Szkoły Handlowej. Przewodniczył Kołu Towarzystwa Nauczycieli Szkół Wyższych i Średnich. W 1924 roku został członkiem honorowym Akademickiego Koła Łowiczan w Warszawie.

                                        Po opuszczeniu Łowicza w 1925 roku pracował jako nauczyciel w Łodzi. Po przejściu na emeryturę osiadł we Lwowie, gdzie był redaktorem czasopisma pedagogicznego „Muzeum”. Opublikował w nim szereg artykułów, m.in. o szkolnictwie średnim we Francji (1933 – 35), a także publikował dyskusyjne artykuły na temat reformy szkolnictwa.

                                        Zmarł po długiej chorobie 22 sierpnia 1936 roku we Lwowie. Pochowany został w grobie rodzinnym na Cmentarzu Łyczakowskim.
                                    </p>
                                </div>

                                <div class="paddingTop-15">
                                    <h4 class="my-3 paddingTop-5">
                                        Jan Wojnicz – Sianożęcki
                                    </h4>
                                    <p>
                                        Urodził się 12 maja 1878 roku w Siniawie pod Kijowem. Ukończył Szkołę Realną w Winnicy na Podolu. Studiował na Politechnice Kijowskiej, gdzie w 1903 roku otrzymał dyplom inżyniera technologa. W latach 1906 – 1909 był asystentem na tejże uczelni. Następne lata spędził nauczając matematyki i fizyki w prywatnych szkołach średnich na terenie Królestwa Polskiego.

                                        Od roku szkolnego 1917/18 został dyrektorem gimnazjum męskiego w Łowiczu. Był wspaniałym dydaktykiem, ale także bardzo dobrym wychowawcą. Jego wykładów z matematyki uczniowie słuchali z przyjemnością. Potrafił zainteresować tym trudnym, dla większości uczniów, przedmiotem. Należy wziąć jeszcze pod uwagę fakt, że szkoła miała charakter placówki humanistycznej, a znaczna liczba uczniów nie posiadała zdolności do przedmiotów ścisłych. Jako pierwszy w szkole wprowadził uczniowski samorząd klasowy. W dniu 11 listopada 1918 roku uzbrojony w dubeltówkę przyłączył się do plutonu harcerzy, wśród których byli jego uczniowie, skierowanych do akcji rozbrajania żołnierzy niemieckich na stacji Łowicz Południowy (obecnie Łowicz Przedmieście). W marcu 1920 roku oddelegowany został na stanowisko kuratora na ziemiach wschodnich. W uznaniu zasług Koło Rodzicielskie ufundowało stypendium jego imienia dla ucznia gimnazjum. Po wojnie w 1920 roku został dyrektorem prywatnego gimnazjum w Milanówku, a następnie w Ostrowi Mazowieckiej. W latach 1928-39 był kierownikiem wydziału w Państwowej Fabryce Karabinów w Warszawie. Po powstaniu w 1944 roku został wysiedlony. Od 1945 roku zamieszkał w Sopocie przy ulicy 22 Lipca 22/4. Do czasu przejścia na emeryturę, tj. do 1949 roku, pracował w tamtejszym Liceum Ogólnokształcącym im. Bolesława Chrobrego. Od 1949 roku przez okres około dwóch lat pracował na Politechnice Gdańskiej. Działał w ZMP.

                                        Zmarł 10 czerwca 1957 roku. Pochowany został na cmentarzu katolickim przy ulicy Chodowieckiego w parafii „Gwiazda Morza” w Sopocie (kwatera 3 nr 272). Był żonaty z Julią (nazwiska rodowego nie udało się ustalić). Miał syna Jana, który ukończył Politechnikę Warszawską, a następnie wyemigrował z kraju.

                                        Był autorem szeregu podręczników z matematyki i fizyki dla szkół średnich ogólnokształcących dostosowanych do programów nauczania w poszczególnych klasach. Większość z nich ukazała się w latach 1916 – 24. Jego „Fizyka w szkole średniej”, cz. I miała pięć wydań. Na użytek szkół wyższych wydał „Zbiór zadań z mechaniki teoretycznej. Na podstawie różnych źródeł” (Wa-wa 1916, 1917), a po II wojnie światowej zbiory zadań ze statystyki (Gdańsk 1947) i kinetyki (Gdańsk 1948).
                                    </p>
                                </div>

                                <div class="paddingTop-15">
                                    <h4 class="my-3 paddingTop-5">
                                        Karol Apolinary Kostro
                                    </h4>
                                    <p>
                                        Urodził się 23 lipca 1875 roku w Warszawie w parafii św. Krzyża. Rodzicami jego byli: Julian i Stefania z Mogielnickich. Pochodził z rodziny mieszczańskiej. Był wyznania rzymsko – katolickiego. Jego żona, Leokadia z Olszowskich, I voto Wieszczycka, urodziła się 26 listopada 1878 roku w Warszawie. Rodzicami jej byli: Szymon i Klotylda z Dąbrowskich. Była ona wyznania ewangelicko – reformowanego.

                                        Od 16 grudnia 1915 roku pełnił obowiązki dyrektora Męskiego Gimnazjum im. Ks. Józefa Poniatowskiego w Łowiczu. W 1917 roku przeniósł się do Kutna. Został dyrektorem Szkoły Kupieckiej. Dążył do przekształcenia jej w gimnazjum, co zostało zatwierdzone 7 lipca 1918 roku. Od września tego roku w Kutnie zaczęło funkcjonować Gimnazjum Realne, które staraniem dyrektora Kostro zostało upaństwowione. 11 listopada 1918 roku, jako przedstawiciel Komitetu Obrony Narodowej, oznajmia o przejęciu od okupanta władzy w Kutnie. 31 sierpnia 1919 roku odbyły się pierwsze wybory do Rady Miejskiej. Kostro znalazł się na liście „Komitetu wyborczego chrześcijańskiego”.

                                        Józef Piłsudski – Naczelnik Państwa i Naczelny Wódz wystąpił 3 lipca 1920 roku z apelem, w imieniu Rady Obrony Państwa, o organizowanie frontu wewnętrznego, dla wsparcia wysiłku militarnego wojska. W Kutnie, w odpowiedzi na tę odezwę, wznowiła działalność Powiatowa Straż Obywatelska, a komendantem miasta został Kostro. 13 czerwca 1926 roku występował w wyborach do Rady Miejskiej z ramienia Bloku Chrześcijańskiego. Siły lewicowe ostro krytykowały dyrektora Kostro.

                                        Szkoła, praca nauczycieli i dyrektora pilnie były śledzone przez kutnowską inteligencję, zwłaszcza krytycznie oceniana była obiektywna i liberalna postawa Karola Kostro, który jako radny rady miejskiej i działacz społeczny (straż, harcerstwo i inne) nie angażował się w sprawy partii lewicowej i prawicowych. Atak na szkołę i jej system wychowawczy wyszedł od prawicy – Narodowej Demokracji i później endecy nie mogli pogodzić się z faktem, że w roku 1926 dyrektor Karol Kostro awansował na stanowisko kuratora okręgu wołyńskiego. Następnie pełnił obowiązki kuratora w Równem.
                                    </p>
                                </div>
                            </section>

                            <!-- END tab-content-->
                        </div>
                    </div>
                </div>

                @include('components.aktualnosci')
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>

@endsection