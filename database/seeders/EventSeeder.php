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
        Event::create(['id' => 1, 'name' => 'Rammstein koncert', 'event_type_id' => 1, 'description' => 'Rammstein je nemački metal bend, osnovan 1994. godine. Sastoji se od šest članova, a njihov stil je kombinacija metala i industrijske muzike. Bend je poznat po svojim provokativnim nastupima, a njihov koncert u Novom Sadu je jedan od najiščekivanijih u 2022. godini.', 'place_id' => 1, 'start_date' => '2022-06-29 20:00:00', 'end_date' => '2022-06-29 23:00:00', 'image_path' => 'events/rammstein.jpg']);
    }
}
