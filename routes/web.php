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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/home', function () {
    return view('frontend.index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();


});

Route::get('/about-us','Controller@aboutus');
Route::get('/recipe','Controller@recipe');
Route::get('/children/{id}','Controller@children');
Route::get('/healthfacts','Controller@healthfacts');
Route::get('/contact','Controller@contact');
Route::post('/sendmail','Controller@sendEmail');
Route::get('/contact_process.php','Controller@sendEmail');
Route::get('/group_child','Controller@group_child');
Route::get('/filter/{id}','Controller@groupfilter');
Route::get('/addcomment/{id}','Controller@addcomment');
Route::get('/ajaxfilt','Controller@ajaxfilt');
Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {
        //Session::put('locale', $locale);
        return redirect()->back()->withCookie(cookie()->forever('locale', $locale));
    }
    return redirect()->back()->withCookie(cookie()->forever('locale', 'en')); // default
});

