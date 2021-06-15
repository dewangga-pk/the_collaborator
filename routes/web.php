<?php

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
Route::view('/trello','trello');
Route::view('/projects','projectList');
Route::view('/projects/project/overview','projects/project');
Route::view('/projects/project/board','projects/projectboard');
Route::view('/projects/project/board/detail','projects/detailTask');

Route::view('/invoices','invoices/invoices');
Route::view('/invoices/invoice','invoices/invoice');
Route::get('/invoices/invoice/print_pdf','InvoiceController@print_pdf');
