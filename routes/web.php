<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminCommentairController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminDaschboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[AppController::class, 'index'])->name('app.index');
Route::get('/about',[AboutController::class, 'index'])->name('about.index');
Route::get('/services',[ServicesController::class, 'index'])->name('services.index');
Route::get('/blog',[BlogController::class, 'index'])->name('blog.index');
Route::get('/contact',[ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/store',[ContactController::class, 'store'])->name('contact.store');
Route::get('/commentaire',[CommentaireController::class, 'index'])->name('commentaire.index');
Route::post('/commentaire/store',[CommentaireController::class, 'store'])->name('commentaire.store');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class, 'index'])->name('user.index');
});

Route::middleware('auth','auth.admin')->group(function(){
    Route::get('/admin',[AdminDaschboardController::class, 'index'])->name('admin.index');
    Route::get('/admin/commentair',[AdminCommentairController::class, 'index'])->name('admin.commentair');
    Route::delete('/admin/commentair/{commentair}',[AdminCommentairController::class, 'destroy'])->name('admin.delete.commentair');
    Route::get('/admin/contact',[AdminContactController::class, 'index'])->name('admin.contact');
    Route::delete('/admin/contact/{contact}',[AdminContactController::class, 'destroy'])->name('admin.delete.contact');
});

