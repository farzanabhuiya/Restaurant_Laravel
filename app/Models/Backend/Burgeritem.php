<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burgeritem extends Model
{
    function Burger(){
        return $this->hasMany(Burger::class);
        }
}
