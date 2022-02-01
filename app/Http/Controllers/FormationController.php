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
    
    public function formation()
    {
        $formation = Formation::all();
        return view('formation', ['formation' => $formation]);
    }
}
