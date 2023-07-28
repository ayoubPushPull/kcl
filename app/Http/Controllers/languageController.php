<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; // Add this line

class languageController extends Controller
{
    function changeLang($langcode){
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }
}

