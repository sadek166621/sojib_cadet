<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Video;
use Toastr;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('id', 'desc')->get();
        return view('admin.video.list',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.form');

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

            'link' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $video = Video::create([

            'link' => $request->link,
            'status' => $request->status,
        ]);

        Toastr::success('Video added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.video.list');
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
        $data['video'] = Video::findOrFail($id);

        if($data['video']){
            return view('admin.video.form', $data);
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
        $video = Video::find($id);

        if($video){

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $video->update([

                'link' => $request->link,
                'status' => $request->status,

            ]);

            Toastr::success('Video updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.video.list');
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
        $video = Video::find($id);
        $video->delete();
        Toastr::success('Video Delete successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
