<?php
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['web', 'localeSessionRedirect', 'localizationRedirect'],
    'namespace' => 'Icorebiz\Base\Http\Controllers'
], function () {
    Route::get('/', ['as' => 'home', function () {
        return view('home');
    }]);
    Route::get('/home', ['as' => 'home', function () {
        return view('home');
    }]);
});




