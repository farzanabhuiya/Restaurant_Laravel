<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    function Burgeritem (){
        return $this->belongsTo(Burgeritem::class);
        }
}
