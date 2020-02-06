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
Route::get('/search', 'SearchController@processcari');
Route::get('/daftar-event/{enc_eventid}/{nama_event}', 'DashboardController@daftarevent');
Route::post('/registrasi-event/{event_id}', 'companyController@registrasievent');

// MAIL SETTING

// HOMEPAGE WEB ROUTE
Route::get('/', function () {
    return view('homepage.home');
});
Route::get('/signin/{tokens}', function () {
    return view('homepage.login');
});

Route::get('/daftar/{csrf_token}', function () {
    return view('homepage.daftar');
});
Route::get('/daftar', function () {
    return view('homepage.daftar');
})->name('daftar');
Route::get('/signin', function () {
    return view('homepage.login');
})->name('signin');


Route::get('/details/{id}', 'ForumController@detailsthreads');

Route::post('/create-account/{tokens}', 'UserController@create_account');
Route::post('/get-verification/{tokens}', 'AuthController@validateLogin');
Route::get('/verification-user/{id}/{tokens}', 'UserController@verification');
Route::get('/logout/{id}', 'AuthController@logout');

// LINK KHUSUS
Route::get('/tentang-sarjana-malam', 'companyController@about');
Route::get('/privacy', 'companyController@private');
Route::get('/help', 'companyController@help');
Route::get('/feedback', 'companyController@feedback');
Route::get('/how-search-works', 'companyController@howsearch');
Route::get('/frequently-asked-question', 'companyController@faq');
Route::get('/blog', 'companyController@blog');
Route::get('/event', 'companyController@event');
Route::post('/post-event', 'companyController@postevent');
Route::get('/karir-sarjanamalam', 'companyController@karir');
Route::get('/pelajari-pekerjaan/{career_id}/{tokens}', 'companyController@seekarir');
Route::get('/partnership', 'companyController@partnership');
Route::post('/partnership/ajukan-permohonan/{tokens}', 'companyController@ajukanpartnership');
Route::get('/hubungi-sarjanamalam', 'companyController@hubungi');
Route::get('/cerita-sarjanamalam', 'companyController@cerita');
Route::post('/kirim-pesan', 'companyController@kirimpesan');
Route::get('/request-ad-event', 'companyController@requestevent');
Route::get('/read-blog/{blog_id}/{tokens}', 'companyController@readblog');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('homepage.home');
    });
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
    Route::get('/event-managements/{tokens}', 'DashboardController@eventmgmt');

    ///////////////////// VIEW TABLE FOREACH VIEW ///////////////////
    // PESAN CONTROLLER
    Route::get('/pesan/{tokens}', 'DashboardController@pesan');
    Route::get('/trash/{tokens}', 'DashboardController@trash');

    // EVENT CONTROL
    Route::get('/event/{tokens}', 'DashboardController@event')->name('event');
    Route::get('/detail-event/{event_id}', 'DashboardController@detailevent');
    Route::get('/delete/event/permanent/{event_id}', 'DashboardController@deleteevent');
    Route::get('/pesertaterdaftar/{tokens}', 'DashboardController@peserta');
    Route::post('/tambah-event', 'DashboardController@addevent');
    // UPDATE EVENT STATUS //
    Route::get('/update/status-event/approved/{event_id}', 'DashboardController@approvestatus');
    Route::get('/update/status-event/ unapproved/{event_id}', 'DashboardController@unapprovedstatus');
    Route::get('/update/status-event/running/{event_id}', 'DashboardController@runningstatus');
    Route::get('/update/status-event/declined/{event_id}', 'DashboardController@declinedstatus');
    Route::get('/update/status-event/finish/{event_id}', 'DashboardController@finishstatus');

    Route::get('/karir/{tokens}', 'DashboardController@karir');
    Route::post('/tambah-karir-team', 'DashboardController@addkarir');
    Route::get('/karir-info/{career_id}', 'DashboardController@infokarir');
    Route::get('/sub-karir/{tokens}', 'DashboardController@subkarir');
    Route::post('/tambah-subkarir', 'DashboardController@addsubkarir');
    Route::get('/threads/{tokens}', 'DashboardController@threads');

    Route::get('/blog/{tokens}', 'DashboardController@indexblog');
    Route::post('/blog/tambah', 'DashboardController@addblog');
    Route::get('/delete-blog/{blog_id}', 'DashboardController@deleteblog');
    // GET THE DETAILS
    Route::get('/read/{messages_id}', 'DashboardController@bacapesan');

    // PARTNERSHIP
    Route::get('/partnership/{tokens}', 'DashboardController@partnership');

    // DELETE VALUE
    Route::get('/trash-messages/{messages_id}', 'DashboardController@pesansampah');
});

Auth::routes();

Route::get('/home', function () {
    return view('homepage.home');
})->name('home');
