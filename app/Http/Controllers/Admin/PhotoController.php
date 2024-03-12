<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Photo;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data['photogallery'] = Photo::latest()->get();
            return view('admin.photogallery.list', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photogallery.form');
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

            if (!file_exists('assets/images/uploads/photogallerys')) {
                mkdir('assets/images/uploads/photogallerys', 0777, true);
            }

            $image->move(public_path('assets/images/uploads/photogallerys'), $imageName);
            // $image->move(base_path().'/assets/images/uploads/photogallerys', $imageName);

            $image = $imageName;
        }

        $photogallery = Photo::create([

            'image' => $image,
            'status' => $request->status,


        ]);

        Toastr::success('photogallery added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.photogallery.list');
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
        $data['photogallery'] = photo::findOrFail($id);

        if($data['photogallery']){
            return view('admin.photogallery.form', $data);
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
        $photogallery = photo::find($id);

        if($photogallery){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $target_image = $photogallery->image;
            $image = $request->file('image');
            if($image){
                $currentDate = Carbon::now()->toDateString();
                //dd($image->getClientOriginalExtension());

                $imageName = $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                if (!file_exists('assets/images/uploads/photogallerys')) {
                    mkdir('assets/images/uploads/photogallerys', 0777, true);
                }

                $image->move(public_path('assets/images/uploads/photogallerys'), $imageName);
                // $image->move(base_path().'/assets/images/uploads/photogallerys', $imageName);

                $target_image = $imageName;
            }


            $photogallery->update([

                'image' => $target_image,
                'status' => $request->status,

            ]);

            Toastr::success('photogallery updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.photogallery.list');
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
        $photogallery = photo::findOrFail($id);

        if($photogallery){
            $photogallery->delete();
            Toastr::success('photogallery deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
