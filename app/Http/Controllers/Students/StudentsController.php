<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Repository\StudentRepositoryInterface;

class StudentsController extends Controller
{

    protected $Student;

    public function __construct( StudentRepositoryInterface $Student)
    {
        $this->Student = $Student;
    }

    public function index()
    {
        return $this->Student->Get_Student();
    }

    public function Get_classrooms($id)
    {
        return $this->Student->Get_classrooms($id);
    }

    public function Get_Sections($id)
    {
        return $this->Student->Get_Sections($id);
    }

}
