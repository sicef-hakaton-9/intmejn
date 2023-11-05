<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::truncate();
        EventType::truncate();
        EventType::create(['id' => 1, 'name' => 'Koncert']);
        Event::create([
            'id' => 1, 
            'name' => 'Tropico band', 
            'event_type_id' => 1, 
            'description' => 'Tropico band, osnovan je davne 2002. godine u Leskovcu, i nakon samo 2 godine postojanja, preselili su se u Beograd gde su razvili karijeru koju pratimo danas. Uz mnogo hitova koje su otpevali danas, znamo ih i po neverovatnoj energiji koju šire na svakom nastupu, svadbi, venčanju.', 
            'latitude' => 43.32464102356252, 
            'longitude' => 21.910989794499383,
            'address' => 'Bulevar Nemanjica 25',
            'start_date' => '2023-05-19 20:00:00', 
            'end_date' => '2023-05-19 23:00:00', 
            'image_path' => 'events/tropico.jpg',
            'user_count' => 15,
        ]);
        Event::create([
            'id' => 2, 
            'name' => 'Rammstein koncert', 
            'event_type_id' => 1, 
            'description' => 'Rammstein je nemački metal bend, osnovan 1994. godine. Sastoji se od šest članova, a njihov stil je kombinacija metala i industrijske muzike. Bend je poznat po svojim provokativnim nastupima, a njihov koncert u Novom Sadu je jedan od najiščekivanijih u 2022. godini.', 
            'latitude' => 43.32464102356252, 
            'longitude' => 21.910989794499383,
            'address' => 'Bulevar Nemanjica 25',
            'start_date' => '2022-06-29 20:00:00', 
            'end_date' => '2022-06-29 23:00:00', 
            'image_path' => 'events/rammstein.jpg',
            'user_count' => 25,
        ]);
        Event::create([
            'id' => 3, 
            'name' => 'Aleksandra Prijovic koncert', 
            'event_type_id' => 1, 
            'description' => 'Karte za sve ove koncerte su raspordate u rekordnom rok i svi se pitaju kako? Mnogi su mislili da je Aleksandri pomoglo to što je „Brenina snajka“, ali nije. Najviše je bilo onih kojima je jasno da nakon decenija promovisanja rijalitija i kiča u našim medijima, ovo bude očekivani rasplet.', 
            'latitude' => 43.32464102356252, 
            'longitude' => 21.910989794499383,
            'address' => 'Bulevar Nemanjica 25',
            'start_date' => '2022-06-29 20:00:00', 
            'end_date' => '2022-06-29 23:00:00', 
            'image_path' => 'events/prijovic.jpeg',
            'user_count' => 2,
        ]);
    }
}
