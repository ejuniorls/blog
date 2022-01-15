<?php

use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Blog\ContactController;
use App\Http\Controllers\Blog\HomeController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\TagController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => ''], function () {
    # Home
    Route::get('blog', HomeController::class)->name('blog.home');

    # Sobre
    Route::view('sobre', 'blog.about.index')->name('blog.about');

    # Contato
    Route::get('contato', [ContactController::class, 'index'])->name('blog.contact');
    Route::post('contato', [ContactController::class, 'form'])->name('blog.contact.form');

    # Categorias
    Route::get('categorias', [CategoryController::class, 'index'])->name('blog.categories');
    Route::get('categorias/{category:slug}', [CategoryController::class, 'show'])->name('blog.categories.category');

    # Posts
    Route::get('post', [PostController::class, 'index'])->name('blog.posts');
    Route::get('post/{post:slug}', [PostController::class, 'show'])->name('blog.posts.post');

    # Tags
    Route::get('tag', [TagController::class, 'index'])->name('blog.tags');
    Route::get('tag/{tag:slug}', [TagController::class, 'show'])->name('blog.tags.tag');

});
