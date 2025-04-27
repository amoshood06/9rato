<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'reference',
        'transaction_id',
        'payment_type',
        'type',
        'amount',
        'fees',
        'status',
        'currency',
        'bank_name',
        'account_number',
        'account_name',
        'channel'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
