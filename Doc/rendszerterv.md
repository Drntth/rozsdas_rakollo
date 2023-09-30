# Rendszerterv
## 1. A rendszer célja

Az oldal célja az, hogy az informatikai eszközök kihasználásával létrejöjjön egy olyan oldal, amely mosolyt csal a szürke hétköznapokban az azt látogatóinak. 
Annak érdekében, hogy ez a rendszer fenntartható legyen és ne válljon egy olyan oldallá, amely már nem az eredeti célokra szolgál rákellett jönnünk, hogy ellenőrzött módon kell, hogy működjön. 
Ennek érdekében az weblap különböző feladatkörrel rendelkező jogosultságokkal rendelkezik. 
A regisztráláskor a rendszer automatikusan a felhasználók jogosultságait rendeli hozzá a profilokhoz, mellyel az ezzel rendelkező felhasználók könnyen tudnak egy újabb posztot ellenőrzésre küldeni, vagy egy, már az oldalon szereplő bejegyzést véleményezni egy arra kifejlesztett pontozórendszerrel. 
Azok akik nem regisztrálnak fel az oldalra, azok "olvasói jogot" kapnak, mely kimerül abban, hogy látják a posztokat, viszont nem tudnak egy új bejegyzést létrehozni, és a korábbiakat pontozni sem. 
Ezen felül létezik még a szerkesztői jog, mellyel látni tudjuk az éppen arra várakozó posztok listáját, mellyek az ellenőrzésre várnak, illetve azok kiengedését az oldalra tudjuk még engedni. 
Ezt a jogosultságot csak is kizárólag az adminnak van joga bárkinek is adni. 
Az admin rendelkezik az összes olyan funkcióval, mely elérhető az összes jogosultságban, azontúl jogokat tud hozzárendelni az egyes felhasználókhoz, vagy elvenni azokat. 
Mivel az oldalt leginkább a látogatók és az alkotók fogják használni a legtöbbször, ezért célunk, hogy a rendszer a lehető legközérthetőbb legyen és beszédes. 
Fontos még, hogy az oldal ilyen széleskörű használata miatt a design-nak mindenféleképp, hogy responsive-nak kell lennie.
Ezzel azt tudjuk megelőzni, hogy ne történhessen meg az, hogy az élvezeten rontson az összecsúszott oldal.
A responsive oldalak nagy előnye, hogy szinte képes majdnem minden képernyőmérethez igazodni, ezért nekünk is ezt a módszert kell alkalmaznunk.
Nem szabad megengedni azt sem, hogy valaki elveszve érezze magát az oldalon, ezért ha szükséges, mindenhez is teszünk egy súgó felületet, mellyel máris könnyebb lesz a kezelése. 
Ezen felül viszont a rendszer nem célja az, hogy az oldal által is kiválasztott és használt témán felül bármi másra is alkalmas legyen, vagy hogy egyszere több cég is használni tudja a későbbiekben, hisz egyenlőre csak egyetlen egy kiszolgálára van csak tervezve.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
* Scrum masters:
   + Tóth Dorina Ildikó
   + Mizere Robin Roland
   + Sipos Valentin Dominik
   + Kovácspál Bálint István
   
   Feladatuk: Heti meetingek megszervezése.
   Akadályok feltárása.
   Következő elvégzendő feladatok átbeszélése.
   Szerepkiosztás.
* Product owner: 
   + Tóth Dorina Ildikó
   + Mizere Robin Roland
   + Sipos Valentin Dominik
   + Kovácspál Bálint István
* Üzleti szereplő:
  + Megrendelő: Dr. Tajti Tibor
     
### 2.2 Projektmunkások és felelőségek:
* Frontend:
   + Tóth Dorina Ildikó
   + Mizere Robin Roland
   + Sipos Valentin Dominik
   + Kovácspál Bálint István

   Feladatuk: A felhasználók által elérhető felületek létrehozása. 
   A backend által biztosított funkciók igénybevétele.
   Egységes design megalkotása.
* Backend:
  + Tóth Dorina Ildikó
  + Mizere Robin Roland
  + Sipos Valentin Dominik
  + Kovácspál Bálint István

  Feladatuk: A frontend kiszolgálása adatokkal. 
  Adatbázisok létrehozása
* Tesztelés:
  + Tóth Dorina Ildikó
  + Mizere Robin Roland
  + Sipos Valentin Dominik
  + Kovácspál Bálint István
  Feladatuk: Hibák feltárása az üzembe helyezés előtt.
     
### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         2 |             1 |                      1 |                1 |                   1 |
|Program                  |Prototípus elkészítése                  |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Tesztelés                               |         4 |             2 |                      2 |       
## 3. Üzleti folyamatok modellje

![uzleti_folyamatok_modellje.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/uzleti_folyamatok_modellje.png)

### 3.1 Üzleti szereplők

+ Admin
+ Szerkesztő
+ Felhasználó
+ Látogató / Olvasó

### 3.2 Üzleti folyamatok

| Üzleti Szereplő | Üzleti szereplő neve | Feladatkör |
| :-------------: | :------------------: | :--------: |
| ![latogato_uzleti.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/latogato_uzleti.png) | Látogató | Csak a posztok olvasására képes. |
| ![felhasznalo_uzleti.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/felhasznalo_uzleti.png) | Felhasználó | Képes: regisztrálni, bejelentkezni, posztot olvasni, létrehozni, pontozni, felhasználói profilt módosítani. |
| ![szerkeszto_uzleti.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/szerkesztoi_uzleti.png) | Szerkesztő | Képes: regisztrálni, bejelentkezni, posztot olvasni, létrehozni, pontozni, felhasználói profilt módosítani és engedélykérésre várakozó posztokat engedélyezni |
| ![admin_uzleti.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/admin_uzleti.png) | Admin | Képes: bejelentkezni, posztot olvasni, létrehozni, pontozni, felhasználói profilt módosítani, engedélykérésre várakozó posztokat engedélyezni és jogosultságokat kiosztani, vagy azokat elvenni |

## 4. Követelmények

### Funkcionális követelmények

+ Bejegyzések tárolása (képes képet vagy más formátumot pl. gif-et kezelni)
+ Felhasználók adatainak tárolása (profilkép, felhasználónév, jelszó, email)
+ Webes környezeten működőképes (reszponzív, így számítógépen / telefonon is megjeleníthető)
+ Képes úgy megjelíteni posztokat, hogy nincs aktív bejelentkezett felhasználó
+ Bejelentkezett felhasználó reakciót adhat különböző más felhasználók tevékenységeire
+ A webes felület gördülékenyen kommunikál a hozzárendelt adatbázissal

### Nemfunkcionális követelmények

- Felhasználók nem módosíthatnak más felhasználók bejegyzéseit
- Felhasználók nem férhetnek hozzá más felhasználók személyes adataihoz csak a felhasználónevüket és profilképüket láthatják
- Az oldal könnyen kezelhető, minimális informatikai tudással igénybe vehető
- Webes felületen kezel adatbázist
- Az oldal eléréséhez egy okoseszközre és internethozzáférésre van szükség, így nem igényel különleges hardveres támogatást
- Használatához telepítés nem szükséges, különböző kiegészítők használata nélkül is elérhető

### Támogatott eszközök

+ Bármilyen olyan okoseszköz, mely rendelkezik internetes hozzáféréssel és böngészővel
+ Okostelefon, 
tablet, 
laptop, 
asztali számítógép...

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

+ **ADMIN**
    - a rendszer felügyelete az elsődleges feladata, ennek tesztelésére minden szerepkörbe be tud lépni, hogy ellenőrizze azok hibamentes üzemelését
    - az egész rendszerhez korlátlan hozzáféréssel rendelkezik, így a felhasználók profiljait is szabadon módosíthatják (jogosultságait, szerepkörét, felhasználónevét és jelszavát)
    - új felhasználókat adhatnak a rendszerhez, vagy egy már meglévőt is eltávolíthatnak onnan, ha az valamilyen szabályt megsértett
    - képesek rendszerszintű üzeneteket küldeni amit minden felhasználó megkap
    - joguk van egy moderátor által engedélyezett bejegyzést törölni vagy módosítani.

+ **MODERÁTOR**
    - feladata a felhasználók tevékenységeinek felügyelete, a rendszer olyan szintű karbantartása, ami különböző etikai és más szabályoknak való megfeleltetésre szolgál
    - a rendszerhez nincs korlátlan hozzáférése, magát a rendszert nem módosíthatja, csak és kizárólag a megjelenített tartalmat és a felhasználók tevékenységeit
    - jogukban áll adott felhasználóknak üzenetet küldeni
    - a felhasználók által feltöltött posztokat ők ellenőrzik, majd elfogadás után azok megjelennek a főoldalon, vagy elutasítás esetén törlése kerülnek.

