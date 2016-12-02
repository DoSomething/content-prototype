<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Campaign extends Model
{
    use Translatable;

    public $guarded = [];

    public $translatedAttributes = ['title'];
}
