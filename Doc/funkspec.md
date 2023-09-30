# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

A Bikini Fenék Kft. jelenleg egy hírportál és egy eseményekkel foglalkozó cég, de terveink szerint bővíteni szeretnénk tevékenységünket egy viccportállal. 
Jelenleg az oldalunk nem különbözteti meg a korosztályokat, így a fiatalabbaknak is megjelennek a felnőtteknek szóló viccek, és fordítva. 
Ennek elkerülése érdekében célunk egy olyan weboldal létrehozása, ahol a nagykorú rajongók a korosztályuknak megfelelő tartalmakat élvezhetik.
Fontos megjegyezni, hogy tisztában vagyunk olyan oldalakkal is, amelyek felnőttek számára készültek, mégis könnyedén hozzáférhetnek hozzájuk a kiskorúak, néhány kattintással, ellenőrzés nélkül. 
Ezért elengedhetetlen, hogy olyan ellenőrzéseket vezessünk be, amelyek legalább megnehezítik a kiskorúaknak az ilyen tartalmakhoz való hozzáférést, és így segítenek megelőzni a kiskorúak védelmét sértő helyzeteket.
A mai világban olyan sok a stressz és a nyomás, hogy ritkán látunk mosolygó embereket. 
Ennek fényében egy versenyképes viccportált szeretnénk létrehozni, amely lehetővé teszi az emberek napi szórakozását. 
Bár már létezik több hasonló elven működő viccportál az interneten, az mi oldalunk különlegessége, hogy olyan kategóriát céloz meg, amely eddig hiányzott a piacon.
A projekt forrásait egy egyszerű, gyermekeknek szóló animációs sorozatból merítjük, különböző motívumokat felhasználva. 
Ez lehetővé teszi számunkra, hogy kielégítsük több különböző réteg igényeit.

## 2. Vágyálomrendszer leírása

