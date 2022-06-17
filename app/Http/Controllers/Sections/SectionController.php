<?php
namespace App\Http\Controllers\Sections;
use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSections;

class SectionController extends Controller
{

  public function store(StoreSections $request) {
    try
    {
        $Sections   = new Section();
        $Sections->Name_Section     = ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En];
        $Sections->Grade_id         = $request->Grade_id;
        $Sections->Class_id         = $request->Class_id;
        $Sections->Status           = 1;        // now section is active
        $Sections->save();
        $Sections->teachers()->attach($request->teacher_id);
        toastr()->success(trans('messages.success'));

        return redirect()->route('Sections.index');
    }
    catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
  }

  public function update(StoreSections $request) {
    try
    {
        // $validated  = $request->validated();
        $Sections   = Section::findOrFail($request->id);

        $Sections->Name_Section  = ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En];
        $Sections->Grade_id      = $request->Grade_id;
        $Sections->Class_id      = $request->Class_id;

        if(isset($request->Status)) {
            $Sections->Status = 1;
        } else {
            $Sections->Status = 2;
        }

        // update pivot table
        if (isset($request->teacher_id)) {
            $Sections->teachers()->sync($request->teacher_id);
        } else {
            $Sections->teachers()->sync(array());
        }

        $Sections->save();
        toastr()->success(trans('messages.Update'));
        return redirect()->route('Sections.index');
    }
    catch
    (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
  }

  public function destroy(request $request)  {
        Section::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Sections.index');
  }

}
