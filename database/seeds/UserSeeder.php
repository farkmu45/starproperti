<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Freelance Agent',
            'role_id' => '1',
            'phone_number' => '+62932138982',
            'password'=> Hash::make('konek.space'),
            'email' => 'freelanceagent@mail.com'
        ]);

        User::create([
            'name' => 'Internal Agent',
            'role_id' => '2',
            'phone_number' => '+62932138912',
            'password'=> Hash::make('konek.space'),
            'email' => 'internalagent@mail.com'
        ]);

        User::create([
            'name' => 'Admin',
            'role_id' => '3',
            'phone_number' => '+62932138913',
            'password'=> Hash::make('konek.space'),
            'email' => 'admin@mail.com'
        ]);
    }
}
