<?php

namespace Database\Seeders;

use App\Models\Hall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hall_seed = [
            ['id'=>'1','lecture_hall_name'=>'BILIK KULIAH 01','lecture_hall_place'=>'CS1'],
            ['id'=>'2','lecture_hall_name'=>'BILIK KULIAH 02','lecture_hall_place'=>'CS1'],
            ['id'=>'3','lecture_hall_name'=>'BILIK KULIAH 03','lecture_hall_place'=>'CS1'],
            ['id'=>'4','lecture_hall_name'=>'MAKMAL KOMPUTER 20','lecture_hall_place'=>'CS2'],
            ['id'=>'5','lecture_hall_name'=>'DEWAN KULIAH 02','lecture_hall_place'=>'CS2'],
        ];

        foreach($hall_seed as $hall_seed)
        {
            Hall::firstOrCreate($hall_seed);
        }
    }
}
