<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('author')->insert([
            'name' => 'JK Rowling',
            'gender' => 'female',
            'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu mauris ac dui mattis laoreet. Nulla nunc felis, lacinia mattis vulputate sed, dignissim nec mi. Duis finibus commodo lectus sit amet pellentesque.',
            
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ]);
            
            DB::table('author')->insert([
                'name' => 'Andrea Hirata',
                'gender' => 'male',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu mauris ac dui mattis laoreet. Nulla nunc felis, lacinia mattis vulputate sed, dignissim nec mi. Duis finibus commodo lectus sit amet pellentesque.',
                
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]);
            
    }
}
