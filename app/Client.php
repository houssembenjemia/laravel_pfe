<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
   
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function contrat()
    {
        return $this->hasMany('App\Contrat');
    }
    public function employe()
    {
        return $this->belongsTo('App\Employe');
    }
    public function finance()
    {
        return $this->hasMany('App\Finance');
    }







}
