<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'event_category' => 'Concert-Spectacle',
            'event_description' => 'Un concert exceptionnel avec des artistes de renom.',
            'event_title' => 'Concert d\'été',
            'event_date' => '2024-08-15 20:00:00',
            'event_image' => 'http://example.com/images/concert.jpg',
            'event_city' => 'Paris',
            'event_address' => '123 Rue de la Musique',
            'event_status' => 'upcoming',
        ]);

        Event::create([
            'event_category' => 'Concert-Spectacle',
            'event_description' => 'Un concert exceptionnel avec des artistes de  comme Coni Gangstar.',
            'event_title' => 'Concert d\'été',
            'event_date' => '2024-08-15 20:00:00',
            'event_image' => 'http://example2.com/images/concert.jpg',
            'event_city' => 'Lomé',
            'event_address' => 'Avédji',
            'event_status' => 'upcoming',
        ]);
    }
}
