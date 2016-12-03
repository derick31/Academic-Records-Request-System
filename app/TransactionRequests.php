<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionRequests extends Model
{
	protected $table = 'transaction_requests';

    public function belongsToAlumnus()
    {
        return $this->belongsTo(Alumnus::class);
    }
    public function belongsToTransaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
