<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HistoryMessageController;
use App\Http\Controllers\RoomController;
use App\Models\HistoryMessage;
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
    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::post('/sign-in',[AdminController::class,'signIn'])->name('admin.signIn');
    Route::prefix('question')->group(function(){
        Route::get('/list-question',[QuestionController::class,'listQuestion'])->name('question.listQuestion');
        Route::get('/form-insert',[QuestionController::class,'insertQuestionForm'])->name('question.insertQuestionForm');
        Route::post('/insert',[QuestionController::class,'insertQuestion'])->name('question.insertQuestion');
        Route::get('/form-edit/{id}',[QuestionController::class,'editQuestionForm'])->name('question.editQuestionForm');
        Route::post('/edit/{id}',[QuestionController::class,'editQuestion'])->name('question.editQuestion');
        Route::get('/delete/{id}',[QuestionController::class,'deleteQuestion'])->name('question.deleteQuestion');
        Route::post('/delete-questions',[QuestionController::class,'deleteMoreQuestion'])->name('question.deleteMoreQuestion');
    });
    Route::prefix('answer')->group(function(){
        Route::get('/list-answer',[AnswerController::class,'listAnswer'])->name('answer.listAnswer');
        Route::post('/answer-question',[AnswerController::class,'answerListQuestion'])->name('answer.answerListQuestion');
        Route::get('/form-edit/{id}',[AnswerController::class,'editFormAnswer'])->name('answer.editFormAnswer');
        Route::post('/edit-answer',[AnswerController::class,'editAnswer'])->name('answer.editAnswer');
    });
    Route::prefix('user')->group(function(){
        Route::get('/list-user',[AdminController::class,'listUser'])->name('user.listUser');
        Route::post('/create-user',[AdminController::class,'createUser'])->name('user.createUser');
        Route::get('/setting',[AdminController::class,'setting'])->name('user.setting');
        Route::get('/delete-user/{id}',[AdminController::class,'deleteUser'])->name('user.deleteUser');
        Route::post('/change-password',[AdminController::class,'changePassword'])->name('user.changePassword');
    });
    Route::prefix('customer')->group(function(){
        Route::get('/list-customer',[CustomerController::class,'listCustomer'])->name('customer.listCustomer');
        Route::get('/delete-customer/{id}',[CustomerController::class,'deleteCustomer'])->name('customer.deleteCustomer');
    });
});
Route::prefix('page')->group(function(){
    Route::get('/login',[HomeController::class,'loginForm'])->name('page.loginForm');
    Route::get('/logout',[HomeController::class,'logout'])->name('page.logout');
    Route::post('/loginPage',[HomeController::class,'login'])->name('page.login');
    Route::get('/register',[HomeController::class,'registerForm'])->name('page.registerForm');
    Route::post('/registerPage',[HomeController::class,'register'])->name('page.register');
    Route::get('/forgot',[HomeController::class,'forgotPasswordForm'])->name('page.forgotPasswordForm');
    Route::post('/changePassword',[HomeController::class,'changePassword'])->name('page.changePassword');
    Route::post('/changePasswordCustomer',[HomeController::class,'changePasswordCustomer'])->name('page.changePasswordCustomer');
    Route::prefix('google')->group(function(){
        Route::get('/login-gg',[HomeController::class,'redirectGoogle'])->name('google.redirect');
        Route::get('/callback',[HomeController::class,'loginGoogle'])->name('google.login');
    });
    Route::group(['middleware' => 'auth.check'], function () {
        Route::get('/',[HomeController::class,'home'])->name('page.home');
    });
    Route::prefix('answer')->group(function(){
        Route::post('/bot-answer',[AnswerController::class,'botAnswer'])->name('answer.botAnswer');
        // Route::post('/create-history',[HistoryMessageController::class,'createHistoryMessage'])->name('history.createRoom');
    });
    Route::prefix('room')->group(function(){
        Route::post('/create-room',[RoomController::class,'createRoom'])->name('room.createRoom');
    });
    Route::prefix('history')->group(function(){
        Route::get('/history-room',[HistoryMessageController::class,'historyMessageRoom'])->name('history.historyMessageRoom');
    });
    Route::prefix('customer')->group(function(){
        Route::get('/profile/{id}',[CustomerController::class,'profile'])->name('customer.profile');
        Route::get('/get-profile',[CustomerController::class,'getProfile'])->name('customer.getProfile');
        Route::post('/update-profile',[CustomerController::class,'updateProfile'])->name('customer.updateProfile');
    });
});

