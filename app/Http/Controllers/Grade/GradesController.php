<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use App\Models\Grade;

class GradesController extends Controller
{

    public function index()
    {
        $Grades = Grade::all();
        return view('pages.Grades.Grades',compact('Grades'));
    }

}
