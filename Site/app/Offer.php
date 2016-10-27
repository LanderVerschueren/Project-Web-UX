<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = [
        'naam', 'aantal', 'prijs', 'foto', 'foto2', 'foto3'
    ];

    protected $softDelete = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
