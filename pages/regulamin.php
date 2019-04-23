<!DOCTYPE html>
<html>
    <head>
        <title>Regulamin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    </head>
    <body id="top">
        <div class="wrapper col1">
            <div id="topbar">
                <div id="clientlogin">
                    <?php
                    require_once "../UserLog.php";
                    session_start();
                    if (isset($_SESSION["userOK"])) {
                        $user = unserialize($_SESSION["userOK"]);
                        echo "Użytkownik zalogowany jako:" . $user->getName() . "<br/>";
                        ?>
                        <a href="../wyloguj.php" style="color: #999999"><font size="2"><u>Wyloguj</u></font></a> <?php
                    } else {
                        ?>
                        <form action="../loginForm.php" method="post">   

                            <fieldset>
                                <legend>Site Login</legend>
                                <input  name="login" placeholder="login"/>
                                <input type="password" name="pass" placeholder="hasło"/>
                                <input type="submit" name="submit" id="login" value="Idź" />
                            </fieldset>
                            <a href="pages/rejestracja.php" style="color: #999999"><font size="2"><u>Rejestracja</u></font></a>
                        </form>
                    <?php }
                    ?>      
                </div>
                <div id="search">
                    <form action="#" method="post">
                        <fieldset>
                            <legend>Site Search</legend>
                            <input type="text" value="Search Our Website&hellip;"  onfocus="this.value = (this.value == 'Search Our Website&hellip;') ? '' : this.value;" />
                            <input type="submit" name="go" id="go" value="GO" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/dom.jpg');"> 
            <div class="row1">
                <header id="header" class="hoc clear"> 
                    <div id="logo" class="fl_left">
                        <h1><a href="/sklep/index.php" style="font-family: Lobster"> yourHome</a></h1>
                    </div>
                    <nav id="mainav" class="fl_right">
                        <ul class="clear">
                            <li><a href="../index.php">Start</a></li>
                            <li><a href="sklep.php">Sklep</a></li>
                            <li class="active"><a href="regulamin.php">Regulamin</a></li>
                            <li><a href="kontakt.php">Kontakt</a></li>
                            <li><a href="strKoszyk.php">Koszyk</a></li>
                        </ul>
                    </nav>
                </header>
            </div>
            <div id="breadcrumb" class="hoc clear" > 
                <ul>
                    <li><a href="/sklep/index.php">Home</a></li>
                    <li><a href="#">Regulamin</a></li>
                </ul>
            </div>
        </div>
        <div class="wrapper row3">
            <main class="hoc container clear"> 
                <div class="content"> 
                    <h1> Regulamin</h1>
                   
                    <p>Poniżej pragniemy przedstawić Państwu nasz regulamin, który stanowi podstawę przygotowania i realizacji Państwa zakupów.</p>
                    <p>Na stronie www.yourhome.pl oferujemy Państwu nabycie produktów firmy www.yourhome.pl.</p>
                    <p><h1>1. Zawarcie umowy i dostawa towaru</h1></p>

                    <p>1.1 Na www.yourhome.pl umowy zawieramy wyłącznie w języku polskim. Stroną umowy jest firma www.yourhome.pl SE, Tamara-Danz-Str. 1 10243 Berlin. </p>

                    <p>1.2 Kliknięcie przycisku „potwierdź zamówienie” powoduje złożenie wiążącego zamówienia na produkty znajdujące się w koszyku. Złożenie zamówienia potwierdzamy drogą mailową bezpośrednio po wysłaniu przez Państwa zamówienia. Zawarcie wiążącej umowy następuje wraz z otrzymaniem przez Państwa potwierdzenia zamówienia. Prosimy zwrócić uwagę, że produkty zamówione przez Państwa wysłane zostaną po opłaceniu przez Państwa ich pełnej ceny (z zastrzeżeniem punktu 3.2 poniżej) oraz kosztów dostawy, o ile nie są one pokrywane przez nas zgodnie z punktem 2.2 poniżej.</p>

                    <p>1.3 Zamówienia realizujemy na terenie Polski. W przypadku podania terminu dostawy w dniach roboczych należy rozumieć pod tym pojęciem wszystkie dni od poniedziałku do piątku włącznie, z wyjątkiem dni ustawowo wolnych od pracy.</p>
                    <p><h1>2. Ceny, koszty wysyłki i wysyłka ekspresowa</h1>

                    <p>2.1 Obowiązują ceny oferowane w chwili złożenia zamówienia. Oferowane ceny są cenami końcowymi, to znaczy, że zawierają także podatek VAT w aktualnie obowiązującej wysokości. Aż do chwili pełnej zapłaty ceny sprzedaży towar pozostaje naszą własnością.</p>

                    <p>2.2 Koszty wysyłki, z wyjątkiem wysyłki ekspresowej, opłacamy my. </p>

                    <p>2.3 Dla niektórych zamówień oferujemy wysyłkę ekspresową. Podczas procedury zamawiania otrzymają Państwo informację, czy dla danego zamówienia oferowana jest wysyłka ekspresowa, a także ile kosztuje. Towar w przypadku wyboru opcji wysyłki ekspresowej zostanie dostarczony najpóźniej w ciągu 2 dni roboczych. W przypadku przekroczenia tego terminu dostawy oczywiście otrzymają Państwo zwrot kosztów przesyłki.</p>
                    <p><h1>3. Płatności</h1></p>

                    <p>3.1 Zasadniczo oferujemy następujące rodzaje płatności: za pobraniem, szybki przelew internetowy (Przelewy24.pl), karta kredytowa i Paypal. W przypadku każdego zamówienia zastrzegamy sobie prawo nieoferowania niektórych rodzajów płatności i oferowania innych. Prosimy pamiętać, że akceptujemy jedynie płatności dokonywane z kont bankowych prowadzonych w granicach Unii Europejskiej (UE). Wszelkie koszty transakcji finansowych ponoszą Państwo.</p>

                    <p>3.2 W przypadku zakupu przy użyciu karty kredytowej obciążenie konta karty kredytowej następuje dopiero wraz z wysłaniem przez nas zamówienia.3.3 Wyrażają Państwo niniejszym zgodę na otrzymywanie informacji o uznaniach na rachunku wyłącznie w formie elektronicznej.</p>
                    <p><h1>4. Kupony rabatowe i ich wykorzystywanie</h1></p>

                    <p>4.1 Kupony rabatowe to bony, które nie mogą zostać nabyte drogą kupna, lecz są wydawane jedynie w ramach kampanii reklamowych, i mają określony okres ważności.</p>

                    <p>4.2 Kupony rabatowe można wykorzystać tylko w określonym czasie i tylko w ramach jednego zamówienia. Z akcji promocyjnej mogą być wykluczone niektóre marki. Kuponów rabatowych nie można wykorzystywać do nabywania kart upominkowych. Prosimy pamiętać, że kupony rabatowe mogą być powiązane z minimalną wartością zakupu.</p>

                    <p>4.3 Wartość towaru musi być nie mniejsza niż kwota na kuponie rabatowym. Ewentualna różnica w przypadku wyższej wartości towaru może zostać wyrównana płatnością dokonaną na jeden z oferowanych sposobów. Kupon rabatowy nie może zostać wypłacony gotówką, nie jest także oprocentowany. Nie można otrzymać zwrotu kuponu rabatowego, kiedy towar zostanie całkowicie lub częściowo zwrócony.</p>

                    <p>4.4 Kupony rabatowe mogą zostać wykorzystane jedynie przed zakończeniem procedury zamawiania. Wykorzystanie późniejsze nie jest możliwe. Kuponów rabatowych nie można przenieść na osoby trzecie. W braku innych uzgodnień nie można łączyć kilku kuponów rabatowych.</p>

                    <p>4.5 Jeśli podczas swoich zakupów skorzystają Państwo z kuponu rabatowego, to zastrzegamy sobie prawo do naliczenia pierwotnej ceny towarów, które Państwo zachowają, jeżeli - ze względu na odstąpienie przez Państwa od umowy - całkowita wartość zamówienia spadnie poniżej wartości kuponu rabatowego.</p>
                    <p><h1>5. Karty upominkowe i ich wykorzystywanie</h1>

                    <p>5.1 Karty upominkowe to bony, które można nabyć drogą kupna. Można je wykorzystać wyłącznie do nabycia produktów w yourHome, jednak nie do nabycia dalszych kart upominkowych. Jeśli wartość karty upominkowej nie wystarczy do złożenia zamówienia, to różnicę można pokryć przy użyciu jednej z oferowanych metod płatności.</p>

                    <p>5.2 Karty upominkowe i kwoty naliczone na Państwa koncie mogą zostać wykorzystane tylko przed zakończeniem procedury zamawiania. Kwota karty upominkowej nie może być wypłacona w gotówce, nie są na nią także naliczane odsetki. W celu skorzystania z kwot z kart upominkowych zapisanych na Państwa koncie lub sprawdzenia wysokości kwoty zdeponowanej na koncie klienta należy wejść na zakładkę „Moje konto użytkownika” na stronie www.yourHome.pl.</p>
                    <p>6. Ustawowe prawo do odstąpienia od umowy zakupu produktów yourHome</p>

                    <p>W przypadku nabycia produktów yourHome mają Państwo ustawowe prawo do odstąpienia od umowy:</p>
                    <p>Przede wszystkim chcemy Państwa poinformować, że w przypadku odesłania towarów mogą Państwo użyć formularza zwrotu załączonego do Państwa zamówienia lub dostępnego do wydrukowania na Państwa koncie klienta. Jeśli nie będą Państwo mieli do dyspozycji drukarki, będą mieli problemy ze ściągnięciem formularza lub będą potrzebowali nowego formularza zwrotu, mogą go Państwo pozyskać także przez nasz serwis Customer Care (dane kontaktowe poniżej). Prosimy o ułatwienie nam uniknięcia dodatkowych kosztów i przesyłanie zwrotów zawsze z formularzem zwrotu.</p>

                    <p>Pouczenie w kwestii prawa do odstąpienia od umowy
                    <p>Mają Państwo prawo do odstąpienia od umowy w ciągu czternastu dni bez podania przyczyn. Termin na odstąpienie od umowy biegnie od dnia, w którym Państwo lub wskazana przez Państwa osoba trzecia niebędąca przewoźnikiem weszli/weszła w posiadanie towaru. 
                    <p>W celu wykonania swojego prawa do odstąpienia od umowy muszą Państwo powiadomić o swojej decyzji w tej sprawie firmę yourHome SE, Tamara-Danz-Str. 1, 10243 Berlin, telefon:+48 22 3003095  e-mail: odstapienie@yourHome.pl w drodze jednoznacznego oświadczenia woli (np. przy pomocy listu wysłanego pocztą lub e-maila). Mogą Państwo w tym celu użyć załączonego wzoru formularza odstąpienia od umowy. Nie ma jednak takiego obowiązku. </p>
                    <p>Mogą Państwo wypełnić i przesłać nam formularz odstąpienia od umowy albo sporządzić i przesłać jakiekolwiek inne oświadczenie woli, także elektronicznie, przy użyciu formularza kontaktowego znajdującego się na naszej stronie internetowej. Jeśli skorzystają Państwo z tej możliwości, prześlemy Państwu niezwłocznie (np. drogą mailową) potwierdzenie otrzymania Państwa oświadczenia. W celu wykonania prawa do odstąpienia od umowy wystarczy wysłać powiadomienie o skorzystaniu z tego prawa przed upływem terminu na odstąpienie od umowy.</p>

                    <p>Skutki odstąpienia od umowy
                    <p>W przypadku odstąpienia przez Państwa od umowy mamy obowiązek niezwłocznie, jednak nie później niż w ciągu czternastu dniu od dnia otrzymania Państwa powiadomienia o odstąpieniu od umowy, zwrócić Państwu wszystkie otrzymane od Państwa płatności, włącznie z kosztami dostawy (z wyjątkiem kosztów dodatkowych, które ewentualnie wynikną w związku z wyborem przez Państwa innego sposobu dostawy niż najtańszy zwykły oferowany przez nas sposób dostawy). Do zwrotu płatności stosujemy ten sam środek płatności, którym posłużyli się Państwo podczas pierwotnej transakcji, chyba że jednoznacznie uzgodnimy z Państwem inny środek płatności. </p>
                    <p>W żadnym wypadku nie naliczymy Państwu za to jakichkolwiek opłat. Możemy natomiast odmówić dokonania zwrotu płatności otrzymanej od Państwa do chwili otrzymania zwrotu towaru lub do chwili, gdy przedstawią Państwo dowód, że towar został do nas wysłany, w zależności od tego, które z tych zdarzeń nastąpi pierwsze. </p>
                    <p>Państwo z kolei mają obowiązek odesłać nam lub przekazać towar niezwłocznie, jednak nie później niż czternaście dni od dnia, w którym poinformowali nas Państwo o odstąpieniu od umowy. 
                    <p>Termin uważa się za dochowany, jeśli towar zostanie wysłany przed upływem czternastu dni. Poniesiemy koszty przesyłki zwrotnej towarów w przypadku przesyłek z kraju, w którym doręczono Państwu te towary, jeśli wykorzystają Państwo udostępniony przez nas formularz zwrotu. W przeciwnym razie koszty przesyłki zwrotnej ponoszą Państwo. Odpowiadają Państwo za zmniejszenie wartości rzeczy będące wynikiem korzystania z niej w sposób wykraczający poza konieczny do stwierdzenia charakteru, cech i funkcjonowania rzeczy.</p>

                    <p>Wzór formularza odstąpienia od umowy</p>
                    <p>Jeśli chcą Państwo odstąpić od niniejszej umowy, prosimy o wypełnienie niniejszego formularza:- Adresat: yourHome SE, Tamara-Danz-Str. 1, 10243 Berlin </p>


                    <p>- Ja/My(*) niniejszym informuję/informujemy(*) o moim/naszym odstąpieniu od umowy sprzedaży następujących rzeczy(*) </p>
                    <p>-  Data zawarcia umowy(*)/odbioru(*) </p>
                    <p>- Imię i nazwisko konsumenta(-ów) </p>
                    <p>- Adres konsumenta(-ów) </p>
                    <p>- Podpis konsumenta(-ów) (tylko jeżeli formularz jest przesyłany w wersji papierowej) </p>
                    <p>- Data </p>

                    <p>(*) niepotrzebne skreślić</p>
                    <p>i przesłanie go do nas na poniższy adres:</p>
                    <p>yourHome SE, Tamara-Danz-Str. 1, 10243 Berlin, telefon: +48 22 3003095, e-mail: odstapienie@yourHome.pl</p>
                    <p>7. Dobrowolne prawo do zwrotu towaru w ciągu do 100 dni od jego otrzymania</p>

                    <p>7.1 Bez uszczerbku dla Państwa ustawowego prawa do odstąpienia od umowy oferujemy Państwu dobrowolnie prawo do zwrotu towaru w ciągu 100 dni od jego otrzymania przez Państwa. Dzięki temu prawu zwrotu towaru mogą Państwo uwolnić się od skutków umowy także po upływie 14-dniowego okresu na odstąpienie umowy (patrz pouczenie w sprawie prawa do odstąpienia od umowy w punkcie 6 powyżej) w ten sposób, że w ciągu 100 dni od otrzymania towaru (bieg terminu rozpoczyna się w dniu otrzymania przez Państwa towaru) prześlą go Państwo do nas.</p>

                    <p>7.2 W przypadku przesłania zwrotnego produktów yourHome mogą Państwo zastosować załączony do zamówienia lub dostępny przez konto klienta formularz zwrotu. Jeśli będą Państwo mieli problemy ze ściągnięciem formularza lub nie będą Państwo mieli do dyspozycji drukarki, prosimy o skontaktowanie się z naszą obsługą klienta.</p>

                    <p>7.3 Do dotrzymania terminu zwrotu towaru wystarczy wysłanie przez Państwa towaru w ciągu 100 dni od jego otrzymania. Jednak warunkiem wykonania dobrowolnego prawa zwrotu jest to, że nie używali Państwo produktu, w szczególności w przypadku odzieży i obuwia przymierzyli go Państwo jedynie na próbę, jak w sklepie odzieżowym, i prześlą Państwo towar w komplecie, w pierwotnym stanie, bez uszkodzeń i w oryginalnym opakowaniu. Aż do chwili upływu terminu ustawowego prawa do odstąpienia od umowy stosuje się wyłącznie warunki ustawowe związane z tym prawem. Dobrowolne prawo zwrotu nie ogranicza w żaden sposób Państwa ustawowego prawa do odstąpienia od umowy i zwrotu produktu, które pozostają nienaruszone. Dobrowolne prawo zwrotu nie odnosi się do bonów upominkowych.</p>
                    <p>8. Zwroty płatności

                    <p>Wszelkie zwroty płatności wykonywane są automatycznie na konto używane przez Państwa do zapłaty. W przypadku zapłaty przelewem na konto płatności zostaną zwrócone na konto, z którego dokonano przelewu. W przypadku zapłaty przez PayPal lub przy pomocy karty kredytowej zwrot nastąpi na powiązane konto PayPal lub konto karty kredytowej. Jeśli w czasie zakupu skorzystali Państwo z karty upominkowej, to odpowiednia kwota zostanie zwrócona na Państwa saldo i będzie mogła zostać wykorzystana podczas kolejnych zakupów.</p>
                    <p>9. Ustawowa odpowiedzialność za wady produktów

                    <p>9.1 Zobowiązujemy się do dostarczenia Państwu produktów wolnych od wad.9.2 W przypadku wszelkich wad produktów zamówionych za pośrednictwem www.yourHome.pl ponosimy ustawową odpowiedzialność z tytułu rękojmi za wady, wynikającą z art. 556 i następnych ustawy z dnia 23 kwietnia 1964 r. - Kodeks cywilny (Dz.U.2016.380 j.t. z późn. zm.).</p>
                    <p>10. Reklamacje

                    <p>10.1 Wszelkie reklamacje dotyczące produktów zakupionych w naszym sklepie, jak również przebiegu realizacji Państwa zamówienia należy składać e-mailem na adres reklamacja@yourHome.pl lub za pośrednictwem Customer Care (Biuro Obsługi Klienta) telefonicznie lub drogą elektroniczną (e-mail). Dane kontaktowe Customer Care (Biura Obsługi Klienta) zostały podane w punkcie 11 poniżej. W ten sam sposób możecie Państwo zgłaszać wszelkie problemy z odbiorem przesyłki zwrotnej przez kuriera.</p>

                    <p>10.2 W niektórych przypadkach możemy poprosić Państwa o przesłanie nam zdjęć produktów podlegających reklamacji.</p>

                    <p>10.3 Państwa reklamacja zostanie przez nas rozpatrzona w terminie 14 dni od daty otrzymania kompletnego zgłoszenia reklamacyjnego. O ewentualnych brakach w zgłoszeniu reklamacyjnym powiadomieni zostaną Państwo przez nas niezwłoczne. Wraz z takim zawiadomieniem przesłana zostanie Państwu informacja, w jaki sposób należy uzupełnić braki w zgłoszeniu reklamacyjnym.</p>

                    <p>10.4 Zwracamy Państwu uwagę, że reklamacji nie podlegają następujące uszkodzenia produktów:</p>

                    <p>- naturalne zużywanie się obuwia;</p>
                    <p>- części wymienne, np. fleki czy sznurówki;</p>
                    <p>- uszkodzenia mechaniczne (otarcie, rozerwanie, naderwanie bądź zadrapanie, oderwanie ozdób, zamka, gumy itp.) powstałe w trakcie użytkowania produktów przez Państwa, oraz uszkodzenia powstałe w wyniku braku lub nieprawidłowej konserwacji;</p>
                    <p>- uszkodzenia powstałe na skutek użytkowania obuwia i odzieży niezgodnie z przeznaczeniem;</p>
                    <p>- przebarwienia odzieży lub stóp przez obuwie wykonane na naturalnie barwionej podszewce;</p>
                    <p>- wygoda obuwia, przemakanie obuwia (o ile w opisie nie jest napisane, iż towar jest wodoodporny).</p>

                    <p>10.5 Informujemy jednocześnie, iż przysługuje Państwu możliwość skorzystania z pozasądowych sposobów rozpatrywania reklamacji i dochodzenia roszczeń zgodnie z procedurą Internetowego Rozstrzygania Sporów opracowaną przez Komisję Europejską dostępną na stronie internetowej: https://webgate.ec.europa.eu/odr/main/?event=main.home.show .</p>
                    <p>11. Customer Care</p>

                    <p>W przypadku dodatkowych pytań zajrzyj do naszej sekcji "Pomoc i kontakt" lub skontaktuj się z nami.</p>
                    <p>12. Inne informacje</p>

                    <p>12.1 Niniejszy regulamin znajdą Państwo na stronie www.yourHome.pl Ponadto mogą Państwo wydrukować lub zapisać ten dokument korzystając ze zwykłych funkcji swojej przeglądarki internetowej (najczęściej: Plik -> Zapisz jako). Niniejszy dokument mogą Państwo także ściągnąć w formacie PDF i zarchiwizować, klikając tutaj. W celu otwarcia pliku PDF potrzebują Państwo bezpłatnego programu Adobe Reader (dostępnego na stronie www.adobe.pl) lub innego, podobnego programu, który otwiera pliki w formacie PDF.</p>

                    <p>12.2 Dane swojego zamówienia mogą Państwo zarchiwizować w prosty sposób przez ściągnięcie regulaminu i zapisanie informacji podsumowujących zamówienie znajdujących się na ostatniej stronie Państwa zamówienia podczas jego składania w sklepie internetowym przy użyciu funkcji „Zapisz jako” w swojej przeglądarce internetowej; mogą Państwo także zaczekać na potwierdzenie zamówienia, które prześlemy Państwu dodatkowo e-mailem po zakończeniu procesu zamówienia na podany przez Państwa adres. Taki e-mail potwierdzający zamówienie zawiera wszystkie istotne dane Państwa zamówienia, wzór formularza odstąpienia od umowy oraz odnośnik do niniejszego regulaminu, i możliwe jest jego łatwe wydrukowanie tudzież zapisanie przy użyciu programu do otwierania poczty elektronicznej.</p>

                    <div class="clear"></div>
            </main>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row4">
            <footer id="footer" class="hoc clear"> 
                <!-- ################################################################################################ -->
                <div class="one_quarter first">
                    <h6 class="title">Phasellus aenean</h6>
                    <address class="btmspace-15">
                        Company Name<br>
                        Street Name &amp; Number<br>
                        Town<br>
                        Postcode/Zip
                    </address>
                    <ul class="nospace">
                        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
                    </ul>
                </div>
                <div class="one_quarter">
                    <h6 class="title">Imperdiet aliquam</h6>
                    <article>
                        <h2 class="nospace font-x1"><a href="#">Neque porta elit</a></h2>
                        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                        <p>Dignissim tellus vitae posuere laoreet dui nulla pulvinar dolor at ultricies lectus orci aliquam ipsum vestibulum at.</p>
                    </article>
                </div>
                <div class="one_quarter">
                    <h6 class="title">Iaculis mauris</h6>
                    <ul class="nospace linklist">
                        <li><a href="#">Consectetur commodo orci</a></li>
                        <li><a href="#">Vitae tempus maecenas</a></li>
                        <li><a href="#">Feugiat eget nisi vel</a></li>
                        <li><a href="#">Scelerisque fusce suscipit</a></li>
                        <li><a href="#">At sodales facilisis vivamus</a></li>
                    </ul>
                </div>
                <div class="one_quarter">
                    <h6 class="title">Quis auctor nulla</h6>
                    <p>Risus vivamus consectetur neque augue eu tincidunt urna varius nec phasellus.</p>
                    <p>Dapibus rutrum interdum nullam commodo lacus sed neque porttitor.</p>
                </div>
                <!-- ################################################################################################ -->
            </footer>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row5">
            <div id="copyright" class="hoc clear"> 
                <!-- ################################################################################################ -->
                <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
                <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
                <!-- ################################################################################################ -->
            </div>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
        <!-- JAVASCRIPTS -->
        <script src="../layout/scripts/jquery.min.js"></script>
        <script src="../layout/scripts/jquery.backtotop.js"></script>
        <script src="../layout/scripts/jquery.mobilemenu.js"></script>
        <!-- IE9 Placeholder Support -->
        <script src="../layout/scripts/jquery.placeholder.min.js"></script>
        <!-- / IE9 Placeholder Support -->
    </body>
</html>