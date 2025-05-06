<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::create([
            'customer_name' => 'John Doe',
            'event_location' => 'Colombo',
            'event_date' => '2025-06-15',
            'event_time' => '14:00',
            'event_category' => 'Wedding',
            'package_type' => 'Premium',
            'num_dancers' => 5,
            'status' => 'upcoming'
        ]);
    }
}
