<?php
use App\Http\Controllers\AdminController;
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

Route::get('/voir-service/{id}', [Partenaire::class, 'voirService'])->name('voir_service');


Route::get('/updateService/{id}', [Partenaire::class, 'updateService']);

Route::post('/updateService/{id}', [Partenaire::class, 'updateServiceSubmit'])->name('updateServiceSubmit');


Route::get('/AjouterComment/{commentId}', [Partenaire::class, 'AjouterComment'])->name('ajouter_comment');





Route::post('/update-profile', [Partenaire::class, 'updateprof'])->name('update.profile');
Route::GET('/FeedBack', [Partenaire::class, 'feedback'])->name('Feedback');
Route::post('/ajouter-service', [Partenaire::class, 'ajouterService'])->name('ajouter_service');
Route::post('/comment/store', [Partenaire::class, 'storeComment'])->name('comment.store');
Route::delete('/supprimer-service/{id}', [Partenaire::class, 'supprimerService'])->name('supprimer_service');
Route::post('/cancel-service', [AdminController::class, 'cancelservice'])->name('cancel.service');
Route::post('/delete-comment', [AdminController::class, 'deletecomment'])->name('delete.comment');

Route::post('/activate-user', [AdminController::class, 'activateuser'])->name('activate.user');
Route::post('/deactivate-user', [AdminController::class, 'deactivateuser'])->name('deactivate.user');
Route::post('/delete-user', [AdminController::class, 'deleteuser'])->name('delete.user');


Route::post('/accept-service', [Partenaire::class, 'acceptService'])->name('accept.service');
Route::post('/refuse-service', [Partenaire::class, 'refuseservice'])->name('refuse.service');
Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');
Route::get('/Clients', [AdminController::class, 'Clients'])->name('Client');

Route::post('/Rate-Comment', [Partenaire::class, 'RateComment'])->name('Rate.Comment');
Route::get('/Deactivated_Accounts', [AdminController::class, 'Deactivated_Accounts'])->name('Deactivated_Accounts');
Route::get('/Partenaires', [AdminController::class, 'Partenaires'])->name('Partenaire');
Route::get('/Services', [AdminController::class, 'Services'])->name('Services');
Route::get('/Commentaires', [AdminController::class, 'Commentaires'])->name('Commentaires');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
