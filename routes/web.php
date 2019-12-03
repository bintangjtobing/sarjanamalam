<?php
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('optimize:clear');
    return 'Sarjanamalam have already done optimized'; //Return anything
});
// HOMEPAGE WEB ROUTE
Route::get('/', function () {
    return view('homepage.home');
});
Route::get('/signin/{tokens}', function () {
    return view('homepage.signin');
})->name('login');
Route::get('/signin', function () {
    return view('homepage.signin');
});
Route::get('/daftar/{csrf_token}', function () {
    return view('homepage.daftar');
});
Route::post('/create-account/{tokens}', 'UserController@create_account');
Route::post('/get-verification/{tokens}', 'AuthController@validateLogin');
Route::get('/logout/{id}{tokens}', 'AuthController@logout');

// LINK KHUSUS
Route::get('/about', 'HomeController@about');
Route::get('/private', 'HomeController@private');
Route::get('/help', 'HomeController@help');
Route::get('/feedback', 'HomeController@feedback');
Route::get('/how-search-works', 'HomeController@howsearch');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    // FORUM
    Route::get('/forum/{csrf_token}', 'ForumController@index');
    Route::get('/add-new-topic/{csrf_token}', 'ForumController@addnewtopic');
    Route::post('/verify-add-new-topic/{tokens}', 'ForumController@verifyadd');

    // PROFILE CONTROLLER
    Route::get('/{username}', 'profileController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
