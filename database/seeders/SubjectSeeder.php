<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject_seed = [
            ['id'=>'1','subject_code'=>'ICT602','subject_name'=>'MOBILE TECHNOLOGY','lecturer_name'=>'DR. AHMAD IQBAL HAKIM BIN SUHAIMI'],
            ['id'=>'2','subject_code'=>'ITT593','subject_name'=>'DIGITAL FORENSIC','lecturer_name'=>'DR. FAKARIAH HANI BINTI MOHD ALI'],
            ['id'=>'3','subject_code'=>'ITT440','subject_name'=>'NETWORK PROGRAMMING','lecturer_name'=>'TS. DR. SAIDATUL IZYANIE BINTI KAMARUDIN'],
            ['id'=>'4','subject_code'=>'ITT626','subject_name'=>'BACK-END TECHNOLOGY','lecturer_name'=>'TS. DR. SITI RAHAYU BINTI ABDUL AZIZ'],
            ['id'=>'5','subject_code'=>'CSP600','subject_name'=>'PROJECT FORMULATION','lecturer_name'=>'NOR AZYLIA BINTI AHMAD AZAM'],
        ];

        foreach($subject_seed as $subject_seed)
        {
            Subject::firstOrCreate($subject_seed);
        }
    }
}
