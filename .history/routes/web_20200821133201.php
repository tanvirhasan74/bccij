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


Route::get('/', 'StartController@index')->name('index');
Route::get('/ExecutiveMembers', function () {
    return view('executiveMembers');
});

Route::get('/About', function () {
    return view('about');
});
Route::get('/SteeringCommittee', function () {
    return view('steeringCommittee');
});
Route::get('/Constitution', function () {
    return view('constitution');
    });

Route::get('/MembershipInstruction', function () {
    return view('membershipInstruction');
    });
Route::get('/News&Events','NewsController@indexFront')->name('News&Events');


Auth::routes();
Route::get('/pending_user', function(){
    return view('pending_user');
});
Route::get('/ambassadormessage', function () {
    return view('ambassador_message');
    });

Route::get('/presidentmessage', function () {
        return view('president_message');
        });
Route::get('/presidentmessage', function () {
            return view('vicePresident_message');
            });

Route::get('/contactUs', function(){
    return view('contactUs');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news','NewsController@index')->name('newsHome');
Route::get('/news/create','NewsController@create'); 
Route::post('/news','NewsController@store');
Route::post('/news/delete','NewsController@deleteNews')->name('deleteNews');
Route::get('/news/{newsid}','NewsController@newsdetails')->name('newsdetails');
Route::get('/activateuser/{userid}','HomeController@activateUser')->name('activateUser');
Route::get('/pendingUserDetails/{userid}','HomeController@pendingUserDetails')->name('pendingUserDetails');
Route::post('/notice', 'HomeController@postNotice');

Route::get('/notice', function () {
    return view('notice');
    });




