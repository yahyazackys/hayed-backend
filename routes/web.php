<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\BannerController;

Route::get('/', [App\Http\Controllers\ViewController::class, 'index'])->name('home');

// about us
Route::get('/vision-mission-value', [App\Http\Controllers\ViewController::class, 'vision'])->name('vision-mission-value');
Route::get('/konsultan', [App\Http\Controllers\ViewController::class, 'consultant'])->name('konsultan');

// service
Route::get('/seminar', [App\Http\Controllers\ViewController::class, 'seminar'])->name('seminar');
Route::get('/service/accounting', [App\Http\Controllers\ViewController::class, 'accountingService'])->name('service.accounting');
Route::get('/service/auditing', [App\Http\Controllers\ViewController::class, 'auditingService'])->name('service.auditing');
Route::get('/service/advisory', [App\Http\Controllers\ViewController::class, 'advisoryService'])->name('service.advisory');
Route::get('/service/business', [App\Http\Controllers\ViewController::class, 'businessService'])->name('service.business');
Route::get('/service/tax', [App\Http\Controllers\ViewController::class, 'taxService'])->name('service.tax');

// career
Route::get('/career/job-vacancy', [App\Http\Controllers\ViewController::class, 'jobVacancyCareer'])->name('career.job-vacancy');
Route::get('/career/program-activity', [App\Http\Controllers\ViewController::class, 'programCareer'])->name('career.program-activity');

// article
Route::get('/article', [App\Http\Controllers\ViewController::class, 'article'])->name('article');

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function () {
    // User
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user-create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user-store');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user-edit');
    Route::post('/user/update', [UserController::class, 'update'])->name('user-update');
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user-delete');

    //New
    Route::get('/new', [NewController::class, 'index'])->name('new');
    Route::get('/new/create', [NewController::class, 'create'])->name('new-create');
    Route::post('/new/store', [NewController::class, 'store'])->name('new-store');
    Route::get('/new/edit/{id}', [NewController::class, 'edit'])->name('new-edit');
    Route::post('/new/update', [NewController::class, 'update'])->name('new-update');
    Route::get('/new/delete/{id}', [NewController::class, 'delete'])->name('new-delete');

    //Consultant
    Route::get('/consultant', [ConsultantController::class, 'index'])->name('consultant');
    Route::get('/consultant/create', [ConsultantController::class, 'create'])->name('consultant-create');
    Route::post('/consultant/store', [ConsultantController::class, 'store'])->name('consultant-store');
    Route::get('/consultant/edit/{id}', [ConsultantController::class, 'edit'])->name('consultant-edit');
    Route::post('/consultant/update', [ConsultantController::class, 'update'])->name('consultant-update');
    Route::get('/consultant/delete/{id}', [ConsultantController::class, 'delete'])->name('consultant-delete');

    //Service
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service-create');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service-store');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service-edit');
    Route::post('/service/update', [ServiceController::class, 'update'])->name('service-update');
    Route::get('/service/delete/{id}', [ServiceController::class, 'delete'])->name('service-delete');

    //Event
    Route::get('/event', [EventController::class, 'index'])->name('event');
    Route::get('/event/create', [EventController::class, 'create'])->name('event-create');
    Route::post('/event/store', [EventController::class, 'store'])->name('event-store');
    Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event-edit');
    Route::post('/event/update', [EventController::class, 'update'])->name('event-update');
    Route::get('/event/delete/{id}', [EventController::class, 'delete'])->name('event-delete');

    //Banner
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner-create');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner-store');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner-edit');
    Route::post('/banner/update', [BannerController::class, 'update'])->name('banner-update');
    Route::get('/banner/delete/{id}', [BannerController::class, 'delete'])->name('banner-delete');

    // Job
    Route::get('/job', [JobController::class, 'index'])->name('job');
    Route::get('/job/create', [JobController::class, 'create'])->name('job-create');
    Route::post('/job/store', [JobController::class, 'store'])->name('job-store');
    Route::get('/job/edit/{id}', [JobController::class, 'edit'])->name('job-edit');
    Route::post('/job/update', [JobController::class, 'update'])->name('job-update');
    Route::get('/job/delete/{id}', [JobController::class, 'delete'])->name('job-delete');

    // Forum
    Route::get('/forum', [ForumController::class, 'index'])->name('forum');
    Route::get('/forum/show/{id}', [ForumController::class, 'show'])->name('forum-show');
    Route::get('/forum/create', [ForumController::class, 'create'])->name('forum-create');
    Route::post('/forum/store', [ForumController::class, 'store'])->name('forum-store');
    Route::get('/forum/edit/{id}', [forumController::class, 'edit'])->name('forum-edit');
    Route::post('/forum/update', [ForumController::class, 'update'])->name('forum-update');
    Route::get('/forum/delete/{id}', [ForumController::class, 'delete'])->name('forum-delete');
    Route::post('/forum/{id}/comment-store', [ForumController::class, 'storeComment'])->name('comments-store');
    Route::post('/comments/{id}/like', [ForumController::class, 'likeComment'])->name('comments-like');
});
