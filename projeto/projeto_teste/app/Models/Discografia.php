<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discografia extends Model
{
    use HasFactory;

    protected $fillable = [

        'numero',
        'faixa',
        'duracao',
        'album_id',

    ];

    public function album()
    {
        return $this->belongsTo('App\Models\Album', 'album_id');
    }
    
}
