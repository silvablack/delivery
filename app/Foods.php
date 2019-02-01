<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    //
    protected $fillable = ['name', 'materials', 'price', 'type'];
}