+ **FELHASZNÁLÓ**
    - jogában áll az oldalon megjelenő minden tartalom megtekintése, valamint az ezekre adott visszajelző rendszerek használata
    - különböző bejegyzéseket posztolhat, más bejegyzésekre pontokat adhat, vagy hozzászólást írhat.

+ **LÁTOGATÓ**
    - az oldalon megjelenő bejegyzéseket tekintheti meg
    - a bejegyzéssel nem interaktálhat csak ha rendelkezik profillal

### 5.2 Menühierarchiák

+ **FŐOLDAL**
    - Bejegyzések
    - Műfajok
    - Bejelentkezés
    - Regisztráció

+ **FŐOLDAL (BEJELENTKEZVE)** 
    - Bejegyzések
    - Pontozás
    - Műfajok
    - Saját profil
    - Kijelentkezés
    - Új bejegyzés

+ **FŐOLDAL (MODERÁTOR)** 
    - Bejegyzések
    - Pontozás
    - Műfajok
    - Engedélyezés
    - Saját profil
    - Kijelentkezés
    - Új bejegyzés

+ **FŐOLDAL (ADMIN)** 
    - Bejegyzések
    - Pontozás
    - Műfajok
    - Jogosultságok
    - Engedélyezés
    - Saját profil
    - Kijelentkezés
    - Új bejegyzés

+ **REGISZTRÁCIÓ**
    - Regisztrációs felület
    - Bejelentkezés
    - Vissza a főoldalra

+ **BEJELENTKEZÉS**
    - Bejelentkeztető felület
    - Regisztráció
    - Vissza a főoldalra

+ **ÚJ BEJEGYZÉS**
    - Bejegyzés szerkesztésére szolgáló felület
    - Vissza

+ **FELHASZNÁLÓI PROFIL**
    - Profil szerkesztésére szolgáló felület
    - Vissza

+ **ENGEDÉLYEZÉS**
    - Felhasználók által beüldött posztok
    - Elfogadás / Elutasítás
    - Vissza

+ **JOGOSULTSÁGOK**
    - Jogosultságok kezelésére szolgáló felület felhasználónként
    - Módosítás
    - Vissza

## 6. Fizikai környezet

- Az alkalmazás web platformra készül, ami asztali számítógépről, hordozható készülékekről (laptop, táblagép, okostelefon) egyaránt elérhető megfelelő internet hozzáférés mellett.
- Semmilyen böngésző kiegészítő használata nem szükséges. 

### Fejlesztő eszközök
+ Visual Studio Code
+ Notepad++ 
+ XAMPP
+ phpMyAdmin


## 7. Architekturális terv

### Webszerver
Az Apache http szerveren futó alkalmazás szolgálja ki webes felületen keresztül a rendszer felhasználóit.
### Adatbázis rendszer
 Az adatok tárolása a MySql adatbázis szerveren történik.
 Az adatbázisban minden mentett változás tárolódik. 
### A program elérése, kezelése
A felhasználó felület böngészőben megjelenő html oldalak formájában érhető el, ezen keresztül tudják a felhasználók a rendszert használni. 
## 8. Adatbázis terv

![adatbazisterv.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/adatbazisterv.png)

| Tábla neve | Leírás |
| :-----------: | :-----------: |
| felhasznalok | A felhasználók táblában tároljuk a regisztrációkor megadott adatokat. |

![felhasznalok_tabla.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/felhasznalok_tabla.png)

A felhasználók tábla felépítése:

| Mező neve | Értéke | Egyébb | Extra |
| :-----: | :-----: | :-----: | :-----: |
| felhasznalok_id | INT | Not null, Auto incremental | Elsődleges kulcs |
| username | VARCHAR(45) | Not null | Unique index |
| password | VARCHAR(45) | Not null |  |
| szuletesi_ido | DATE | Not null | Formátum: ÉÉÉÉ-HH-NN |
| jogosultsag | VARCHAR(45) | Not null | Automatikusan regisztráláskor a "Felhasználó" kerül bele |

![posztok_tabla.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/posztok_tabla.png)

A posztok tábla felépítése:

| Mező neve | Értéke | Egyébb | Extra |
| :-----: | :-----: | :-----: | :-----: |
| posztok_id | INT | Not null, Auto incremental | Elsődleges kulcs |
| cim | VARCHAR(45) | Not null |  |
| bejegyzes | VARCHAR(300) | Not null |  |
| engedelyezve | VARCHAR(4) | Not null | Automatikusan a "Nem" kerül bele, a későbbiekben lehet ezt "Igen"-re állítani |


