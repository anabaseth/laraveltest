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
        $enterprise=$user->enterprise;
        $user->name= $request->input('name');
        $user->last_name=$request->input('lastName');
        $user->email=$request->input('email');
        //$user->activity=$request->input('activity');
        $user->save();
        if($enterprise==NULL){
            $enterprise=new \App\enterprise();    
            $enterprise->user_id=$user->id;
        }
        $enterprise->name=$request->input('enterpriseName');
        $enterprise->adress=$request->input('enterpriseAdress');
        $enterprise->save();
        return view('pages.consult_user');
    }
    
    public function consult()
    {
        return view('pages.consult_user');
    }

}