Olyan alkalmazást szeretnénk létrehozni, amely minden eszközről tökéletesen elérhető és bármely képernyő mérethez igazodik.
Ennek megoldására tökéletes lenne egy olyan oldalt megvalósítani amely web alapú és online bárhonnan elérhető.
A képernyő méretbeli különbségeket reszponzív megoldással tudnánk megoldani.
Fontos lenne még az is, hogy a létező összes böngésző támogatni tudja a weboldalt, ne csak az alap chrome és safari, hanem még az internet explorer is. 
A megvalósítást mindenképp php és mysql nyelven szeretnénk kérni, melyben teljesen objektum orientált, és tiszta kódokat kapjunk, hisz a későbbiekben csatlakozó webfejlesztő munkatársak bármikor és könnyedén tudják azokat szerkeszteni. 
Fontos lenne még ha külön tudnánk választani a webhelyet fejlesztő, és a látogatókat, hisz nem szeretnénk azt se, hogy bárki be tudjon nyúlni fejlesztői szintekre az oldalon, csak az azokra kinevezett emberek. 
Erre tökéletes lenne egy olyan megoldás, mint például a rangok besorolása. 3 főbb rangra lenne szükségünk, de nem lenne baj ha a későbbiekben ezt tudnánk akár bővíteni: Admin, Szerkesztő (szükséges a jog az admintól), Felhasználó (szükséges a bejelentkezés), illetve a látogató. 
Az admin az aki kiengedi a vizsgálatra beküldött kódokat, illetve törölni tud bejegyzéseket, emellet bármikor képes legyen jogot adni a felhasználónak, és természetesen adott esetben elvenni azt.
A szerkesztő lényegében az admin és a felhasználó között levő rang.
A lehetőség legyen megadva arra, hogy tudjon posztolni, pontozni és olvasni további bejegyzéseket.
Ezen felül rendelkeznie kell egy olyan listávval is, amely az épp várakozó posztokat tartalmazza, hogy azokat kiengedhesse az oldalra.
Fontos, hogy ezt csak az admin engedélyével lehessen elérni, tehát csak úgy ne kapja meg ezt a rangot bármely felhasználónk.
Természetesen neki is felkell az oldalra regisztrálni elsőnek, éppúgy, mint a felhasználónak, amely egyenlő azzal, hogy csak a felhasználói ranggal rendelkezik az elején, a későbbiekben megkapva a szerkesztői jogot, megkaphatja a jogosultságot a listához.
A felhasználó az aki tud bejegyzést írni, illetve másokét pontozni. 
A látogató az aki csak olvasni tudja az adott bejegyzéseket, fontos, hogy ne tudjon posztolni és pontozni. 
A felhasználó a regisztrálásnál meg kell, hogy adja nevét, felhasználónevét, e mail címét és létrehozzon a weboldalhoz egy jelszót. 
A későbbiekben ezeket mind megtudja majd változtatni. 
a 18+-os műfajnál úgy gondoljuk, hogyha bejelentkezésre lenne szükség ahhoz, hogy azt ne érje el akárki, csak a 18, életévét betöltött felhasználóink.
Igaz így sem bombabiztosabb, de macerásabb, és nem csak két kattintás a megkerülése, így úgy gondoljuk ez hatásosabb lenne, mintsem egy "Elmúltam 18 éves, megtekintem" gomb.
Persze nem probléma, ha így lesz megoldva, hisz ígyis ellenőrizve lenne, de nagyon örülnénk a nehezebb megoldásnak.
Az adatbázis szempontjából nincsenek túl nagy elvárások, viszont ami mindenféleképp fontos, hogy a pontozás, felhasználók és a bejegyzések külön szeretnénk választani.
Az oldal kinézetére arra gondoltunk, hogy maradva hűségesek a nevünkhöz két design-ra gondoltunk. 
Az oldalak színeire a herkentyűburger színeire gondoltunk, mint például:
+ piros, mint a paradicsom
+ zöld, mint a saláta
+ fehér, mint a hagyma
+ citromsárga, mint a szezámmag
+ narancssárga, mint a sajt
+ sötétebb barna, mint a husi
+ világosabb barna, mint a buci

Ezek ötvözése úgy gondoljuk, hogy a végén remek színpompás oldal lesz, és nem mellesleg a témához illő.
Természetesen ha valami homályos lenne még, bármikor segítünk és pontosítunk még.

## 3. Jelenlegi üzleti folyamatok modellje

A mai világban a internetes szórakozást nyújtó viccoldalak elavultak.
Ha valaki ténylegesen vicces tartalmat szeretne találni, akkor intenzív internetes szörfözésbe kell kezdenie.
A felhasználók interneten való böngészése rengeteg időt igénybe vehet.
Azon az időn tovább ront, ha a saját ízlésük szerinti viccet szeretnének találni.
A legtöbb viccoltalon nincsenek korcsoport szerint szétbontva a tartakmak, így fiatalabb korcsoport számára könnyen elérhető a felnőtt tartalom.


## 4. Igényelt üzleti folyamatok modellje
Ez az oldal a böngészést szeretné megkönnyíteni, hogy minden tartalom pár kattintással elérhető legyen.
Az oldal folyamatosan karbantartott, frissített és fejlesztett.
Az oldalon található tartalmak kategorizálva vannak, hogy mindenki a saját szájíze szerint tudjon válogatni.
A szűrő segítségével a viccek időrendbe, illetve pontozási rendszer szerint rendezhetőek.
A korhoz kötött tartalmak egyfajta ellenörzés alatt vannak, hogy csak a 18. életévét betöltött felhasználó tudja azokat megtekinteni.
Az odlalon található viccek feltöltést követően verifikáción mennek keresztül, hogy biztosjtva legyen az értelmes tartalom.
A verifikációt a szerkesztők és az adminok végzik.
Van lehetőség szerkesztői jelentkezésre, aminek válogatását az Adminok végzik.
Van lehetőség pontozni egy adott bejegyzést, hogy a szűrővel lehetővé tehető legyen a 'legnépszerűbb' tartalom.


## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | :--- |
| C1 | Felület | Bejegyzések | A felhasználók az oldal megnyitása után kezdőképernyőként a Bejegyzések nevű oldalra kerülnek, ahol megtekinthetik az aktuális posztokat, bejelentkezés után interaktálhatnak azokkal, bejelentkezés nélkül csak a megtekintésükre van mód. |
| C2 | Felület | Kategóriák | A felhasználók választani tudnak a megtekinteni kívánt tartalmak között, itt megjelennek formátum és tartalom szerint szétbontva. A kategóriák menüpontba szedve egy menüsoron választhatók ki. |
| C3 | Felület | Profil | A felhasználók a saját profiljuk módosításait eszközölhetik, láthatóvá válnak az adott bejegyzésekre küldött interakciók, pontozások is. Itt lehetőségük van a saját felhasználói profil módosítására is. |
| C4 | Felület | Bejegyzés létrehozása | A felhasználó beküldhet saját viccet, mém-et vagy gif-et, amelyet egy magasabb jogosultsággal rendelkező (admin / moderátor) elbírálása után megtekinthet a főoldali bejegyzések között. Elutasítás esetén visszajelzést kap ennek okáról. |
| C5 | Statisztika | Toplista | Egy lista a felhasználók bejegyzéseiről, melynek elején a legtöbb pontot szerzett vicces tartalom jelenik meg. Ezt követően különböző szűrők alapján a többi bejegyzés. |
| C6 | Jogosultság | Admin felület | Felület az admin joggal rendelkező felhasználók számára. Tartalmazza az összes felhasználó tevékenységét, a lektorálás lehetőségét, az eltávolítást, mint funkciót és a bizonyos felhasználók fiókjának törlését is. |
| C7 | Jogosultság | Moderátor felület | A felhasználók által feltöltött tartalmak áttekintése, majd jóváhagyása vagy törlése, majd az adott felhasználó jelentése magasabb jogosultsággal rendelkezőnek. |
| C8 | Felület | Bejelentkezés | A felhasználók itt tudnak bejelentkezni a rendszerbe, ha bejegyzést szeretnének létrehozni. Probléma esetén üzenetet küldeni a rendszert karbantartóknak, illetve a saját profiljával felmerült problémákat javíthatja, ez lehet elfelejtett felhasználónév vagy jelszó. |
| C9 | Felület | Regisztráció | A felhasználók ezen az oldalon tudnak saját fiókot létrehozni a rendszerben, így jogokat kapni a saját tartalmaik megosztására, illetve a reakciók küldésére. |
| C10 | Modifikáció | Elfelejtett felhasználónév / jelszó | Ha a felhasználó nem emlékszik a megadott felhasználónevére vagy jelszavára, akkor itt van lehetősége egy újat generálni. |
| C11 | Modifikáció | Jelszó módosítása | A felhasználónak lehetősége van módosítani saját jelszavát, megadva a régi majd az új verziót. |
| C12 | Modifikáció | Felhasználó módosítása | A felhasználónak lehetősége van saját becenevének, avatárjának módosítására, illetve posztjainak kezelésére. |
| C13 | Jogosultság | Jogosultsági szintek | - Admin: rendszer üzemeltetése, bejegyzések törlése, felhasználók eltávolítása, szerepkörök kiosztása.<br> - Moderátor: a felhasználók által feltöltött tartalmak moderálása, majd elfogadása vagy elutasítása.<br> - Felhasználó: tartalmak megtekintése, saját bejegyzések létrehozása.<br> - Megtekintő: bejegyzések megtekintése. |

## 6. Használati esetek