A kettőt összekötő kapcsolati tábla, a pontozás tábla.
Ez a tábla több- a több kapcsolattal jött létre.
Azért volt erre szükség, hisz egy felhasználónak tudnia kell több posztot is pontoznia, és egy posztnak tudnia kell értékelődnie több felhasználó által.

![pontozas_tabla.png](https://github.com/Drntth/rozsdas_rakollo/blob/main/Images/pontozas_tabla.png)

A pontozás tábla felépítése:

| Mező neve | Értéke | Egyébb | Extra |
| :-----: | :-----: | :-----: | :-----: |
| felhasznalok_felhasznalok_id | INT | Not null | Elsődleges kulcsot önnállóan nem alkot, csak a posztok_posztok_id kulccsal, külsőleg kapja a felhasznalok tábla felhasznalok_id mező értékét. |
| posztokok_posztok_id | INT | Not null | Elsődleges kulcsot önnállóan nem alkot, csak a felhasznalok_felhasznalok_id kulccsal, külsőleg kapja a posztok tábla posztok_id mező értékét. |
| kapott_pontszam | INT | Not null |  |

## 9. Implementációs terv
A webszerveren futó php program tartalmazza az üzleti logikát.
A felhasználói felület, ami böngészőben megjelenő weboldalak formájában érhető el HTML, CSS, és JavaScript technológiák felhasználásával készülnek.
A programok objektum orientált programozási paradigma használatával, MVC modell használata mellett.
MySql adatbázis szervert használunk az adatok tárolására.

## 10. Tesztterv

+ __Komponens tesztelés__ : az egyes weboldal elemekinek _(Például gombok, menük, űrlapok)_ működésének és megjelenítésének ellenőrzése.

+ __Integrációs tesztelés__ : a weboldal elemek közötti interakcióinak és kommunikációjának ellenőrzése.
_(Például azt, hogy a bejegyzések megfelelően jelennek meg a kategóriák alatt, vagy hogy a jogosultságok kezelése helyesen működik.)_

+ __Rendszertesztelés__ : a weboldal teljesítményének, megbízhatóságának, biztonságának és használhatóságának ellenőrzése.
_(Például a weboldal viselkedése nagy terhelés alatt, vagy hogy mennyire védett a különböző támadásoktól.)_

## 11. Telepítési terv

+ **Fizikai telepítési terv** : A weboldal rendeltetésszerű működéséhez szükség van egy adatbázis szerverre.
Az adatbázis közvetlenül csatlakozik a webszerververhez.
A webszerverre közvetlenül az internetről kapcsolódnak rá a kliensek.

+ **Szoftver telepítési terv** : A szoftver webes felületéhez csak egy webböngésző telepítése szükséges ( Google Chrome, Firefox, Opera, Edge, Brave, Vivaldi ) külön speciális szoftvert nem szükséges telepíteni a használathoz.

## 12. Karbantartási terv

### Tartalmi karbantartás:

+ A weboldalon megjelenő tartalmak folyamatos ellenőrzés alatt állnak.
Az esetleges személyi hibából elfgadásra jelölt, ám mégsem az oldalra való bejegyzéseket a felhasználók jelenteni tudják a nagyobb jogosultsággal rendelkező felhasználók számára.
Időszakosan végezhető karbantartás a regisztrált felhasználók felhasználóneveinek véletlenszerű ellenőrzése esetlegesen előforduló sértő szavak használata ellen.

### Rendszeres karbantartás:

+ __Biztonsági mentések készítése__ : a weboldal fájljairól és adatbázisáról rendszeresen másolat készül két helyre, egy felhőszolgáltatásba és egy külső merevlemezre.
Így ha valami nem várt esemény történne a weboldallal, például vírusfertőzés, külső támadás vagy adatvesztés, akkor egyszerűen visszaállítható egy korábbi, működő állapotba.
A biztonsági mentések gyakorisága az oldal aktuális bejegyzések keletkezésének gyakoriságától függően napi, heti vagy havi gyakoriságú.
Egyszerre mindig öt korábbi verziót tárolunk, ebből három a legutóbbi, a többi egy-egy ezeknál is régebbi verzió.

+ __Adatbázis karbantartása__ : rendszeresen tisztítjuk az adatbázist a felesleges adatoktól, például a régi verzióktól, a spam kommentektől, az inaktív felhasználóktól. Az adatbázis karbantartása segít megtakarítani az adattárhelyet, növelni az adatbázis sebességét és csökkenteni az adatvesztés kockázatát.
