<?php


Route::prefix('mc-api/p1')->group(function () {
    Route::post('verify/email', 'Auth\Verifier@getEmail')->name('ver_email');
    Route::post('verify/password', 'Auth\Verifier@getPassword')->name('ver_password');
    Route::post('signin', 'Auth\RegisterController@signin')->name('signin');
});

Route::any('/{any?}', function ($any = null) {
    return view('miracle');
})->where('any', '.*');





//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
