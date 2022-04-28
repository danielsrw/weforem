<?php

use Illuminate\Support\Facades\Route;

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

// WEFOREM
Route::get('/', function () {
    return view('weforem.pages.index');
})->name('weforem.home');

// NEXCODE
Route::get('/nexcode', [App\Http\Controllers\Nexcode\HomeController::class, 'index'])->name('nexcode.home');

Route::get('/nexcode/about', function () {
    return view('nexcode.pages.about');
})->name('nexcode.about');

Route::get('/nexcode/project', function () {
    return view('nexcode.pages.projects');
})->name('nexcode.projects');

Route::get('/nexcode/services', [App\Http\Controllers\Nexcode\ServiceController::class, 'index'])->name('nexcode.services');
Route::get('/nexcode/services/web-dev', [App\Http\Controllers\Nexcode\ServiceController::class, 'webDev'])->name('nexcode.services.web-dev');
Route::get('/nexcode/services/mobile-dev', [App\Http\Controllers\Nexcode\ServiceController::class, 'MobileDev'])->name('nexcode.services.mobile-dev');
Route::get('/nexcode/services/graphic-design', [App\Http\Controllers\Nexcode\ServiceController::class, 'GraphicDesign'])->name('nexcode.services.graphic-design');
Route::get('/nexcode/services/seo', [App\Http\Controllers\Nexcode\ServiceController::class, 'seo'])->name('nexcode.services.seo');
Route::get('/nexcode/services/ppc', [App\Http\Controllers\Nexcode\ServiceController::class, 'ppc'])->name('nexcode.services.ppc');
Route::get('/nexcode/services/electronic-maintainance', [App\Http\Controllers\Nexcode\ServiceController::class, 'electMain'])->name('nexcode.services.electronic-maintainance');

Route::get('/nexcode/team', [App\Http\Controllers\Nexcode\TeamController::class, 'index'])->name('nexcode.team');

Route::get('/nexcode/blog', function () {
    return view('nexcode.pages.blog');
})->name('nexcode.blog');

Route::get('/nexcode/contact', function () {
    return view('nexcode.pages.contact');
})->name('nexcode.contact');

// NEXCODE ADMIN

Route::get('/nexcode/admin', function () {
    return view('nexcode.admin.pages.auth.login');
})->name('nexcode.admin.login');

Route::get('/nexcode/admin/dashboard', function () {
    return view('nexcode.admin.pages.dashboard');
})->name('nexcode.admin.dashboard');

Route::get('/nexcode/admin/profile', function () {
    return view('nexcode.admin.pages.profile.index');
})->name('nexcode.admin.profile');

Route::get('/nexcode/admin/slide', [App\Http\Controllers\Nexcode\SlidesController::class, 'index'])->name('nexcode.admin.slide');
Route::post('/nexcode/admin/slide/store', [App\Http\Controllers\Nexcode\SlidesController::class, 'store'])->name('nexcode.admin.slide.store');
Route::get('/nexcode/admin/slide/edit/{id}', [App\Http\Controllers\Nexcode\SlidesController::class, 'edit'])->name('nexcode.admin.slide.edit');
Route::get('/nexcode/admin/slide/active/{id}', [App\Http\Controllers\Nexcode\SlidesController::class, 'active'])->name('nexcode.admin.slide.active');
Route::get('/nexcode/admin/slide/unactive/{id}', [App\Http\Controllers\Nexcode\SlidesController::class, 'unactive'])->name('nexcode.admin.slide.unactive');
Route::get('/nexcode/admin/slide/delete/{id}', [App\Http\Controllers\Nexcode\SlidesController::class, 'destroy'])->name('nexcode.admin.slide.delete');

Route::get('/nexcode/admin/client', [App\Http\Controllers\Nexcode\ClientController::class, 'index'])->name('nexcode.admin.client');
Route::post('/nexcode/admin/client/store', [App\Http\Controllers\Nexcode\ClientController::class, 'store'])->name('nexcode.admin.client.store');
Route::get('/nexcode/admin/client/active/{id}', [App\Http\Controllers\Nexcode\ClientController::class, 'active'])->name('nexcode.admin.client.active');
Route::get('/nexcode/admin/client/unactive/{id}', [App\Http\Controllers\Nexcode\ClientController::class, 'unactive'])->name('nexcode.admin.client.unactive');

Route::get('/nexcode/admin/team', [App\Http\Controllers\Nexcode\TeamController::class, 'create'])->name('nexcode.admin.team');
Route::post('/nexcode/admin/team/store', [App\Http\Controllers\Nexcode\TeamController::class, 'store'])->name('nexcode.admin.member.store');
Route::get('/nexcode/admin/team/active/{id}', [App\Http\Controllers\Nexcode\TeamController::class, 'active'])->name('nexcode.admin.member.active');
Route::get('/nexcode/admin/team/unactive/{id}', [App\Http\Controllers\Nexcode\TeamController::class, 'unactive'])->name('nexcode.admin.member.unactive');

Route::get('/nexcode/admin/blog', [App\Http\Controllers\Nexcode\BlogController::class, 'create'])->name('nexcode.admin.blog');
Route::post('/nexcode/admin/blog/store', [App\Http\Controllers\Nexcode\BlogController::class, 'store'])->name('nexcode.admin.blog.store');

// NDAHARI
Route::get('/ndaharifoundation', [App\Http\Controllers\Ndahari\HomeController::class, 'index'])->name('ndahari.home');