<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = ['number'];

    // uma temporada pertence a uma serie
    public function series()
    {
        return $this->belongsTo(Serie::class);
    }

    // uma temporada tem varios epsodios
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

}
