<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            'name'=>'diimas',
            'gender'=>'laki-laki',
            'nis' =>'220302067',
            'clas_id'=>'ic'
        ]);
    }
}
