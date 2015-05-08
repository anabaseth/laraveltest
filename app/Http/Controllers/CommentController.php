<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;

use Illuminate\Http\Request;

class CommentController extends Controller {

    public function getInfos()
    {
        return view('pages.wall');
    }
    public function postInfos(Request $request)
    {
        $comment= $request->input('comment');
        $comments=array(
                    [ 'text' => $comment,'user_id'=>Auth::user()->id]);
        DB::table('comments')->insert($comments);
        return view('pages.wall');
    }

}
