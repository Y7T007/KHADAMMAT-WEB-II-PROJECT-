<?php

use App\Http\Controllers\Auth\ClientRegisterController;
use App\Http\Controllers\Auth\ClientLoginController;
use App\Http\Controllers\Auth\ClientForgotPasswordController;
use App\Http\Controllers\Auth\ClientResetPasswordController;
use App\Http\Controllers\Auth\ClientVerificationController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FormController; // Add this line
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Partenaire;
use App\Http\Controllers\PartnerController;


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
Route::get('/register-client', [ClientRegisterController::class, 'showRegistrationForm'])->name('client.register');
Route::post('/register-client', [ClientRegisterController::class, 'register']);

// Step 1 route
Route::post('/register-client-step1', [ClientRegisterController::class, 'registerStep1'])->name('client.register.step1');

// Step 2 route
Route::post('/register-client-step2', [ClientRegisterController::class, 'registerStep2'])->name('client.register.step2');

// Step 3 route
Route::post('/register-client-step3', [ClientRegisterController::class, 'registerStep3'])->name('client.register.step3');

Route::get('/register-client-step1', [FormController::class, 'step1'])->name('register-client-step1');
Route::post('/register-client-step1',[FormController::class, 'postStep1'])->name('postStep1');
Route::get('/register-client-step2', [FormController::class, 'step2'])->name('register-client-step2');
Route::post('/register-client-step2',[FormController::class, 'postStep2'])->name('postStep2');
Route::get('/register-client-step3', [FormController::class, 'step3'])->name('register-client-step3');
Route::post('/register-client-step3', [FormController::class, 'postStep3'])->name('postStep3');


Route::get('/login-client', [ClientLoginController::class, 'showLoginForm'])->name('client.login');
Route::post('/login-client', [ClientLoginController::class, 'login']);
Route::post('/logout-client', [ClientLoginController::class, 'logout'])->name('client.logout');
Route::get('/reset-password-client', [ClientForgotPasswordController::class, 'showLinkRequestForm'])->name('client.password.request');
Route::post('/reset-password-client', [ClientForgotPasswordController::class, 'sendResetLinkEmail'])->name('client.password.email');
Route::get('/reset-password-client/{token}', [ClientResetPasswordController::class, 'showResetForm'])->name('client.password.reset');
Route::post('/reset-password-client', [ClientResetPasswordController::class, 'reset']);
Route::get('/verify-email-client', [ClientVerificationController::class, 'show'])->name('client.verification.notice');
Route::get('/verify-email-client/{id}/{hash}', [ClientVerificationController::class, 'verify'])->name('client.verification.verify');
Route::post('/verify-email-client/resend', [ClientVerificationController::class, 'resend'])->name('client.verification.resend');

// Client Logout Route:
Route::get('/client/logout', [ClientLoginController::class, 'logout'])->name('client.logout');

// Client routes
Route::get('/client/home', [ClientController::class, 'home'])->name('client.home');
Route::get('/client/profile', [ClientController::class, 'profile'])->name('client.profile');
Route::post('/upload-profile-picture/{client}', [ImageController::class, 'uploadProfilePicture'])->name('upload.profile.picture');
Route::get('/client/profile_edit', [ClientController::class, 'editProfile'])->name('client.profile.edit');
Route::post('/client/profile_edit', [ClientController::class, 'updateProfile'])->name('client.profile.update');
Route::get('/services', 'ServiceController@index')->name('services.index');
Route::get('/client/partners', [PartnerController::class, 'index'])->name('client.partners.index');
Route::get('/partners/{partner_id}', [PartnerController::class, 'show'])->name('partners.show');

// Service routes
Route::get('/client/all-services', [ServiceController::class, 'allServices'])->name('client.services.index');
Route::get('/client/service{service}', [ServiceController::class, 'show'])->name('client.services.show');
Route::get('/client/service-history', [ServiceController::class, 'history'])->name('client.services.history');
Route::get('/partners-for-service', 'PartnerController@getPartnersForService');

// Messaging routes
Route::get('/client/message-box', [MessageController::class, 'index'])->name('client.messages.index');
Route::get('/client/conversation/{receiver}', [MessageController::class, 'show'])->name('client.messages.show');
Route::post('/client/conversation/{receiver}', [MessageController::class, 'store']);

// Notification routes
Route::get('/client/notifications', [NotificationController::class, 'index'])->name('client.notifications.index');

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
