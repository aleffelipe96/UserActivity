<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Episodio extends Model
{
    use HasFactory;
    use Loggable;

    protected $table = 'episodes';

    public function temporada()
    {
        return $this->belongsTo(Temporada::class);
    }
}
