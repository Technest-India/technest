<?php

use Illuminate\Support\Facades\Request;
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

Route::get('/', function (Request $request) {
    return view('pages.home');
});

Route::get('/contact-us', function (Request $request) {
    return view('pages.contactUs');
});
Route::get('/about', function (Request $request) {
    return view('pages.about');
});
Route::get('/service', function (Request $request) {
    return view('pages.service');
});
Route::get('/web-development', function (Request $request) {
    return view('pages.webDevelopment');
});
Route::get('/app-development', function (Request $request) {
    return view('pages.appDevelopment');
});
Route::get('/cctv-install', function (Request $request) {
    return view('pages.cctvInstall');
});
Route::get('/computer', function (Request $request) {
    return view('pages.computerService');
});
