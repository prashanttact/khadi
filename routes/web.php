<?php

use App\Admin\QueryFeedbackType;
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
Route::get('type',function(){

    $type=QueryFeedbackType::all();
    return $type;
});

Route::get('invoice', 'AuthorizeController@invoice');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:cache');
});



//Homepage Controller
Route::get('/', 'HomeController@homePage')->name('home-page');
Route::get('homePage', 'HomeController@homePage');
Route::get('pageUnderConstruction/{pageName}','HomeController@pageUnderConstruction');
Route::post('feedback','HomeController@saveFeedback');
Route::get('eligibilityCheck','HomeController@checkEligibility');
Route::post('checkUserEligibility','HomeController@checkUserEligibility');


//PageController
Route::get('about-us', 'PageController@aboutus');
Route::get('contact-us', 'PageController@contactus');
Route::get('disclaimer', 'PageController@disclaimer');
Route::get('privacy_policy', 'PageController@privacy_policy');
Route::get('terms_condition', 'PageController@terms_condition');

//new routes defined here
Route::get('form','PageController@viewForm');
Route::post('save-form','PageController@saveForm');


Auth::routes();

Route::get('admin-login', 'AdminController@admin_home'); //->name('admlogin');
Route::post('admin-login', ['uses' => 'Auth\LoginController@admin_login']);
Route::get('logout', 'AdminController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'roles'], 'roles' => ['Admin']], function () {
Route::get('home', 'Admin\DashboardController@adminDashboard');
Route::get('admin-dashboard', 'Admin\DashboardController@adminDashboard');


    //Routing for FAQ
Route::get('view-faq', 'Admin\FaqController@index');
Route::get('add-faq', 'Admin\FaqController@create');
Route::post('insert-faq', 'Admin\FaqController@store');
Route::get('edit-faq/{id}', 'Admin\FaqController@edit');
Route::post('update-faq/{id}', 'Admin\FaqController@update');
Route::get('delete-faq/{id}', 'Admin\FaqController@destroy');
//Route::get('deletePdf-news/{id}', 'Admin\NewsController@UplaodPdfDelete');
Route::get('changeFaqStatusNew', 'Admin\FaqController@changeStatus');


//Routing for Query
Route::get('view-query', 'Admin\QueryController@index');
Route::get('show-query/{id}', 'Admin\QueryController@show');
Route::get('delete-query/{id}', 'Admin\QueryController@destroy');




});
	
