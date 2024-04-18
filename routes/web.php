<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Partenaire;
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
    return view('welcome');
});



////////////////////////////////// Client Routes/////////////////////////////////////////
//   Please don't edit anything here unless you know what you are doing                //
//   Editors: Y7T007,1Nossairsedki                                                     //
/////////////////////////////////////////////////////////////////////////////////////////

// Client Authentication routes
Route::get('/register-client', 'Auth\ClientRegisterController@showRegistrationForm')->name('client.register');
Route::post('/register-client', 'Auth\ClientRegisterController@register');
Route::get('/login-client', 'Auth\ClientLoginController@showLoginForm')->name('client.login');
Route::post('/login-client', 'Auth\ClientLoginController@login');
Route::post('/logout-client', 'Auth\ClientLoginController@logout')->name('client.logout');
Route::get('/reset-password-client', 'Auth\ClientForgotPasswordController@showLinkRequestForm')->name('client.password.request');
Route::post('/reset-password-client', 'Auth\ClientForgotPasswordController@sendResetLinkEmail')->name('client.password.email');
Route::get('/reset-password-client/{token}', 'Auth\ClientResetPasswordController@showResetForm')->name('client.password.reset');
Route::post('/reset-password-client', 'Auth\ClientResetPasswordController@reset');
Route::get('/verify-email-client', 'Auth\ClientVerificationController@show')->name('client.verification.notice');
Route::get('/verify-email-client/{id}/{hash}', 'Auth\ClientVerificationController@verify')->name('client.verification.verify');
Route::post('/verify-email-client/resend', 'Auth\ClientVerificationController@resend')->name('client.verification.resend');

// Client routes
Route::get('/client/dashboard', 'ClientController@dashboard')->name('client.dashboard');
Route::get('/client/profile', 'ClientController@profile')->name('client.profile');
Route::get('/client/profile-edit', 'ClientController@editProfile')->name('client.profile.edit');
Route::post('/client/profile-edit', 'ClientController@updateProfile');

// Service routes
Route::get('/client/all-services', 'ServiceController@index')->name('client.services.index');
Route::get('/client/view-service/{service}', 'ServiceController@show')->name('client.services.show');
Route::get('/client/service-history', 'ServiceController@history')->name('client.services.history');

// Messaging routes
Route::get('/client/message-box', 'MessageController@index')->name('client.messages.index');
Route::get('/client/conversation/{receiver}', 'MessageController@show')->name('client.messages.show');
Route::post('/client/conversation/{receiver}', 'MessageController@store');

// Notification routes
Route::get('/client/notifications', 'NotificationController@index')->name('client.notifications.index');

// END OF CLIENT ROUTES



////// Partenaire Routes ///


Route::get('/Profile', [Partenaire::class, 'redirecttoprofile']);

Route::get('/table-calendar', [Partenaire::class, 'showTabcalender']);

Route::get('/app-chat', [Partenaire::class, 'showchat']);

Route::get('/table-basic', [Partenaire::class, 'showTableBasic']);

Route::get('/table-dark-basic', [Partenaire::class, 'showTableDarkBasic']);

Route::get('/table-datatable-basic', [Partenaire::class, 'showTableDatatableBasic']);

Route::get('/table-layout-coloured', [Partenaire::class, 'showTableLayoutColoured']);

Route::get('/table-sizing', [Partenaire::class, 'showTableSizing']);

Route::get('/Interventions', [Partenaire::class, 'showTicketList']);

Route::get('/form-input-grid', [Partenaire::class, 'showFormInputGrid']);

Route::get('/header', [Partenaire::class, 'showHeader']);

Route::get('/form-inputs', [Partenaire::class, 'showFormInputs']);

Route::get('/sidebar', [Partenaire::class, 'showSidebar']);

Route::get('/ui-cards', [Partenaire::class, 'showUICards']);

Route::get('/ui-list-media', [Partenaire::class, 'showUIListMedia']);

Route::get('/ui-popover', [Partenaire::class, 'showUIPopover']);

Route::get('/UpdateProfile', [Partenaire::class, 'UpdateProfile']);

Route::get('/app-calendar', [Partenaire::class, 'appcalendar']);

Route::get('/comment', [Partenaire::class, 'showcomment']);

Route::get('/AddService', [Partenaire::class, 'addservice']);

Route::get('/MesServices', [Partenaire::class, 'messervices']);

Route::get('/service', [Partenaire::class, 'service']);

Route::get('/updateService', [Partenaire::class, 'updateService']);

Route::get('/AjouterComment', [Partenaire::class, 'AjouterComment']);


Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');
Route::get('/Clients', [HomeController::class, 'Clients'])->name('Client');
Route::get('/Partenaires', [HomeController::class, 'Partenaires'])->name('Partenaire');
Route::get('/Services', [HomeController::class, 'Services'])->name('Services');
Route::get('/Commentaires', [HomeController::class, 'Commentaires'])->name('Commentaires');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
