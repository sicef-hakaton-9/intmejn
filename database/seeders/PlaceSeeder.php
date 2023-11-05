<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Place;
use App\Models\PlaceType;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::truncate();
        PlaceType::truncate();
        PlaceType::create(['id' => 1, 'name' => 'Kafić']);
        PlaceType::create(['id' => 2, 'name' => 'Restoran']);
        PlaceType::create(['id' => 3, 'name' => 'Brza hrana']);
        PlaceType::create(['id' => 4, 'name' => 'Tržni centar']);
        PlaceType::create(['id' => 5, 'name' => 'Znamenitost']);
        PlaceType::create(['id' => 6, 'name' => 'Klub']);
        PlaceType::create(['id' => 7, 'name' => 'Javna površina']);
        Place::create([
            'id' => 1, 
            'name' => 'Ćele Kula' , 
            'place_type_id' => 5, 
            'description' => 'Ćele Kula je spomenik iz Prvog srpskog ustanka, nalazi se u centru grada, u neposrednoj blizini Trga slobode. Podignuta je u čast poginulih boraca u bici na Čegru 1809. godine. Ćele Kula je jedinstvena u svetu po tome što je napravljena od ljudskih lobanja. U njoj se nalazi i Muzej glave i lobanje. Ćele Kula je jedan od simbola grada i jedna od najposećenijih turističkih atrakcija.', 
            'latitude' => 43.31212478981214,
            'longitude' => 21.92412343661449,
            'address' => 'Bulevar Dr Zorana Djindjica', 
            'image_path' => 'places/cele-kula.jpg'
        ]);
        Place::create([
            'id' => 2,
            'name' => 'Stambolijski',
            'place_type_id' => 2, // restoran
            'description' => 'Izgradnju kuće započeo je Turčin Amet Memedović, davne 1875. godine. Još uvek nedovršenu kuću od Memetovića kupio je slavni niški trgovac Todor Stanković Stambolija 1. avgusta 1878. godine za 25 zlatnih lira. Iste godine gradnja kuće se privodi kraju. Važila je za jednu od bogatijih kuća, a vlasnik i njegova porodica bili su poštovani kao časni ljudi i dobri domaćini. Upravo po nadimku Todora Stankovića sam objekat od tada postaje poznat u Nišu kao kuća Stambolijskih.
                Objekat čuva sve odlike srpsko – balkanskog stila stare gradske arhitekture i predstavlja jedini očuvani primerak u celom Nišu, stoga je proglašen spomenikom kulture i 28. jula 1949. godine stavljen pod zaštitu zakona.',
            'latitude' => 43.31869718902023,
            'longitude' => 21.8932273955105,
            'address' => 'Nikole Pasica 36',
            'image_path' => 'places/stambolijski.jpg'
        ]);
        Place::create([
            'id' => 3,
            'name' => 'Aleksica tvrdjava',
            'place_type_id' => 2, // restoran
            'description' => ' Restoran Aleksića Tvrdjava se nalazi na bulevaru Nikole Tesle bb, i smešten je pored same niške tvrđave. Duh starog Niša daje mu posebnu romantiku i draž. Uživajte u oazi napravljenoj samo za Vas.Pored elegantnog ambijenta tu je naravno i najbolje piće i najukusnija hrana koju za Vas pripremaju naši vrhunski kuvari. Najbolja usluga će Vam, nadamo se, upotpuniti prelepi doživljaj koji će se pamtiti. Neka Vam život čine samo lepe uspomene.',
            'latitude' => 43.3298633699011,
            'longitude' => 21.897196463847997,
            'address' => 'Bulevar Nikole Tesle bb',
            'image_path' => 'places/aleksica-tvrdjava.jpg'
        ]);
        Place::create([
            'id' => 4,
            'name' => 'Galija',
            'place_type_id' => 2, // restoran
            'description' => 'Neka tradicionalna kafana je pravo mesto gde se osećate kao da ste zakoračili unazad u vreme prošlih epoha. Dok ulazite kroz teška drvena vrata, dočekuje vas prijatan miris dima i domaće kuhinje. Unutrašnjost kafane odiše rustičnim šarmom, sa drvenim stolovima i stolicama koje su već decenijama svedoci priča i događaja. Zidovi su prekriveni autentičnim fotografijama, šarama i zlatnim okvirom, koji svedoče o bogatom istorijskom nasleđu ovog mesta. Svetlo je blago i topla, a u pozadini se čuje živa muzika sa tamburama i violončelima. Kafana je prepuna gostiju koji uživaju u tradicionalnim specijalitetima kao što su ćevapi, sarma, i karađorđeva šnicla, serviranim na drvenim posudama. Ovde se često organizuju i večeri sa narodnom muzikom, gde posetioci mogu da uživaju u pesmama i igri, stvarajući nezaboravne trenutke u ovoj oazi tradicije i topline.',
            'latitude' => 43.31822613397399,
            'longitude' => 21.895838328835733,
            'address' => 'Nikole Pasica 36',
            'image_path' => 'places/galija.jpg'
        ]);
        Place::create([
            'id' => 5,
            'name' => 'Delta planet',
            'place_type_id' => 4, // trzni centar
            'description' => 'Prvi Delta Planet u Srbiji, sa 40.000 m2 i 850 parking mesta, otvorio je svoja vrata na uglu Bulevara Nemanjića.
                Lokacija je savršeno povezana lokalnim saobraćajem sa svim glavnim zonama grada, u naseljenom delu šireg centra, i zasigurno je nova omiljena destinacija posetilaca svih uzrasta.
                Najveći šoping centar Niša dom je mnogobrojnih domaćih i inostranih brendova, a mnogi od njih se baš u Delta Planetu prvi put predstavljaju na tržištu.
                Svojom raznovrsnom ponudom Delta Planet će pružiti ljubiteljima šopinga uživanje u aktuelnim modnim kolekcijama, a raznovrsnost zabavnih sadržaja, kafića i restorana će pretvoriti svaku posetu u pravi izlazak!
                Delta Planet – prepustite se carskom doživljaju.',
            'latitude' => 43.32464102356252, 
            'longitude' => 21.910989794499383,
            'address' => 'Bulevar Nemanjica 25',
            'image_path' => 'places/delta-planet.jpg'
        ]);
        Place::create([
            'id' => 6,
            'name' => 'Forum',
            'place_type_id' => 4, // trzni centar
            'description' => 'Forum šoping centar nalazi se u samom centru Niša, u Obrenovićevoj 42. Projekat i enterijer uradio je renomirani arhitektonski biro Chapmann Taylor, odnosno Chapman Taylor Architteti. Na prostoru od 11.000 kvadratnih metara, nalazi se 40 lokala, sa više od 80 modnih brendova odeće, obuće i tehnike, kao i menjačnica, trafika, poslovni prostor i velika garaža.',
            'latitude' => 43.31904071700369, 
            'longitude' => 21.89467298015131,
            'address' => 'Obrenoviceva 46',
            'image_path' => 'places/forum.jpg'
        ]);
    }
}
