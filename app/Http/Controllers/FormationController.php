<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $formation = Formation::all();
        return view('formation', compact('formation'));
    }

    function details($id){
        $formation = Formation::find($id);
        return view('formationDetails', ['formation'=>$formation]);
    }
}
