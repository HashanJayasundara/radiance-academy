<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DanceClass;

class ClassSeeder extends Seeder
{
    public function run()
    {
        DanceClass::create([
            'class_name' => 'Kandyan Dance Class',
            'grade' => 'Intermediate',
            'dance_type' => 'Kandyan'
        ]);
    }
}
