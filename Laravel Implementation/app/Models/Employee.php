<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = 'employees';

    public $fillable = [
        'name',
        'role',
        'phone',
        'date_of_joining',
        'salary'
    ];

    protected $casts = [
        'name' => 'string',
        'role' => 'string',
        'phone' => 'string',
        'date_of_joining' => 'date',
        'salary' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'role' => 'nullable|string|max:100',
        'phone' => 'nullable|string|max:20',
        'date_of_joining' => 'nullable',
        'salary' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
