<?php
use App\Http\Controllers\Admin\Dashboard\DashboardController;
//ADMIN CONTROLLERS
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\AcademicController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\FromdownloadController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\ClassroutineController;
use App\Http\Controllers\Admin\ExamroutineController;
use App\Http\Controllers\Admin\AdmissionController;

//APP
Use App\Http\Controllers\PagesController;
Use App\Http\Controllers\AppAuthController;
use Illuminate\Support\Facades\Route;

// CUSTOMER PANEl ROUTES
Route::get('/register', [AppAuthController::class, 'register'])->name('register');
Route::POST('/registerAction', [AppAuthController::class, 'registerAction'])->name('registerAction');


//ADMIN PANEL
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});
Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('/login', [AppAuthController::class, 'login'])->name('login');
    Route::post('/loginAction', [AppAuthController::class, 'loginAction'])->name('loginAction');
    Route::post('/logout', [AppAuthController::class, 'logout'])->name('logout');
    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('admin')->group(function () {
        Route::group(['as' => 'slider.', 'prefix' => 'slider'], function () {
            Route::get('/list', [SliderController::class, 'index'])->name('list');
            Route::get('/add', [SliderController::class, 'create'])->name('add');
            Route::post('/submit', [SliderController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [SliderController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [SliderController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'department.', 'prefix' => 'department'], function () {
            Route::get('/list', [DepartmentController::class, 'index'])->name('list');
            Route::get('/add', [DepartmentController::class, 'create'])->name('add');
            Route::post('/submit', [DepartmentController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [DepartmentController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [DepartmentController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'teacher.', 'prefix' => 'teacher'], function () {
            Route::get('/list', [TeacherController::class, 'index'])->name('list');
            Route::get('/print-teacher', [TeacherController::class, 'printindex'])->name('print.teacher');
            Route::get('/add', [TeacherController::class, 'create'])->name('add');
            Route::post('/submit', [TeacherController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [TeacherController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [TeacherController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'student.', 'prefix' => 'student'], function () {
            Route::get('/list', [StudentController::class, 'index'])->name('list');
            Route::get('/add', [StudentController::class, 'create'])->name('add');
            Route::post('/submit', [StudentController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [StudentController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');
        });


        Route::group(['as' => 'exam.', 'prefix' => 'exam'], function () {
            Route::get('/list', [ExamController::class, 'index'])->name('list');
            Route::get('/add', [ExamController::class, 'create'])->name('add');
            Route::post('/submit', [ExamController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ExamController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [ExamController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ExamController::class, 'destroy'])->name('delete');
        });



        Route::group(['as' => 'location.', 'prefix' => 'location'], function () {
            Route::get('/list', [LocationController::class, 'index'])->name('list');
            Route::get('/add', [LocationController::class, 'create'])->name('add');
            Route::post('/submit', [LocationController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [LocationController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [LocationController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [LocationController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'staff.', 'prefix' => 'staff'], function () {
            Route::get('/list', [StaffController::class, 'index'])->name('list');
            Route::get('/print-staff', [StaffController::class, 'printstaff'])->name('print.staff');
            Route::get('/add', [StaffController::class, 'create'])->name('add');
            Route::post('/submit', [StaffController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [StaffController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [StaffController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [StaffController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'notice.', 'prefix' => 'notice'], function () {
            Route::get('/list', [NoticeController::class, 'index'])->name('list');
            Route::get('/add', [NoticeController::class, 'create'])->name('add');
            Route::post('/submit', [NoticeController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [NoticeController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [NoticeController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [NoticeController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'news.', 'prefix' => 'news'], function () {
            Route::get('/list', [NewsController::class, 'index'])->name('list');
            Route::get('/add', [NewsController::class, 'create'])->name('add');
            Route::post('/submit', [NewsController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [NewsController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [NewsController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'photogallery.', 'prefix' => 'photogallery'], function () {
            Route::get('/list', [PhotoController::class, 'index'])->name('list');
            Route::get('/add', [PhotoController::class, 'create'])->name('add');
            Route::post('/submit', [PhotoController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PhotoController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [PhotoController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PhotoController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'academic.', 'prefix' => 'academic'], function () {
            Route::get('/list', [AcademicController::class, 'index'])->name('list');
            Route::get('/add', [AcademicController::class, 'create'])->name('add');
            Route::post('/submit', [AcademicController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AcademicController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [AcademicController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [AcademicController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'examroutine.', 'prefix' => 'examroutine'], function () {
            Route::get('/list', [ExamroutineController::class, 'index'])->name('list');
            Route::get('/add', [ExamroutineController::class, 'create'])->name('add');
            Route::post('/submit', [ExamroutineController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ExamroutineController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [ExamroutineController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ExamroutineController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'classroutine.', 'prefix' => 'classroutine'], function () {
            Route::get('/list', [ClassroutineController::class, 'index'])->name('list');
            Route::get('/add', [ClassroutineController::class, 'create'])->name('add');
            Route::post('/submit', [ClassroutineController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ClassroutineController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [ClassroutineController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ClassroutineController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'admission-related.', 'prefix' => 'admission-related'], function () {
            Route::get('/list', [AdmissionController::class, 'index'])->name('list');
            Route::get('/add', [AdmissionController::class, 'create'])->name('add');
            Route::post('/submit', [AdmissionController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdmissionController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [AdmissionController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [AdmissionController::class, 'destroy'])->name('delete');
        });

        Route::group(['as' => 'form-download.', 'prefix' => 'form-download'], function () {
            Route::get('/list', [FromdownloadController::class, 'index'])->name('list');
            Route::get('/add', [FromdownloadController::class, 'create'])->name('add');
            Route::post('/submit', [FromdownloadController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [FromdownloadController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [FromdownloadController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [FromdownloadController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'group.', 'prefix' => 'group'], function () {
            Route::get('/list', [GroupController::class, 'index'])->name('list');
            Route::get('/add', [GroupController::class, 'create'])->name('add');
            Route::post('/submit', [GroupController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [GroupController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [GroupController::class, 'destroy'])->name('delete');
        });
        Route::group(['as' => 'result.', 'prefix' => 'result'], function () {
            Route::get('/list', [ResultController::class, 'index'])->name('list');
            Route::get('/add', [ResultController::class, 'create'])->name('add');
            Route::post('/submit', [ResultController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ResultController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [ResultController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ResultController::class, 'destroy'])->name('delete');
            Route::post('/create-result', [ResultController::class, 'createResult'])->name('createResult');
        });

        Route::group(['as' => 'setting.', 'prefix' => 'setting'], function () {
            Route::get('/edit', [DashboardController::class, 'site_edit'])->name('edit');
            Route::post('/update/{id}', [DashboardController::class, 'site_update'])->name('update');
        });
    });
    Route::middleware('panel')->group(function () {
        Route::prefix('panel')->as('panel.')->group(function () {
            // USER PANEL
            Route::get('/', [DashboardController::class, 'panel'])->name('index');
        });
    });
});

Route::get('/app/get-gateway/{id}', [DashboardController::class, 'getGateway'])->name('getGateway');


//Front END
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/vice-principal-message', [PagesController::class, 'vicePrincipalMessage'])->name('vicePrincipalMessage');
Route::get('/principal-message', [PagesController::class, 'principalMessage'])->name('principalMessage');
Route::get('/campus-history', [PagesController::class, 'campushistory'])->name('campushistory');
Route::get('/view-photo-gallery', [PagesController::class, 'viewgallery'])->name('view-gallery');
Route::get('/faculties', [PagesController::class, 'teacher'])->name('teacher.list');
Route::get('/faculties/profile/{username}', [PagesController::class, 'teacherShow'])->name('teacher.view');
Route::get('/staffs', [PagesController::class, 'staff'])->name('staff.list');
Route::get('/staffs/profile/{username}', [PagesController::class, 'staffShow'])->name('staff.view');
Route::get('/Students-data', [PagesController::class, 'Studentsdata'])->name('student.list');
Route::get('/Class-routine', [PagesController::class, 'Classroutine'])->name('classroutine.list');
Route::get('/graduate-routine', [PagesController::class, 'graduateroutine'])->name('graduate.list');
Route::get('/graduate-syllabus', [PagesController::class, 'graduatesyllabus'])->name('graduate.syllabus');
Route::get('/syllabus', [PagesController::class, 'highersyllabus'])->name('higher.syllabus');
Route::get('/exam-routine', [PagesController::class, 'examroutine'])->name('examroutine.list');
Route::get('/academic-course-plan', [PagesController::class, 'academiccourseplan'])->name('academic-course-plan');


Route::get('/notices', [PagesController::class, 'notice'])->name('notice.list');
Route::get('/notices-general', [PagesController::class, 'noticeGeneral'])->name('notice.list.general');
Route::get('/result-list', [PagesController::class, 'resultlist'])->name('result.list');
Route::get('/search-result', [PagesController::class, 'searchresult'])->name('search-result');
Route::get('/notices-other', [PagesController::class, 'noticeOther'])->name('notice.list.other');
Route::get('/notice/{id}', [PagesController::class, 'noticeShow'])->name('notice.show');

Route::get('/news', [PagesController::class, 'news'])->name('news.list');
Route::get('/news/{id}', [PagesController::class, 'newsShow'])->name('news.show');

Route::get('/important-links', [PagesController::class, 'importantlinks'])->name('important-links');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/Department-of-Humanities', [PagesController::class, 'humanities'])->name('Department-of-Humanities');
Route::get('/Department-of-bussiness', [PagesController::class, 'bussiness'])->name('Department-of-bussiness');
Route::get('/Department-of-Science', [PagesController::class, 'science'])->name('Department-of-Science');
Route::get('/classonetofive', [PagesController::class, 'classonetofive'])->name('classonetofive');
Route::get('/classsix', [PagesController::class, 'classsix'])->name('classsix');
Route::get('/classseven', [PagesController::class, 'classseven'])->name('classseven');
Route::get('/classeight', [PagesController::class, 'classeight'])->name('classeight');
Route::get('/admission-related', [PagesController::class, 'admissionrelated'])->name('admission-related');
Route::get('/form-download', [PagesController::class, 'formdownload'])->name('form-download');
