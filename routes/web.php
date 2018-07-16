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

use Illuminate\Support\Facades\Mail;

Route::get('/', 'FrontController@header')->name('welcome');
Route::post('/mail', 'FrontController@form')->name('form');
Route::get('/send', 'FrontController@contacto')->name('send');

//Rutas del Back

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('Admin');

Route::resource('/admin/header', 'HeaderController', ['names' => [
    'index'=>'header',
    'create'=>'header.create',
    'store'=>'header.store',
    'edit'=>'header.edit',
    'update'=>'header.update',
    'destroy'=>'header.destroy'

]]);
Route::resource('/admin/story', 'StoryController', ['names' => [
    'index'=>'story',
    'create'=>'story.create',
    'store'=>'story.store',
    'edit'=>'story.edit',
    'update'=>'story.update',
    'destroy'=>'story.destroy'

]]);
Route::resource('/admin/product', 'ProductController', ['names' => [
    'index'=>'product',
    'create'=>'product.create',
    'store'=>'product.store',
    'edit'=>'product.edit',
    'update'=>'product.update',
    'destroy'=>'product.destroy'

]]);
Route::resource('/admin/team', 'TeamController', ['names' => [
    'index'=>'team',
    'create'=>'team.create',
    'store'=>'team.store',
    'edit'=>'team.edit',
    'update'=>'team.update',
    'destroy'=>'team.destroy'

]]);
Route::resource('/admin/work', 'WorkController', ['names' => [
    'index'=>'work',
    'create'=>'work.create',
    'store'=>'work.store',
    'edit'=>'work.edit',
    'update'=>'work.update',
    'destroy'=>'work.destroy'

]]);
Route::resource('/admin/social', 'SocialController', ['names' => [
    'index'=>'social',
    'create'=>'social.create',
    'store'=>'social.store',
    'edit'=>'social.edit',
    'update'=>'social.update',
    'destroy'=>'social.destroy'

]]);
Route::resource('/admin/detail', 'DetailController', ['names' => [
    'index'=>'detail',
    'create'=>'detail.create',
    'store'=>'detail.store',
    'edit'=>'detail.edit',
    'update'=>'detail.update',
    'destroy'=>'detail.destroy'

]]);
Route::resource('/admin/footer', 'FooterController', ['names' => [
    'index'=>'footer',
    'create'=>'footer.create',
    'store'=>'footer.store',
    'edit'=>'footer.edit',
    'update'=>'footer.update',
    'destroy'=>'footer.destroy'

]]);
