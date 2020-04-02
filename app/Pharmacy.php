<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    protected $fillable = [
        'ph_name',
        'ph_area',
        'ph_avatar' 
    ];

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
