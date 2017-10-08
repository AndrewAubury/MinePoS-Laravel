<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
     protected static function boot()
    {
        static::creating(function ($model) {
            $model->onUpdating($model);
        });	
        static::updating(function ($model) {
            $model->onUpdating($model);
        });
    }
    public function onUpdating($model){
        if($model->api_key == "resetkey"){
        	$model->api_key = sha1($model->generateRandomString(20));
        }
	}
	 protected $fillable = [
        'name','api_key'
    ];
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
}
