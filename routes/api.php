<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\ApiJobController;
use App\Http\Controllers\Api\ApiEventController;
use App\Http\Controllers\Api\ApiNewController;
use App\Http\Controllers\Api\ApiConsultantController;
use App\Http\Controllers\Api\ApiForumController;
use App\Http\Controllers\Api\ApiUserController;
use Illuminate\Support\Facades\Mail;

// AUTHENTICATION
Route::post('/register', [App\Http\Controllers\Api\ApiUserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Api\ApiUserController::class, 'login']);

Route::post('/forget-password', [App\Http\Controllers\Api\ApiUserController::class, 'forgetPassword']);

Route::get('auth', [ApiUserController::class, 'redirectToAuth']);
Route::get('auth/callback', [ApiUserController::class, 'handleAuthCallback']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/send-verify-mail/{email}', [App\Http\Controllers\Api\ApiUserController::class, 'sendVerifyMail']);
    Route::post('/logout', [App\Http\Controllers\Api\ApiUserController::class, 'logout']);
    Route::post('/forum/submit', [ApiForumController::class, 'postForum']);
    Route::post('/komentar/{id}/submit', [ApiForumController::class, 'createComment']);
});

Route::get('/forum', [ApiForumController::class, 'getAllForum']);
Route::get('/forum/{id}/detail', [ApiForumController::class, 'detailForum']);
Route::get('/komentar', [ApiForumController::class, 'getAllComment']);

// Api Job
Route::get('/lowongan-pekerjaan', [ApiJobController::class, 'getAllJob']);

// Api Event
Route::get('/agenda', [ApiEventController::class, 'getAllEvent']);
Route::get('/agenda-sebelumnya', [ApiEventController::class, 'getPreviousEvent']);
Route::get('/agenda-selanjutnya', [ApiEventController::class, 'getNextEvent']);
Route::get('/agenda/{id}/detail', [ApiEventController::class, 'detailEvent']);

// Api New
Route::get('/berita', [ApiNewController::class, 'getAllNew']);
Route::get('/berita-terbaru', [ApiNewController::class, 'getNewNew']);
Route::get('/berita-hangat', [ApiNewController::class, 'getBreakingNew']);
Route::get('/berita/{id}/detail', [ApiNewController::class, 'detailNew']);
Route::get('/berita/search', [ApiNewController::class, 'searchNew']);

//API Consultant
Route::get('/consultant', [ApiConsultantController::class, 'getAllConsultant']);
Route::get('/consultant/{id}/detail', [ApiConsultantController::class, 'detailConsultant']);

// forum
Route::get('/forums', [ForumController::class, 'index'])->name('api.forums.index');
Route::post('/forums', [ForumController::class, 'store'])->name('api.forums.store');
Route::get('/forums/{id}', [ForumController::class, 'show'])->name('api.forums.show');
Route::post('/forums/{forumId}/comments', [ForumController::class, 'storeComment'])->name('api.forums.comments.store');
Route::post('/comments/{commentId}/like', [ForumController::class, 'likeComment'])->name('api.comments.like');
