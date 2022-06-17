<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroom extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'List_Classes.*.Name_class_ar'      => 'required|unique:classrooms,Name_Class->ar,'. $this->id,
            'List_Classes.*.Name_class_en'      => 'required|unique:classrooms,Name_class->en,'. $this->id,
        ];
    }

    public function messages()
    {
        return [
            'Name_class_ar.required'        => trans('validation.required'),
            'Name_class_ar.unique'          => 'الاسم العربى موجزد',
            'Name_class_en.unique'          => 'الاسم الانجلش موجزد',
            'Name_class_en.required'        => trans('validation.required'),
        ];
    }
}
