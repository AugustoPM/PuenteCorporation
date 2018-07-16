<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = [
        'logo', 'title1','title2','title3','subtitle1','subtitle2','subtitle3','desc','id'
    ];
}
