<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();
        $data = [
            ['name'=>'1 A'],
            ['name'=>'1 B'],
            ['name'=>'1 C'],
            ['name'=>'1 D']
        ];
        foreach ($data as $value) {
            ClassRoom::insert([
                'name'=>$value['name']
            ]);
        }
    }
}
