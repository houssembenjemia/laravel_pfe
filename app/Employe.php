<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function contrat()
    {
        return $this->hasMany('App\Contrat');
    }
    public function client()
    {
        return $this->hasMany('App\Client');
    }
     








}
