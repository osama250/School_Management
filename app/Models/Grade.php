<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Grade extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];            // field is has translate

    protected $table        = 'grades';
    protected $fillable     = ['Name','Notes'];
    public $timestamps      = true;

    public function Sections()
    {
        return $this->hasMany('App\Models\Section', 'Grade_id');
    }
}
