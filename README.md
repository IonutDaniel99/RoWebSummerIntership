# RoWebSummerIntership
RoWeb Summer Intership Test

Buna,

Asa cum am stabilit anterior, revin catre tine cu testul pentru acceptarea in Stagiul de vara Roweb.
Codul sursa cu rezolvarile tale trebuie trimis pana pe 26.05.2019, ora 23:59 (Ai 3 zile si un pic de codat).
Rezolvarea testului va fi trimisa ca raspuns la acest email, iar codul sursa va trebui uploadat pe google drive si trimis link-ul (nu trimiti attach direct pe mail sau pe wetransfer).
Daca nu ai reusit sa rezolvi toate taskurile, trimite ce ai reusit sa faci.
Testul este individual, vrem sa vedem ce puteti coda fiecare dintre voi.

Te rog sa confirmi primirea mailului si a atasamentelor cu raspuns la acest mail. Un simplu “Am primit testul” este suficient.

Pe acest link: https://drive.google.com/drive/folders/1Qw9uPMIpEX3qYFa4ppivmjLtt5FjdfBr?usp=sharing  o sa gasesti un folder "test_web", unde este un mic proiect HTML – sursele pe care le vei folosi la rezolvarea testului.

Pentru a vedea website-ul corect, trebuie pus folderul "test_web" intr-un localhost (ai nevoie de WAMP, XAMPP, etc) si accesat din browser. Exemplu: http://localhost/test_web


Task 1 Frontend (HTML, CSS, JS poate):

Trebuie completat HTML si CSS, astfel incat pagina web sa arate ca in imaginea: "final.png". In aceasta imagine sunt marcate cu rosu sectiunile care trebuie completate.

In fisierul "index.html", respectiv "css/homepage-style.css" sunt comentarii in zonele in care trebuie completat codul:

 <!-- Aici completeaza HTML -->
 /* AIci completeaza CSS */
De asemenea, trebuie facute efecte de hover cu tranzitii/animatii pentru ca sectiunile sa aiba efectele din videoclipul urmator: https://www.loom.com/share/21d41f061f87486880b7c92c22520e9d

HTML-ul si CSS-ul trebuie sa fie scris astfel incat website-ul sa se vada corect pe rezolutiile desktop ( > 1200px pe latime).
Poti folosi cod css bootstrap (daca esti familiar) sau copy paste din codul pe care l-am oferit in proiect.
Fonturile care trebuie folosite sunt deja importate in <head>.

Pentru efectele de hover/tranzitie/animatie este bine sa incerci sa folosesti cat mai mult CSS.

Task bonus pentru Frontend:
Daca consideri ca mai ai timp si poti face tranzitiile si animatiile din clipul urmator, suntem curiosi sa-ti vedem rezultatul:
https://www.loom.com/share/f8960ff54de94763beb780c519a5babb


Task 2 backend (PHP, JS):

Creaza un fisier "admin.php" in care vei scrie un CRUD (sectiune de administrare pentru a crea, lista, edita si sterge) pentru "Benefit keys" (un "benefit key" este unul din cele 3 item-uri pe care le-ai scris static in HTML: cele cu "In hac habitas", "Mauris non tem", "Lorem ipsum dolor").
In acest fisier nu se pune accent pe HTML/CSS, pagina poate sa arate oricat de simplu, doar sa fie cod scris corect. Folosirea OOP in crearea CRUD-ului e un bonus. Poti crea cate fisiere PHP consideri ca e nevoie pentru CRUD.

Creaza o baza de date care sa contina un tabel numit "benefit_keys" unde vor fi stocate cel putin urmatoarele informatii:
- title (cel boldat)
- text (cel gri)
- image (sa fie orice imagine random intre cele 3 icon-uri existente: "credit-locked.svg", etc.)
- content (cel care apare dupa ce dai click pe "learn more")

La accesarea URL-ului "http://localhost/test_web/admin.php" vom vedea lista itemilor (unu sub altul, nu conteaza style-ul). De exemplu un tabel in care <th> sunt: id, title, text, content, image.
In dreapta fiecarui item vom avea optiuni de: "EDIT si DELETE". Deasupra listei vom avea un buton de: "CREATE".

Cand dam click pe butonul de create, vom vedea formularul de adaugare de item (image nu va fi un field, image va fi introdus in baza de date random intre cele 3 variante de mai sus). Daca poti face formularul de create sa apara in aceeasi pagina la click, e perfect.
Cand dam click pe butonul de edit, vom vedea formularul de edit de item avand campurile precompletate cu detaliile item-ului respectiv si il putem edita. Daca poti face formularul de edit sa apara in aceeasi pagina la click, e perfect.
Cand dam click pe butonul de delete, vom afisa un prompt de "Are you sure?". La click pe "Yes" stergem item-ul.

Tot acest CRUD pe care il facem in admin, trebuie reflectat in website.
Astfel ca index.html, il vom transforma in index.php si vom lista itemii din baza de date.

Task bonus pentru backend:
Daca consideri ca mai ai timp suntem curiosi daca poti face urmatorul task:
Pe pagina principala, cand se da click pe "learn more" si apare dropdown-ul de content, sa poti incarca contentul prin Ajax. astfel, contentul din interiorul fiecarui dropdown este gol cand incarcam pagina, apoi cand dam click pe butonul de "learn more" se va incarca content-ul item-ului pe care am dat click.

 

Task 3 (Algoritm):

 

Se da un fisier text (“fisier.txt” – il gasesti pe drive), care contine mai multe linii. Pe fiecare linie sunt numere de la 0 la 255.

 

Cerinte:

Fa o functie care sa returneze un array. Array-ul va fi format din numerele de pe pozitia centrala de pe fiecare linie;
Fa o functie care returneaza un array cu numerele prime, din array-ul descoperit la punctul a) ;
Fa o functie care transforma numerele prime descoperite la punctul b) in caractere ascii si returneaza  un sir de caractere (cuvant) format din ele
 
Acest test contine 3 task-uri principale si 2 task-uri bonus. Abordeaza intai task-urile principale. Daca nu ai reusit sa rezolvi toate taskurile, trimite ce ai reusit sa faci.

 

Task-urile bonus le faceti doar daca mai aveti timp dupa ce ati facut task-urile principale.

Te rog sa confirmi primirea mailului si a atasamentelor cu un raspuns pe acest mail.

Spor!

Cristina CALIN

HR Manager

 

Fratii Golesti No 132, Pitesti, Arges 110174, Romania

Site: www.roweb.ro

Phone: 004 0348 401 040
