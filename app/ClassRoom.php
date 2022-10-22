<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasTranslations;
    public $translatable = ['Name_Class'];


    protected $table = 'class_rooms';
    public $timestamps = true;
    protected $fillable=['Name_Class','Grade_id'];


    // علاقة بين الصفوف المراحل الدراسية لجلب اسم المرحلة في جدول الصفوف

    public function Grades()
    {
        return $this->belongsTo('App\Grade', 'Grade_id');
    }
}
