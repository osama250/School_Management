<?php


namespace App\Http\Controllers\Classrooms;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassroom;
use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Http\Request;

class ClassesroomController extends Controller
{

    public function index()
    {
        $My_Classes     = Classroom::get();
        $Grades         = Grade::get();
        return view('pages.My_Classes.My_Classes', compact('My_Classes', 'Grades'));
    }
}
