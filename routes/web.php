<?php


use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\ShopBrancheController;
use App\Http\Controllers\Admin\CategoryServiceController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OfferController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

      Route::get('/', [HomeController::class, 'index'])->name('home');
      Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
      Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


      Route::group(['middleware' => 'admin','prefix' => 'admin'], function () {
      //home
      Route::get('/',[HomeController::class, 'home'])->name('admin');

      //users
       Route::get('/users',[UserController::class, 'index'])->name('users');
       Route::get('/users/ban/{id}',[UserController::class, 'ban'])->name('ban');
       Route::get('/users/unban/{id}',[UserController::class, 'unban'])->name('unban');

      //admins
      Route::resource('admins', AdminController::class ,['as'=> 'admin']);

      //categories
      Route::resource('categories', CategoryController::class ,['as'=> 'admin']);

      //shops
      Route::resource('shops', ShopController::class ,['as'=> 'admin']);
      Route::get('social/ajax/{id}',[ShopController::class, 'socialAjax']);

      //categoryServices
      Route::resource('categoryServices', CategoryServiceController::class ,['as'=> 'admin']);

      //shopBranches
      Route::resource('shopBranches', ShopBrancheController::class ,['as'=> 'admin']);

      //offers
      Route::resource('offers', OfferController::class ,['as'=> 'admin']);

      //notifications
      Route::resource('notifications', NotificationController::class ,['as'=> 'admin']);

      //services
      Route::resource('services', ServiceController::class ,['as'=> 'admin']);
      Route::get('services/ajax/{id}',[ServiceController::class, 'categoryAjax']);

    //settings
    Route::get('/terms',[SettingController::class,'editTerm'])->name('admin.terms.edit');
    Route::post('/terms',[SettingController::class,'updateTerm'])->name('admin.terms.update');
    Route::get('/privacy',[SettingController::class,'editPrivacy'])->name('admin.privacy.edit');
    Route::post('/privacy',[SettingController::class,'updatePrivacy'])->name('admin.privacy.update');
    Route::get('/about',[SettingController::class,'editAbout'])->name('admin.about.edit');
    Route::post('/about',[SettingController::class,'updateAbout'])->name('admin.about.update');
    Route::get('/contact',[SettingController::class,'editContact'])->name('admin.contact.edit');
    Route::post('/contact',[SettingController::class,'updateContact'])->name('admin.contact.update');
    Route::get('/contactMessages',[SettingController::class,'contactMessage']);

});


