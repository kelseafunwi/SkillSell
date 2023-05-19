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
            DB::table('job_posts')->insert([
                'title' => Str::random(15),
                'location' => Str::random(10),
                'details' => Str::random(50),
                'slug' => Str::random(10),
                'company_website' => "www.".Str::random(7)."com",
                'phone' => 650475598,
                'amount' => 343434,
                'user_id' => rand(1, 10),
                'category' => 'Computer Technologies',
                'created_at' => null,
                'updated_at' => null,
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            $fullname = Str::random(15);
            DB::table('users')->insert([
                'fullname' => $fullname,
                'occupation' => Str::random(10),
                'profile' => Str::random(50),
                'email' => $fullname.'@gmail.com',
                'password' => $fullname,
                'created_at' => null,
                'updated_at' => null,
            ]);
        }

    for ($i = 0; $i < 20; $i++) {
            $company_name = Str::random(15);
            $category = ['engineering', 'computer programming', 'agriculture', 'management', 'Teaching', 'Innovation'];
            DB::table('companies')->insert([
                'company_name' => $company_name,
                'description' => Str::random(50),
                'company_website' => 'www'. $company_name . '.org',
                'company_ceo' => Str::random(19),
                'company_phone' => rand(650000000, 699999999),
                'category' => $category[$i % 6],
                'taskID' => Str::random(10),
                'location' => Str::random(10),
                'company_creator_id' => rand(1, 10),
                'created_at' => null,
                'updated_at' => null,
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
