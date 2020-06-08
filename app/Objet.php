<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objet extends Model
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

}
