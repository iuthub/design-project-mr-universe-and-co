<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $table = 'portfolioss';
    protected $fillable = ['name', 'filter', 'images'];
}
