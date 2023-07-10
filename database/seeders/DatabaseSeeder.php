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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Hospital::factory(10)->create;
        // DB::table('hospitals')->insert([
        //     [
        //         'hospitalname' => 'Hospital A',
        //         'hospitalemail'=> 'hospitalA@gmail.com',
        //         'contact'=>'+256706023771',
        //         'location' => 'City A',
        //         'logo' => 'path/to/logo1.png',
        //         'registrationdate'=> '20/01/2023'
        //     ],
            // [
            //     'hospitalname' => 'Hospital B',
            //     'hospitalemail'=> 'hospitalB@gmail.com',
            //     'contact'=>'+256706023771',
            //     'location' => 'City B',
            //     'logo' => 'path/to/logo2.png',
            //     'registrationdate'=> '20/02/2023'
            // ],]);
    }
}
