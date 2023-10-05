# Admin felület teszt jegyzőkönyv
Tesztelést végezte: Kovácspál Bálint    
Operációs rendszer:	Windows 11     
Böngésző:  Brave
Dátum:   2023.10.05
Talált hibák száma:  6

## Admin funkciók tesztelése

### Jogosultságok kezelése
+ Blackbox tesztelés folyamatával olyan hibát találtunk, hogy amikor egy bizonyos jogosultságot rendeltünk egy fiókhoz, akkor a fiók eltünt a listából. (Javítva)
+ A felületen megjelent az Admin rang, mint az adható rangok egyike, aminek nem kellene megjelennie. (Javítva)
+ Jogosultság kezelésnél minden felhasználónak meg tudjuk adni a 'rangját', minden a tervezettként működik.

### Bejegyzések engedélyezése
+ Bejegyzések engedélyezésénél nem a tervezett ablakra dobott vissza, például az admint a felhasználó felület főoldalára dobta ki, miután engedélyezett egy posztot. (Javítva)

+ A nem engedélyezett posztok nem tűntek el, ha az elutasítás gombra nyomtunk. (Javítva)

+ Az engedélyezett üzenetek kikerültek a főoldalra, amég az elutasítottak törlődtek a rendszerből.

### Új bejegyzés létrehozása
+ Az elküldött üzenetek nem jelentek meg az engedélyezendő posztok között. (Javítva)

+ A bejegyzés akkor is létrejön, ha nincs benne semmi tartalom.

### Saját profil módosítása
+ A profil jelszava gond nélkül megváltozott, a felhasználónévvel együtt.

### Kilépés
+ A rendszer gond nélkül kiléptetett minden felhasználót.

### Műfajok
+ A műfajok a bejegyzéseknél nem jelentek meg, valahányszor új posztot akartunk megosztani. (Javítva)
+ A műfajok megjelennek a bejegyzéseknél.

### Bejegyzések
+ A bejegyzések akkor is megjelentek, ha nem voltak még jóváhagyva. (Javítva)

+ A bejegyzések minden felhasználó fióknak rendesen megjelenik, bármelyik felületről térünk vissza rá.
