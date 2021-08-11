<?php

namespace App\Http\Controllers\Grade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\http\Requests\StoreGrades;
use App\Models\Grade;

class GradeController extends Controller
{
    public function store( StoreGrades $request)
    {
        try {

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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
