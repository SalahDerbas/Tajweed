<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];

    protected $fillable=['Name','Notes'];
    protected $table = 'grades';
    public $timestamps = true;

    // علاقة المراحل الدراسية لجلب الاقسام المتعلقة بكل مرحلة
    public function Sections()
    {
        return $this->hasMany('App\Section', 'Grade_id');
    }
}
