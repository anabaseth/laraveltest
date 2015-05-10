<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name','last_name','activity', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
        
        public function fullName(){
            return ($this->name).' '.($this->last_name);            
        }
        public function enterpriseName(){
            if($this->enterprise()==NULL){
                return '';
            }
            return $this->enterprise->name;
        }
        public function enterpriseAdress(){
            if($this->enterprise()==NULL){
                return '';
            }
            return $this->enterprise->adress;
        }
        public function enterprise()
        {
            $enterprise= $this->hasOne('App\enterprise');            
            if($enterprise==NULL){
                $enterprise=new enterprise();    
                $enterprise->user_id=$user->id;
            }
            return $enterprise;
        }

}
