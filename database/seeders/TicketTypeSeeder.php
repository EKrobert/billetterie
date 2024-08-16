<?php

namespace Database\Seeders;

use App\Models\TicketTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketTypes::create([
            'ticket_type_event_id' => 1,
            'ticket_type_description' => 'Un concert exceptionnel avec des artistes de renom.',
            'ticket_type_name' => 'Concert d\'été',
            'ticket_type_quantity' => 12 ,
            'ticket_type_real_quantity' => 1200,
            'ticket_type_total_quantity' => 10,
            'ticket_type_price' => 500,
        ]);
    }
}
