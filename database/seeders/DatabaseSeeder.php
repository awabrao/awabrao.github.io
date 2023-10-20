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
          //  \App\Models\User::factory(10)->create();
        
        

         \App\Models\User::factory()->create([
           'name' => 'Awab',
             'email' => 'mawabrao5@gmail.com',
             'password'=>'pbzxizjl5w63',
             'usertype'=>'admin'
     ]);
    }
}
