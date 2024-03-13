<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Resultpdf;
use Toastr;
use Carbon\Carbon;
use Illuminate\Validation\Rules\File;

class ResultpdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdfs = Resultpdf::orderBy('id','desc')->get();
        return view('admin.result-pdf.list',compact('pdfs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.result-pdf.form');

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
            'title' => 'required',
            'file' => 'required|mimes:pdf,jpg,png|max:10000',
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
            if (!file_exists('assets/files/uploads/resultpdf')) {
                mkdir('assets/files/uploads/resultpdf', 0777, true);
            }
            $file->move(public_path('assets/files/uploads/resultpdf'), $fileName);
            //$file->move(base_path().'/assets/files/uploads/notices', $fileName);
            $file = $fileName;
        }


        $resultpdf = Resultpdf::create([
            'class' => $request->class,
            'exam_name' => $request->exam_name,
            'title' => $request->title,
            'date' => $request->date,
            'status' => $request->status,
            'file' => $file,
        ]);


        Toastr::success('PDF added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.result-pdf.list');
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
        $data['pdf'] = Resultpdf::findOrFail($id);

        if($data['pdf']){
            return view('admin.result-pdf.form', $data);
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
        $pdf = Resultpdf::findOrFail($id);

        if($pdf){
            $validated = $request->validate([
                'title' => 'required',
            ]);

            if (!$request->status || $request->status == NULL) {
                $request->status = 0;
            } else {
                $request->status = 1;
            }

            $filename = $pdf->file;
            $file = $request->file('file');
            if($file){
                $currentDate = Carbon::now()->toDateString();
                //dd($file->getClientOriginalExtension());

                $filename = $currentDate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!file_exists('assets/files/uploads/resultpdf')) {
                    mkdir('assets/files/uploads/resultpdf', 0777, true);
                }
                $file->move(public_path('assets/files/uploads/resultpdf'), $filename);
                //$file->move(base_path().'/assets/files/uploads/notices', $filename);
            }

            $pdf->update([
                'class' => $request->class,
                'exam_name' => $request->exam_name,
                'title' => $request->title,
                'date' => $request->date,
                'status' => $request->status,
                'file' => $filename,
            ]);


            Toastr::success('Notice updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);

            return redirect()->route('admin.result-pdf.list');
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
        $pdf = Resultpdf::findOrFail($id);
        $pdf->delete();
        Toastr::success('Pdf Delete successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
