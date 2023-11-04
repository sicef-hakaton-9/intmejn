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
        PlaceType::create(['id' => 1, 'name' => 'Znamenitost']);
        PlaceType::create(['id' => 2, 'name' => 'Restoran']);
        Place::create(['id' => 1, 'name' => 'Ćele Kula' , 'place_type_id' => 1, 'description' => 'Ćele Kula je spomenik iz Prvog srpskog ustanka, nalazi se u centru grada, u neposrednoj blizini Trga slobode. Podignuta je u čast poginulih boraca u bici na Čegru 1809. godine. Ćele Kula je jedinstvena u svetu po tome što je napravljena od ljudskih lobanja. U njoj se nalazi i Muzej glave i lobanje. Ćele Kula je jedan od simbola grada i jedna od najposećenijih turističkih atrakcija.', 'location' => 'Nikole Pašića 51', 'address' => 'Nikole Pašića 51', 'image_path' => 'places/cele_kula.jpg']);
    }
}
