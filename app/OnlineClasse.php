<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class OnlineClasse extends Model
{
    //protected $guarded=[''];
    public $fillable= ['integration','Grade_id','Classroom_id','section_id','created_by','meeting_id','topic','start_at','duration','password','start_url','join_url'];

    public function grade()
    {
        return $this->belongsTo('App\Grade', 'Grade_id');
    }


    public function classroom()
    {
        return $this->belongsTo('App\Classroom', 'Classroom_id');
    }


    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
