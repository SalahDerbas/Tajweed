<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $fillable =['Name'];
}
