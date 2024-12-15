<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = 'customers';

    public $fillable = [
        'name',
        'phone',
        'address'
    ];

    protected $casts = [
        'name' => 'string',
        'phone' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'phone' => 'nullable|string|max:20',
        'address' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function sales(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Sale::class, 'customer_id');
    }
}
