<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    public function alumnus()
    {
        return $this->belongsTo(Alumnus::class,'alummnus_id');
        // return Alumnus::where('student_number',$this->alummnus_id);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function transactionRequests()
    {
        return $this->hasMany(transactionRequests::class);
    }
    //
}
