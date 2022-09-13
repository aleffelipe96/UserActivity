<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Serie extends Model
{
    use HasFactory;
    use Loggable;

    protected $table = 'series';

    protected $fillable = ['nome'];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class, 'serie_id');
    }
}
