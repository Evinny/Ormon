<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'cash_amount',
        'received_at',
        'bank_id',
        'investment_id',
        'received_from',
    ];
}
