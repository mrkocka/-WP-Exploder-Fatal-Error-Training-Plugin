
# WP-Exploder-Fatal-Error-Training-Plugin

###  ⚠️ Figyelmeztetés

Ez a plugin kizárólag oktatási célra készült.
A WP Exploder szándékosan idéz elő PHP Fatal Errort, amely a WordPress teljes működését megbénítja.

Csak saját tesztkörnyezetben (LocalWP, XAMPP, Docker, VirtualHost stb.) használd!
Éles (production) weboldalon tilos telepíteni.


### 💣 WP Exploder – Fatal Error Training Plugin

A WP Exploder egy demonstrációs WordPress plugin, amely aktiválásakor és futáskor PHP Fatal Errort generál.
Kifejezetten oktatási célokra lett készítve, hogy szemléltesse, hogyan omlik össze egy WordPress oldal hibás plugin miatt, és hogyan lehet visszaállítani a működését.
#### 🎯 Projekt célja
•	Megmutatni, hogyan működik egy valódi Fatal Error WordPress alatt

•	Stack trace olvasás tanítása

•	Hibakeresési folyamat demonstrálása


•	Bemutatni, hogyan kell helyreállítani egy összeomlott WordPresst FTP-n vagy  fájlkezelőn keresztül

•	Előkészíteni a hallgatókat valós éles hibák kezelésére


#### 🔥 Mit csinál a plugin?
A plugin aktiválásakor meghív egy nem létező függvényt:


```bash
hack_the_system();
```


Ez egy klasszikus hibát eredményez, amely a teljes oldal betöltését megszakítja.

![App Screenshot](https://git.mintakocka.hu/mrkocka/mrkUploder/src/branch/main/img/01.png)

Ennek hatásai:

• A frontend teljesen hibára fut

• Az admin felület is összeomlik

• A WordPress hibakezelő rendszere stack trace-t jelenít meg

• A felhasználó „Súlyos hiba történt a webhelyünkön” üzenetet kap

📄 Licenc(GPLv2 vagy újabb)

A Repoban mellékelt plugin szabadon használható! 


## Authors

- [@mrkocka](https://www.mrkocka.hu/)

