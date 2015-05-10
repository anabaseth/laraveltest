<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller {

	//
    public function edit()
    {
        return view('pages.complete_register');
    }
    public function editComplete(Request $request)
    {
        //user
        $user=Auth::user();
        $user->name= $request->input('name');
        $user->last_name=$request->input('lastName');
        $user->email=$request->input('email');
        $user->activity=$request->input('activity');
        $enterprise=$user->enterprise();
        if(!isset($enterprise->id)){
            $enterprise=\App\enterprise::firstOrcreate([/*'name'=>$request->input('enterpriseName'),'adress'=>$request->input('enterpriseAdress'),*/'user_id'=>$user->id]);
            
        }
        $enterprise->name=$request->input('enterpriseName');
        $enterprise->adress=$request->input('enterpriseAdress');
        //$user->enterprise->save();
        $user->save();
        $user->enterprise()->save($enterprise);
        //return $user->enterprise;
        return view('pages.consult_user');
    }
    
    public function consult()
    {
        return view('pages.consult_user');
    }

}
