<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albuns';

    protected $fillable = [

        'nome',
        'ano',

    ];

    public function discografia()
    {
        return $this->hasMany('App\Models\Discografia', 'album_id');
    }

}
