<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $tableName = 'score';

    protected $fillable = ['subject_id', 'student_id', 'obtain'];


    public function student()
    {
        return $this->belongsToMany('App\Student');
    }
}
