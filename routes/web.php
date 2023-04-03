<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminController::class,'login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::prefix('question')->group(function(){
        Route::get('/list-question',[QuestionController::class,'listQuestion'])->name('question.listQuestion');
        Route::get('/form-insert',[QuestionController::class,'insertQuestionForm'])->name('question.insertQuestionForm');
        Route::post('/insert',[QuestionController::class,'insertQuestion'])->name('question.insertQuestion');
    });
    Route::prefix('answer')->group(function(){
        Route::post('/answer-question',[AnswerController::class,'answerListQuestion'])->name('answer.answerListQuestion');
    });
});
Route::prefix('page')->group(function(){
    Route::get('/home',[HomeController::class,'home'])->name('page.home');
    Route::post('/api',[HomeController::class,'api'])->name('page.api');
    Route::prefix('answer')->group(function(){
        Route::post('/bot-answer',[AnswerController::class,'botAnswer'])->name('answer.botAnswer');
    });
});

