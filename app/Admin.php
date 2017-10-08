<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

 protected static function boot()
    {
        static::creating(function ($model) {
            $model->onUpdating($model);
        });	
        static::updating(function ($model) {
            $model->onUpdating($model);
        });
    }


protected $visible = ["*"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];
    protected $dates = ['last_login'];

    public function verify_password($passwordInput){
    	return (sha1($passwordInput.sha1($this->salt)) == $this->password);
    }

	public function onUpdating($model){
        if($model->getOriginal('password') != $model->password){
        $model->salt = $model->generateRandomString(10);
        $model->password = sha1($model->password.sha1($model->salt));
        }
        
           // $model->password = hash("sha256", $model->password.hash("sha256", $model->salt));
	}
	public function generateRandomString($nbLetters){
    $randString="";
    $charUniverse="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    for($i=0; $i<$nbLetters; $i++){
       $randInt=rand(0,61);
        $randChar=$charUniverse[$randInt];
        $randString=$randString.$randChar;
    }
    return $randString;
}
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'tfa_key', 'salt', 'password', 'last_ip',
    ];
}
