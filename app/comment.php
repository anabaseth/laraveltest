<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class comment extends Model {

	//
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public static function getAll(){
        return DB::table('comments')
                    ->orderBy('created_at', 'desc')->get(); 
    }

}
