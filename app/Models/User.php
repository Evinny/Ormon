<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'cash_total',
        'cash_in_debt',
        'investments_profits',
        'best_investment_id',
        'total_debt',
        'worst_debt_id',
        'total_salary',
        'best_salary_id',
        'total_income',
        'best_income_id',
        'main_bank_id',
        'main_objective_id',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


 




    

    public function investments(){
        return $this->hasMany(Investment::class, 'user_id', 'id');
    }

    public function banks(){
        return $this->hasMany(Bank::class, 'user_id', 'id');
    }

    public function debts(){
        return $this->hasMany(Debt::class, 'user_id', 'id');
    }

    public function salaries(){
        return $this->hasMany(Salary::class, 'user_id', 'id');
    }

    public function incomes(){
        return $this->hasMany(Income::class, 'user_id', 'id');
    }

}
