<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Formdownload;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class FromdownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['downloads'] = Formdownload::where('status', 1 )->latest()->get();
       return view('admin.form-download.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form-download.form');
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

        $download = Formdownload::create([

            'status' => $request->status,
            'title' => $request->title,

        ]);

        $file = $request->file('file');
        if($file){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/form-downloads')) {
                mkdir('assets/files/uploads/form-downloads', 0777, true);
            }

            $file->move(public_path('assets/files/uploads/form-downloads'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/$downloads', $fileName);

            $file = $fileName;
        }

        $download->file = $file;
        // $classroutine->title = $request->title;
        $download->save();

        Toastr::success('form-download added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.form-download.list');
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
        $data['download'] = Formdownload::findOrFail($id);

        if($data['download']){
            return view('admin.form-download.form', $data);
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
        $download = Formdownload::findOrFail($id);

        if($download){
            $validated = $request->validate([

                'file' => 'nullable|mimes:pdf,jpg,png|max:10000',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_file = $download->file;
            $file = $request->file('file');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/form-downloads')) {
                    mkdir('assets/files/uploads/form-downloads', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/form-downloads'), $fileName);
                // $file->move(base_path().'/assets/files/uploads/downloads', $fileName);

                $target_file = $fileName;
            }


            $download->update([

                'status' => $request->status,
                'title' => $request->title,
                'file' => $target_file,
            ]);

            // $filename = $download->file;
            // $file = $request->file('$file');
            // if($file){
            //     $currentDate = Carbon::now()->toDateString();
            //     //dd($file->getClientOriginalExtension());

            //     $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            //     if (!file_exists('assets/files/uploads/form-downloads')) {
            //         mkdir('assets/files/uploads/form-downloads', 0777, true);
            //     }

            //     $file->move(public_path('assets/files/uploads/form-downloads'), $filename);
            //     //$file->move(base_path().'/assets/files/uploads/$downloads', $filename);
            // }

            // $download->file = $filename;
            // // $classroutine->title = $request->title;
            // $download->save();

            Toastr::success('form-download added successfully!', 'Success', ["positionClass" => "toast-top-right"]);
             return redirect()->route('admin.form-download.list');
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
        $download = Formdownload::findOrFail($id);

        if($download){
            $download->delete();
            Toastr::success('form-download added successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
