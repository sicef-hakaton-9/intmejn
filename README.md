# Aplikacija „CITYZEN”

## Tim „IntMejn”

Aplikacija nastala na devetom [SICEF Hakatonu](https://hakaton.sicef.info/), 24-časovnom takmičenju u programiranju održanom od 3. do 5. novembra 2023. godine na Elektronskom fakultetu u Nišu.

Učesnici su imali zadatak da naprave **aplikaciju na temu „softverska podrška pametnim gradovima”**.

## Članovi tima

- [Igor Jovanović](https://github.com/ig0r2)
- [Nikola Krstić](https://github.com/nikrstic)
- [Novak Kuzmanović](https://github.com/novaKuzma)
- [Veljko Petković](https://github.com/veljko2404)

## Opis aplikacije

Aplikacija pruža lako dostupne informacije vezane za neki grad, kao što su lokacije uslužnih objekata, znamenitih objekata, spisak predstojećih događaja.
Dodatna mogućnost je da se stanovnik grada prijavi kao vodič, tako da gost koji želi da obiđe grad može da izabere i unajmi vodiča.

## Tehnologije
- VueJS (Javascript)
- Laravel (PHP)
- MySQL

## Uputstvo za pokretanje

Instalacija dependencies
```
composer install
```
```
npm install && npm run build
```
Migracija baze
```
php artisan migrate --seed
```
Pokretanje servera
```
php artisan serve
```

----------
Više o SICEF-u, organizatoru SICEF Hakatona, možete saznati na sajtu: https://sicef.info. 
