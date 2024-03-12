<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Academic;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;
use DB;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['academic'] = Academic::latest()->get();
        return view('admin.academic.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.academic.form');
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
            'title' => 'required',
            'type' => 'required',
            'file' => 'required|mimes:pdf,jpg,png|max:10000',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        //dd($title_short);

        $academic = Academic::create([
            'title' => $request->title,
            // 'slug' => $title_short,
            'type' => $request->type,
            'status' => $request->status
        ]);

        $file = $request->file('file');
        if($file){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/academic')) {
                mkdir('assets/files/uploads/academic', 0777, true);
            }

            $file->move(public_path('assets/files/uploads/academic'), $fileName);

            $file = $fileName;
        }

        $academic->file = $file;
        $academic->save();

        Toastr::success('Academic added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.academic.list');
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
        $data['academic'] = Academic::findOrFail($id);

        if($data['academic']){
            return view('admin.academic.form', $data);
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
        $academic = Academic::findOrFail($id);

        if($academic){
            $validated = $request->validate([
                'title' => 'required',
                'type' => 'required',
                'file' => 'nullable|mimes:pdf,jpg,png|max:10000',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $academic->update([
                'title' => $request->title,
                'type' => $request->type,
                'status' => $request->status
            ]);

            $filename = $academic->file;
            $file = $request->file('file');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/academic')) {
                    mkdir('assets/files/uploads/academic', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/academic'), $filename);
            }

            $academic->file = $filename;
            $academic->save();

            Toastr::success('Academic updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.academic.list');
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
        $academic = Academic::findOrFail($id);

        if($academic){
            $academic->delete();
            Toastr::success('Academic deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
