<?php


Route::any('/{any?}', function ($any = null) {
    return view('miracle');
})->where('any', '.*');


