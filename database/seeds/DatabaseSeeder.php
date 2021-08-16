<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
         $this->call( [
            UserTableSeeder::class ,
            GradeTableSeeder::class ,
            ClassroomTableSeeder::class ,
            SectionsTableSeeder::class ,
            religionTableSeeder::class ,
            BloodTableSeeder::class ,
            NationalitiesTableSeeder::class ,
            ParentsTableSeeder::class,
            GenderTableSeeder::class ,
            SpecializationsTableSeeder::class
         ]);
    }
}
