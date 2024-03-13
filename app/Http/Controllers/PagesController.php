<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use App\Models\Admin\Slider;
use App\Models\Admin\Teacher;
use App\Models\Admin\Department;
use App\Models\Admin\Location;
use App\Models\Admin\Staff;
use App\Models\Admin\Notice;
use App\Models\Admin\News;
use App\Models\Admin\Photo;
use App\Models\Admin\Admission;
use App\Models\Admin\Formdownload;
use App\Models\Admin\Student;
use App\Models\Admin\Group;
use App\Models\Admin\Exam;
use App\Models\Admin\Branch;
use App\Models\Admin\Classroutine;
use App\Models\Admin\Examroutine;
use App\Models\Admin\Result;
use App\Models\Admin\Academic;
use App\Models\Admin\Page;
use App\Models\Admin\video;
use App\Models\Admin\Resultpdf;
use DB;
use Toastr;


class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['setting'] = Setting::first();
        $data['notices'] = Notice::where('status', 1)->limit(5)->get();
        $data['news'] = News::where('status', 1)->limit(5)->get();
        $data['photogallery'] = Photo::where('status', 1)->limit(4)->get();
        return view('frontend.index', $data);
    }

    public function vicePrincipalMessage()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['setting'] = Setting::first();
        return view('frontend.vice_principal_message', $data);
    }

    public function principalMessage()
    {
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['setting'] = Setting::first();
        return view('frontend.principal_message', $data);
    }
    public function campushistory(){
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['setting'] = Setting::first();
        return view ('frontend.campus_history', $data);
    }

    public function viewgallery(){
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['photogallery'] = Photo::get();
        $data['setting'] = Setting::first();
        return view ('frontend.view_gallery', $data);
    }

    public function Studentsdata(){
        if(isset($_GET['session']) && $_GET['session']>0){
            if((isset($_GET['devision']) && $_GET['devision']>0)){
                    $data['students'] = Student::where('session', $_GET['session'])->where('devision',$_GET['devision'])->get();
            }
        }
        else{
            $data['students'] = Student::where('status', 1)->get();
        }
        // $data['groups'] = Group::where('status',1)->latest()->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.student-data', $data);
    }

    public function teacher()
    {
        if(isset($_GET['department']) && $_GET['department']>0){
            $data['teachers'] = Teacher::where('department_id', $_GET['department'])->latest()->get();
        }else{
            $data['teachers'] = Teacher::where('status', 1)->get();
        }
        $data['departments'] = Department::where('status',1)->latest()->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.teachers', $data);
    }
    public function staff()
    {
        if(isset($_GET['location']) && $_GET['location']>0){
            $data['staffs1st'] = Staff::where('location_id', $_GET['location'])->where('class', 1)->latest()->get();
            $data['staffs2nd'] = Staff::where('location_id', $_GET['location'])->where('class', 2)->latest()->get();
            $data['staffs3rd'] = Staff::where('location_id', $_GET['location'])->where('class', 3)->latest()->get();
            $data['staffs4th'] = Staff::where('location_id', $_GET['location'])->where('class', 4)->latest()->get();
        }else{
            $data['staffs1st'] = Staff::where('status', 1)->where('class', 1)->get();
            $data['staffs2nd'] = Staff::where('status', 1)->where('class', 2)->get();
            $data['staffs3rd'] = Staff::where('status', 1)->where('class', 3)->get();
            $data['staffs4th'] = Staff::where('status', 1)->where('class', 4)->get();
        }
        $data['locations'] = Location::where('status',1)->latest()->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.staffs', $data);
    }
    public function teacherShow($username)
    {
        $data['teacher'] = Teacher::where('username', $username)->first();
        if($data['teacher']){
            $data['setting'] = Setting::first();
            $data['sliders'] = Slider::where('status', 1)->get();
            $data['locations'] = Department::where('status',1)->latest()->get();
            return view('frontend.teacher_profile', $data);
        }
        return redirect()->route('teacher.list');
    }

    public function staffShow($username){
        $data['staff'] = Staff::where('username', $username)->first();
        if($data['staff']){
            $data['setting'] = Setting::first();
            $data['sliders'] = Slider::where('status', 1)->get();
            $data['locations'] = Department::where('status',1)->latest()->get();
            return view('frontend.staff_profile', $data);
        }
        return redirect()->route('staff.list');
    }

    public function notice()
    {
        if(isset($_GET['type']) && $_GET['nottypeice']>0){
            $data['notices'] = Notice::where('notice_id', $_GET['notice'])->latest()->get();
        }else{
            $data['notices'] = Notice::where('status', 1)->get();
        }
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.notices', $data);
    }

    public function noticeGeneral()
    {
        $data['notices'] = Notice::where('status', 1)->where('type', 1)->get();

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.notices', $data);
    }

    public function noticeOther()
    {
        $data['notices'] = Notice::where('status', 1)->where('type', 2)->get();

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.notices', $data);
    }

    public function noticeShow($id)
    {
        $data['notice'] = Notice::findOrFail($id);

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.notice_single', $data);
    }

    public function news()
    {
        $data['news'] = News::where('status', 1)->latest()->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.news', $data);
    }
    public function contact(){
        $data['news'] = News::where('status', 1)->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.contact', $data);
    }

    public function newsShow($id)
    {
        $data['news'] = News::findOrFail($id);

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        return view('frontend.news_single', $data);
    }

    public function importantlinks(){

    }
    public function Classroutine(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['classroutines'] = Classroutine::where('vercity_routine',0)->latest()->get();

        return view('frontend.classroutine', $data);
    }
    public function graduateroutine(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['classroutines'] = Classroutine::where('vercity_routine',1)->latest()->get();
        return view('frontend.graduateroutine', $data);
    }
    public function graduatesyllabus(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['syllabus'] = Classroutine::where('vercity_routine',1)->where('syllabus', '<>', '')->latest()->get();
        return view('frontend.graduatesyllabus', $data);
    }
    public function highersyllabus(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['syllabus'] = Classroutine::where('vercity_routine',0)->where('syllabus', '<>', '')->latest()->get();
        return view('frontend.highersyllabus', $data);
    }
    public function academiccourseplan(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['examroutines'] = Examroutine::latest()->get();
        return view('frontend.academic-course-plan',$data);
    }
    public function examroutine(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['examroutines'] = Examroutine::latest()->get();

        return view('frontend.Examroutine', $data);
    }
    public function admissionrelated(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['admissions'] = Admission::where('status', 1)->latest()->get();
        return view('frontend.admission-related',$data);
    }
    public function formdownload(){

        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['downloads'] = Formdownload::where('status', 1)->latest()->get();
        return view('frontend.form-download',$data);
    }
    public function humanities(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['academics'] = Academic::where('type' ,'=' , 3)->orwhere('type' ,'=' , 2)->orwhere('type' ,'=' , 1)->where('status' , '=' , 1)->latest()->get();
        return view('frontend.humanities', $data);
    }
    public function bussiness(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['academics'] = Academic::where('type' ,'=' , 3)->orwhere('type' ,'=' , 2)->orwhere('type' ,'=' , 1)->where('status' , '=' , 1)->latest()->get();
        return view('frontend.humanities', $data);
    }
    public function Science(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['academics'] = Academic::where('type' ,'=' , 3)->orwhere('type' ,'=' , 2)->orwhere('type' ,'=' , 1)->where('status' , '=' , 1)->latest()->get();
        return view('frontend.humanities', $data);
    }

    public function classonetofive(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['academics'] = Academic::where('type' ,'=' , 7)->orwhere('type' ,'=' , 8)->orwhere('type' ,'=' , 9)->orwhere('type' ,'=' , 10)->orwhere('type' ,'=' , 10)->where('status' , '=' , 1)->latest()->get();
        return view('frontend.humanities', $data);
    }
    public function classsix(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['academics'] = Academic::where('type' ,'=' , 4)->where('status' , '=' , 1)->latest()->get();
        return view('frontend.humanities', $data);
    }
    public function classseven(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['academics'] = Academic::where('type' ,'=' , 5)->where('status' , '=' , 1)->latest()->get();
        return view('frontend.humanities', $data);
    }
    public function classeight(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['academics'] = Academic::where('type' ,'=' , 6)->where('status' , '=' , 1)->latest()->get();
        return view('frontend.humanities', $data);
    }

    // =======================Page ====================
    public function branches(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['dhaka'] = Branch::where('devision',1)->where('status',1)->orderBy('id','desc')->get();
        $data['chattogram'] = Branch::where('devision',2)->where('status',1)->orderBy('id','desc')->get();
        $data['rajshahi'] = Branch::where('devision',3)->where('status',1)->orderBy('id','desc')->get();
        $data['rangpur'] = Branch::where('devision',4)->where('status',1)->orderBy('id','desc')->get();
        $data['khulna'] = Branch::where('devision',5)->where('status',1)->orderBy('id','desc')->get();
        $data['barishal'] = Branch::where('devision',6)->where('status',1)->orderBy('id','desc')->get();
        $data['sylhet'] = Branch::where('devision',7)->where('status',1)->orderBy('id','desc')->get();
        $data['mymensingh'] = Branch::where('devision',8)->where('status',1)->orderBy('id','desc')->get();
        return view('frontend.branch', $data);
    }

    public function resultpdf(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['pdfs'] = Resultpdf::where('status',1)->orderBy('id','desc')->get();
        return view('frontend.result-pdf', $data);
    }

    public function residentialinformation(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['page'] = Page::first();
        return view('frontend.residential', $data);
    }
    public function bestsuccess(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['page'] = Page::first();
        return view('frontend.bestsuccess', $data);
    }

    public function branchapplication(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['page'] = Page::first();
        return view('frontend.branch-application', $data);
    }
    public function video(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['videos'] = video::orderBy('id', 'desc')->get();
        return view('frontend.video', $data);
    }

    public function resultlist(){
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['examroutines'] = Examroutine::latest()->get();
        $data['groups'] = Group::latest()->get();
        $data['exams'] = Exam::latest()->get();
        return view('frontend.result-list',$data);
    }

    public function searchresult(Request $request){
        // return $request;
        $data['groups'] = Group::latest()->get();
        $data['exams'] = Exam::latest()->get();
        $data['setting'] = Setting::first();
        $data['sliders'] = Slider::where('status', 1)->get();
        $data['examroutines'] = Examroutine::latest()->get();
        // $data['groups'] = Group::latest()->get();

        // return $request;
        $reg = result::where('roll', '=' ,$request->roll)
        ->where('class','=',$request->class)
        // ->where('section','=',$request->section)
        ->where('exam','=',$request->exam)
        ->where('section','=',$request->section)
        ->first();
        if($reg){
            $data['result'] = DB::table('results')
            ->join('students', 'students.id', '=', 'results.student_id')
            ->select('results.*', 'students.first_name','students.last_name','students.image','students.father_name','students.mother_name')
            ->where('results.roll','=', $request->roll)
            ->where('results.class','=',$request->class)
            ->where('results.section','=',$request->section)
            ->where('results.exam','=',$request->exam)
            ->first();
            Toastr::success('Here It Is!', 'Success', ["positionClass" => "toast-top-right"]);
            return view('frontend.result-list',$data);
        }
        else{
            Toastr::error('No Result Found', 'Error', ["positionClass" => "toast-top-right"]);
            return view('frontend.result-list',$data);
        }


    }
}