1\. daļa
========

2\. uzdevums, (32 punkti)
-------------------------

Noliktavā paredzēts uzstādīt iepakošanas robotu, kura uzdevums ir iepakot taisnstūra formas kastēs iespējami daudz no vienādiem kubveida klucīšiem veidotu dažādu taisnstūra paralēlskaldņa formas bloku. Kastes bloku iepakošanai tiek izvēlētas tā, ka to visi malu garumi ir proporcionāli klucīša izmēram (kastes jebkuras malas garums, kas dalīts ar klucīša malas garumu, ir vesels skaitlis). Klucīši var būt dažādās krāsās, bet bloks drīkst būt veidots tikai no vienādas krāsas klucīšiem. Viens bloks var būt veidots no viena, diviem, trīs vai četriem klucīšiem. Programmētāju komandai dots uzdevums izveidot datorprogrammu minētā robota darbināšanai. Tev kā programmētāju komandas dalībniekam ir izvēlētā programmēšanas valodā jāsastāda kods, kas realizē tālāk minētos uzdevumus.

1.  Definēt:
    1.  klasi **kubs** (1 punkts), kurai ir īpašības (1 punkts):
        1.  **malas garums** centimetros, vesels skaitlis intervālā no 2 līdz 10 ieskaitot;
        2.  **krāsas nosaukums** (viens vārds) – teksts;
    2.  metodes:
        1.  **aprekinat\_tilpumu**, kura aprēķina un atgriež veselu skaitli – kuba tilpumu kubikcentimetros (1 punkts);
        2.  metode \_\_destruct(), kura likvidē objektu un ekrānā izvada paziņojumu, ka objekts likvidēts, paziņojumā norādot likvidētā objekta krāsu (1 punkts);
        3.  metode \_\_construct(), kura inicializē klases **kubs** īpašības (1 punkts).
2.  Izveidot klases **kubs** konstruktoru, kas veic saņemto datu (argumentu) kontroli, izvadot atbilstošu paziņojumu (1 punkts) un uzstādot minimālo nosacījumiem atbilstošo vērtību (1 punkts), ja malas garums neatbilst nosacījumiem.
3.  Izveidot jaunu klases kubs objektu **kubg**, kura krāsa ir zaļa un malas garums 10 centimetri (1 punkts).
4.  Izveidot jaunu klases **kubs** objektu **kubr**, kura krāsa ir sarkana un malas garums 1 centimetrs (1 punkts).
5.  Izvadīt ekrānā objekta **kubg** krāsu un tilpumu (1 punkts).
6.  Izvadīt ekrānā objekta **kubr** malas garumu (1 punkts).
7.  [Dzēst](https://www.php.net/manual/en/function.unset.php) objektu **kubr** (1 punkts).
8.  Pārbaudīt, ka objekts **kubr** vairs nav pieejams, un izvadīt ekrānā atbilstošu paziņojumu (1 punkts).
9.  Izvadīt ekrānā objekta **kubg** malas garumu (1 punkts).
10. Definēt klasi bloks (1 punkts), kura manto klasi **kubs** (1 punkts) un kurai ir:
    1. privātas īpašība (1 punkts):
        1.  **kubu skaits** blokā, vesels skaitlis intervālā no 1 līdz 4 ieskaitot;
    2. publiskas īpašības (1 punkts):
       1. **nosaukums**, kurš veidots no kuba krāsas un kubu skaita apvienojuma, piemēram, orange4;
       2. **forma**, vesels divciparu skaitlis ar iespējamām vērtībām 11, 12, 13, 14 un 22, kur pirmais cipars norāda vertikālā stāvoklī novietota bloka platumu (klucīšos), bet otrais – bloka augstumu (klucīšos);
       3. **derīgums** – vesels skaitlis, noklusētā vērtība 0, bet tiek uzstādīta uz 1, ja formas parametrs neatbilst noteikumiem;
    3. metode (1 punkts):
       1. **tilpums**, kura aprēķina un atgriež veselu skaitli – bloka tilpumu kubikcentimetros.
11. Izveidot klases bloks konstruktoru, kas veic saņemto datu (argumentu) kontroli, izvadot atbilstošu paziņojumu, ja:
    1. parametra forma vērtība neatbilst nosacījumiem (1 punkts) un uzstāda objekta parametra derīgums vērtību uz 0, citādi uzstāda derīguma vērtību uz 1 (1 punkts);
    2. kubu skaits blokā neatbilst nosacījumiem (1 punkts)
12. Izveidot klases bloks objektu, kas sastāv no 3 oranžas krāsas kubiem ar malas garumu 5 centimetri, formas numuru 13, un piešķirt tam nosacījumiem atbilstošu nosaukumu (4 punkti).
13. Izvadīt ekrānā izveidotā objekta nosaukumu un tilpumu (1 punkts).
14. Izveidot klases bloks objektu, kas sastāv no 5 zilas krāsas kubiem ar malas garumu 7 centimetri, formas numuru 23, un piešķirt tam nosacījumiem atbilstošu nosaukumu (2 punkti).
15. Izvadīt ekrānā izveidotā objekta nosaukumu un derīgumu (1 punkts).
16. Nomainīt objektam formas numuru uz 12 (1 punkts).
17. Izvadīt ekrānā izveidotā objekta nosaukumu un derīgumu (1 punkts).
