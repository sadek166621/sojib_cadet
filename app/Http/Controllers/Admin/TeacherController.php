<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Teacher;
use App\Models\Admin\Department;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['department']) && $_GET['department']>0){
            $data['teachers'] = Teacher::where('department_id', $_GET['department'])->latest()->get();
        }else{
            $data['teachers'] = Teacher::latest()->get();
        }
        $data['departments'] = Department::where('status',1)->latest()->get();

        return view('admin.teacher.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function printindex(){
        $data['teachers'] = Teacher::latest()->get();
        return view('admin.teacher.print-teacher',$data);
     }
    public function create()
    {
        $data['departments'] = Department::where('status',1)->latest()->get();
        return view('admin.teacher.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'department_id' => 'required',
            'image' => 'required',
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

            if (!file_exists('assets/images/uploads/teachers')) {
                mkdir('assets/images/uploads/teachers', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/teachers'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/teachers', $imageName);

            $image = $imageName;
        }

        $teacher = Teacher::create([
            'name' => $request->name,
            'username' => Str::slug($request->name).Str::random(6),
            'department_id' => $request->department_id,
            'designation' => $request->designation,
            'phone' => $request->phone,
            'email' => $request->email,
            'join_date' => $request->join_date,
            'image' => $image,
            'full_address' => $request->full_address,
            'status' => $request->status,
        ]);

        Toastr::success('Teacher added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.teacher.list');
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
        $data['teacher'] = Teacher::findOrFail($id);

        if($data['teacher']){
            $data['departments'] = Department::where('status',1)->latest()->get();
            return view('admin.teacher.form', $data);
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
        $teacher = Teacher::findOrFail($id);

        if($teacher){
            $validated = $request->validate([
                'name' => 'required',
                'department_id' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_image = $teacher->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/teachers')) {
                    mkdir('assets/images/uploads/teachers', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/teachers'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/teachers', $imageName);

                $target_image = $imageName;
            }

            if(strcmp($teacher->name, $request->name) == 0) {
                $username = $teacher->username;
            }else{
                $username = Str::slug($request->name).Str::random(6);
            }

            $teacher->update([
                'name' => $request->name,
                'username' => $username,
                'department_id' => $request->department_id,
                'designation' => $request->designation,
                'phone' => $request->phone,
                'email' => $request->email,
                'join_date' => $request->join_date,
                'image' => $target_image,
                'full_address' => $request->full_address,
                'status' => $request->status,
            ]);

            Toastr::success('Teacher updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.teacher.list');
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
        $teacher = Teacher::findOrFail($id);

        if($teacher){
            $teacher->delete();
            Toastr::success('Teacher deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
