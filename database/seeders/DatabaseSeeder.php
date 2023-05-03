<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(30)->create();

        Listing::factory(20)->create();

        // Listing::create([
        //   'title' => 'Wordpress Developer',
        //   'tags' => 'wordpress, javascript',
        //   'company' => 'Icebox Ice',
        //   'location' => 'Griffin, GA',
        //   'email' => 'iceboxice@email.com',
        //   'website' => 'https://icebox-ice.com/',
        //   'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quae excepturi dicta numquam. Optio quo repellendus error quasi quas quisquam ad nam. Voluptates sunt vitae, vero eligendi accusamus magni harum ad voluptatibus nihil fuga repudiandae velit, placeat sequi numquam modi? Nisi, aliquid. Corporis soluta facilis voluptatibus eligendi nulla amet qui.',
        // ]);

        // Listing::create([
        //   'title' => 'Laravel Developer',
        //   'tags' => 'laravel, javascript, php',
        //   'company' => 'Icebox manufacturing',
        //   'location' => 'Griffin, GA',
        //   'email' => 'iceboxmanufacturing@email.com',
        //   'website' => 'https://iceboxmanufacturing.com/',
        //   'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum beatae quisquam voluptatibus alias deserunt dicta impedit fugit quod tempore aperiam rem laborum commodi, quia ad eius veritatis deleniti itaque? Beatae cum sunt quia iusto ex deleniti voluptate eveniet fugit illo voluptates, doloremque soluta velit nesciunt, incidunt delectus debitis laudantium culpa?',
        // ]);
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
