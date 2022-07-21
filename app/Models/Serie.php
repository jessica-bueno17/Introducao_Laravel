<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];
    
    protected $with = ['seasons'];

    // uma serie pode ter muitas temporadas
    public function seasons()
    {
                                            // foreignKey, localKey
        return $this->hasMany(Season::class, 'series_id','id');
    }

    // para ordernar
    protected static function booted()
    {
        self::addGlobalScope('ordered',function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome','asc');
        });
    }

}
