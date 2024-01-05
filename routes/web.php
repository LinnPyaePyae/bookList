<?php

use App\Http\Controllers\TblBookController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TblBookController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\TblBookController::class, 'index'])->name('home');

Route::controller(TblBookController::class)->group(function () {
    Route::get("book", 'index')->name("book.index");
    // Route::get("book/{tbl_Book}/show", 'show')->name("book.show");
    Route::get("book/create", "create")->name("book.create");
    Route::post("book/store", "store")->name("book.store");
    Route::put("book/{tbl_Book}/update", "update")->name("book.update");
    Route::get("book/{tbl_Book}/edit", "edit")->name("book.edit");
    Route::delete("book/{tbl_Book}/delete", "destroy")->name("book.destroy");
});
