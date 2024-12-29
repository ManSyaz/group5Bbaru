<?php

namespace Database\Seeders;

use App\Models\LecturerGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group_seed = [
            ['id'=>'1','name'=>'COMPUTING DEPARTMENT','part'=>'PART 1'],
            ['id'=>'2','name'=>'COMPUTING DEPARTMENT','part'=>'PART 2'],
            ['id'=>'3','name'=>'NETWORK DEPARTMENT','part'=>'PART 3'],
            ['id'=>'4','name'=>'SECURITY DEPARTMENT','part'=>'PART 4'],
            ['id'=>'5','name'=>'MATHEMATICS DEPARTMENT','part'=>'PART 5'],
        ];

        foreach($group_seed as $group_seed)
        {
            LecturerGroup::firstOrCreate($group_seed);
        }
    }
}
