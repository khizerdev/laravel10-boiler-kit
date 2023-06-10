<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes(['register' => true]);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'HomeController@index')->name('front');

Route::group(['middleware' => 'auth'] , function() {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

});

Route::group(['middleware' => ['auth', 'deny_user'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    Route::get('/dashboard', 'HomeController@index')->name('home');

    Route::resource('permissions', 'PermissionsController');
    Route::resource('roles', 'RolesController');
    Route::resource('users', 'UsersController');

    Route::view('/profile', 'admin.profile')->name('profile');

    Route::group(['prefix' => 'settings'] , function() {
        Route::get('/site-identity', 'SettingController@site')->name('settings.site-identity');
        Route::post('/update', 'SettingController@update_site')->name('settings.update_site');

        Route::get('/seo', 'SettingController@seo')->name('settings.seo');
        Route::get('/basic', 'SettingController@basic')->name('settings.basic');
        Route::post('/update-seo', 'SettingController@update')->name('settings.update');
    });

    Route::delete('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');
    Route::delete('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    Route::delete('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');

});

Route::view('/admin/login', 'admin.login', ['name' => 'admin.login'])->middleware('guest');
