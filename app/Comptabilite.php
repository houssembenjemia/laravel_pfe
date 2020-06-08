<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptabilite extends Model
{
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
