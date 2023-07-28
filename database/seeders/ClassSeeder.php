<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassRoom::insert([
            'name'=>'c'
        ]);
    }
}
