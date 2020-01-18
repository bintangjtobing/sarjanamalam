<?php
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('optimize:clear');
    return 'Sarjanamalam have already done optimized'; //Return anything
});
// HASIL PENCARIAN
// PROSES CARI
Route::get('/search?=' . 'SearchController@processcari');
// HOMEPAGE WEB ROUTE
Route::get('/', function () {
    return view('homepage.home');
});
Route::get('/signin/{tokens}', function () {
    return view('homepage.login');
});
Route::get('/signin', function () {
    return view('homepage.login');
})->name('signin');
Route::get('/daftar/{csrf_token}', function () {
    return view('homepage.daftar');
});
Route::get('search', 'SearchController@index');
Route::post('/create-account/{tokens}', 'UserController@create_account');
Route::post('/get-verification/{tokens}', 'AuthController@validateLogin');
Route::get('/logout/{id}', 'AuthController@logout');

// LINK KHUSUS
Route::get('/tentang-sarjana-malam', 'companyController@about');
Route::get('/privacy', 'companyController@private');
Route::get('/help', 'companyController@help');
Route::get('/feedback', 'companyController@feedback');
Route::get('/how-search-works', 'companyController@howsearch');
Route::get('/blog', 'companyController@blog');
Route::get('/event', 'companyController@event');
Route::post('/post-event', 'companyController@postevent');
Route::get('/karir-sarjanamalam', 'companyController@karir');
Route::get('/hubungi-sarjanamalam', 'companyController@hubungi');
Route::get('/cerita-sarjanamalam', 'companyController@cerita');
Route::post('/kirim-pesan', 'companyController@kirimpesan');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    // FORUM
    Route::get('/forum/{csrf_token}', 'ForumController@index');
    Route::get('/add-new-topic/{csrf_token}', 'ForumController@addnewtopic');
    Route::post('/verify-add-new-topic/{tokens}', 'ForumController@verifyadd');
    Route::get('/delete-threads/{id}/verify/{tokens}', 'ForumController@deletethreads');
    Route::get('/details/{id}', 'ForumController@detailsthreads');
    // PROFILE CONTROLLER
    Route::get('/{username}', 'profileController@index');
});

// DASHBOARD CONTROLLER MENU
Route::group(['middleware' => 'auth'], function () {
    Route::get('/restricted/{tokens}', 'DashboardController@index');
    Route::get('/user-config/{tokens}', 'DashboardController@usermgmt');
    Route::get('/delete/{id}/{tokens}', 'DashboardController@deleteuser');
    Route::get('/edit/{id}/{tokens}', 'DashboardController@edituser');
    Route::post('/update/{id}/{tokens}', 'DashboardController@updateuser');
    Route::get('/blog-queue/{tokens}', 'DashboardController@blog');
    Route::get('/event-managements/{tokens}', 'DashboardController@eventmgmt');

    ///////////////////// VIEW TABLE FOREACH VIEW ///////////////////
    // PESAN CONTROLLER
    Route::get('/pesan/{tokens}', 'DashboardController@pesan');
    Route::get('/trash/{tokens}', 'DashboardController@trash');

    // EVENT CONTROL
    Route::get('/event/{tokens}', 'DashboardController@event');
    Route::get('/detail-event/{event_id}', 'DashboardController@detailevent');
    // UPDATE EVENT STATUS //
    Route::get('/update/status-event/approved/{event_id}', 'DashboardController@approvestatus');
    Route::get('/update/status-event/ unapproved/{event_id}', 'DashboardController@unapprovedstatus');
    Route::get('/update/status-event/running/{event_id}', 'DashboardController@runningstatus');
    Route::get('/update/status-event/declined/{event_id}', 'DashboardController@declinedstatus');

    Route::get('/karir/{tokens}', 'DashboardController@karir');
    Route::post('/tambah-karir-team', 'DashboardController@addkarir');
    Route::get('/karir-info/{nama_team}/{career_id}', 'DashboardController@infokarir');
    Route::get('/threads/{tokens}', 'DashboardController@threads');

    // GET THE DETAILS
    Route::get('/read/{messages_id}', 'DashboardController@bacapesan');

    // DELETE VALUE
    Route::get('/trash-messages/{messages_id}', 'DashboardController@pesansampah');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
