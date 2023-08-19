<?php

namespace Database\Seeders;



use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();
        // $data = [
        //     ['name'=>'yanuar','gender'=>'laki-laki','nis'=>'220302072','class_id'=>1],
        //     ['name'=>'dimas','gender'=>'laki-laki','nis'=>'220302077','class_id'=>1],
        //     ['name'=>'akbar','gender'=>'laki-laki','nis'=>'220302075','class_id'=>1],
        //     ['name'=>'rahmatr','gender'=>'laki-laki','nis'=>'220302078','class_id'=>1]
        // ];
        // foreach ($data as $item) {
        //     Student::insert([
        //         'studentList'=>$item
        //     ]);
        // }
        Student::factory()->count(10)->create();

    }
}
