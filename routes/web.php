<?php
//Clear Cache facade value:

use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::get('/newgen', function () {
    return view('forum.layouts.newstyle');
});

// HASIL PENCARIAN
// PROSES CARI
Route::get('/search', 'SearchController@processcari')->name('search');
Route::get('/daftar-event/{enc_eventid}/{nama_event}', 'DashboardController@daftarevent');
Route::post('/registrasi-event/{event_id}', 'companyController@registrasievent');

// RNHKBP GLUGUR FORMS
Route::get('/eForms-rnhkbpglugur', 'partnerController@index');
Route::post('/submit-eForms/{tokens}', 'partnerController@submitforms');


// TAMBAHAN INFO
Route::get('/sarjanamalam-peduli-sehat', 'OptionalController@index');
// MAIL SETTING

// HOMEPAGE WEB ROUTE
Route::get('/', function () {
    $csrf_token = bin2hex(openssl_random_pseudo_bytes(64));
    return redirect('/forum/' . $csrf_token);
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

// FACEBOOK, TWITTER, GOOGLE AUTH
Route::get('/auth/{provider}', 'UserController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'UserController@handleProviderCallback');

Route::post('/create-account/{tokens}', 'UserController@create_account');
Route::post('/reset-account', 'UserController@resetAccount');
Route::post('/get-verification/{tokens}', 'AuthController@validateLogin');
Route::get('/verification-user/{enc_id}/{tokens}', 'UserController@verification');
Route::get('/reset-account/{enc_id}/{tokens}', 'UserController@getAcc');
Route::get('/logout/{id}/{tokens}', 'AuthController@logout');

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
Route::get('/pelajari-pekerjaan/{enc_id}/{tokens}', 'companyController@seekarir');
Route::get('/detail-pekerjaan/{enc_karirid}/{tokens}', 'companyController@detailkarir');
Route::get('/form-pendaftaran-umum/{enc_karirid}/{tokens}', 'companyController@form');
Route::post('/apply-form-job/{tokens}', 'companyController@applyjob');
Route::get('/partnership', 'companyController@partnership');
Route::post('/partnership/ajukan-permohonan/{tokens}', 'companyController@ajukanpartnership');
Route::get('/hubungi-sarjanamalam', 'companyController@hubungi');
Route::get('/cerita-sarjanamalam', 'companyController@cerita');
Route::post('/kirim-pesan', 'companyController@kirimpesan');
Route::get('/request-ad-event', 'companyController@requestevent');
Route::get('/read-blog/{blog_id}/{tokens}', 'companyController@readblog');

Route::get('/details/{enc_id}', 'ForumController@detailsthreads');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('homepage.home');
    });
    // FORUM
    Route::get('/forum/{csrf_token}', 'ForumController@index')->name('indexforum');
    Route::get('/add-new-topic/{csrf_token}', 'ForumController@addnewtopic');
    Route::post('/verify-add-new-topic/{tokens}', 'ForumController@verifyadd');
    Route::get('/delete-threads/{id}/verify/{tokens}', 'ForumController@deletethreads');
    // Route::get('/details/{enc_id}', 'ForumController@detailsthreads');
    Route::post('/response-comments/{enc_id}', 'ForumController@comments');
    Route::get('/search-events/{tokens}', 'ForumController@searchforum');
    Route::get('/jobs/{tokens}', 'ForumController@jobs');

    // PROFILE CONTROLLER
    Route::get('/{username}', 'ForumController@username');
    Route::get('/{username}/settings', 'ForumController@settings');

    // PRIVATE MESSAGES
    Route::get('/messages/{tokens}', 'MessagesController@index');
    Route::get('/message/{id}', 'MessagesController@getMessage')->name('message');
    Route::post('/message/post', 'MessagesController@sendMessage');

    // SETTINGS POST
    Route::post('/{username}/settings/update_name/{tokens}', 'ForumController@updatename');
    Route::post('/{username}/settings/update_username/{tokens}', 'ForumController@updateusername');
    Route::post('/{username}/settings/update_ponsel/{tokens}', 'ForumController@updateponsel');
    Route::post('/{username}/settings/update_email/{tokens}', 'ForumController@updateemail');
    Route::post('/{username}/settings/update_password/{tokens}', 'ForumController@updatepassword');
    Route::post('/{username}/settings/update_pic/{tokens}', 'ForumController@updatepic');
    Route::post('/{username}/settings/update_website/{tokens}', 'ForumController@updatewebsite');
    Route::post('/{username}/settings/update_social/{tokens}', 'ForumController@updatesocial');

    // DASHBOARD PROFILE CONTROLLER
    Route::post('/summary-add/{enc_id}/{tokens}', 'ForumController@summaryadd');
    Route::post('/interested-add/{enc_id}/{tokens}', 'ForumController@interestedadd');
    Route::post('/university-add/{enc_id}/{tokens}', 'ForumController@universityadd');
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
    Route::get('/subkarir-info/{subcareer_id}', 'DashboardController@subkaririnfo');
    Route::post('/tambah-subkarir', 'DashboardController@addsubkarir');
    Route::get('/open-career/{subcareer_id}', 'DashboardController@openkarir');
    Route::get('/close-career/{subcareer_id}', 'DashboardController@closekarir');
    Route::get('/trash-career/{subcareer_id}', 'DashboardController@trashkarir');
    Route::get('/pelamar/{tokens}', 'DashboardController@pelamar');
    Route::get('/detail-pelamar/{enc_id}', 'DashboardController@detailpelamar');
    Route::get('/trash-pelamar/{enc_id}', 'DashboardController@trashpelamar')->name('trashpelamar');
    Route::get('/terima-pelamar/{enc_id}', 'DashboardController@terimapelamar')->name('terimapelamar');

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
