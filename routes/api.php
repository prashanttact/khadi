<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//API for FAQ
 Route::get('view-faq', 'Api\Admin\FaqApiController@index');
// Route::get('add-faq', 'Api\Admin\FaqApiController@create');
// Route::post('insert-faq', 'Api\Admin\FaqApiController@store');
// Route::get('edit-faq/{id}', 'Api\Admin\FaqApiController@edit');
// Route::post('update-faq/{id}', 'Api\Admin\FaqApiController@update');
// Route::get('delete-faq/{id}', 'Api\Admin\FaqApiController@destroy');
// //Route::get('deletePdf-news/{id}', 'Admin\NewsController@UplaodPdfDelete');
// Route::get('changeFaqStatusNew', 'Api\Admin\FaqApiController@changeStatus');

//Route::resource('faq','Api\Admin\FaqApiController');