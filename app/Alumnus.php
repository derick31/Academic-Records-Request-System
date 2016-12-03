<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnus extends Model
{
    protected $table = 'alumni';

    public function getTransaction ()
    {
        return $this->hasMany(Transaction::class);
    }
    public function getTransactionRequests ()
    {
        return $this->hasMany(TransactionRequests::class);
    }

    public function getSchool ()
    {
        return $this->hasMany(School::class);
    }
    //
}
