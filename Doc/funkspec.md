# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

## 2. Vágyálomrendszer leírása

## 3. Jelenlegi üzleti folyamatok modellje

## 4. Igényelt üzleti folyamatok modellje

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

- **ADMIN**: feladata a rendszer felügyelete, ennek tesztelésére minden szerepkörbe be tud lépni, hogy ellenőrizze azok hibamentes üzemelését. Az egész rendszerhez korlátlan hozzáféréssel rendelkezik, így a felhasználók profiljait is szabadon módosíthatják. Ez magában foglalja az adott felhasználó jogosultságait, szerepkörét, felhasználónevét és jelszavát. Emellett új felhasználókat adhatnak a rendszerhez, vagy egy már meglévőt is eltávolíthatnak onnan, ha az valamilyen szabályt megsértett. Képesek rendszerszintű üzeneteket küldeni amit minden felhasználó megkap. Joguk van egy moderátor által engedélyezett bejegyzést törölni vagy módosítani.

- **MODERÁTOR**: a felhasználók által feltöltött tartalmak moderálása, majd elfogadása vagy elutasítása. 
- **FELHASZNÁLÓ**: tartalmak megtekintése, saját bejegyzések létrehozása. 
- **MEGTEKINTŐ**: bejegyzések megtekintése.


## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

![képnév](gitlink ahol a kép van)

## 9. Forgatókönyvek

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| F0 | ... | ... |

## 11 Fogalomszótár