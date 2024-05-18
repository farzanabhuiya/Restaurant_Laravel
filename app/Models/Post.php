<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function Posttitle (){
    return $this->belongsTo(Posttitle::class);
    }





    // protected $fillable = [
    //        'posttitle_id',
    //         'slug',
    //         'user_id',
    //         'category_id',
    //         'produtc_name',
    //         'featured_img',
    // ];
}
