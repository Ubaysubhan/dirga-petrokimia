<?php

use App\Core\Domain\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Resource\NPWPController;
use App\Http\Controllers\Resource\GudangController;
use App\Http\Controllers\Resource\BiodataController;
use App\Http\Controllers\Resource\AktaController;
use App\Http\Controllers\Resource\SuratIzinUsahaController;
use App\Http\Controllers\Resource\DaftarArmadaController;
use App\Http\Controllers\Resource\EksekutifController;
use App\Http\Controllers\Resource\NitraliteController;
use App\Http\Controllers\Resource\RegulerController;
use App\Http\Controllers\Resource\PetroganikController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\email;

use App\Http\Controllers\Resource\StatusController;
use App\Http\Controllers\Resource\UtamaController;



// use App\Http\Controllers\Resource\DataTersimpanController;
// use App\Http\Controllers\Resource\DokumenTerlampirController;

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


// Route::get('/', [BiodataController::class, 'index'])->middleware('auth');


// Auth:routes(['verify'=>true]);

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/login', RegisterController::class)->middleware('guest');


Route::resource('/register', RegisterController::class)->middleware('guest');
Route::get('/register', [RegisterController::class,'verify'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', function () {

    if (auth()->check() && auth()->user()->is_admin ==  1)
{
    return redirect ('/Admin/distributor-eksekutif');
} 
else {
    return redirect ('/BiodataPerusahaan');
  
}
});

Route::get('/test-mail', function (){
    Notification::route('mail', 'df27f8ba0f5198')->notify(new email());
    return 'Sent';
});


Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('guest')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/login');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Auth::routes(['verify' => true]);

Route::resource('/BiodataPerusahaan', BiodataController::class)->middleware('auth','verified');
Route::get('/findPupuk', [BiodataController::class, 'findPupuk'])->middleware('auth');





Route::resource('/AktaPerusahaan', AktaController::class)->middleware('auth','verified');

Route::resource('/NPWP', NPWPController::class)->middleware('auth','verified');

Route::resource('/SuratIzinUsaha', SuratIzinUsahaController::class)->middleware('auth','verified');

Route::resource('/Gudang', GudangController::class)->middleware('auth','verified');
Route::get('/findKabupatenName', [GudangController::class, 'findKabupatenName'])->middleware('auth','verified');
// Route::get('/Gudang', [GudangController::class, 'index'] )->middleware('auth');
// Route::get('/Gudang', [GudangController::class, 'form'] )->middleware('auth');
// Route::post('/Gudang', [GudangController::class, 'store'] )->middleware('auth');

Route::resource('/DaftarArmada', DaftarArmadaController::class)->middleware('auth','verified');
// Route::get('/DaftarArmada/{daftararmada:id}/delete',[DaftarArmadaController::class,'delete'])->middleware('auth');

Route::resource('/Admin/distributor-eksekutif', EksekutifController::class);
Route::get('/export-eksekutif', [EksekutifController::class, 'export_eksekutif']);

Route::get('/getDownloadBiodata_eksekutif', [EksekutifController::class, 'getDownloadBiodata_eksekutif']);
Route::get('/getDownloadAkta_eksekutif', [EksekutifController::class, 'getDownloadAkta_eksekutif']);
Route::get('/getDownloadGudang_eksekutif', [EksekutifController::class, 'getDownloadGudang_eksekutif']);
Route::get('/getDownloadNpwp_eksekutif', [EksekutifController::class, 'getDownloadNpwp_eksekutif']);
Route::get('/getDownloadSuratIzinUsaha_eksekutif', [EksekutifController::class, 'getDownloadSuratIzinUsaha_eksekutif']);
Route::get('/getDownloadArmada_eksekutif', [EksekutifController::class, 'getDownloadArmada_eksekutif']);

Route::resource('/Admin/distributor-utama', UtamaController::class);
Route::get('/export-utama', [UtamaController::class, 'export_utama']);

 Route::get('/getDownloadBiodata_utama', [UtamaController::class, 'getDownloadBiodata_utama']);
Route::get('/getDownloadAkta_utama', [UtamaController::class, 'getDownloadAkta_utama']);
Route::get('/getDownloadGudang_utama', [UtamaController::class, 'getDownloadGudang_utama']);
Route::get('/getDownloadNpwp_utama', [UtamaController::class, 'getDownloadNpwp_utama']);
Route::get('/getDownloadSuratIzinUsaha_utama', [UtamaController::class, 'getDownloadSuratIzinUsaha_utama']);
Route::get('/getDownloadArmada_utama', [UtamaController::class, 'getDownloadArmada_utama']);


Route::resource('/Admin/reguler', RegulerController::class);
Route::get('/export-reguler', [RegulerController::class, 'export_reguler']);
    Route::get('/getDownloadBiodata_reguler', [RegulerController::class, 'getDownloadBiodata_reguler']);
Route::get('/getDownloadAkta_reguler', [RegulerController::class, 'getDownloadAkta_reguler']);
Route::get('/getDownloadGudang_reguler', [RegulerController::class, 'getDownloadGudang_reguler']);
Route::get('/getDownloadNpwp_reguler', [RegulerController::class, 'getDownloadNpwp_reguler']);
Route::get('/getDownloadSuratIzinUsaha_reguler', [RegulerController::class, 'getDownloadSuratIzinUsaha_reguler']);
Route::get('/getDownloadArmada_reguler', [RegulerController::class, 'getDownloadArmada_reguler']);

Route::resource('/Admin/nitralite', NitraliteController::class);
Route::get('/export-nitralite', [NitraliteController::class, 'export_nitralite']);
    Route::get('/getDownloadBiodata_nitralite', [NitraliteController::class, 'getDownloadBiodata_nitralite']);
Route::get('/getDownloadAkta_nitralite', [NitraliteController::class, 'getDownloadAkta_nitralite']);
Route::get('/getDownloadGudang_nitralite', [NitraliteController::class, 'getDownloadGudang_nitralite']);
Route::get('/getDownloadNpwp_nitralite', [NitraliteController::class, 'getDownloadNpwp_nitralite']);
Route::get('/getDownloadSuratIzinUsaha_nitralite', [NitraliteController::class, 'getDownloadSuratIzinUsaha_nitralite']);
Route::get('/getDownloadArmada_nitralite', [NitraliteController::class, 'getDownloadArmada_nitralite']);

Route::resource('/Admin/petroganik', PetroganikController::class);
Route::get('/export-petroganik', [PetroganikController::class, 'export_petroganik']);

    Route::get('/getDownloadBiodata_petroganik', [PetroganikController::class, 'getDownloadBiodata_petroganik']);
Route::get('/getDownloadAkta_petroganik', [PetroganikController::class, 'getDownloadAkta_petroganik']);
Route::get('/getDownloadGudang_petroganik', [PetroganikController::class, 'getDownloadGudang_petroganik']);
Route::get('/getDownloadNpwp_petroganik', [PetroganikController::class, 'getDownloadNpwp_petroganik']);
Route::get('/getDownloadSuratIzinUsaha_petroganik', [PetroganikController::class, 'getDownloadSuratIzinUsaha_petroganik']);
Route::get('/getDownloadArmada_petroganik', [PetroganikController::class, 'getDownloadArmada_petroganik']);

Route::get('/storage', function () {
    Artisan::call('storage:link');
});



// Route::resource('/StatusVerifikasi', StatusController::class)->middleware('auth');



// Route::get('/testing', [UtamaController::class, 'testingTable']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
