<?php

namespace App\Http\Controllers\Teachers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachers;
use Illuminate\Http\Request;
use App\Repository\TeacherRepositoryInterface;

class TeacherController extends Controller
{
    protected $Teacher;

    public function __construct(TeacherRepositoryInterface $Teacher)
    {
        $this->Teacher = $Teacher;
    }

    public function create()
    {
        $specializations    = $this->Teacher->Getspecialization();
        $genders            = $this->Teacher->GetGender();
        return view('pages.Teachers.create', compact('specializations','genders'));
    }

    public function store(StoreTeachers $request)
    {
        return $this->Teacher->StoreTeacher($request);
    }

    public function edit($id)
    {
        $Teachers           = $this->Teacher->editTeacher($id);
        $specializations    = $this->Teacher->Getspecialization();
        $genders            = $this->Teacher->GetGender();
        return view('pages.Teachers.edit',compact('Teachers','specializations','genders'));
    }

    public function update(Request $request)
    {
        return $this->Teacher->UpdateTeacher($request);
    }

    public function destroy(Request $request)
    {
        return $this->Teacher->DeleteTeacher($request);
    }
}
