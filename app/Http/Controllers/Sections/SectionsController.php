<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Teacher;

class SectionsController extends Controller
{

    public function index()
    {
        $Grades         = Grade::with(['Sections'])->get();
        $list_Grades    = Grade::get();
        $teachers       = Teacher::get();
        return view('pages.Sections.Sections',compact('Grades','list_Grades','teachers'));
    }

    public function getclasses($id)
    {
        $list_classes = Classroom::where("Grade_id", $id)->pluck("Name_Class", "id");
        return $list_classes;
    }
}
