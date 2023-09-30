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
   * Product owner: 
   * Üzleti szereplő:
     
### 2.2 Projektmunkások és felelőségek:
   * Frontend:
   * Backend:
   * Tesztelés:
     
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

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | ... | ... |

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K4 | ... | ... |

### Támogatott eszközök

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

### 5.2 Menühierarchiák

## 6. Fizikai környezet

### Fejlesztő eszközök

## 7. Architekturális terv

### Webszerver

### Adatbázis rendszer

### A program elérése, kezelése

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

## 10. Tesztterv

## 11. Telepítési terv

Fizikai telepítési terv: 

Szoftver telepítési terv: 

## 12. Karbantartási terv

