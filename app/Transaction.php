<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';

    public function alumnus()
    {
        return $this->belongsTo(Alumnus::class,'alumnus_id');
        // return Alumnus::where('student_number',$this->alummnus_id);
    }

    public function requests()
    {
        return $this->belongsToMany(RequestModel::class,'transaction_requests', 'transaction_id', 'request_id');
    }

    public function transactionRequests()
    {
        return $this->hasMany(transactionRequests::class);
    }
    //
}
