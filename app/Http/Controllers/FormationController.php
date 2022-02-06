<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Cours;

class FormationController extends Controller
{
    public function __construct()
    {
    }
    
    public function index()
    {
        $formation = Formation::all();
        return view('formation', compact('formation'));
    }

    function details($id){
        $formation['formation'] = Formation::find($id);
        return view('formationDetails')->with($formation);
    }
    
}
