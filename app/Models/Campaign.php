<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

/**
 * Class Campaign
 * @package App\Models
 *
 * @property string $title
 */
class Campaign extends Model
{
    use Translatable;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    public $guarded = [];

    /**
     * Attributes that should be localized.
     *
     * @var array
     */
    public $translatedAttributes = ['title'];
}
