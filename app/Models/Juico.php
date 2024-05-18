<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juico extends Model
{
    function Juicoitem (){
        return $this->belongsTo(Juicoitem ::class);
        }
}
