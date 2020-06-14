<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
   

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function prime()
    {
        return $this->hasMany(Prime::class);
    }
    public function objet()
    {
        return $this->belongsTo('App\Objet','id_obj');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function finance()
    {
        return $this->hasMany('App\Finance');
    }
    public function client()
    {
        return $this->belongsTo('App\Client','id_cli');
    }
    public function employe()
    {
        return $this->belongsTo('App\Employe');
    }
    
}
