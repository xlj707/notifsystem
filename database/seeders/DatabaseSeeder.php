<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        \App\Models\User::factory()->create([
            'name' => 'Hasael Ortuño',
            'email' => 'hasael@iwell.info',
            'password' => bcrypt('12345678'),
            //all user data missing here it will be brought from UserFactory
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Virgilio Montemayor',
            'email' => 'virgilio@iwell.info',
            'password' => bcrypt('12345678'),
            //all user data missing here it will be brought from UserFactory
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Norberto Benavides',
            'email' => 'norberto_benavides@iwell.info',
            'password' => bcrypt('12345678'),
            //all user data missing here it will be brought from UserFactory
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Jero Ahumada',
            'email' => 'jero@iwell.info',
            'password' => bcrypt('12345678'),
            //all user data missing here it will be brought from UserFactory
        ]);

        \App\Models\User::factory(10)->create();
    }
}
