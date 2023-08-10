<?php

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\languageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




/////languages
Route::group(['middleware'=>'Language'],function(){
    Route::get("/services/camera_surveillance", function () {
        return view("general.services.services_surveillance");
    })->name("srv_camera_surveillance");
    Route::get("/services/dev_web_mobile", function () {
        return view("general.services.services_dev_web_mobile");
    })->name("srv_dev_web_mobile");
    Route::get("/services/centre_d'appel", function () {
        return view("general.services.services_centre_d'appel");
    })->name("srv_centre_d_appel");
    Route::get("/services/community_manager", function () {
        return view("general.services.services_community_manager");
    })->name("srv_community_manager");

    Route::get("/services/photo_video", function () {
        return view("general.services.services_photo_video");
    })->name("srv_photo_video");
    Route::get("/services/traitement", function () {
        return view("general.services.services_traitement");
    })->name("srv_traitement");
    Route::get('/', function () {
        return view('general.landing');
    })->name('landing');

    Route::get('/about', function () {
        return view('general.about');
    })->name('about');


    Route::get('/contact', function () {
        return view('general.contact');
    })->name('contact');
    Route::get('/recrutement', function () {
        return view('general.recrute');
    })->name('recrute');

    Route::get('/services', function () {
        return view('general.services');
    })->name('services');
    Route::get('/change-language/{lang}', [languageController::class, 'changeLang'])->middleware('Language');
    // Sitemap generation route
    Route::get('/sitemap', function () {
        $baseUrl = config('app.url');

        SitemapGenerator::create($baseUrl)
            ->writeToFile(public_path('sitemap.xml'));

        return 'Sitemap generated successfully.';
    });
});




