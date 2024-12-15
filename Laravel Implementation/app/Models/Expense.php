<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $table = 'expenses';

    public $fillable = [
        'types',
        'amount',
        'date',
        'description'
    ];

    protected $casts = [
        'types' => 'string',
        'amount' => 'string',
        'date' => 'date',
        'description' => 'string'
    ];

    public static array $rules = [
        'types' => 'nullable|string|max:50',
        'amount' => 'nullable|string|max:20',
        'date' => 'nullable',
        'description' => 'nullable|string|max:200',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