- **ADMIN**: feladata a rendszer felügyelete, ennek tesztelésére minden szerepkörbe be tud lépni, hogy ellenőrizze azok hibamentes üzemelését. 
Az egész rendszerhez korlátlan hozzáféréssel rendelkezik, így a felhasználók profiljait is szabadon módosíthatják. 
Ez magában foglalja az adott felhasználó jogosultságait, szerepkörét, felhasználónevét és jelszavát. 
Emellett új felhasználókat adhatnak a rendszerhez, vagy egy már meglévőt is eltávolíthatnak onnan, ha az valamilyen szabályt megsértett. 
Képesek rendszerszintű üzeneteket küldeni amit minden felhasználó megkap. 
Joguk van egy moderátor által engedélyezett bejegyzést törölni vagy módosítani.

- **MODERÁTOR**: feladata a felhasználók tevékenységeinek felügyelete, a rendszer olyan szintű karbantartása, ami különböző etikai és más szabályoknak való megfeleltetésre szolgál. 
A rendszerhez nincs korlátlan hozzáférése, magát a rendszert nem módosíthatja, csak és kizárólag a megjelenített tartalmat és a felhasználók tevékenységeit. 
Jogukban áll adott felhasználóknak üzenetet küldeni. 
A felhasználók által feltöltött posztokat ők ellenőrzik, majd elfogadás után azok megjelennek a főoldalon, vagy elutasítás esetén törlése kerülnek.
 
- **FELHASZNÁLÓ**: jogában áll az oldalon megjelenő minden tartalom megtekintése, valamint az ezekre adott visszajelző rendszerek használata. Különböző bejegyzéseket posztolhat, más bejegyzésekre pontokat adhat, vagy hozzászólást írhat.

- **MEGTEKINTŐ**: az oldalon megjelenő bejegyzéseket megtekintheti, azonban ezekre nem adhat reakciókat.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

| Kép | Leírás |
| :-----------: | :-----------: |
| ![fooldal.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/fooldal.png) | A főoldal tervezete. Ez az a rész amelyet bárki elérhet, nem szükséges, hogy rendelkezzünk felhasználói profillal. |
| ![regisztracio.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/regisztracio.png) | A regisztrációs oldal tervezete. Ez az a rész, ahol az oldalra látogató olvasók pár adat megadásával máris az oldal felhasználói közé tartozhat. |
| ![bejelentkezes.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/bejelentkezes.png) | A bejelentkező oldal tervezete. Ez az a rész, ahol a már előzetesen regisztrált felhasználók, pár adat megadásával bármikor beléphetnek az oldalra. |
| ![fooldal_felhasznalo.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/fooldal_felhasznalo.png) | A bejelentkezett felhasználók főoldal tervezete. |
| ![ujbejegyzes.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/ujbejegyzes.png) | Új bejegyzés létrehozása oldalának tervezete. Itt tudnak a regisztrált felhasználók beküldeni bejegyzéseket, hogy azokat leellenőrizve az oldalon legyenek. |
| ![felhasznaloiprofil.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/felhasznaloiprofil.png) | Felhasználói adatok módosítása oldalának tervezete. Itt tudják a regisztrált felhasználók módosítani az adataikat. |
| ![fooldal_szerkeszto.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/fooldal_szerkeszto.png) | A bejelentkezett szerkesztő joggal rendelkező felhasználók főoldal tervezete. |
| ![engedelyezes.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/engedelyezes.png) | A szerkesztő joggal rendelkező felhasználók engedélyező oldalának tervezete. Itt tudják a 'szerkesztők' engedélyezni posztok kimenetelét az oldalra. |
| ![fooldal_admin.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/fooldal_admin.png) | A bejelentkezett admin joggal rendelkező felhasználók főoldal tervezete. |
| ![jogosultsag.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/jogosultsag.png) | Az admin joggal rendelkező felhasználók jogosultság oldalának tervezete. Itt tudják az adminok kinevezni egyes felhasználókat szerkesztővé, és itt is tudják a szerkesztői jogot elvenni a felhasználóktól. |

## 9. Forgatókönyvek

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| F0 | ... | ... |

## 11 Fogalomszótár