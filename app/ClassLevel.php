<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassLevel extends Model
{
    //

    protected $table = "classes";


    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
