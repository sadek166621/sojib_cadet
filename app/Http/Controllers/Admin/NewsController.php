<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\News;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::latest()->get();

        return view('admin.news.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.form');
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
            'title' => 'required',
        ]);

        if (!$request->status || $request->status == NULL) {
            $request->status = 0;
        } else {
            $request->status = 1;
        }

        $file = $request->file('file');
        if($file){
            $currentDate = Carbon::now()->toDateString();
            //dd($file->getClientOriginalExtension());

            $fileName = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            if (!file_exists('assets/files/uploads/news')) {
                mkdir('assets/files/uploads/news', 0777, true);
            }

            $file->move(public_path('assets/files/uploads/news'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/news', $fileName);

            $file = $fileName;
        }

        $title_short = substr($request->title,0,30);
        //dd($title_short);

        $news = News::create([
            'title' => $request->title,
            // 'slug' => $title_short,
            'type' => $request->type,
            'file' => $file,
            'description' => $request->description,
            'status' => $request->status
        ]);


        Toastr::success('News added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.news.list');
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
        $data['news'] = News::findOrFail($id);

        if($data['news']){
            return view('admin.news.form', $data);
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
        $news = News::findOrFail($id);

        if($news){
            $validated = $request->validate([
                'title' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }
            $filename = $news->file;
            $file = $request->file('file');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/news')) {
                    mkdir('assets/files/uploads/news', 0777, true);
                }

                $file->move(public_path('assets/files/uploads/news'), $filename);
                //$file->move(base_path().'/assets/files/uploads/classroutines', $filename);
            }
            $news->update([
                'title' => $request->title,
                'type' => $request->type,
                'description' => $request->description,
                'file' => $filename,
                'status' => $request->status
            ]);


            Toastr::success('News updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.news.list');
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
        $news = News::findOrFail($id);

        if($news){
            $news->delete();
            Toastr::success('News deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        }

        return back();
    }
}
