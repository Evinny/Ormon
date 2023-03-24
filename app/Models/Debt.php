<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner',
        'cash_owed',
        'payments_total',
        'payments_remaining',
        'payments_left',
        'cash_per_recurrency',
        'due_date',
        'is_recorrent',
        'recurrency_day',
        'user_id',
        'fees',
        'fee_percentage',
        'bank_id',
    ];
}
