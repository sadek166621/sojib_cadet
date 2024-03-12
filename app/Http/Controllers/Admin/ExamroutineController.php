<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Examroutine;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class examroutineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['examroutines'] = Examroutine::where('vercity_routine',0)->latest()->get();
        $data['vercity_routine'] = Examroutine::where('vercity_routine',1)->latest()->get();

        return view('admin.examroutine.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.examroutine.form');
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

            'examroutine_file' => 'required|mimes:pdf,jpg,png|max:10000',
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

        $examroutine = Examroutine::create([

            'status' => $request->status,
            'vercity_routine' => $request->vercity_routine,
            'title' => $request->title,

        ]);

        $file = $request->file('examroutine_file');
        if($file){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/examroutines')) {
                mkdir('assets/files/uploads/examroutines', 0777, true);
            }

            $file->move(public_path('assets/files/uploads/examroutines'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/examroutines', $fileName);

            $file = $fileName;
        }

        $examroutine->file = $file;
        // $classroutine->title = $request->title;
        $examroutine->save();

        Toastr::success('examroutine added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.examroutine.list');
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
        $data['examroutine'] = Examroutine::findOrFail($id);

        if($data['examroutine']){
            return view('admin.examroutine.form', $data);
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
        // return $request;
        $examroutine = Examroutine::findOrFail($id);

        if($examroutine){
            $validated = $request->validate([

                'examroutine_file' => 'nullable|mimes:pdf,jpg,png|max:10000',
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

            $examroutine->update([

                'status' => $request->status,
                'vercity_routine' => $request->vercity_routine,
                'title' => $request->title,
            ]);

            $filename = $examroutine->file;
            $file = $request->file('examroutine_file');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/examroutines')) {
                    mkdir('assets/files/uploads/examroutines', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/examroutines'), $filename);
                //$file->move(base_path().'/assets/files/uploads/examroutines', $filename);
            }

            $examroutine->file = $filename;
            // $classroutine->title = $request->title;
            $examroutine->save();

            Toastr::success('examroutine updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.examroutine.list');
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
        $examroutine = Examroutine::findOrFail($id);

        if($examroutine){
            $examroutine->delete();
            Toastr::success('examroutine deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
