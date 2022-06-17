<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;     // to store to langs ar and en

class Gender extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];          // choose coloum use translate
    protected $fillable  = ['Name'];
}
