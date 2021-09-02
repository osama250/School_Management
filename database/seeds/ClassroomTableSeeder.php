<?php

use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('classrooms')->delete();
        $classrooms = [
            [
                'en'            => 'First grade',
                'ar'            => 'الصف الاول' ,
                // 'Grade_id'      => 1
            ],
            [
                'en'            => 'Second grade',
                'ar'            => 'الصف الثاني' ,
                // 'Grade_id'      => 1
            ],
            [
                'en'            => 'Third grade',
                'ar'            => 'الصف الثالث' ,
                // 'Grade_id'      => 1
            ] ,
            [
                'en'            => 'fourth grade',
                'ar'            => 'الصف الرابع' ,
                // 'Grade_id'      => 2
            ] ,
            [
                'en'            => 'fifth grade',
                'ar'            => 'الصف الخامس',
                // 'Grade_id'      => 2
            ] ,
            [
                'en'            => 'Sixth grade',
                'ar'            => 'الصف الساسدس' ,
                // 'Grade_id'      => 3
            ]
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create([
            'Name_Class'    => $classroom,
            'Grade_id'      => Grade::all()->unique()->random()->id
            ]);
        }
    }
}
