<?php

use App\PropertyType;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyType::create([
            'name' => 'Sewa'
        ]);

        PropertyType::create([
            'name' => 'Baru'
        ]);
    }
}
