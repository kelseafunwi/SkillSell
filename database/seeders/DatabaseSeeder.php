<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        for ($i = 0; $i < 10; $i++) {
            $time = new DateTime();     
            DB::table('job_offers')->insert([
                'title' => Str::random(15),
                'location' => Str::random(10),
                'details' => Str::random(50),
                'website' => "www.".Str::random(7)."com",
                'phone' => 650475598,
                'amount' => 343434,
                'creator_id' => 1,
                'category' => 'Computer Technologies',
                'created_at' => $time,
                'update_at' => $time,
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
