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

Route::get('/', 'FrontEndController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('contact', function(){ return view('contact');})->name('contact');

Route::get('resources', function(){ return view('documents');})->name('resources');

Route::get('pricing', function(){ return view('pricing');})->name('pricing');

Route::get('about', function(){ return view('about');})->name('about');

Route::get('services', function(){ return view('services');})->name('services');

Route::post('savelead', 'ContactController@save')->name('savelead');

Route::get('/blog', 'BlogController@index');
Route::get('/posts/{post}', 'BlogController@post');
Route::post('/posts/{post}/comment', 'BlogController@comment');

Route::get('calender', 'CalenderController@show');
Route::resource('appointments', 'AppointmentsController');

//Route::get('showcalender', 'AppointmentsController@index')->name('showcalender');

Route::group(['middleware' => 'auth'], function () {

    Route::get('cms.pricing/{id?}', 'HomeController@showPricing')->name('cms.pricing');

    Route::post('cms.pricing.save', 'HomeController@savePricing')->name('cms.pricing.save');

    Route::get('cms.banners', 'HomeController@showBanners')->name('cms.banners');

    Route::post('cms.banners.save', 'HomeController@saveBanners')->name('cms.banners.save');

    Route::get('cms.home', 'HomeController@showhomeContent')->name('cms.home');

    Route::get('doc.category/{id?}', 'HomeController@categoryForm')->name('doc.category');

    Route::get('doc.category.destroy/{id?}', 'HomeController@deleteCategory')->name('doc.category.delete');

    Route::get('doc.subcategory.destroy/{id?}', 'HomeController@deleteCategory')->name('doc.subcategory.delete');

    Route::post('doc.category.save', 'HomeController@saveCategory')->name('doc.category.save');

    Route::get('doc.subcategory/{id?}', 'HomeController@subCategoryForm')->name('doc.subcategory');

    Route::post('doc.subcategory.save', 'HomeController@saveSubCategory')->name('doc.subcategory.save');

    Route::get('doc.subcategory.destroy/{id?}', 'HomeController@deleteCategory')->name('doc.subcategory.delete');

    Route::get('docs/{id?}', 'HomeController@documentForm')->name('docs');

    Route::post('docs.save', 'HomeController@saveDocument')->name('docs.save');

    Route::delete('docs.destroy/{id?}', 'HomeController@deleteDocument')->name('docs.delete');

    Route::post('cms.home.welcome-message', 'HomeController@updatehomeContent')->name('cms.home.welcome-message');

    Route::resource('/admin/posts', 'PostController');
    Route::get('/admin/posts/{post}/publish', 'PostController@publish');
    Route::resource('/admin/categories', 'CategoryController', ['except' => ['show']]);
    Route::resource('/admin/tags', 'TagController', ['except' => ['show']]);
    Route::resource('/admin/comments', 'CommentController', ['only' => ['index', 'destroy']]);

    Route::get('leads', 'HomeController@leads')->name('leads');
    Route::get('/leads/contact/{id}', 'HomeController@leadsContact');

    Route::resource('/appointments', 'AppointmentsController');

	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

