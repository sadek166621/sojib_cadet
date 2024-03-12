<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Classroutine;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class ClassroutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['classroutines'] = Classroutine::where('vercity_routine',0)->latest()->get();
        $data['vercity_routine'] = Classroutine::where('vercity_routine',1)->latest()->get();

        return view('admin.classroutine.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classroutine.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([

            'classroutine_file' => 'mimes:pdf,jpg,png|max:10000',
            'syllabus' => 'mimes:pdf,jpg,png|max:10000',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        if (!$request->vercity_routine || $request->vercity_routine == NULL) {
            $request->vercity_routine = 0;
        } else {
            $request->vercity_routine = 1;
        }

        //dd($title_short);

        $classroutine = classroutine::create([

            'status' => $request->status,
            'vercity_routine' => $request->vercity_routine,
        ]);

        $file = $request->file('classroutine_file');
        if($file){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/classroutines')) {
                mkdir('assets/files/uploads/classroutines', 0777, true);
            }

            $file->move(public_path('assets/files/uploads/classroutines'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/classroutines', $fileName);

            $file = $fileName;
        }
        $syllabus = $request->file('syllabus');
        if($syllabus){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $syllabus->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/classroutines')) {
                mkdir('assets/files/uploads/classroutines', 0777, true);
            }

            $syllabus->move(public_path('assets/files/uploads/classroutines'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/classroutines', $fileName);

            $syllabus = $fileName;
        }

        $classroutine->syllabus = $syllabus;
        $classroutine->file = $file;
        $classroutine->title = $request->title;
        $classroutine->save();

        Toastr::success('classroutine added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.classroutine.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['classroutine'] = classroutine::findOrFail($id);

        if($data['classroutine']){
            return view('admin.classroutine.form', $data);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classroutine = classroutine::findOrFail($id);

        if($classroutine){
            $validated = $request->validate([

                'classroutine_file' => 'nullable|mimes:pdf,jpg,png|max:10000',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            if (!$request->vercity_routine || $request->vercity_routine == NULL) {
                $request->vercity_routine = 0;
            } else {
                $request->vercity_routine = 1;
            }

            $classroutine->update([

                'status' => $request->status,
                'vercity_routine' => $request->vercity_routine,
            ]);

            $filename = $classroutine->file;
            $file = $request->file('classroutine_file');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/classroutines')) {
                    mkdir('assets/files/uploads/classroutines', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/classroutines'), $filename);
                //$file->move(base_path().'/assets/files/uploads/classroutines', $filename);
            }
            $syllabus2 = $classroutine->syllabus;
            $syllabus = $request->file('syllabus');
            if($syllabus){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $syllabus2 = $currentDate . '-' . uniqid() . '.' . $syllabus->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/classroutines')) {
                    mkdir('assets/files/uploads/classroutines', 0777, true);
                }

                $syllabus->move(public_path('assets/files/uploads/classroutines'), $syllabus2);
                //$file->move(base_path().'/assets/files/uploads/classroutines', $filename);
            }

            $classroutine->file = $filename;
            $classroutine->syllabus = $syllabus2;
            $classroutine->title = $request->title;
            $classroutine->save();

            Toastr::success('classroutine updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.classroutine.list');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classroutine = classroutine::findOrFail($id);

        if($classroutine){
            $classroutine->delete();
            Toastr::success('classroutine deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
