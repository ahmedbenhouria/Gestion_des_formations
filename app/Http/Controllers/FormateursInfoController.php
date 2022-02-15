<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Formateur;
use Auth;
use Image;
use Illuminate\Http\Request;

class FormateursInfoController extends Controller
{
    public function index()
    {
      
        return view('formateurs-informations',array('user' => Auth::user()) );
    }

 
    public function storeInfo(Request $request)
    {
        if($request->hasFile('avatar')){
             $avatar = $request->file('avatar');
             $filename = time(). '.' . $avatar->getClientOriginalExtension();
             Image::make($avatar)->resize(300, 300)->save( public_path('/assets/avatars/' . $filename ));

             $user = Auth::user();
             $user->avatar = $filename;
            $user->save();
         }
                           
        $formateur = new Formateur;
        $formateur->formateur_number = $request->formateur_number;
        $formateur->formateur_job = $request->formateur_job;
        $formateur->formateur_description = $request->formateur_description;
        $formateur->user_id = Auth::id();
        $formateur->save();

        return redirect()->route('home');


    }
}