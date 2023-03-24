<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'surname', 'user_id',
        'debit_card', 'credit_card',
        'my_cash_total', 'my_cash_in_debt',
        'my_cash_usable', 'my_cash_invested',
    ];
}
