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

Route::get('/nova', function() {
    return redirect('nova');
});

Route::get('/mailable', function () {
    $participant = App\Participant::find(4);
    return new App\Mail\RegistrationConfirmation($participant);
});

// Most all routing will be handled by Vue
Route::get('/{any}', function(){
    return view('app');
})->where('any', '^(?!nova-api).*$');

//Auth::routes();
