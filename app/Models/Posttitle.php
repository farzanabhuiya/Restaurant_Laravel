<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posttitle extends Model
{
    function Post(){
        return $this->hasMany(Post::class);
        }
}
