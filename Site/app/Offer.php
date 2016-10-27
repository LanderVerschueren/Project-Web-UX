<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'naam', 'aantal', 'prijs', 'foto', 'foto2', 'foto3'
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
