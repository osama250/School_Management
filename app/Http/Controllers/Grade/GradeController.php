<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\http\Requests\StoreGrades;
use App\Models\Grade;
use App\Models\Classroom;

class GradeController extends Controller
{
    public function store( StoreGrades $request)
    {
        try
        {
            $validated  = $request->validated();
            $Grade      = new Grade();

            $Grade->Name    = ['en' => $request->Name_en , 'ar' => $request->Name];
            $Grade->Notes   = $request->Notes;
            $Grade->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('Grades.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update( StoreGrades  $request )
    {
        try
        {
            $validated  = $request->validated();
            $Grades     = Grade::findOrFail($request->id);

            $Grades->update([
              $Grades->Name  =  ['ar' => $request->Name, 'en' => $request->Name_en] ,
              $Grades->Notes = $request->Notes ,
            ]);

            toastr()->success(trans('messages.Update'));
            return redirect()->route('Grades.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy( Request $request )
    {
        $MyClass_id = Classroom::where('Grade_id',$request->id)->pluck('Grade_id');

        if($MyClass_id->count() == 0)
        {
            $Grades = Grade::findOrFail($request->id)->delete();
            toastr()->error(trans('messages.Delete'));
            return redirect()->route('Grades.index');
        }
        else
        {
            toastr()->error(trans('Grades_trans.delete_Grade_Error'));
            return redirect()->route('Grades.index');
        }
    }
}
