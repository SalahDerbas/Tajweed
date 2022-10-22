<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $fillable =['Name'];
}
