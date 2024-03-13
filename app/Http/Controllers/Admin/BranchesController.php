<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Branch;
use Toastr;


class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::where('status',1)->orderBy('id','desc')->get();
        return view('admin.branch.list',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.branch.form');
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
            'devision' => 'required',
            'section' => 'required',
            'details' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $branch = Branch::create([
            'devision' => $request->devision,
            'section' => $request->section,
            'details' => $request->details,
            'status' => $request->status
        ]);


        Toastr::success('Branch added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.branches.list');
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

      $data['branch'] = Branch::findOrFail($id);

        if($data['branch']){
            return view('admin.branch.form', $data);
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
        $branch = Branch::findOrFail($id);

        if($branch){
            $validated = $request->validate([
                'devision' => 'required',
                'section' => 'required',
                'details' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $branch->update([
            'devision' => $request->devision,
            'section' => $request->section,
            'details' => $request->details,
            'status' => $request->status
            ]);


            Toastr::success('Branch updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.branches.list');
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
        $branch = Branch::find($id);
        $branch->delete();
        Toastr::success('Branch Delete Successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
