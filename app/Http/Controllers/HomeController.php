<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\User;
use App\Models\Formateur;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::whereHas('roles', function($q){
            $q->where('name', 'formateur');
        })->get();

        

        $formation = Formation::count();

        return view('home', ['formation' => $formation], ['user' => $user]);
    }
   
}
