<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Student;
use App\Models\Admin\Group;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $data['groups'] =Group::where('status',1)->latest()->get();

        if(isset($_GET['class']) && $_GET['class']>0){
        $data['students'] = Student::where('group_id', $request->group_id)->where('class',$request->class)->latest()->get();
        }
        else{
            $data['students'] = Student::latest()->get();
        }
        return view('admin.student.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['groups'] =Group::where('status',1)->latest()->get();
        return view('admin.student.form', $data);
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
            'first_name' => 'required',
            // 'last_name' => 'required',
            'image' => 'required',
            'roll_num' => 'required',
            'guardian_number' => 'required|min:11|max:14',
            'phone' => 'required|min:11|max:14',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }


        $image = $request->file('image');
        if($image){
            $currentDate = Carbon::now()->toDateString();
            //dd($image->getClientOriginalExtension());

            $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('assets/images/uploads/students')) {
                mkdir('assets/images/uploads/students', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/students'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/students', $imageName);

            $image = $imageName;
        }

        // $check = Student::where('roll_num','=',$request->roll_num && 'session','=',$request->session );


            $student = Student::create([
                'first_name' => $request->first_name,
                // 'last_name' => $request->last_name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'guardian_number' => $request->guardian_number,
                'village' => $request->village,
                'post_office' => $request->post_office,
                'post' => $request->post,
                'upazila' => $request->upazila,
                'district' => $request->district,
                'roll_num' => $request->roll_num,
                'reg_num' => $request->reg_num,
                'phone' => $request->phone,
                'class' => $request->class,
                'session' => $request->session,
                'group_id' => $request->group_id,
                'devision' => $request->devision,
                // 'admission_year' => $request->admission_year,
                'image' => $image,
                'status' => $request->status,
                'address' => $request->address,
            ]);


        Toastr::success('student added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.student.list');
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
        $data['student'] = Student::findOrFail($id);
        $data['groups'] =Group::where('status',1)->latest()->get();


        if($data['student']){
            return view('admin.student.form', $data);
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
        $validated = $request->validate([
            'first_name' => 'required',
            // 'last_name' => 'required',
            // 'image' => 'required',
            'roll_num' => 'required',
            'guardian_number' => 'required|min:11|max:14',
            'phone' => 'required|min:11|max:14',
        ]);

       $student = Student::find($id);

        if($student){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_image = $student->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/students')) {
                    mkdir('assets/images/uploads/students', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/students'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/students', $imageName);

                $target_image = $imageName;
            }


            $student->update([
                'first_name' => $request->first_name,
                // 'last_name' => $request->last_name,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'guardian_number' => $request->guardian_number,
                'village' => $request->village,
                'post_office' => $request->post_office,
                'post' => $request->post,
                'upazila' => $request->upazila,
                'district' => $request->district,
                'roll_num' => $request->roll_num,
                'reg_num' => $request->reg_num,
                'phone' => $request->phone,
                'class' => $request->class,
                'session' => $request->session,
                'group_id' => $request->group_id,
                'devision' => $request->devision,
                'admission_year' => $request->admission_year,
                'image' => $target_image,
                'status' => $request->status,
                'address' => $request->address,
            ]);

            Toastr::success('student updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.student.list');
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
        $student = Student::findOrFail($id);

        if($student){
            DB::table('results')->where('student_id', $id)->delete();
            $student->delete();
            Toastr::success('student deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
