<?php

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\languageController;
use GuzzleHttp\Psr7\Request;

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
    //////////////services
    Route::get("/services/centre_d'appel", function () {
        $n = 7;
        return view("general.services.services_centre_d'appel", ['n' => $n]);
    })->name("srv_centre_d_appel");
    Route::get("/services/dev_web_mobile", function () {
        $n = 7;
        return view("general.services.services_dev_web_mobile", ['n' => $n]);
    })->name("srv_dev_web_mobile");

    Route::get("/services/camera_surveillance", function () {
        $n = 7;

        return view("general.services.services_surveillance", ['n' => $n]);
    })->name("srv_camera_surveillance");
    Route::get("/services/traitement", function () {
        $n = 7;

        return view("general.services.services_traitement", ['n' => $n]);
    })->name("srv_traitement");

    Route::get("/services/photo_video", function () {
        $n = 7;

        return view("general.services.services_photo_video", ['n' => $n]);
    })->name("srv_photo_video");

    Route::get("/services/community_manager", function () {
        $n = 7;

        return view("general.services.services_community_manager", ['n' => $n]);
    })->name("srv_community_manager");



    ////////////////////////////////////////////////////////////////////////
    Route::get('/', function () {
        $n = 1;
        return view('general.landing', ['n' => $n]);
    })->name('landing');

    Route::get('/about', function () {
        $n = 2;
        return view('general.about', ['n' => $n]);
    })->name('about');


    Route::get('/contact', function () {
        $n = 3;
        return view('general.contact', ['n' => $n]);
    })->name('contact');
    Route::get('/recrutement', function () {
        $n = 4;
        return view('general.recrute',['n' => $n]);
    })->name('recrute');


    Route::get('/change-language/{lang}', [languageController::class, 'changeLang'])->middleware('Language');
    // Sitemap generation route
    Route::get('/sitemap', function () {
        $baseUrl = config('app.url');

        SitemapGenerator::create($baseUrl)
            ->writeToFile(public_path('sitemap.xml'));

        return 'Sitemap generated successfully.';
    });
});




