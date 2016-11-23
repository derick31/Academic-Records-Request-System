<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnus extends Model
{
    protected $table = 'alumni';

    public getTransaction ()
    {
        return $this->hasMany(Transaction::class);
    }

    public getSchool ()
    {
        return $this->hasMany(School::class);
    }
    //
}
