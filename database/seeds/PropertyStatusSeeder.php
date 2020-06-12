<?php

use App\PropertyStatus;
use Illuminate\Database\Seeder;

class PropertyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyStatus::create([
            'name' => 'Hot'
        ]);

        PropertyStatus::create([
            'name' => 'New'
        ]);
    }
}
