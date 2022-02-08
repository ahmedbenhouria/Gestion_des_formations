<?php

namespace App\Http\Controllers;
use App\Models\Formateur;
use App\Models\User;
use DB;

use Illuminate\Http\Request;

class FormateurController extends Controller
{
    public function index()
    {
     

        $user = User::whereHas('roles', function($q){
            $q->where('name', 'formateur');
        })->get();

        $formateur = Formateur::all();
     
        return view('formateur', ['user' => $user], ['formateur' => $formateur]);
    }
    public function fo(){
        $formateur = Formateur::all();

        return $formateur;

    }
}
