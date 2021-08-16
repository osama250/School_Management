<?php

namespace App\Http\Controllers\Teachers;
use App\Http\Controllers\Controller;
use App\Repository\TeacherRepositoryInterface;

class TeachersController extends Controller
{
    protected $Teacher;

    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }

    public function index()
    {
        $Teachers = $this->Teacher->getAllTeachers();
        return view('pages.Teachers.Teachers',compact('Teachers'));
    }

}
