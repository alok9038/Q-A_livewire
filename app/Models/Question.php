<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function answers(){
        return $this->hasMany(Answer::class,'question_id','id');
    }
}
