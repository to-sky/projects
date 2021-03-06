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

Route::get('/', 'PagesController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::resource('projects', 'ProjectsController');

Route::post('project/{project}/task', 'ProjectTasksController@store')->name('project.tasks.store');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store')->name('completed.tasks');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy')->name('completed.tasks');

Auth::routes();
