<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admission;
use Illuminate\Http\Request;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['admissions'] = Admission::where('status', 1 )->latest()->get();
       return view('admin.admission-related.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admission-related.form');
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

            'file' => 'required|mimes:pdf,jpg,png|max:10000',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }


        //dd($title_short);

        $admission = Admission::create([

            'status' => $request->status,
            'class' => $request->class,
            'title' => $request->title,

        ]);

        $file = $request->file('file');
        if($file){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/admission-relateds')) {
                mkdir('assets/files/uploads/admission-relateds', 0777, true);
            }

            $file->move(public_path('assets/files/uploads/admission-relateds'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/$admissions', $fileName);

            $file = $fileName;
        }

        $admission->file = $file;
        // $classroutine->title = $request->title;
        $admission->save();

        Toastr::success('admission-related added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.admission-related.list');
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
        $data['admission'] = Admission::findOrFail($id);

        if($data['admission']){
            return view('admin.admission-related.form', $data);
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
        $admission = Admission::findOrFail($id);

        if($admission){
            $validated = $request->validate([

                'file' => 'nullable|mimes:pdf,jpg,png|max:10000',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_file = $admission->file;
            $file = $request->file('file');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/admission-relateds')) {
                    mkdir('assets/files/uploads/admission-relateds', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/admission-relateds'), $fileName);
                // $file->move(base_path().'/assets/files/uploads/downloads', $fileName);

                $target_file = $fileName;
            }



            $admission->update([

                'status' => $request->status,
                'class' => $request->class,
                'title' => $request->title,
                'file' => $target_file,
            ]);

            // $filename = $admission->file;
            // $file = $request->file('$file');
            // if($file){
            //     $currentDate = Carbon::now()->toDateString();
            //     //dd($file->getClientOriginalExtension());

            //     $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            //     if (!file_exists('assets/files/uploads/admission-relateds')) {
            //         mkdir('assets/files/uploads/admission-relateds', 0777, true);
            //     }

            //     $file->move(public_path('assets/files/uploads/admission-relateds'), $filename);
            //     //$file->move(base_path().'/assets/files/uploads/$admissions', $filename);
            // }

            // $admission->file = $filename;
            // $classroutine->title = $request->title;
            // $admission->save();

            Toastr::success('admission-related added successfully!', 'Success', ["positionClass" => "toast-top-right"]);
             return redirect()->route('admin.admission-related.list');
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
        $admission = Admission::findOrFail($id);

        if($admission){
            $admission->delete();
            Toastr::success('admission-related added successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }

}
