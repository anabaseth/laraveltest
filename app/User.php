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
            if(isset($this->enterprise->name)) // Check that relation exists
                return $this->enterprise->name;
            else
                return NULL;
        }
        public function enterpriseAdress(){
            if(isset($this->enterprise->adress)) // Check that relation exists
                return $this->enterprise->adress;
            else
                return NULL;
        }
        public function enterprise()
        {
           
                return $this->hasOne('App\enterprise','id');
        }

}
