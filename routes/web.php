<?php


Route::prefix('mc-api/p1')->group(function () {
    Route::post('verify/email', 'Auth\VerifierController@getEmail')->name('ver_email');
    Route::post('verify/password', 'Auth\VerifierController@getPassword')->name('ver_password');
    Route::post('signin', 'Auth\RegisterController@signin')->name('signin');
    Route::post('exist/email', 'Auth\VerifierController@isExistEmail')->name('exist_email');
    Route::post('verify/token', 'Auth\VerifierController@verifyToken')->name('verify_token');
    Route::post('reference/token', 'Auth\VerifierController@verifyToken')->name('reference_token');
});

Route::any('/{any?}', function ($any = null) {
    return view('miracle');
})->where('any', '.*');





//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
