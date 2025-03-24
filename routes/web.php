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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/profile/edit', 'HomeController@profileEdit')->name('profile.edit');
Route::put('/profile/update', 'HomeController@profileUpdate')->name('profile.update');
Route::get('/profile/changepassword', 'HomeController@changePasswordForm')->name('profile.change.password');
Route::post('/profile/changepassword', 'HomeController@changePassword')->name('profile.changepassword');

Route::group(['middleware' => ['auth','role:Teacher']], function () 
{
    Route::resource('teacher', 'TeacherController');
    Route::resource('student', 'StudentController');

    Route::get('/homework/index','HomeworkController@index')->name('homework.index');
    Route::get('/homework/add','HomeworkController@addForm')->name('homework.addform');
    Route::post('/homework/add','HomeworkController@add')->name('homework.add');
    Route::get('/homework/solutionlist/{tid}','HomeworkController@solutionlist')->name('homework.solutionlist');
    
    Route::get('/challenge/teacher','ChallengeController@teacher')->name('challenge.teacher');
    Route::get('challenge/form','ChallengeController@form')->name('challenge.form');
    Route::post('/challenge/create','ChallengeController@create')->name('challenge.create');
    Route::get('/challenge/download/{filename}','ChallengeController@download')->name('challenge.download');
});

Route::group(['middleware' => ['auth','role:Student']], function () {
    Route::get('/info/ViewTeacher','InfoController@ViewTeacher')->name('info.ViewTeacher');
    Route::get('/info/ViewStudent','InfoController@ViewStudent')->name('info.ViewStudent');
    Route::get('/info/teacher/{teacher}','InfoController@ShowTeacher')->name('info.ShowTeacher');
    Route::get('/info/student/{student}','InfoController@ShowStudent')->name('info.ShowStudent');

    Route::get('/homework/studentindex','HomeworkController@studentindex')->name('homework.studentindex');
    Route::get('/challenge/student','ChallengeController@student')->name('challenge.student');

    Route::get('/homework/addsolution/{tid}','HomeworkController@addSolutionForm')->name('homework.addsolutionform');
Route::post('/homework/addsolution/{tid}/{sid}','HomeworkController@addSolution')->name('homework.addsolution');
});

Route::get('/message/send/{rid}','MessageController@sendForm')->name('message.sendmessage');
Route::post('/message/send/{rid}/{sid}','MessageController@send')->name('message.send');
Route::get('/message/index/{id}','MessageController@index')->name('message.index');

Route::get('/homework/download/{filename}','HomeworkController@download')->name('homework.download');
Route::get('/homework/downloadsolution/{filename}','HomeworkController@downloadSolution')->name('homework.downloadsolution');

Route::get('/challenge/detail/{cid}','ChallengeController@detail')->name('challenge.detail');
Route::post('challenge/solve/{filename}','ChallengeController@solve')->name('challenge.solve');
