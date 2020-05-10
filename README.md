# tema2-PHP

Sa se calculeze suma primelor "n" numere naturale in doua moduri (recursiv si non recursiv).

Pentru rezolvarea temei trebuie sa se defineasca doua functii care primesc un parametru $n (numar intreg) iar rezultatul intors de catre functie trebuie sa fie un numar intreg:

- o functie cu numele sumaNonRec trebuie sa calculeze suma primelor "n" numere non recursiv
- o functie cu numele sumaRec trebuie sa calculeze suma primelor "n" numere recursiv.

Pentru testarea functiei se pot folosi urmatoarele seturi de valori:
i) $n = 3; 1+2+3 = 6
ii) $n = 10; 1+2+3+4+5+6+7+8+9+10 = 55
iii) $n = 15; 1+2+3+4+5+.....+10+11+12+13+14+15 = 120

Hints:
Pentru functia recursiva:
- o functie este recursiva daca aceasta se apeleaza pe ea insasi in interiorul ei.
- trebuie sa puneti o conditie pentru care sa se apeleze functia in interior, de exemplu daca $n = 0 trebuie returnata valoarea 0, altfel trebuie returnat apelul catre functia sumaRec in care se paseaza valoarea $n-1 ca parametru.

Pentru functia non recursiva:
- puteti folosi formula matematica, sau puteti folosi o structura repetitiva (for, while, do while) care sa adune numarul intr-o variabila (ex: $sum) iar la fiecare iteratie sa scada o unitate din $n sau sa adune o unitate pana cand aceasta este egala cu $n.

Optional:
- Se pot face validari pentru numarul introdus, de exemplu, sa se verifica daca numarul este intreg, iar daca nu este numar intreg sa se afiseze acest lucru si sa nu se mai calculeze suma.
- Se pot modifica functiile astfel incat sa se calculeze doar suma numerelor impare sau pare (in functie de preferinta) pana la valoarea lui $n.
