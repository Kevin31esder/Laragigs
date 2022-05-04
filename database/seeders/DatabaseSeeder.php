<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(5)->create();
        $user=User  ::factory()->create([
                "name"=>'kevin',
                "email"=>'kevin31esder@gmail.com'
        ]);
        \App\Models\Listing::factory(6)->create([
            'user_id'=>$user->id
        ]);
    }
}
