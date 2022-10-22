<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $fillable =['Name'];
    //protected $guarded =[];
}
