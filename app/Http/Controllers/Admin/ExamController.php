<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Exam;
use Toastr;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['exams'] = Exam::latest()->get();
        return view('admin.exam.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.exam.form');
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
            'name' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $exam = Exam::create([
            'name' => $request->name,
            'status' => $request->status
        ]);

        Toastr::success('Exam Added Successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.exam.list');
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
        $data['exam'] = Exam::findOrFail($id);

        if($data['exam']){
            return view('admin.exam.form', $data);
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
        $exam = Exam::findOrFail($id);

        if($exam){
            $validated = $request->validate([
                'name' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $exam->update([
                'name' => $request->name,
                'status' => $request->status
            ]);

            Toastr::success('exam updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.exam.list');
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
        $exam = Exam::findOrFail($id);

        if($exam){
            $exam->delete();
            Toastr::success('exam deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
