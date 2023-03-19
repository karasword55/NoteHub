<?php
use Illuminate\Support\Facades\Auth;
use Modules\Ticket\Http\Controllers\MesajController;
use App\Http\Controllers\HomeController;
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

Route::prefix('ticket')->group(function() {
    Route::get('/', 'HomeController@index');
});

//------------------------------------------------------------------------------------
// STANDART KULLANICI
// 1- Yeni Destek Talebi Oluşturma Sayfası
// 2- Taleplerim(Mesaj Gönderme Kısmı)-mysupports
Route::prefix('ticket/user')->middleware(['auth','isNotAdmin'])->group(function() {
    Route::get('/', 'TicketController@show_anasayfa');
    Route::get('/tickets','TicketController@getTicketsById');
    Route::get('/create_support', 'TicketController@create_support');
    Route::post('/save_support', 'TicketController@save_support');
    Route::get('/mesajlarforuser','MesajController@getAllMesaj');
    Route::post('/message',[MesajController::class, 'sendMessage']);
    
});


// ADMİN
// 1- Tüm Ticketlar-indexhtml
// 2- Taleplerim(Mesaj Gönderme Kısmı)-mysupports
Route::prefix('ticket/admin')->middleware(['auth','isAdmin'])->group(function() {
    Route::get('/tickets','TicketController@getAllTickets');
    Route::get('/mesajlarforadmin','MesajController@getAllMesaj');
    Route::post('/sendMessageFromAdmin/{id}',[MesajController::class, 'sendMessageFromAdmin']);

    
});