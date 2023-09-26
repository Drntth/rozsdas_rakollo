# Követelmény specifikáció

## 1. Áttekintés

Az alkalmazásunk célja a Spongyabob Kockanadrág műsor kedvelő emberek számára vicceket és más szórakoztató tartalmakat széles körben egy helyen összegyűjteni. 
A projekt rendelkezik Web felülettel, ahol elérhetőek különböző felhasználói funkciók, többek között a látogató általi megtekintés és saját tartalom feltöltése, melyet ellenőrzött módon jelenít meg a rendszer. 
A megjelenített viccek kategorizálva és díjazva vannak. 
A kategóriákat többféleképpen lehet szétválasztani, akár a bejegyzés formátuma vagy tartalma szerint is. 
Ezek posztolása után más felhasználók által pontozni lehet az adott tartalmat, a fő témához kapcsolódó szimbólummal (csigusz pont). 
A főoldalon megjelenített részben a már korábban feltöltött és legtöbb pontot szerzett bejegyzés jelenik meg legfelül, aztán sorban a következők. 
Menü pontokba szedve lehet megtekinteni a kategorizált elemeket és a felhasználói profil kezelése.

## 2. A jelenlegi helyzet leírása

A Bikini Fenék Kft. jelenleg egy hírportál és egy eseményekkel foglalkozó cég. 
A vállalat bővíteni szeretné a repertoárját amely egy viccportál lesz. 
Jelenleg a weboldalt nem válogatja szét korosztályonként a megjelenő tartalmat, így a fiatalabbaknak megjelennek a felnőtt viccek és fordítva, ennek kiküszöbölése érdekében szeretnénk megteremteni egy olyan oldalt ahol a nagykorú rajongók is élvezhetik a korosztályukhoz illő tartalmakat.
A mai világ már annyira nyomasztó, hogy nagyon ritkán látunk embereket mosolyogni, ezért egy olyan versenyképes portált szeretnénk létrehozni, ahol megteremthetőek azok a körülmények, amivel a lehetővé tehetjük az emberek napi szórakozását.
Már több olyan viccportál is jelen van az interneten ami hasonló elven működik, azonban a mi oldalunk abban tér el, hogy egy olyan kategóriát céloztunk meg, ami hiányzik a piacról.
Egy egyszerű gyermekek számára készült animációs sorozatban megjelent különböző motívumok használatával képzeltük el azt a forrást kialakítani, amivel több különböző réteg igényei is kielégíthetőek. 


## 3. Vágyálomrendszer

Olyan alkalmazást szeretnénk létrehozni, amely minden eszközről tökéletesen elérhető és bármely képernyő mérethez igazodik.
Ennek megoldására tökéletes lenne egy olyan oldalt megvalósítani amely web alapú és online bárhonnan elérhető.
A képernyő méretbeli különbségeket reszponzív megoldással tudnánk megoldani.
Fontos lenne még az is, hogy a létező összes böngésző támogatni tudja a weboldalt, ne csak az alap chrome és safari, hanem még az internet explorer is. 
A megvalósítást mindenképp php és mysql nyelven szeretnénk kérni, melyben teljesen objektum orientált, és tiszta kódokat kapjunk, hisz a későbbiekben csatlakozó webfejlesztő munkatársak bármikor és könnyedén tudják azokat szerkeszteni. 
Fontos lenne még ha külön tudnánk választani a webhelyet fejlesztő, és a látogatókat, hisz nem szeretnénk azt se, hogy bárki be tudjon nyúlni fejlesztői szintekre az oldalon, csak az azokra kinevezett emberek. 
Erre tökéletes lenne egy olyan megoldás, mint például a rangok besorolása. 3 főbb rangra lenne szükségünk, de nem lenne baj ha a későbbiekben ezt tudnánk akár bővíteni: Admin, Felhasználó (szükséges a bejelentkezés), illetve a látogató. 
Az admin az aki kiengedi a vizsgálatra beküldött kódokat, illetve törölni tud bejegyzéseket. 
A felhasználó az aki tud bejegyzést írni, illetve másokét pontozni. 
A látogató az aki csak pontozni tud, és olvasni az adott bejegyzéseket, fontos, hogy ne tudjon posztolni. 
A felhasználó a regisztrálásnál meg kell, hogy adja nevét, felhasználónevét, e mail címét és létrehozzon a weboldalhoz egy jelszót. 
A későbbiekben ezeket mind megtudja majd változtatni. 
Az adatbázis szempontjából nincsenek túl nagy elvárások, viszont ami mindenféleképp fontos, hogy a pontozás, felhasználók és a bejegyzések külön szeretnénk választani.

## 4. Jelenlegi üzleti folyamatok modellje
+ Igényfelmérés: Felhasználók formon keresztüli igényfelmérése, hogy a jövőben milyen funkciókat használnának a jövőben.
+ Regisztráció, adatok kezelése: A látogatók képesek egy regisztrációs form kitöltése után saját fiókot nyitni, azokban az adataikat kezelni / megváltoztatni.
+ Adminisztrátorok keresése: Probléma és hibajelentés esetén, az adminok eléréseit lehet megtekinteni.

## 5. Igényelt üzleti folyamatok modellje
+ Beérkező tartalmak moderálása / elbírálása: A friss posztokat egy moderátor ellenőrzi, hogy azok az oldalunk elvárásainak megfelelőek legyenek.
+ Posztok jutalmazása: A felhasználók pontokkal illethetik a számukra szimpatikus posztokat.
+ Szűrés a legkedveltebb posztok között: A posztokat az előbb említett pontrendszer alapján szűrni is lehessen, pl.: A legkedveltebb legelsőnek jelenik meg.
+ Saját profil szerkesztés: A regisztrált felhasználók a saját fiókjukat tudják szerkeszteni, pl.: profilkép változtatás, név szerkesztés.
+ Rang rendszer: A látogatók három rangba lesznek besorolva (Admin, Felhasználó, Látogató), amik más-más hozzáféréssel rendelkeznek az oldal tartalmaihoz.

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | ... | ... | ... |

## 7. Fogalomtár