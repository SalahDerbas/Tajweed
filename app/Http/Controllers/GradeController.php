<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGrades;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Grades = Grade::all();
        $search = '';
        return view ("admin.Grades.index" , compact('Grades' , 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrades $request)
    {
        $validated = $request->validated();
          $Grade = new Grade();
          /*
          $translations = [
              'en' => $request->Name_en,
              'ar' => $request->Name
          ];
          $Grade->setTranslations('Name', $translations);
          */
          $Grade->Name = ['en' => $request->Name_en, 'ar' => $request->Name];
          $Grade->Notes = $request->Notes;
          $Grade->save();
          toastr()->success(trans('messages.success'));
          return redirect()->route('Grades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(StoreGrades $request)
    {
        try {

            $validated = $request->validated();
            $Grades = Grade::findOrFail($request->id);
            $Grades->update([
              $Grades->Name = ['ar' => $request->Name, 'en' => $request->Name_en],
              $Grades->Notes = $request->Notes,
            ]);
            toastr()->success(trans('messages.Update'));
            return redirect()->route('Grades.index');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Grades = Grade::findOrFail($request->id)->delete();
        toastr()->success(trans('messages.Delete'));
        return redirect()->route('Grades.index');
    }


    public function search (Request $request)
    {
        $searchQuery = trim($request->search);
        $requestData = ['Name','Notes'];

        $Grades = Grade::where(function ($q) use ($requestData, $searchQuery) {
              foreach ($requestData as $field)
                  $q->orWhere($field, 'like', "%{$searchQuery}%");
          })->get();
        $search = $request->search;
          return view('admin.Grades.index',compact('Grades' , 'search'));
    }
    public function grads_delete_all(Request $request)
    {

        $delete_all_id = explode(",", $request->delete_all_id);

        Grade::whereIn('id', $delete_all_id)->Delete();
        toastr()->success(trans('messages.Delete'));
        return redirect()->route('Grades.index');
    }
}
