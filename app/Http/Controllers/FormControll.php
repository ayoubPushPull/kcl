<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormControll extends Controller
{
    public function contact(Request $r){
        $r->validate([
            'nom'=>'required',
            'prenom'=>'required',
            "nom_entreprise"=>'required',
            'num_tele'=>'required',
            'E-mail'=>'required|email',
            'pays'=>'required',
            'Collaboration'=>'required'
        ]);
        return ;
    }
}
