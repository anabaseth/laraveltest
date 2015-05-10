<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class enterprise extends Model {

	//
    protected $fillable = ['name','adress','user_id'];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
