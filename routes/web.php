<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\books;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/books',[books::class,'index'])->name('book.index');
Route::get('/book_create',[books::class,'create'])->name('book.create');
Route::post('/book_submit',[books::class,'book_submit'])->name('book.submit');

Route::get('/edit_book/{id}',[books::class,'edit'])->name('books.edit');
Route::post('/update_book/{id}',[books::class,'update'])->name('books.update');
Route::get('/delete_book/{id}',[books::class,'delete'])->name('books.delete');

Route::get('dashboard','books@dash')->name('dash');
Route::get('homepage','books@m_home')->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/demo',[books::class,'demo'])->name('demo');


// creating members

Route::get('/index','memberController@index')->name('m.index');

Route::get('m_create','memberController@insert')->name('insert');

Route::post('submit','memberController@m_submit')->name('m.submit');

Route::get('m_edit/{id}','memberController@m_edit')->name('m.edit');
Route::get('m_update/{id}','memberController@update')->name('m.update');

Route::get('m_delete/{id}','memberController@delete')->name('m.delete');

Route::get('sendmail','sendmailtrap@sendmail');

// Creating SMS Portal
Route::get('/', 'HomeController@show');
Route::post('/', 'HomeController@storePhoneNumber');
Route::get('/custom', 'HomeController@sendCustomMessage');

Route::get('/sendsms', 'sendsms@sendsms');

Route::get('/sendmail','mailController@sms');

// make call
Route::get('/makecall','makeCall@makecall');

//
