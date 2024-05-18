<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juicoitem extends Model
{
    function Juico(){
        return $this->hasMany(Juico::class);
        }
}
