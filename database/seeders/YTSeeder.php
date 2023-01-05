<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('YT')->insert([
            id => 1,
            'url' => 'https://www.youtube.com/watch?v=9yk7DG8pMwI',
            'name' => 'CrCrCr',
            'description' => 'All Nassr vs Al-Tai Cristiano Ronaldo Goal+Assist',
            'duration' => '8:23',
            'likes' => 150000,
            'subscribers' => 50000
        ]);

        DB::table('YT')->insert([
            id => 2,
            'url' => 'https://www.youtube.com/watch?v=9yk7DG8pMwI',
            'name' => 'CrCrCr',
            'description' => 'All Nassr vs Al-Tai Cristiano Ronaldo Goal+Assist',
            'duration' => '8:23',
            'likes' => 150000,
            'subscribers' => 50000
        ]);

        DB::table('YT')->insert([
            id => 3,
            'url' => 'https://www.youtube.com/watch?v=9yk7DG8pMwI',
            'name' => 'CrCrCr',
            'description' => 'All Nassr vs Al-Tai Cristiano Ronaldo Goal+Assist',
            'duration' => '8:23',
            'likes' => 150000,
            'subscribers' => 50000
        ]);

        DB::table('YT')->insert([
            id => 4,
            'url' => 'https://www.youtube.com/watch?v=9yk7DG8pMwI',
            'name' => 'CrCrCr',
            'description' => 'All Nassr vs Al-Tai Cristiano Ronaldo Goal+Assist',
            'duration' => '8:23',
            'likes' => 150000,
            'subscribers' => 50000
        ]);

        DB::table('YT')->insert([
            id => 5,
            'url' => 'https://www.youtube.com/watch?v=9yk7DG8pMwI',
            'name' => 'CrCrCr',
            'description' => 'All Nassr vs Al-Tai Cristiano Ronaldo Goal+Assist',
            'duration' => '8:23',
            'likes' => 150000,
            'subscribers' => 50000
        ]);
    }
}
