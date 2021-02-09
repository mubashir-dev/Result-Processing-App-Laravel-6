<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $tableName = 'students';

    protected $fillable = ['name', 'class_id', 'roll_no', 'contact', 'address'];


    public function class()
    {
        return $this->belongsTo(ClassLevel::class);
    }

    public function result()
    {
        return $this->hasMany(Score::class);
    }
}
