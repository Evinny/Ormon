<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table = 'salaries';

    protected $fillable = [
        'name',
        'user_id',
        'cash_amount',
        'pay_day',
        'recurrency_type',
        'recurrency_days',
        'description',
    ];
}
