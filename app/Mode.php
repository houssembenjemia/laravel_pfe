<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function prime()
    {
        return $this->belongsTo('App\Prime');
    }

}
