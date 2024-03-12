<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Result;
use App\Models\Admin\Group;
use App\Models\Admin\Exam;
use App\Models\Admin\Student;
use Illuminate\Http\Request;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use DB;
class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['results'] =  Result::where('status', 1)->get();
        // $data['results']= result::latest()->get();
        return view('admin.result.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $results = Result::where('status', 1);
        if($request->class!=NULL && $request->class>0){
            $results = $results->where('class', $request->class);

            // if($request->section!=NULL && $request->section>0){
            //     $results = $results->where('section', $request->section);
            // }

            if($request->exam!=NULL && $request->exam>0){
                $results = $results->where('exam', $request->exam);
            }
            if($request->section!=NULL && $request->section>0){
                $results = $results->where('section', $request->section);
            }

            $results = $results->get();

            //dd($results);
        }else{
            $results = new Collection();
        }

        $data['results'] = $results;

        //dd($data['results']);

        $data['groups'] = Group::latest()->get();
        $data['exams'] = Exam::latest()->get();
        return view('admin.result.form',$data);
    }

    public function createResult(Request $request)
    {
        // return $request;

        $students = Student::where('status', 1)->where('class', $request->result_class)->get();

        foreach($students as $student){
            // return $request;
            Result::create([
                'student_id' => $student->id,
                'roll' => $student->roll,
                // 'reg' => $student->reg,
                'class' => $student->class,
                'section' => $request->result_section,
                'exam' => $request->result_exam,
            ]);
        }

        //dd($data['results']);

        Toastr::success('Result created successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
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
            'section' => 'required',
            'exam' => 'required',
        ]);

        if(count($request->student_id)>0){
            DB::table('results')->where('section', $request->section)->delete();

            for($i=0; $i<count($request->student_id); $i++){
                $student = Student::find($request->student_id[$i]);
                $result = Result::create([
                    'student_id' => $student->id,
                    'roll' => $student->roll_num,
                    // 'reg' => $student->reg_num,
                    'class' => $student->class,
                    'section' => $request->section,
                    'exam' => $request->exam,
                    'gpa' => $request->gpa[$i],
                    'grade' => $request->grade[$i],
                    'comment' => $request->comment[$i],
                    'result_status' => $request->result_status[$i],
                ]);
            }

            Toastr::success('Result updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.result.list');
            // return back();
        }else{
            Toastr::error('Failed to save result!', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['result'] = result::findOrFail($id);
        $data['groups'] = Group::latest()->get();


        if($data['result']){
            return view('admin.result.form', $data);
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
        $result = result::find($id);
        $reg = Student::where('reg_num', '=' ,$request->reg)->first();


        if($result){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            if($reg){
                $result->update([
                    'roll' => $request->roll,
                'reg' => $request->reg,
                'session' => $request->session,
                'section' => $request->result_section,
                // 'village' => $request->village,
                'exam' => $request->exam,
                // 'upazila' => $request->upazila,
                'gpa' => $request->gpa,
                'grade' => $request->grade,
                'comment' => $request->comment,
                'status' => $request->status,
                    ]);
                    Toastr::success('Result added successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('admin.result.list');
            }
            else{
                Toastr::error('Registration Number Not Match From Student Data!', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = result::findOrFail($id);

        if($result){
            $result->delete();
            Toastr::success('student deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
