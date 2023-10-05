# Szerkesztő felület teszt jegyzőkönyv
Tesztelést végezte:    Tóth Dorina Ildikó (FYA26Y) 
Operációs rendszer:	     WIN11
Böngésző:     Firefox
Dátum:   2023.10.05.
Talált hibák száma:     1

## Szerkesztő funkciók tesztelése

+ A szerkesztői jogosultsággal rendelkező profil funkcióinak teszteléséhez előszor a főoldalon látogatóként a bejelentkezés menüpontot kell kiválasztani, majd megadni a megfelelő felhasználónév és jelszó kombinációt.
+ Ezután megjelenik a szerkesztő által megtekinthető főoldal, melyen van egy 'Bejegyzések' és egy 'Műfajok' fül, valamint 'Engedélyezések', 'Új bejegyzés', 'Saját profil' és egy 'Kilépés' menüpont. 
A továbbiakban ezek tesztje kerül jegyzőkönyvezésre.

### Bejegyzések engedélyezése
+ Az 'Engedélyezések' menüpontra kattintva megjelenik az egyes felhasználók által beküldött bejegyzések tartalmi adatai és tulajdonságai.
+ Itt látható a beküldő felhasználó felhasználóneve, a bejegyzés címe, illetve annak tartalma.
+ A szerkesztő itt kiválaszthatja az 'OK' = elfogadás és a 'NO' = elutasítás gombokat, ezekkel kezelve a posztot.
+ Az 'OK' gomb lenyomásával eltűnik az 'Engedélyezések' közül az adott bejegyzés és megjelenik a főoldalon.
+ A 'NO' gomb lenyomásával a bejegyzés törlődik a rendszerből.
+ A 'Vissza' gombra kattintva visszakerül a szerkesztő a saját főoldalára.

### Új bejegyzés
+ Az 'Új bejegyzés' menüpont megnyitásakor megjelenik egy űrlap melybe a megfelelő helyekre beírt adatokkal létrehozható egy új bejegyzés.
    + Üresen hagyva az oldal új bejegyzésnek érzékeli és eltárolja az adatbázisban.
    + Teljesen kitöltött állapotban a rendszer eltárolja a megadott paraméterekkel rendelkező bejegyzést az adatbázisban.
    + Az elküldés gombra kattintva a rendszer elvégzi az adatbázisba tárolást, majd visszairányítja a szerkesztőt a saját főoldalára, ahol megjelenik az új bejegyzése.
+ A 'Vissza' gombra kattintva visszakerül a szerkesztő a saját főoldalára.

### Saját profil
+ A 'Saját profil' menüpont megnyitásakor a szerkesztő megtekintheti a saját profiljának adatait (felhasználónév, jelszó, profilkép).
+ Itt lehetősége nyílik a következő adatok módosítására: 
    + felhasználónév: egy új felhasználónév megadásával frissül az adatbázisban a szerkesztő megjelenített felhasználóneve. 
    Ebben az esetben a következő belépéskor az új felhasználónév megadásával lehet belépni a profilba.
    A 'Saját profil' menüpont újboli megnyitásával már a frissített felhasználónév fog megjelenni.
    + jelszó: egy új jelszó megadásával frissül az adatbázisban a szerkesztő jelszava.
    Ebben az esetben a következő belépéskor az új jelszó megadásával lehet belépni a profilba.
+ A 'Módosítás' gomb megnyomásakor a következő történhet:
    + nem változtatva az eredeti értékeken minden adat marad a régi, az adatbázis ugyan frissíti viszont ugyanarra mint ami eddig volt.
    + új értékek megadásakor frissül a felhasználónév - jelszó párosítás, így a következő belépéskor ezek megadásával tud bejelentkezni a szerkesztő.
+ A 'Vissza' gomb megnyomásával visszakerül a szerkesztő a saját főoldalára.

### Kilépés
+ A 'Kilépés' menüpontra kattintva a rendszer bezárja az aktív munkamenetet / kijelentkezteti az adott szerkesztőt, majd visszairányítja a látogatók számára fenntartott főoldalra.

### Műfajok
+ A 'Műfajok' menü alatt az egyes műfajokra kattintva megváltoznak a főoldalon megjelenített bejegyzések kategorizálva.

### Bejegyzések
+ A 'Bejegyzések' részben alapesetben az összes poszt megjelenik. 
Azonban a 'Műfajok' menü használatával kategorizálva is megjeleníthetőek.
